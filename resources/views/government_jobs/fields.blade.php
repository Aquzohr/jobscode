<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'ชื่อ:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('details', 'รายละเอียด:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

{!! Form::hidden('status', 0) !!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('governmentJobs.index') !!}" class="btn btn-default">ยกเลิก</a>
</div>
