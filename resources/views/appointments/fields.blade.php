<!-- Des Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('des', 'Des:') !!}
    {!! Form::textarea('des', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('appointments.index') !!}" class="btn btn-default">Cancel</a>
</div>
