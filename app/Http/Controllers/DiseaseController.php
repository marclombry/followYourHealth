<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Disease;

class DiseaseController extends Controller
{

    public function index(Disease $disease)
    {
        $result = $disease->where('user_id',Auth::id())->get();
        return view('pages.disease',['result' => $result]);
    }

    public function last(Disease $disease)
    {
        $result = $disease->lastDisease()->get();
        return view('pages.disease',['result' => $result]);
    }

    public function first(Disease $disease)
    {
        $result = $disease->firstDisease()->get();
        return view('pages.disease',['result' => $result]);
    }
}
