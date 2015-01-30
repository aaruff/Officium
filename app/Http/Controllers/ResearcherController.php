<?php namespace Officium\Http\Controllers;

use Officium\Http\Requests;
use Officium\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResearcherController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
		return view('pages.researcher.home');
	}
}
