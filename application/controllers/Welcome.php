<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

function __construct()
{
    parrent::__construct();
	echo "SE NPRU";
	echo "</br>";
}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function hello()
	{
		echo"hello CodeIgniter";
	}
}
