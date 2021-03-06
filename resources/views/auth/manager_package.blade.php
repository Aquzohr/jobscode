@extends('layouts.app')

@section('active_menu')
Select Package
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
      <div class="col-sm-10">
        <div class="row">

          @foreach($packages as $package)
            <div class="col-4 text-center" style="margin-bottom: 10px;">
              <div class="card">
                <div class="card-body">
                <div class="card-title"><button type="button" class="btn btn-outline-primary btn-lg" disabled>{{ $package->name }}</button></div>
                  <p>{{ $package->description }}</p>
                  <a href="/manager_register?package={{ $package->name }}" class="btn btn-info text-white" role="button">Select</a>
                </div>
              </div>
            </div>
          @endforeach

        </div> {{--  end row --}}
      </div>
  </div>

</div>
@include('layouts.footer')

@endsection
