<?php

class Entrada extends Controller {

	function Entrada()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('template');
	}
}
