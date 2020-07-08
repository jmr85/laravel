<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

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
            'projects' => Project::latest()->paginate(4)
        ]);// por defecto la paginacion es de 15 items por pagina
    }
    public function show(Project $project)
    {
        return view('projects.show', ['project' => $project]);
    }
    //metodo que muestra el formulario
    public function create()
    {
        // aca solo retorno la vista create
        return view('projects.create', ['project' => new Project]);
        //se  agrega segundo parametro con el new para utilizar una vez el old() el new Project devuelve null
        // o sea que no tiene funcioanalidad
    }
    //metodo para procesar formulario de create()
    public function store(SaveProjectRequest $request)
    {
        //SaveProjectRequest es el parametro inyectado con la validacion hecha en rules() 
        /* 
        solo va a devolver los campos validados  que definan aca en validacion sin importar 
        cuantos campos se han enviado en el formulario*/
       
        //aca almacena los datos ingresados en en el metodo create()
        Project::create($request->validated());
        //nos lleva al listado de proyectos y se va a ver el proyecto creado ya que es el mas reciente
        return redirect()->route('projects.index');
    }

    //metodo que muestra formulario con el @method('PATH')
    public function edit(Project $project)
    {
        return view('projects.edit', ['project' => $project]);
    }
    //metodo para procesar formulario de edit()
    public function update(Project $project, SaveProjectRequest $request)
    {
        /*
            nombre del parámetro en rutas tiene que ser el mismo que recibe 
            en el controlador ->parameters(['portfolio' => 'project']) tiene ser project 
        */
        $project->update($request->validated());
        return redirect()->route('projects.show', $project);
    }
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');//similar a la accion de store()
    }
}
