
@section('active_menu')
GOVERNMENT JOBS
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
    <section class="row">
        <h1 class="col">Government Jobs</h1>
        <h1 class="col text-right">
          <a class="btn btn-primary" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('governmentJobs.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
               @include('government_jobs.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

