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

        $portfolio = Project::orderBY('created_at','DESC')->get();// Project::latest()->get() hace lo mismo
        return view('portfolio', compact('portfolio'));
    }
}
