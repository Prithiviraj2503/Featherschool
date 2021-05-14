<?php
error_reporting(0);
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["pendingfeeimport"]))
{
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"], $allowedFileType)){
        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);   
            foreach ($Reader as $Row)
            {
            if(isset($Row[0])) {
                $quer="SELECT rollnumber from student";
                $resultstu = mysqli_query($mysqli, $quer);
                while($row=mysqli_fetch_array($resultstu)){
                $rollnumberarray[]=$row["rollnumber"];
                }
                
                $rollnumber = mysqli_real_escape_string($mysqli, $Row[0]);

                if (in_array($rollnumber, $rollnumberarray)){

                if(isset($Row[0])) {
                    $rollnumber = mysqli_real_escape_string($mysqli,$Row[0]);
                }

                $studentname = "";
                if(isset($Row[1])) {
                    $studentname = mysqli_real_escape_string($mysqli,$Row[1]);
                } 
          
                $academicyear = "";
                if(isset($Row[2])) {
                    $academicyear = mysqli_real_escape_string($mysqli,$Row[2]);
                }                           
                                
                $standard = "";
                if(isset($Row[3])) {
                    $standard = mysqli_real_escape_string($mysqli,$Row[3]);
                } 

                  $section = "";
                if(isset($Row[4])) {
                    $section = mysqli_real_escape_string($mysqli,$Row[4]);
                }
                
                $totalfee = "";
                if(isset($Row[5])) {
                    $totalfee = mysqli_real_escape_string($mysqli,$Row[5]);
                }

                 $pendingfee = "";
                if(isset($Row[6])) {
                    $pendingfee = mysqli_real_escape_string($mysqli,$Row[6]);
                    
                } 
                $query = "INSERT INTO pendingfee(studentname, rollnumber, standard, section, academicyear, totalfee, pendingfee) 
                   VALUES('".$studentname."','".$rollnumber."','".$standard."','".$section."','".$academicyear."','".$totalfee."','".$pendingfee."')";

                    $result = mysqli_query($mysqli, $query);
                    if($result == TRUE){
                    $psuccessmsg="Data Updated Successfully";
                    }else{
                    $perrormsg="Error in Upload";
                }
                }else{
                $rollnumberabsent[]=$rollnumber;
                continue;
                }
            }
        }
}
}
}

if (isset($_POST["studentimport"]))
{
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

  if(in_array($_FILES["file"]["type"], $allowedFileType))
  {
        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);

        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);   
            foreach ($Reader as $Row)
            {
            if(isset($Row[15])) {
                $quer="SELECT rollnumber from student";
                $resultstu = mysqli_query($mysqli, $quer);
                while($row=mysqli_fetch_array($resultstu)){
                $rollnumberarray[]=$row["rollnumber"];
                }
                $rollnumber = mysqli_real_escape_string($mysqli, $Row[15]);

                if (!in_array($rollnumber, $rollnumberarray)){

                    $studentname = "";
                    if(isset($Row[0])){
                    $studentname = mysqli_real_escape_string($mysqli,$Row[0]);
                    }
                    $surname = "";
                    if(isset($Row[1])){
                    $surname = mysqli_real_escape_string($mysqli,$Row[1]);
                    }
                    $admissionno = "";
                    if(isset($Row[2])){
                    $admissionno = mysqli_real_escape_string($mysqli,$Row[2]);
                    }
                    $dateofbirth = "";
                    if(isset($Row[3])){
                    $dateofbirth = mysqli_real_escape_string($mysqli,$Row[3]);
                    }
                    $gender = "";
                    if(isset($Row[4])){
                    $gender = mysqli_real_escape_string($mysqli,$Row[4]);
                    }
                    $mothertongue = "";
                    if(isset($Row[5])){
                    $mothertongue = mysqli_real_escape_string($mysqli,$Row[5]);
                    }
                    $aadhaarcard = "";
                    if(isset($Row[6])){
                    $aadhaarcard = mysqli_real_escape_string($mysqli,$Row[6]);
                    }
                    $pflatnoname = "";
                    if(isset($Row[7])){
                    $pflatnoname = mysqli_real_escape_string($mysqli,$Row[7]);
                    }
                    $pstreet = "";
                    if(isset($Row[8])){
                    $pstreet = mysqli_real_escape_string($mysqli,$Row[8]);
                    }
                    $parealocality = "";
                    if(isset($Row[9])){
                    $parealocality = mysqli_real_escape_string($mysqli,$Row[9]);
                    }
                    $pdistrict = "";
                    if(isset($Row[10])){
                    $pdistrict = mysqli_real_escape_string($mysqli,$Row[10]);
                    }
                    $ppincode = "";
                    if(isset($Row[11])){
                    $ppincode = mysqli_real_escape_string($mysqli,$Row[11]);
                    }
                    $standard = "";
                    if(isset($Row[12])){
                    $standard = mysqli_real_escape_string($mysqli,$Row[12]);
                    }
                    $section = "";
                    if(isset($Row[13])){
                    $section = mysqli_real_escape_string($mysqli,$Row[13]);
                    }
                    $medium = "";
                    if(isset($Row[14])){
                    $medium = mysqli_real_escape_string($mysqli,$Row[14]);
                    }
                    $rollnumber = "";
                    if(isset($Row[15])){
                    $rollnumber = mysqli_real_escape_string($mysqli,$Row[15]);
                    }
                    $areaofstudent = "";
                    if(isset($Row[16])){
                    $areaofstudent = mysqli_real_escape_string($mysqli,$Row[16]);
                    }
                    $bloodgroup = "";
                    if(isset($Row[17])){
                    $bloodgroup = mysqli_real_escape_string($mysqli,$Row[17]);
                    }
                    $category = "";
                    if(isset($Row[18])){
                    $category = mysqli_real_escape_string($mysqli,$Row[18]);
                    }
                    $caste = "";
                    if(isset($Row[19])){
                    $caste = mysqli_real_escape_string($mysqli,$Row[19]);
                    }
                    $subcaste = "";
                    if(isset($Row[20])){
                    $subcaste = mysqli_real_escape_string($mysqli,$Row[20]);
                    }
                    $nationality = "";
                    if(isset($Row[21])){
                    $nationality = mysqli_real_escape_string($mysqli,$Row[21]);
                    }
                    $region = "";
                    if(isset($Row[22])){
                    $region = mysqli_real_escape_string($mysqli,$Row[22]);
                    }
                    $tflatnoname = "";
                    if(isset($Row[23])){
                    $tflatnoname = mysqli_real_escape_string($mysqli,$Row[23]);
                    }
                    $tstreet = "";
                    if(isset($Row[24])){
                    $tstreet = mysqli_real_escape_string($mysqli,$Row[24]);
                    }
                    $tarealocality = "";
                    if(isset($Row[25])){
                    $tarealocality = mysqli_real_escape_string($mysqli,$Row[25]);
                    }
                    $tdistrict = "";
                    if(isset($Row[26])){
                    $tdistrict = mysqli_real_escape_string($mysqli,$Row[26]);
                    }
                    $tpincode = "";
                    if(isset($Row[27])){
                    $tpincode = mysqli_real_escape_string($mysqli,$Row[27]);
                    }
                    $concessiontype = "";
                    if(isset($Row[28])){
                    $concessiontype = mysqli_real_escape_string($mysqli,$Row[28]);
                    }
                    $concessionpercentage = "";
                    if(isset($Row[29])){
                    $concessionpercentage = mysqli_real_escape_string($mysqli,$Row[29]);
                    }
                    $facility = "";
                    if(isset($Row[30])){
                    $facility = mysqli_real_escape_string($mysqli,$Row[30]);
                    }
                    $fathername = "";
                    if(isset($Row[31])){
                    $fathername = mysqli_real_escape_string($mysqli,$Row[31]);
                    }
                    $fatheraadhaarnumber = "";
                    if(isset($Row[32])){
                    $fatheraadhaarnumber = mysqli_real_escape_string($mysqli,$Row[32]);
                    }
                    $mothername = "";
                    if(isset($Row[33])){
                    $mothername = mysqli_real_escape_string($mysqli,$Row[33]);
                    }
                    $motheraadhaarnumber = "";
                    if(isset($Row[34])){
                    $motheraadhaarnumber = mysqli_real_escape_string($mysqli,$Row[34]);
                    }
                    $fatheroccupation = "";
                    if(isset($Row[35])){
                    $fatheroccupation = mysqli_real_escape_string($mysqli,$Row[35]);
                    }
                    $monthlyincome = "";
                    if(isset($Row[36])){
                    $monthlyincome = mysqli_real_escape_string($mysqli,$Row[36]);
                    }
                    $natureofjob = "";
                    if(isset($Row[37])){
                    $natureofjob = mysqli_real_escape_string($mysqli,$Row[37]);
                    }
                    $positionheld = "";
                    if(isset($Row[38])){
                    $positionheld = mysqli_real_escape_string($mysqli,$Row[38]);
                    }
                    $telephone = "";
                    if(isset($Row[39])){
                    $telephone = mysqli_real_escape_string($mysqli,$Row[39]);
                    }
                    $liveswithguardian = "";
                    if(isset($Row[40])){
                    $liveswithguardian = mysqli_real_escape_string($mysqli,$Row[40]);
                    }
                    $fathermobile = "";
                    if(isset($Row[41])){
                    $fathermobile = mysqli_real_escape_string($mysqli,$Row[41]);
                    }
                    $mothermobile = "";
                    if(isset($Row[42])){
                    $mothermobile = mysqli_real_escape_string($mysqli,$Row[42]);
                    }
                    $fatheremailid = "";
                    if(isset($Row[43])){
                    $fatheremailid = mysqli_real_escape_string($mysqli,$Row[43]);
                    }
                    $smssentno = "";
                    if(isset($Row[44])){
                    $smssentno = mysqli_real_escape_string($mysqli,$Row[44]);
                    }
                    $siblingname = "";
                    if(isset($Row[45])){
                    $siblingname = mysqli_real_escape_string($mysqli,$Row[45]);
                    }
                    $siblingschoolname = "";
                    if(isset($Row[46])){
                    $siblingschoolname = mysqli_real_escape_string($mysqli,$Row[46]);
                    }
                    $siblingstd = "";
                    if(isset($Row[47])){
                    $siblingstd = mysqli_real_escape_string($mysqli,$Row[47]);
                    }
                    $extracurricular = "";
                    if(isset($Row[48])){
                    $extracurricular = mysqli_real_escape_string($mysqli,$Row[48]);
                    }
                    // $siblingrefno = "";
                    // if(isset($Row[49])){
                    // $siblingrefno = mysqli_real_escape_string($mysqli,$Row[49]);
                    // }


                    
                    $query= "INSERT INTO student (admissionno, studentname, surname, dateofbirth, gender, mothertongue, aadhaarcard, bloodgroup, category, caste, subcaste, nationality, region, pflatnoname, pstreet, parealocality, pdistrict, ppincode, tflatnoname, tstreet, tarealocality, tdistrict, tpincode, standard, medium, section, rollnumber, concessiontype, concessionpercentage, facility, areaofstudent, fathername, fatheraadhaarnumber, fatheroccupation, natureofjob, telephone, fathermobile, fatheremailid, mothername, motheraadhaarnumber, monthlyincome, positionheld, liveswithguardian, mothermobile, smssentno, siblingname, siblingrefno, siblingschoolname, siblingstd, extracurricular)

                     VALUES ('".strip_tags($admissionno)."','".strip_tags($studentname)."','".strip_tags($surname)."','".strip_tags($dateofbirth)."','".strip_tags($gender)."','".strip_tags($mothertongue)."','".strip_tags($aadhaarcard)."','".strip_tags($bloodgroup)."','".strip_tags($category)."','".strip_tags($caste)."','".strip_tags($subcaste)."','".strip_tags($nationality)."','".strip_tags($region)."','".strip_tags($pflatnoname)."','".strip_tags($pstreet)."','".strip_tags($parealocality)."','".strip_tags($pdistrict)."','".strip_tags($ppincode)."', '".strip_tags($tflatnoname)."','".strip_tags($tstreet)."','".strip_tags($tarealocality)."','".strip_tags($tdistrict)."','".strip_tags($tpincode)."', '".strip_tags($standard)."','".strip_tags($medium)."','".strip_tags($section)."','".strip_tags($rollnumber)."','".strip_tags($concessiontype)."','".strip_tags($concessionpercentage)."','".strip_tags($facility)."','".strip_tags($areaofstudent)."', '".strip_tags($fathername)."','".strip_tags($fatheraadhaarnumber)."','".strip_tags($fatheroccupation)."','".strip_tags($natureofjob)."','".strip_tags($telephone)."','".strip_tags($fathermobile)."','".strip_tags($fatheremailid)."','".strip_tags($mothername)."','".strip_tags($motheraadhaarnumber)."','".strip_tags($monthlyincome)."','".strip_tags($positionheld)."','".strip_tags($liveswithguardian)."','".strip_tags($mothermobile)."','".strip_tags($smssentno)."','".strip_tags($siblingname)."','".strip_tags($siblingrefno)."','".strip_tags($siblingschoolname)."','".strip_tags($siblingstd)."','".strip_tags($extracurricular)."') ";

                    $result = mysqli_query($mysqli, $query);
                    if($result==TRUE){
                    $ssuccessmsg="Successfully Updated";
                    }else{
                    $serrormsg="Error in Upload".$mysqli->error;
                    }
                    } else {
                    $rollnumberpresent[]=$rollnumber;
                    continue;
                    }
}
}
}
}
}

if(isset($_POST["feemasterimport"]))
{
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];

  if(in_array($_FILES["file"]["type"], $allowedFileType))
  {
        $targetPath = 'uploads/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);

        $sheetCount = count($Reader->sheets());
            

        for($i=0;$i<$sheetCount;$i++)
        {
            $Reader->ChangeSheet($i);   
            foreach ($Reader as $Row)
            {
                $standardlist = "";
                if(isset($Row[0])){
                $standardlist = mysqli_real_escape_string($mysqli,$Row[0]);
                }
                $medium = "";
                if(isset($Row[1])){
                $medium = mysqli_real_escape_string($mysqli,$Row[1]);
                }
                $academicyear = "";
                if(isset($Row[2])){
                $academicyear = mysqli_real_escape_string($mysqli,$Row[2]);
                }
                $coursefees = "";
                if(isset($Row[3])){
                $coursefees = mysqli_real_escape_string($mysqli,$Row[3]);
                $coursefees=strtolower(preg_replace('/\\s/','',$coursefees));
                }
                $courseamount = "";
                if(isset($Row[4])){
                $courseamount = mysqli_real_escape_string($mysqli,$Row[4]);
                }
                $extrafees = "";
                if(isset($Row[5])){
                $extrafees = mysqli_real_escape_string($mysqli,$Row[5]);
                }
                $extraamount = "";
                if(isset($Row[6])){
                $extraamount = mysqli_real_escape_string($mysqli,$Row[6]);
                }
                $amenityfees = "";
                if(isset($Row[7])){
                $amenityfees = mysqli_real_escape_string($mysqli,$Row[7]);
                }
                $amenityamount = "";
                if(isset($Row[8])){
                $amenityamount = mysqli_real_escape_string($mysqli,$Row[8]);
                }
                
                $query1="INSERT INTO feesmaster(standardlist, medium, academicyear) VALUES('".strip_tags($standardlist)."','".strip_tags($medium)."','".strip_tags($academicyear)."')";
                $result1=mysqli_query($mysqli, $query1);
                if($result1!=TRUE){
                   $ferrormsg="Error in uploading feemaster".$mysqli->error;
                } 

                $feesidquery="SELECT feesid FROM feesmaster ORDER BY feesid DESC LIMIT 1";
                $feesidresult=$mysqli->query($feesidquery);
                if ($feesidresult->num_rows > 0) {
                while($row = $feesidresult->fetch_assoc()){
                $feesid=$row["feesid"];
                $feesid=$feesid;
                }
                }
                    
                $query2="INSERT INTO coursefee(coursefees, courseamount, feesid) VALUES('".strip_tags($coursefees)."','".strip_tags($courseamount)."','".strip_tags($feesid)."')";
                $result2=mysqli_query($mysqli, $query2);
                if($result2!=TRUE){
                    $ferrormsg="Error in uploading course fee".$mysqli->error;
                }

                $query3="INSERT INTO extrafee(extrafees, extraamount, feesid) VALUES('".strip_tags($extrafees)."','".strip_tags($extraamount)."','".strip_tags($feesid)."')";
                $result3=mysqli_query($mysqli, $query3);
                if($result3!=TRUE){
                    $ferrormsg="Error in uploading extra curricular fee".$mysqli->error;
                }

                $query4="INSERT INTO amenityfee(amenityfees, amenityamount, feesid) VALUES('".strip_tags($amenityfees)."','".strip_tags($amenityamount)."','".strip_tags($feesid)."')";
                $result4=mysqli_query($mysqli, $query4);
                if($result4!=TRUE){
                    $ferrormsg="Error in uploading amenity fee".$mysqli->error;
}
}
}
if($result1=$result2=$result3=$result4==TRUE){
    $fsuccessmsg="Data Successfully Updated";
}
}
}
?>
<head>
    <style>
    .success{
    color:green;
    font-weight: bold;
    }
    .error{
    color:red;
    }
    </style>

</head>
<div class="card">
<form id="bulkimport" name="bulkimport" action="" method="post" enctype="multipart/form-data">
<div class="card-header">
<h3 class="row card-title  clearfix"><div class="text-light bg-azure" data-class="bg-warning">IMPORT PENDING FEES</div>
</h3>
</div> 
<div class="card-body row clearfix">
<div class="col-sm-3">
<div class="form-group">
<label>Choose Pending Fee Excel File</label>
<input type="file" name="file" id="file" accept=".xls,.xlsx" class="form-control">
<span class="success"><?php if(isset($psuccessmsg)){ echo $psuccessmsg;} ?></span>
<span class="error"><?php if(isset($perrormsg)){ echo $perrormsg;} ?></span>
<span class="error">
<?php 
if(isset($rollnumberabsent)){
echo "Roll number<br>";
    foreach ($rollnumberabsent as $rollnum)
    {
    echo $rollnum.","."&nbsp";
    }
echo "<br>Not Available";
}?> 
</span>
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<br>
<button type="submit" id="pendingfeeimport" name="pendingfeeimport" class="btn btn-primary">Import</button>
</div>
</div>
</div>
</form>
</div>

<div class="card">
<form id="bulkimport" name="bulkimport" action="" method="post" enctype="multipart/form-data">
<div class="card-header">
<h3 class="row card-title  clearfix"><div class="text-light bg-azure" data-class="bg-warning">IMPORT STUDENT DETAILS</div>
</h3>
</div> 
<div class="card-body row clearfix">
<div class="col-sm-3">
<div class="form-group">
<label>Choose Student Details Excel</label>
<input type="file" name="file" id="file" accept=".xls,.xlsx" class="form-control">
<span class="success"><?php if(isset($ssuccessmsg)){ echo $ssuccessmsg;} ?></span>
<span class="error"><?php if(isset($serrormsg)){ echo $serrormsg;} ?></span>

<span class="error">
<?php 
if(isset($rollnumberpresent)){
echo"Roll number<br>";
    foreach ($rollnumberpresent as $rollnum){
    echo $rollnum.","."&nbsp";
}
echo"<br>Already present";
}?> </span>
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<br>
<button type="submit" id="studentimport" name="studentimport" class="btn btn-primary">Import</button>
</div>
</div>
</div>
</form>
</div>

<div class="card">
<form id="bulkimport" name="bulkimport" action="" method="post" enctype="multipart/form-data">
<div class="card-header">
<h3 class="row card-title  clearfix"><div class="text-light bg-azure" data-class="bg-warning">IMPORT FEE MASTER</div>
</h3>
</div> 
<div class="card-body row clearfix">
<div class="col-sm-3">
<div class="form-group">
<label>Choose Fee Master Excel</label>
<input type="file" name="file" id="file" accept=".xls,.xlsx" class="form-control">
<span class="success"><?php if(isset($fsuccessmsg)){ echo $fsuccessmsg;} ?></span>
<span class="error"><?php if(isset($ferrormsg)){ echo $ferrormsg;} ?></span>
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
<br>
<button type="submit" id="feemasterimport" name="feemasterimport" class="btn btn-primary">Import</button>
</div>
</div>
</div>
</form>
</div>
