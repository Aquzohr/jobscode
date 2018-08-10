<div class="row">
    
    <!-- Job Field -->
    <div class="form-group col-sm">
        {!! Form::label('interested_job', 'Job:') !!}
        {!! Form::select('interested_job', [
          'การตลาด/การขาย' => 'การตลาด/การขาย',
          'บริการลูกค้า/ประชาสัมพันธ์' => 'บริการลูกค้า/ประชาสัมพันธ์',
          'เลขานุการ/ธุรการ/ประสานงาน' => 'เลขานุการ/ธุรการ/ประสานงาน',
          'คอมพิวเตอร์' => 'คอมพิวเตอร์',
          'บุคคล/ฝึกอบรม/จป.วิชาชีพ' => 'บุคคล/ฝึกอบรม/จป.วิชาชีพ',
          'นำเข้า-ส่งออก' => 'นำเข้า-ส่งออก',
          'จัดซื้อ/คลังสินค้า/logistic' => 'จัดซื้อ/คลังสินค้า/logistic',
          'บัญชี/การเงิน' => 'บัญชี/การเงิน',
          'ผลิต/ควบคุมคุณภาพ/โรงงาน' => 'ผลิต/ควบคุมคุณภาพ/โรงงาน',
          'สุขภาพ/ความงาม/ฟิตเนส/สปา' => 'สุขภาพ/ความงาม/ฟิตเนส/สปา',
          'อาหาร-เครื่องดื่ม/กุ๊ก' => 'อาหาร-เครื่องดื่ม/กุ๊ก',
          'โยธา/สถาปัตย์/ตกแต่งภายใน' => 'โยธา/สถาปัตย์/ตกแต่งภายใน',
          'เขียนแบบ/ออกแบบผลิตภัณฑ์' => 'เขียนแบบ/ออกแบบผลิตภัณฑ์',
          'งานช่าง' => 'งานช่าง',
          'ส่งเอกสาร/ขับรถ/ส่งของ' => 'ส่งเอกสาร/ขับรถ/ส่งของ',
          'รปภ./แม่บ้าน/จัดสวน' => 'รปภ./แม่บ้าน/จัดสวน',
          'มัคคุเทศก์/ล่าม/จองห้องพัก/ตั๋ว' => 'มัคคุเทศก์/ล่าม/จองห้องพัก/ตั๋ว',
          'เสื้อผ้า/สิ่งทอ/designer' => 'เสื้อผ้า/สิ่งทอ/designer',
          'จิวเวลลี่/เครื่องประดับ' => 'จิวเวลลี่/เครื่องประดับ',
          'กฎหมาย' => 'กฎหมาย',
          'เกษตร' => 'เกษตร',
          'งานบันเทิง/นักร้อง/นักแสดง/พริตตี้' => 'งานบันเทิง/นักร้อง/นักแสดง/พริตตี้',
          'แพทย์/เภสัชกร' => 'แพทย์/เภสัชกร',
          'พัฒนาธุรกิจ/พัฒนาองค์กร/ISO' => 'พัฒนาธุรกิจ/พัฒนาองค์กร/ISO',
          'ผู้จัดการ/ผู้อำนวยการ/ที่ปรึกษา' => 'ผู้จัดการ/ผู้อำนวยการ/ที่ปรึกษา',
          'วิจัย/วิเคราะห์' => 'วิจัย/วิเคราะห์',
          'เศรษฐศาสตร์/หุ้น/ธนาคาร' => 'เศรษฐศาสตร์/หุ้น/ธนาคาร',
          'งานเขียน/บรรณาธิการ/แปลภาษา' => 'งานเขียน/บรรณาธิการ/แปลภาษา',	
          'ช่างภาพ/โฆษณา/creative' => 'ช่างภาพ/โฆษณา/creative',
          'สื่อสารมวลชน/ทีวี/วิทยุ/น.ส.พ.' => 'สื่อสารมวลชน/ทีวี/วิทยุ/น.ส.พ.',
          'อาจารย์/ครู/งานวิชาการ' => 'อาจารย์/ครู/งานวิชาการ',
          'งาน part time/ฝึกงาน' => 'งาน part time/ฝึกงาน',									
          'อื่นๆ' => 'อื่นๆ',
          ], null, ['class' => 'form-control']) !!}
    </div>
  
    <!-- Certificate Field -->
    <div class="form-group col-sm">
        {!! Form::label('certificate', 'Certificate:') !!}
        {!! Form::select('certificate', [
            "ไม่ระบุ" => "ไม่ระบุ",
            "ปริญญาเอก" => "ปริญญาเอก",
            "ปริญญาโท" => "ปริญญาโท",
            "ปริญญาตรี" => "ปริญญาตรี",
            "ปวส." => "ปวส.",
            "ปวช./มัธยมศึกษา" => "ปวช./มัธยมศึกษา",
            "ต่ำกว่ามัธยมศึกษา" => "ต่ำกว่ามัธยมศึกษา",
        ], null, ['class' => 'form-control']) !!}
    </div>
  </div>
  
  <div class="row">
  
    <!-- Country Field -->
    <div class="form-group col-sm">
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
  
    <!-- Salary Field -->
    <div class="form-group col-sm">
        {!! Form::label('salary', 'Salary:') !!}
        {!! Form::select('salary', [
         "ไม่ระบุ" => "ไม่ระบุ",
          "น้อยกว่า 5,000" => "น้อยกว่า 5,000",
          "5,001 - 6,000" => "5,001 - 6,000",
          "6,001 - 7,000" => "6,001 - 7,000",
          "7,001 - 8,000" => "7,001 - 8,000",
          "8,001 - 9,000" => "8,001 - 9,000",
          "9,001 - 10,000" => "9,001 - 10,000",
          "10,001 - 12,000" => "10,001 - 12,000",
          "12,001 - 15,000" => "12,001 - 15,000",
          "15,001 - 20,000" => "15,001 - 20,000",
          "20,001 - 30,000" => "20,001 - 30,000",
          "มากกว่า 30,000" => "มากกว่า 30,000",
        ], null, ['class' => 'form-control']) !!}
    </div>
  
  </div>
  
  <div class="row">
      <!-- Experience Field -->
      <div class="form-group col-sm">
          {!! Form::label('experience', 'Experience:') !!}
          {!! Form::select('experience', [
              "ไม่ระบุ" => "ไม่ระบุ",
              "1 ปี" => "1 ปี",
              "2 ปี" => "2 ปี",
              "3 ปี" => "3 ปี",
              "4 ปี" => "4 ปี",
              "5 ปี" => "5 ปี",
              "6 ปี" => "6 ปี",
              "7 ปี" => "7 ปี",
              "8 ปี" => "8 ปี",
              "9 ปี" => "9 ปี",
              "10 ปี" => "10 ปี",
              "11 ปี" => "11 ปี",
              "12 ปี" => "12 ปี",
              "13 ปี" => "13 ปี",
              "14 ปี" => "14 ปี",
              "15 ปี" => "15 ปี",
          ], null, ['class' => 'form-control']) !!}
      </div>
    
      <div class="form-group col-sm">
        {!! Form::submit('Serach', array('class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 30px;')) !!}
      </div>
  </div>
  
  <script>
  
  function getParameterByName( name ){
      var regexS = "[\\?&]"+name+"=([^&#]*)", 
    regex = new RegExp( regexS ),
    results = regex.exec( window.location.search );
    if( results == null ){
      return "";
    } else{
      return decodeURIComponent(results[1].replace(/\+/g, " "));
    }
  }
  
  $("select#interested_job option[value='" + getParameterByName('interested_job') + "']").attr('selected', true);
  $("select#certificate option[value='" + getParameterByName('certificate') + "']").attr('selected', true);
  $("select#country option[value='" + getParameterByName('country') + "']").attr('selected', true);
  $("select#salary option[value='" + getParameterByName('salary') + "']").attr('selected', true);
  $("select#experience option[value='" + getParameterByName('experience') + "']").attr('selected', true);
  
  </script>
  