<?php namespace App\Controllers;

class History extends BaseController
{
	public function index()
	{
		echo view('head');
		echo view('header');
		echo view('content_history');
		echo view('footer');
	}
	//--------------------------------------------------------------------

}
