<?php namespace Officium\Http\Controllers;

use Officium\Http\Requests;
use Officium\Http\Controllers\Controller;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function incoming()
    {
        return view('pages.subject.questionnaire.incoming');
    }
}
