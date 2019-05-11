<?php

class Shorten
{
    private $url;
    private $short;
    private $errors = [];
    private $slug;

    private $instance;
    private $pdo;

    public function __construct()
    {
        $instance = DB::getInstance();
        $this->_pdo = $instance->getConn();
    }
    public function getErrors()
    {
        return $this->errors;
    }

    public function setSlug( $slug = '' ) {
        !empty($slug) ? $this->slug = $slug : $this->slug = $this->getLink()->encode;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function saveLink()
    {
        $sql = 'INSERT INTO urls ( url, timestamp, encode, counter ) values( ?, ?, ?, ? )';
        $req = $this->_pdo->prepare( $sql );

        return $req->execute([$this->url, time(), $this->generateLink(), 0 ]);

    }

    public function generateLink()
    {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < 6; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }

        $this->slug = $str;
        return $str;
    }

    public function checkLink()
    {
        $sql = 'SELECT * FROM urls WHERE url = ?';
        $req = $this->_pdo->prepare( $sql );
        $req->execute([$this->url]);
         
        return $req->fetch() ? true : false ;
    }

    public function getLinkFromEncode() 
    {
        $sql = 'SELECT * FROM urls WHERE encode = ?';
        $req = $this->_pdo->prepare( $sql );
        $req->execute([$this->slug]);

        return $req->fetch(PDO::FETCH_OBJ);
    }

    public function getLink()
    {
        $sql = 'SELECT * FROM urls WHERE url = ?';
        $req = $this->_pdo->prepare( $sql );
        $req->execute([$this->url]);
         
        return $req->fetch(PDO::FETCH_OBJ);
    }

    public function createLink()
    {
        
        // return sprintf(
        //     "%s://%s%s/r/%s",
        //     isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        //     $_SERVER['SERVER_NAME'],
        //     $_SERVER['REQUEST_URI'],
        //     $this->slug
        // );

        return 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/r/'. $this->slug;
    }

    public function setUrl( $url )
    {
        $this->url = $url;
    }

    public function validateUrl()
    {
        if( !filter_var( $this->url, FILTER_VALIDATE_URL ) )
        {
          $this->errors[] = 'Your URL is not valid.';   
          return false;
        }  
        return true;

    }


}