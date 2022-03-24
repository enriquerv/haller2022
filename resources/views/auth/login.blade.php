@extends('layout.principal')

@section('title', trans('auth.title.login'))

@section('styles')
@endsection

@section('content')
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4 p-5 my-5 border">
            <p class="text-white bolder h4 text-center mt-3 mb-4">Ingresa usuario y contraseña</p>
            {!! Form::open(['route' => 'login', 'method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal']) !!}
                {!! Form::hidden('previous', $previous) !!}
                <div class="form-group {{ $errors->first('email') ? 'has-error' : '' }}">
                  <div class="col-sm-12">
                              {!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.email')]) !!}
                      <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                  </div>
                </div>
                <div class="form-group {{ $errors->first('password') ? 'has-error' : '' }}">
                  <div class="col-sm-12">
                      {!! Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => trans('validation.attributes.password')]) !!}
                      <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                  </div>
                </div>
                {{-- <div class="form-group">
                  <div class="col-sm-12">
                      {{ link_to_route('forgot-password', trans('auth.title.password_recovery_text')) }}
                  </div>
                </div> --}}
                <div class="form-group">
                  <div class="col-sm-12 text-right">
                      {!! Form::submit(trans('auth.title.login'), ['class' => 'btn btn-primary']) !!}
                  </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

    <style>
        .help-block{ color: #f3c181 }
    </style>

@endsection

@section('scripts')
    @include('auth.formvalidation.login')
@endsection
