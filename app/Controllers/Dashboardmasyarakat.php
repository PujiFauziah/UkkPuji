<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardmasyarakat extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="jumbotron mt-5">
		<h1> '.session()->get('username').'</h1>
		<p>Anda Login Sebagai Masyarakat!</p>
	  </div>';
		return view ('Masyarakat/Dashboard', $data);
	}
}
