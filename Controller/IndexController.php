<?php

namespace Controller;


use Models\{Job,Project};

class IndexController extends BaseController
{
	public function indexAction()
	{
		//echo ' index actionnnnn' ;

     $jobs = Job::all();
     $projects= Project::all();

     $name = 'Hector Benitez';
     $limithMonths = 2000;

     return $this->renderHTML('index.twig',['name' => $name, 'jobs' => $jobs, 'projects'=> $projects]);
  
     //include '../Views/index.php';

} 

}






?>