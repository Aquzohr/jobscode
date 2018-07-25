@extends('layouts.manager_app')

@section('manager_content')
<div class="card">
    <div class="card-body">
        <h5><i class="fas fa-briefcase"></i> {!! $jobPosition->jobname !!}</h5>
        <h5><i class="far fa-building"></i> {!! $jobPosition->company->companyname !!}</h5>
        <h7>จังหวัด : {!! $jobPosition->country !!}</h7>
        <h7>เงินเดือน : {!! $jobPosition->salary !!}</h7>
    </div>
</div>

<hr> 

<div class="card">
    <div class="card-header">
      <div class="row">
          <div class="col-8 text-left">
            <h3 class="card-title display">ชื่อบริษัท: {{ $jobPosition->company->companyname }}</h3>
          </div>
          <div class="col-4 text-right">
            <img src="https://www.jobnorththailand.com/images/company/logo/zNJMg25202.jpg" height="40" width="80" class="rounded-circle">
          </div>
      </div>
    </div>
    <div class="card-body">
        <table class="table">
          <tbody>
            <tr>
              <td><strong>ประเภทธุรกิจ</strong></td>
              <td>{{ $jobPosition->company->companytype }}</td>
            </tr>
            <tr>
              <td><strong>ปีที่ก่อตั้ง</strong></td>
              <td>{{ $jobPosition->company->start_year }}</td>
            </tr>
            <tr>
              <td><strong>จำนวนพนักงาน</strong></td>
              <td>{{ $jobPosition->company->worker_count }}</td>
            </tr>
            <tr>
              <td><strong>ลักษณะธุรกิจ</strong></td>
              <td>{{ $jobPosition->company->details }}</td>
            </tr>
            <tr>
              <td><strong>ที่อยู่</strong></td>
              <td>{{ $jobPosition->company->address }}</td>
            </tr>
            <tr>
              <td><strong>อีเมล์</strong></td>
              <td>{{ $jobPosition->company->email }}</td>
            </tr>
            <tr>
              <td><strong>เบอร์โทรศัพท์</strong></td>
              <td>{{ $jobPosition->company->phone }}</td>
            </tr>
            <tr>
              <td><strong>ติดต่อคุณ</strong></td>
              <td>{{ $jobPosition->company->fullname_contact }}</td>
            </tr>
            <tr>
              <td><strong>ตำแหน่ง</strong></td>
              <td>{{ $jobPosition->company->position_contact }}</td>
            </tr>
          </tbody>
        </table>
        <hr>
    </div>
  </div>

@endsection
