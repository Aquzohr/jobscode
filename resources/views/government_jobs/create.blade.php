@extends('layouts.'.$role.'_app')

@section('active_menu')
GOVERNMENT JOBS
@endsection

@section($role.'_content')
    <section class="content-header">
        <h1>
            Government Jobs
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'governmentJobs.store']) !!}

                        @include('government_jobs.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
