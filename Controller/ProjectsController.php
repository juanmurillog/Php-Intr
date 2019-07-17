<?php

namespace Controller;
use Models\Project;
use Respect\Validation\Validator as v;
class ProjectsController extends BaseController
{
   
   public function getAddProject($request)
   {

   	 $responseMessage = null;
      $postData = $request->getParsedBody();
   	$jobValidator = v::key('title', v::stringType()->notEmpty())
                  ->key('description', v::stringType()->notEmpty());
   

   try
   {

    $jobValidator->assert($postData);
   	$postData = $request->getParsedBody();
   	$file = $request->getUploadedFiles()['logo'];

   	var_dump($file);
   	/*
	$Project = new Project();
    $Project->title = $postData['title'];
    $Project->description = $postData['description'];
    $Project->months = $postData['months'];
    $Project->save();
    */
    

     $responseMessage = 'Saved';
   }
   catch(\Exception $e)
   {
       $responseMessage = $e->getMessage();
   }

   

   return $this->renderHTML('addProject.twig',[ 'responseMessage' => $responseMessage]);
}

}