<?php

namespace Controller;


class AdminController extends BaseController
{
	public function getIndex()
	{		
     return $this->renderHTML('admin.twig');    
     } 

}

