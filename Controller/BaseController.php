<?php

 namespace Controller;

 use Zend\Diactoros\Response\htmlResponse;

 class BaseController
 {
 	 protected $templateEngine;

 	 public function __construct()
 	 {
 	 	$loader = new \Twig\Loader\FilesystemLoader('../views');
 	 	$this->templateEngine = new \Twig\Environment($loader, [
 	     'debug' => 'true',
         'cache' => 'false']);

 	 }
     

       public function renderHTML($fileName,$data= [])
       {
       	return new htmlResponse($this->templateEngine->render($fileName,$data));
       }
 }



?>