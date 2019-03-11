<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Calendar;
use App\boats;
use App\trips;
use App\invoice;
use App\payment;
use DB;

class TripController extends Controller
{
    
    public function index(){
        $id=auth()->user()->id;
        
        $boats = Boats::where('ownerid',$id)->where('status','confirmed')->get();
        return view('boatownerfunctions.startnewtrip')->with('boats', $boats);
    }

    public function AddNewTrip(Request $request){
    
        $this->validate($request,[
            'start_date'=>'required',
            'end_date'=>'required',
            'location'=>'required',
            'startingtime'=>'required',
            'availableseats'=>'required',
        ]);

    // if($validator->fails()){
    //         \session::flash('warning','please fill the all required fields');
    //         return Redirect::to('/tripscreate')->withInput()->withErrors($validator);
    // }
            $trip=new trips;
            
            $trip->start_date=$request->input('start_date');
            $trip->end_date=$request->input('end_date');
            $trip->location=$request->input('location');
            $trip->startingtime=$request->input('startingtime');
            $trip->availableseats=$request->input('availableseats');
            $trip->reservedseats='0';
            $trip->boatid=$request->input('selectboat');
            $ownerid=auth()->user()->id;
            $trip->ownerid=$ownerid;
            $id=$request->input('selectboat');
            $name = Boats::where('boatid',$id)->first();
            $type=Boats::where('boatid',$id)->first();
            $trip->boattype=$type->boattype;
           
            $trip->boatname= $name->name;
            $trip->save();
            
          
            
            
            \Session::flash('success','Trip added succesfully');
            return redirect('/tripscreate')->with('success','trip successfully added to the calender');
            

            
            
    }

    // ongoing reservation
    public function OngoingTrips(){
        
        $id=auth()->user()->id;
        $ongoing_trips=trips::where('ownerid',$id)->where('status','ongoing')->get();
        return view('boatownerfunctions.on_reservation')->with('ongoing',$ongoing_trips);
    }

    
    public function Resdetails(request $request){
        
        $res_id=$request->input('resid');
        $reservations=invoice::where('reservationid',$res_id)->get();
        $price=invoice::where('reservationid',$res_id)->pluck('price')->toArray();
    
        // total price calculating
        $TOTAL=0;
       foreach($price as $pricing){
        $TOTAL=$TOTAL+ $pricing;
       }
       
       return view('boatownerfunctions.res_details')->with('res_details',$reservations)->with('resid',$res_id)->with('total_price',$TOTAL);
    
    
    }

    public function endtrip(request $request){
       $res_id=$request->input('res_id');
        $trips=trips::where('reservationid',$res_id)->first();
        $trips->status="Ended";
        $trips->update();
        $ownerid=$trips->ownerid;
        $account_number=Boats::where('ownerid',$ownerid)->first();
        $price=invoice::where('reservationid',$res_id)->pluck('price')->toArray();
        $TOTAL=0;
        foreach($price as $pricing){
         $TOTAL=$TOTAL+ $pricing;
        }
        $payement_amount=($TOTAL*88)/100;
        $revenue_amount=($TOTAL*12)/100;
        $payment=new payment;
        $payment->Enddate=$trips->end_date;
        $payment->res_id=$res_id;
        $payment->acc_no=$account_number->bankacountnumber;
        $payment->boatowner_id=$trips->ownerid;
        $payment->status="not transfered";
        $payment->payement_amount=$payement_amount;
        $payment->revenue=$revenue_amount;
        $payment->save();
        return redirect('/ongoing_trips')->with('success','Trip succesfully ended');



        
    }

    public function payement_details(){
        $id=auth()->user()->id;
       $payement_details=payment::where('boatowner_id',$id)->where('status','pay')->get();
       return view('boatownerfunctions.payement_details')->with('payement_details',$payement_details);
    }

    public function payement_details_admin(){
        $id=auth()->user()->id;
      $payement_details=payment::where('status','not transfered')->get();
       return view('adminfunctions.payement_details')->with('payement_details',$payement_details);
    }
    public function pay(request $request){
        $payementid=$request->input('payid');
        
        $payement=payment::where('payementid',$payementid)->first();
         $payement->status="pay";
         $payement->update();
         return redirect('/payement_details_admin')->with('success','Trip succesfully ended');
    }


    public function payement_history(request $request){
        $payementid=$request->input('payid');
        
       $payement=payment::where('payementid',$payementid)->first();
        $payement->status="transfered";
        $payement->update();
        return redirect('/payement_details')->with('success','Trip succesfully ended');

    }

    public function payhistory(){
        $total=0;
        $id=auth()->user()->id;
        $payement=payment::where('boatowner_id',$id)->where('status','transfered')->get();
        $payamount=payment::where('boatowner_id',$id)->where('status','transfered')->pluck('payement_amount');
        foreach( $payamount as $payamount){
            $total=$total+$payamount;

        }
        
        return view('boatownerfunctions.paymenthistory')->with('payement',$payement)->with('total',$total);

    }
    public function search_history(request $request){
        $total=0;
        $id=auth()->user()->id;
        $idm=$request->input('start_date');
     $idm2=$request->input('end_date');
     $payement=collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN ' $idm' AND '$idm2'"))->where('boatowner_id',$id);
    $payamount=collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN ' $idm' AND '$idm2'"))->where('boatowner_id',$id)->pluck('payement_amount');
     foreach( $payamount as $payamount){
        $total=$total+$payamount;

    }
     return view('boatownerfunctions.paymenthistory')->with('payement',$payement)->with('total',$total);
    }
    
    // ongoing reservation details live search bar
    function action(Request $request){
        
       if($request->ajax())
       {
        $output = '';
        $query = $request->get('query');
        $resid =$request->get('resid');
        if($query != '')
        {
         $data = invoice::where('reservationid',$resid)
           
           ->Where('email', 'like', '%'.$query.'%')
          
           ->orderBy('invoiceid', 'desc')
           ->get();
           
        }
        else
        {
         $data =invoice::where('reservationid',$resid)->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
         foreach($data as $row)
         {
          $output .= '
          <tr>
          
           <td>'.$row->boatid.'</td>
           <td>'.$row->reservationid.'</td>
           <td>'.$row->fname.'</td>
           <td>'.$row->lname.'</td>
           <td>'.$row->email.'</td>
           <td>'.$row->NIC.'</td>
           <td>'.$row->NOofseats.'</td>
           <td>'.$row->price.'</td>
           
          
          </tr>
          ';
         }
        }
        else
        {
         $output = '
         <tr>
          <td align="center" colspan="5">No Data Found</td>
         </tr>
         ';
        }
        $data = array(
         'table_data'  => $output,
         'total_data'  => $total_row
        );
  
        echo json_encode($data);
       }
    }
  
}
