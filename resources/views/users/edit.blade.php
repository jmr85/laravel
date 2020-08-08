@extends('layout')

@section('title', __('Edit'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                @if (session()->has('info'))
                    <div class="alert alert-success">
                        {{ session('info') }}
                    </div> 
                @endif       
                @include('partials.validation-errors')
                <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('user.update', $user->id) }}">
                    {!! method_field('PUT') !!}
                    <h1 class="display-4">@lang('Edit')</h1> <hr>

                    @include('users._form', ['btnText' => __('Update')])   
                </form>	
            </div>
        </div>
    </div>    
@endsection