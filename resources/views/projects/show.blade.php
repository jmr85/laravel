@extends('layout')

@section('title', $project->title)
@section('content')
	{{$project->description}}
@endsection