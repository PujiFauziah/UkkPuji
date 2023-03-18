<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardpetugas extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="jumbotron mt-5">
		<h1> '.session()->get('username').'</h1>
		<p>Anda Login Sebagai Petugas Atau Admin !</p>
	  </div>';
		return view ('dashboard', $data);
	}
}
