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

        $projects = Project::orderBY('created_at','DESC')->paginate(1);// por defecto la paginacion es de 15 items por pagina
        return view('portfolio', compact('projects'));
    }
}
