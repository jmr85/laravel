@extends('layout')

@section('title', 'Contact')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">
				<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">
					@csrf
					<h1 class="display-4">@lang('Contact')</h1>
					<hr>
					<div class="form-group">
						{{--
							funcion ucfirst() que viene en php es para dejar la palabra con primer letra capital 
							solo funciono con el translate __() no asi con @lang()
						--}}
						<label for="name"> {{ ucfirst(__('validation.attributes.name')) }} </label>
						<input id="name" class="form-control bg-white shadow-sm @error('name') is-invalid @else border-0 @enderror" 
						name="name" placeholder="@lang('validation.attributes.name')" value="{{ old('name') }}">
						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="email">{{ ucfirst(__('validation.attributes.email')) }}</label>
						<input id="email" class="form-control bg-white shadow-sm @error('email') is-invalid @else border-0 @enderror" type="text" 
						name="email" placeholder="@lang('validation.attributes.email')..." value="{{ old('email') }}">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="subject">{{ ucfirst(__('validation.attributes.subject')) }}</label>
						<input id="subject" class="form-control bg-white shadow-sm @error('subject') is-invalid @else border-0 @enderror" 
						name="subject" placeholder="@lang('validation.attributes.subject')..." value="{{ old('subject') }}">
						@error('subject')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="content">{{ ucfirst(__('validation.attributes.message')) }}</label>
						<textarea id="content" class="form-control bg-white shadow-sm @error('content') is-invalid @else border-0 @enderror" 
						name="content" placeholder="@lang('validation.attributes.message')...">{{ old('content') }}</textarea>
						@error('content')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
				</form>
			</div>
		</div>	
	</div>
@endsection