<?php 

  namespace Models;
 use Illuminate\Database\Eloquent\Model ;
  


  class Project extends Model
  {
        protected $table = 'projects';

       public function getDuration()
   {
     $years = floor($this->months /12);
     $extraMonths = $this->months % 12;
     return "$years years $extraMonths months";
   }
  }




?>