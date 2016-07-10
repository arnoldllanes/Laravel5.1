<?php

namespace App\Http\Controllers;


use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Events\UserHasRegistered;

class BroadcastController extends Controller
{
    public function getUsers()
    {
		$users = User::all();
		
		event(new UserHasRegistered($users));

		return 'Done';
    }
}
