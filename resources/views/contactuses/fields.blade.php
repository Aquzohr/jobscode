<div class="row">
  <!-- Contact Type Field -->
  <div class="form-group col">
    {!! Form::label('contact_type', 'ติดต่อเรื่อง:') !!}
    {!! Form::select('contact_type', [
      '' => 'โปรดเลือกหัวข้อการติดต่อ', 
      'แจ้งปัญหาการใช้งาน' => 'แจ้งปัญหาการใช้งาน', 
      'ต้องการสมัครสมาชิก' => 'ต้องการสมัครสมาชิก', 
      'ต้องการลงโฆษณา' => 'ต้องการลงโฆษณา', 
      'สอบถามเรื่องอื่นๆ' => 'สอบถามเรื่องอื่นๆ'
      ], null, ['class' => 'form-control']) !!}
  </div>

  <!-- Contact Name Field -->
  <div class="form-group col">
    {!! Form::label('contact_name', 'ชื่อ-สกุล:') !!}
    {!! Form::text('contact_name', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="row">
  <!-- Email Field -->
  <div class="form-group col">
    {!! Form::label('email', 'อีเมล์:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Phone Field -->
  <div class="form-group col">
    {!! Form::label('phone', 'มือถือ:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
  </div>
</div>

<div class="row">
  <!-- Details Field -->
  <div class="form-group col">
    {!! Form::label('details', 'รายละเอียด:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control', 'rows' => '3']) !!}
  </div>

  <!-- Submit Field -->
  <div class="form-group col" style="margin: auto;">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
  </div>
</div>


