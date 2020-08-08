@csrf
<div class="form-group">
	<label for="name">@lang('Name')</label>
	<input class="form-control border-0 bg-light shadow-sm" 
		id="name" 
		type='text' 
		name="name" 
		value="{{ old('name', $user->name) }}"
	>	
</div>	
<div class="form-group">
	<label for="email">@lang('E-Mail Address')</label>
	<input class="form-control border-0 bg-light shadow-sm" 
		id="email" 
		type='text' 
		name="email" 
		value="{{ old('email', $user->email) }}"
	>
</div>
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block"
    href="{{ route('user.index') }}">
    @lang('Cancel')
</a>