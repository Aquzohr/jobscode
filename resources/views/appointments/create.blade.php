@section('active_menu')
APPOINTMENTS
@endsection

@extends(Auth::user() ? 'layouts.'.Auth::user()->roles->first()->name.'_app' : 'layouts.guest_app')
@section(Auth::user() ? Auth::user()->roles->first()->name.'_content' : 'guest_content')
<div class="card">
  <div class="card-body">

    <section class="content-header">
        <h1>
            การนัดหมาย
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'appointments.store']) !!}

                        @include('appointments.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

  </div> {{-- end card-body --}}
</div>
@endsection
