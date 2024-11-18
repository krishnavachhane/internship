<?php

require('ENV.php');
require(dbTables.php);

class Database extends PDO 
{
    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS)
    {
        parents::__construct($DB_TYPE . ':host=' . ';dbname' . $DB_NAME, $DB_USER, $DB_PASS);
    
    }
    public function select($sql, $array(), $fetchMode = PDO ::FETCH_ASSOC)
    {
        $sth = $this-> prepare($sql);
        foreach ($array as $key => $value);{
        $sth->bindvalue("$key",$value);
        }
        if (!$sth->execute()){
            return false;
        }else{
            return$sth->fetchaAll($fetchMode);
        }
    }
}