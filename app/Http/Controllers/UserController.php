<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class UserController extends Controller
{	
	// display all users within the database
    public function index() {
    	$users = User::all()->except(Auth::user()->id);

	    return view('users', compact('users'));
    }

    // show a specific user
    public function show(User $user) {

    	return view('user.show', compact('user'));
    }

    // transfer money to specific user
    public function update(User $user) {
    	$this->validate(request(), [
    		'balance' => array('required', 'regex:/^\d*(\.\d{2})?$/')
    	]);

    	$req = request()->all()['balance'];
    	$new = $user->balance + $req;

    	$user->update(['balance' => $new]);
    	return redirect('users/');
    }
}
