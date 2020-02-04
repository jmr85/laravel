<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $portfolio = Project::get(); //obtiene todos los datos
        return view('portfolio', compact('portfolio'));
    }
}
