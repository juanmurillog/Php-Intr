<?php
   namespace Models;
   //require_once 'vendor/autoload.php';

    class BaseElement implements Printable
    {

      
      public $title;
      public $description;
      public $visible= true;
      public $months;
      public $logo;


    public function __construct ($title,$description)
    {
        $this->setTitle($title);
        $this->description = $description;
     
    }
    public function setTitle($t)
    {
      if($t == '')
      {
        $this->title = 'n/a';
      }
      else
      { $this->title = $t;}
     
    }
    public function getTitle()
    {
         return $this->title;
    }
    public function getDuration()
   {
     $years = floor($this->months /12);
     $extraMonths = $this->months % 12;
     return "$years years $extraMonths months";
   }

    public function getDescription()
    {
       return $this->description;
    }

    public function getLogo()
    {
      return $this->logo;
    }

    }


?>