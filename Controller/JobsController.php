<?php

namespace Controller;
use Models\Job;
use Respect\Validation\Validator as v;
class JobsController extends BaseController
{
	public function getAddJobAction($request)
	{
     //  echo ' si estamos dentro';
    
    $responseMessage = null;

   if($request->getMethod() == 'POST')
   {
     $postData = $request->getParsedBody();
   	$jobValidator = v::key('title', v::stringType()->notEmpty())
                  ->key('description', v::stringType()->notEmpty());
   

   try
   {
   	
    $jobValidator->assert($postData);
   	$postData = $request->getParsedBody();
      
    //$files = $request->getUploadedFiles();
      $files = $request->getUploadedFiles();
    var_dump($request);
    
	/*$job = new Job();
    $job->title = $postData['title'];
    $job->description = $postData['description'];
    $job->months = $postData['months'];
    $job->save();
*/
    

     $responseMessage = 'Saved';
   }
   catch(\Exception $e)
   {
       $responseMessage = $e->getMessage();
   }
   // var_dump($jobValidator->validate($postData)) ;

   /*	$postData = $request->getParsedBody();
	$job = new Job();
    $job->title = $postData['title'];
    $job->description = $postData['description'];
    $job->months = $postData['months'];
    $job->save();

   */
   }
       //include '../Views/addJob.php';
   return $this->renderHTML('addJob.twig', ['responseMessage' => $responseMessage]);

	}
}