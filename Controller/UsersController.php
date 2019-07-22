<?php

namespace Controller;
use Models\User;
use Respect\Validation\Validator as v;

class UsersController extends BaseController
{

	public function userAction($request)
	{

		$responseMessage = null;

		if($request->getMethod() == "POST")
		{  
			 $postData = $request->getParsedBody();
             $jobValidator = v::key('email', v::stringType()->notEmpty())
                  ->key('password', v::stringType()->notEmpty());

                  
        try {
                $jobValidator->assert($postData);
                 
               
                $user = new User();
                $user->email = $postData['email'];
                $user->password = password_hash($postData['password'], PASSWORD_DEFAULT);
                $user->save();

                $responseMessage = 'Saved';
             } catch (\Exception $e) {
                $responseMessage = 'No se pueden dejar espacios vacios';
                 }
        }

        return $this->renderHTML('addUsers.twig', ['responseMessage' =>$responseMessage

        ]);
    }

		}

	


