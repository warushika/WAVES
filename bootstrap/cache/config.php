<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:esjFfhlXQnzPUi9A3Xc2zDs3O+eBugG+1rQox9wlWuM=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Collective\\Html\\HtmlServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'MaddHatter\\LaravelFullcalendar\\ServiceProvider',
      28 => 'ConsoleTVs\\Charts\\ChartsServiceProvider',
      29 => 'Jimmyjs\\ReportGenerator\\ServiceProvider',
      30 => 'Barryvdh\\DomPDF\\serviceProvider',
      31 => 'Senemoglu\\Currency\\CurrencyServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
      'Calendar' => 'MaddHatter\\LaravelFullcalendar\\Facades\\Calendar',
      'Charts' => 'ConsoleTVs\\Charts\\Charts',
      'PdfReport' => 'Jimmyjs\\ReportGenerator\\Facades\\PdfReportFacade',
      'ExcelReport' => 'Jimmyjs\\ReportGenerator\\Facades\\ExcelReportFacade',
      'CSVReport' => 'Jimmyjs\\ReportGenerator\\Facades\\CSVReportFacade',
      'PDF' => 'Barryvdh\\DomPDF\\Facades',
      'Currency' => 'Senemoglu\\Currency\\Facades\\Converter',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\xampp\\htdocs\\tourism\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'charts' => 
  array (
    'default_library' => 'Chartjs',
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'tourism',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'tourism',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'tourism',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'tourism',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\tourism\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\tourism\\storage\\app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\xampp\\htdocs\\tourism\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\xampp\\htdocs\\tourism\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 7,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => '587',
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Example',
    ),
    'encryption' => 'tls',
    'username' => 'wavesmwrh123@gmail.com',
    'password' => 'Wavesmwrh@123',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\tourism\\resources\\views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\xampp\\htdocs\\tourism\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tourism\\resources\\views',
    ),
    'compiled' => 'C:\\xampp\\htdocs\\tourism\\storage\\framework\\views',
  ),
  'dompdf' => 
  array (
    'show_warnings' => false,
    'orientation' => 'portrait',
    'defines' => 
    array (
      'font_dir' => 'C:\\xampp\\htdocs\\tourism\\storage\\fonts/',
      'font_cache' => 'C:\\xampp\\htdocs\\tourism\\storage\\fonts/',
      'temp_dir' => 'C:\\Users\\Malindu\\AppData\\Local\\Temp',
      'chroot' => 'C:\\xampp\\htdocs\\tourism',
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => false,
    ),
  ),
  'report-generator' => 
  array (
    'flush' => false,
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'excel' => 
  array (
    'cache' => 
    array (
      'enable' => true,
      'driver' => 'memory',
      'settings' => 
      array (
        'memoryCacheSize' => '32MB',
        'cacheTime' => 600,
      ),
      'memcache' => 
      array (
        'host' => 'localhost',
        'port' => 11211,
      ),
      'dir' => 'C:\\xampp\\htdocs\\tourism\\storage\\cache',
    ),
    'properties' => 
    array (
      'creator' => 'Maatwebsite',
      'lastModifiedBy' => 'Maatwebsite',
      'title' => 'Spreadsheet',
      'description' => 'Default spreadsheet export',
      'subject' => 'Spreadsheet export',
      'keywords' => 'maatwebsite, excel, export',
      'category' => 'Excel',
      'manager' => 'Maatwebsite',
      'company' => 'Maatwebsite',
    ),
    'sheets' => 
    array (
      'pageSetup' => 
      array (
        'orientation' => 'portrait',
        'paperSize' => '9',
        'scale' => '100',
        'fitToPage' => false,
        'fitToHeight' => true,
        'fitToWidth' => true,
        'columnsToRepeatAtLeft' => 
        array (
          0 => '',
          1 => '',
        ),
        'rowsToRepeatAtTop' => 
        array (
          0 => 0,
          1 => 0,
        ),
        'horizontalCentered' => false,
        'verticalCentered' => false,
        'printArea' => NULL,
        'firstPageNumber' => NULL,
      ),
    ),
    'creator' => 'Maatwebsite',
    'csv' => 
    array (
      'delimiter' => ',',
      'enclosure' => '"',
      'line_ending' => '
',
      'use_bom' => false,
    ),
    'export' => 
    array (
      'autosize' => true,
      'autosize-method' => 'approx',
      'generate_heading_by_indices' => true,
      'merged_cell_alignment' => 'left',
      'calculate' => false,
      'includeCharts' => false,
      'sheets' => 
      array (
        'page_margin' => false,
        'nullValue' => NULL,
        'startCell' => 'A1',
        'strictNullComparison' => false,
      ),
      'store' => 
      array (
        'path' => 'C:\\xampp\\htdocs\\tourism\\storage\\exports',
        'returnInfo' => false,
      ),
      'pdf' => 
      array (
        'driver' => 'DomPDF',
        'drivers' => 
        array (
          'DomPDF' => 
          array (
            'path' => 'C:\\xampp\\htdocs\\tourism\\vendor/dompdf/dompdf/',
          ),
          'tcPDF' => 
          array (
            'path' => 'C:\\xampp\\htdocs\\tourism\\vendor/tecnick.com/tcpdf/',
          ),
          'mPDF' => 
          array (
            'path' => 'C:\\xampp\\htdocs\\tourism\\vendor/mpdf/mpdf/',
          ),
        ),
      ),
    ),
    'filters' => 
    array (
      'registered' => 
      array (
        'chunk' => 'Maatwebsite\\Excel\\Filters\\ChunkReadFilter',
      ),
      'enabled' => 
      array (
      ),
    ),
    'import' => 
    array (
      'heading' => 'slugged',
      'startRow' => 1,
      'separator' => '_',
      'slug_whitelist' => '._',
      'includeCharts' => false,
      'to_ascii' => true,
      'encoding' => 
      array (
        'input' => 'UTF-8',
        'output' => 'UTF-8',
      ),
      'calculate' => true,
      'ignoreEmpty' => false,
      'force_sheets_collection' => false,
      'dates' => 
      array (
        'enabled' => true,
        'format' => false,
        'columns' => 
        array (
        ),
      ),
      'sheets' => 
      array (
        'test' => 
        array (
          'firstname' => 'A2',
        ),
      ),
    ),
    'views' => 
    array (
      'styles' => 
      array (
        'th' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 12,
          ),
        ),
        'strong' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 12,
          ),
        ),
        'b' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 12,
          ),
        ),
        'i' => 
        array (
          'font' => 
          array (
            'italic' => true,
            'size' => 12,
          ),
        ),
        'h1' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 24,
          ),
        ),
        'h2' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 18,
          ),
        ),
        'h3' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 13.5,
          ),
        ),
        'h4' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 12,
          ),
        ),
        'h5' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 10,
          ),
        ),
        'h6' => 
        array (
          'font' => 
          array (
            'bold' => true,
            'size' => 7.5,
          ),
        ),
        'a' => 
        array (
          'font' => 
          array (
            'underline' => true,
            'color' => 
            array (
              'argb' => 'FF0000FF',
            ),
          ),
        ),
        'hr' => 
        array (
          'borders' => 
          array (
            'bottom' => 
            array (
              'style' => 'thin',
              'color' => 
              array (
                0 => 'FF000000',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'currency' => 
  array (
    'api_url' => 'http://www.freecurrencyconverterapi.com/api/v3/convert?q={{from}}_{{to}}compact=y',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
    ),
  ),
);
