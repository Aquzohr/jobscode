@section('active_menu')
Job
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')

  @include('adminlte-templates::common.errors')

  <div class="card">
    <div class="card-body">
        {!! Form::model($jobPosition, ['route' => ['jobPositions.update', $jobPosition->id], 'method' => 'patch']) !!}
          @include('job_positions.fields')
        {!! Form::close() !!}
    </div>
  </div>


@endsection