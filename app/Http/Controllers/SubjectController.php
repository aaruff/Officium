<?php namespace Officium\Http\Controllers;

use Officium\Http\Requests;
use Officium\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function task()
    {
        return view('pages.subject.task');
    }
}
