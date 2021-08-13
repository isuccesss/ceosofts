<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message'); //ให้ตรงกับชื่อ file ใน views ok
	}
}
