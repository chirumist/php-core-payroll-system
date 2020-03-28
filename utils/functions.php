<?php

define('DB_HOST','127.0.0.1');
define('DB_DATABASE','payroll');
define('DB_USER','root');
define('DB_PASSWORD','');

session_start();

function view($path, $data = []) {
  require_once "{$path}.php";
}

function dd(...$value){
    foreach ($value as $key => $data){
        echo  '<pre style="background: #000;color: #d16625;font-weight: bolder;padding-left: 10px;">' . var_export($data, true) . '</pre>';
    }

}