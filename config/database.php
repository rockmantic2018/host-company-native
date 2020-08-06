<?php
/**
* config/database.php
*/
session_start();
date_default_timezone_set("Asia/jakarta");
ini_set('default_charset', 'UTF-8');
error_reporting(E_ALL | E_STRICT);
isset($_SERVER['REMOTE_ADDR']) OR $_SERVER['REMOTE_ADDR'] = '127.0.0.1';

class database
{
 private $dsn;

    public $default     = array(
        'datasource'    => 'Database/Mysql',
        'persistent'    => false,
        'host'          => 'localhost',
        'login'         => 'root',
        'password'      => '',
        'database'      => 'rm_com',
        'prefix'        => '',
        'encoding'      => 'UTF8',
        'port'          => '',
    );

    public function DB()
    {
        static $instance;
        if ($instance === null) {
            $opt = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => FALSE,
            );
            $dsn = 'mysql:host=' .$this->default['host'] . ';dbname=' .$this->default['database'] . ';charset=' .$this->default['encoding'];
            $instance = new PDO($dsn, $this->default['login'], $this->default['password'], $opt);
        }
        return $instance;
    }
}

?>	