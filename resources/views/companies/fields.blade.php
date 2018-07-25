<div class="row">
  <!-- Companyname Field -->
<div class="form-group col">
    {!! Form::label('companyname', 'Companyname:') !!}
    {!! Form::text('companyname', null, ['class' => 'form-control']) !!}
</div>

<!-- Companytype Field -->
<div class="form-group col">
    {!! Form::label('companytype', 'Companytype:') !!}
    {!! Form::select('companytype', [
      "ประเภทธุรกิจ" => "ประเภทธุรกิจ",
      "โรงแรม/ที่พัก" => "โรงแรม/ที่พัก",
      "ท่องเที่ยว/ทัวร์" => "ท่องเที่ยว/ทัวร์",
      "สถานบันเทิง/ร้านอาหาร" => "สถานบันเทิง/ร้านอาหาร",
      "อาหาร/เครื่องดื่ม" => "อาหาร/เครื่องดื่ม",
      "คอมพิวเตอร์/เทคโนโลยี/เครื่องใช้ไฟฟ้า" => "คอมพิวเตอร์/เทคโนโลยี/เครื่องใช้ไฟฟ้า",
      "การศึกษา/เครื่องเขียน/แบบเรียน" => "การศึกษา/เครื่องเขียน/แบบเรียน",
      "กฎหมาย/บัญชี" => "กฎหมาย/บัญชี",
      "โรงพยาบาล/เครื่องมือแพทย์/ยา" => "โรงพยาบาล/เครื่องมือแพทย์/ยา",
      "นำเข้า-ส่งออก/ธุรกิจระหว่างประเทศ" => "นำเข้า-ส่งออก/ธุรกิจระหว่างประเทศ",
      "โรงงานอุตสาหกรรม" => "โรงงานอุตสาหกรรม",
      "ความงาม/สปา/เครื่องสำอาง" => "ความงาม/สปา/เครื่องสำอาง",
      "เฟอร์นิเจอร์/ของตกแต่ง/หัตถกรรม" => "เฟอร์นิเจอร์/ของตกแต่ง/หัตถกรรม",
      "ออกแบบ/ตกแต่งภายใน/จัดสวน" => "ออกแบบ/ตกแต่งภายใน/จัดสวน",
      "โฆษณา/อีเว้นท์/สตูดิโอ" => "โฆษณา/อีเว้นท์/สตูดิโอ",
      "ห้างสรรพสินค้า/ค้าปลีก-ค้าส่ง" => "ห้างสรรพสินค้า/ค้าปลีก-ค้าส่ง",
      "ยานยนต์/ประดับยนต์" => "ยานยนต์/ประดับยนต์",
      "ก่อสร้าง/วัสดุก่อสร้าง/อสังหาริมทรัพย์" => "ก่อสร้าง/วัสดุก่อสร้าง/อสังหาริมทรัพย์",
      "ขนส่ง/ขนย้าย" => "ขนส่ง/ขนย้าย",
      "เสื้อผ้า/สิ่งทอ" => "เสื้อผ้า/สิ่งทอ",
      "เครื่องประดับ/อัญมณี" => "เครื่องประดับ/อัญมณี",
      "การเกษตร" => "การเกษตร",
      "ธนาคาร/การเงิน/การประกัน/สินเชื่อ" => "ธนาคาร/การเงิน/การประกัน/สินเชื่อ",
      "ขายตรง/เครือข่าย/MLM" => "ขายตรง/เครือข่าย/MLM",
      "สิ่งพิมพ์/สื่อสารมวลชน" => "สิ่งพิมพ์/สื่อสารมวลชน",
      "สื่อสาร/โทรคมนาคม" => "สื่อสาร/โทรคมนาคม",
      "รปภ./รักษาความสะอาด/ซักรีด/กำจัดแมลง" => "รปภ./รักษาความสะอาด/ซักรีด/กำจัดแมลง",
      "อุตสาหกรรมพลาสติก-เคมี" => "อุตสาหกรรมพลาสติก-เคมี",
      "อุตสาหกรรมโลหะ-เหล็ก" => "อุตสาหกรรมโลหะ-เหล็ก",
      "ราชการ/รัฐวิสาหกิจ/มูลนิธิ/องค์กร" => "ราชการ/รัฐวิสาหกิจ/มูลนิธิ/องค์กร",
      "อื่นๆ" => "อื่นๆ"
       ], null, ['class' => 'form-control']) !!}
</div>
</div>


<div class="row">

  <!-- Worker Count Field -->
  <div class="form-group col">
      {!! Form::label('worker_count', 'Worker Count:') !!}
      {!! Form::select('worker_count', [
        "โปรดเลือก" => "โปรดเลือก",
        "1 - 5 คน" => "1 - 5 คน",
        "5 - 20 คน" => "5 - 20 คน",
        "20 - 50 คน" => "20 - 50 คน",
        "50 - 100 คน" => "50 - 100 คน",
        "100 - 200 คน" => "100 - 200 คน",
        "200 - 500 คน" => "200 - 500 คน",
        "500 - 1,000 คน" => "500 - 1,000 คน",
        "มากกว่า 1,000 คน" => "มากกว่า 1,000 คน"
      ], null, ['class' => 'form-control']) !!}
  </div>

<!-- Start Year Field -->
<div class="form-group col">
    {!! Form::label('start_year', 'Start Year:') !!}
    {!! Form::select('start_year', $year, null, ['class' => 'form-control']) !!}
</div>
</div>

<div class="row">
  <!-- Details Field -->
  <div class="form-group col">
      {!! Form::label('details', 'Details:') !!}
      {!! Form::textarea('details', null, ['class' => 'form-control', 'rows' => '5']) !!}
  </div>

<!-- Address Field -->
<div class="form-group col">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>
</div>


<div class="row">
  <!-- Country Field -->
<div class="form-group col">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::select('country', [
              "ไม่ระบุ" => "ไม่ระบุ",
              "กระบี่" => "กระบี่",
              "กรุงเทพมหานคร" => "กรุงเทพมหานคร",
              "กาญจนบุรี" => "กาญจนบุรี",
              " กาฬสินธุ์" => " กาฬสินธุ์",
              "กำแพงเพชร" => "กำแพงเพชร",
              "ขอนแก่น" => "ขอนแก่น",
              "จันทบุรี" => "จันทบุรี",
              "ฉะเชิงเทรา" => "ฉะเชิงเทรา",
              "ชลบุรี" => "ชลบุรี",
              "ชัยนาท" => "ชัยนาท",
              "ชัยภูมิ" => "ชัยภูมิ",
              "ชุมพร" => "ชุมพร",
              "ตรัง" => "ตรัง",
              "ตราด" => "ตราด",
              "ตาก" => "ตาก",
              "นครนายก" => "นครนายก",
              "นครปฐม" => "นครปฐม",
              "นครพนม" => "นครพนม",
              "นครราชสีมา" => "นครราชสีมา",
              "นครศรีธรรมราช" => "นครศรีธรรมราช",
              "นครสวรรค์" => "นครสวรรค์",
              "นนทบุรี" => "นนทบุรี",
              "นราธิวาส" => "นราธิวาส",
              "น่าน" => "น่าน",
              "บุรีรัมย์" => "บุรีรัมย์",
              "ปทุมธานี" => "ปทุมธานี",
              "ประจวบคีรีขันธ์" => "ประจวบคีรีขันธ์",
              "ปราจีนบุรี" => "ปราจีนบุรี",
              "ปัตตานี" => "ปัตตานี",
              "พระนครศรีอยุธยา" => "พระนครศรีอยุธยา",
              "พะเยา" => "พะเยา",
              "พังงา" => "พังงา",
              "พัทลุง" => "พัทลุง",
              "พิจิตร" => "พิจิตร",
              "พิษณุโลก" => "พิษณุโลก",
              "ภูเก็ต" => "ภูเก็ต",
              "มหาสารคาม" => "มหาสารคาม",
              "มุกดาหาร" => "มุกดาหาร",
              "ยะลา" => "ยะลา",
              "ยโสธร" => "ยโสธร",
              "ระนอง" => "ระนอง",
              "ระยอง" => "ระยอง",
              "ราชบุรี" => "ราชบุรี",
              "ร้อยเอ็ด" => "ร้อยเอ็ด",
              "ลพบุรี" => "ลพบุรี",
              "ลำปาง" => "ลำปาง",
              "ลำพูน" => "ลำพูน",
              "ศรีสะเกษ" => "ศรีสะเกษ",
              "สกลนคร" => "สกลนคร",
              "สงขลา" => "สงขลา",
              "สตูล" => "สตูล",
              "สมุทรปราการ" => "สมุทรปราการ",
              "สมุทรสงคราม" => "สมุทรสงคราม",
              "สมุทรสาคร" => "สมุทรสาคร",
              "สระบุรี" => "สระบุรี",
              "สระแก้ว" => "สระแก้ว",
              "สิงห์บุรี" => "สิงห์บุรี",
              "สุพรรณบุรี" => "สุพรรณบุรี",
              "สุราษฎร์ธานี" => "สุราษฎร์ธานี",
              "สุรินทร์" => "สุรินทร์",
              "สุโขทัย" => "สุโขทัย",
              "หนองคาย" => "หนองคาย",
              "หนองบัวลำภู" => "หนองบัวลำภู",
              "อำนาจเจริญ" => "อำนาจเจริญ",
              "อุดรธานี" => "อุดรธานี",
              "อุตรดิตถ์" => "อุตรดิตถ์",
              "อุทัยธานี" => "อุทัยธานี",
              "อุบลราชธานี" => "อุบลราชธานี",
              "อ่างทอง" => "อ่างทอง",
              "เชียงราย" => "เชียงราย",
              "เชียงใหม่" => "เชียงใหม่",
              "เพชรบุรี" => "เพชรบุรี",
              "เพชรบูรณ์" => "เพชรบูรณ์",
              "เลย" => "เลย",
              "แพร่" => "แพร่",
              "แม่ฮ่องสอน" => "แม่ฮ่องสอน",
    ], null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
</div>



<div class="row">
 <!-- Fax Field -->
<div class="form-group col">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div> 
</div>



<div class="row">
  <!-- Website Field -->
<div class="form-group col">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Fullname Contact Field -->
<div class="form-group col">
    {!! Form::label('fullname_contact', 'Fullname Contact:') !!}
    {!! Form::text('fullname_contact', null, ['class' => 'form-control']) !!}
</div>
</div>



<div class="row">
  <!-- Position Context Field -->
  <div class="form-group col">
      {!! Form::label('position_contact', 'Position Contact:') !!}
      {!! Form::text('position_contact', null, ['class' => 'form-control']) !!}
  </div>

  <!-- Submit Field -->
  <div class="form-group col" style="margin-top: 30px;">
      {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
      <a href="{!! route('companies.index') !!}" class="btn btn-default">Cancel</a>
  </div>

</div>

