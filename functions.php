<?php
  include "app-config/config.php";

  function phpToJs($values){
    if(is_array($values)){
      $json = json_encode($values);

      return "<script type='text/javascript'>var phpVariables = {$json}; </script>";
    }
  }

  function replace($string){
    return str_replace([".", "/", "-"], "", $string);
  } 

  function toInteger($value){
    return (int) $value;
  }

  function debug($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
  }

  function database($dbType, $dbName){
    global $appConfiguration;

    if(array_key_exists($dbType, $appConfiguration["databases"])){
      foreach($appConfiguration["databases"][$dbType] as $dbIndex => $data){
        if(array_key_exists($dbName, $appConfiguration["databases"][$dbType])){
          $databaseConfig = $appConfiguration["databases"][$dbType][$dbName];

          return [
            "dsn" => "{$dbType}:dbname={$databaseConfig['dbPath']}; charset={$databaseConfig['charset']}",
            "user" => $databaseConfig["dbUser"],
            "password" => $databaseConfig["dbPassword"]
          ]; 
        }
      }
      return false;
    }
  }
?>