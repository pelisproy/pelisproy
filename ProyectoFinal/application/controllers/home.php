<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends CI_Controller {
		function comprobarCookies(){
			
		}
		
		function index(){
			$this->load->view('templates/headers/header1.php');
			$this->load->helper('cookie');
		}
		
	}