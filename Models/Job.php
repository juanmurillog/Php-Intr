<?php
   namespace Models;
  
 use Illuminate\Database\Eloquent\Model ;


  class Job extends Model
  {
     protected $table = 'jobs';

       public function getDuration()
   {
     $years = floor($this->months /12);
     $extraMonths = $this->months % 12;
     return "$years years $extraMonths months";
   }
  }



?>