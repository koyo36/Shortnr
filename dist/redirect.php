<?php
  require_once '../src/app/init.php';

  $short = new Shorten();

  if( isset( $_GET['link'] ) ) 
  {

    $short->setSlug($_GET['link']);

    $url = $short->getLinkFromEncode();


    header('Location:'.$url->url);



  }