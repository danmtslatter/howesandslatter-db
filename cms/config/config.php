<?php

    define('PERCH_LICENSE_KEY', 'P11201-KRY228-JPX905-JMU055-JYN012');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'ykuaPsKfYK');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "songs");
    define("PERCH_DB_PREFIX", "perch_");
    
    define('PERCH_EMAIL_FROM', 'dan@howesandslatter.com');
    define('PERCH_EMAIL_FROM_NAME', 'Dan Slatter');

    define('PERCH_LOGINPATH', '/cms');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', dirname(__FILE__)));

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
  
?>