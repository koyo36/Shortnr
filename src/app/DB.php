<?php

class DB
{
 
    private static $_instance = null;

    private $_pdo;

    // Connect to the db
    private function __construct()
    {
        try {
            $this->_pdo = new PDO('mysql:host=localhost;dbname=shortnr' ,  'root', '') ;
        }
        catch ( PDOException $e )
        {
            die( $e->getMessage() );
        }
    }

    // Singleton
    // create new instance of the class
    public static function getInstance()
    {
        if( !isset( self::$_instance ) )
        {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function getConn()
    {
        return $this->_pdo;
    }

}