@extends('layouts.app')

@section('active_menu')
Gold Package
@endsection

@section('title')
<title>Register</title>
@endsection

@section('navbar')
@include('layouts.navbar')
@endsection

@section('content')
<div class="container">
  @include('flash::message')

  <div class="row">
      @include('layouts.menu')
      <div class="col-8">
          {!! Form::open(['url' => '/register', 'method' => 'post']) !!}

            {{ Form::hidden('role', 'manager') }}
            {{ Form::hidden('package', 'gold') }}

            @include('auth.fields')

          {!! Form::close() !!}
      </div>
  </div>

</div>
@include('layouts.footer')

@endsection
