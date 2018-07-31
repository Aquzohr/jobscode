@extends('layouts.admin_app')

@section('admin_content')
    <section class="content-header">
        <h1>
            Announcements
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('announcements.show_fields')
                    <a href="{!! route('announcements.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
