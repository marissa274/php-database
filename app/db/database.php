<?php


function dbConnect() {  
    $host = getenv('DB_HOST');
    $port = getenv('DB_PORT');
    $dataBaseName = getenv('DB_NAME');
    $username = getenv('DB_USERNAME');
    $password = getenv('DB_PASSWORD');


    $connectionString = "host=$host port=$port dbname=$dataBaseName user=$username password=$password";
    $db = pg_connect($connectionString);

    if (!$db) {
        echo "An error occurred while connecting to the database.";
        exit;
    }


    return $db;
   
    
}


    function dbQuery($db, $sql){
        $result = pg_query($db, $sql);


    if (!$result) {
        echo  preg_last_error($db);
        pg_close($db);
        exit;
    }
    return $result;
  
}
  