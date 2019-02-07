<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;



class UserSettingController extends Controller
{
	public function form()
	{
		$data = user::where('id',Auth::id())->first();
		return view('admin.pages.user.setting',['dt'=>$data]);
	}	
	public function update()
	{
		return"Fungsi Update";
	}
}