<?php namespace Officium\Http\Controllers;

use Officium\Http\Requests;
use Officium\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function home()
    {
        return view('pages.session.home');
    }
}
