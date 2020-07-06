<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate(1)
        ]);// por defecto la paginacion es de 15 items por pagina
    }
    public function show(Project $id)
    {
        return view('projects.show', ['project' => $id]);
    }
    public function create()
    {
        // aca solo retorno la vista create
        return view('projects.create');
    }
    public function store()
    {
        //aca almacena los datos ingresados en en el metodo create()
        Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);
        //nos lleva al listado de proyectos y se va a ver el proyecto creado ya que es el mas reciente
        return redirect()->route('projects.index');
    }
}
