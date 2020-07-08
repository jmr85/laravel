@csrf
<label>
	Titulo de proyecto <br/>
	<input type='text' name="title" value="{{ old('title', $project->title) }}"><br>
</label>
<label>
	URL del proyecto <br/>
	<input type='text' name="url" value="{{ old('url', $project->url) }}"><br>
</label>
<label>
	Descripcion del proyecto <br/>
	<textarea name="description">{{ old('description', $project->description) }}</textarea><br>
</label>
<button>{{ $btnText }}</button>	
