<?php
$status =0;
if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
{
  if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])) { 
  $id = $_POST['id'];   
  $updatestudentrollback = $userObj->updatestudentrollback($mysqli ,$id);
  ?>
  <script>location.href='<?php echo $HOSTPATH;  ?>studentrollback&msc=2';</script>
  <?php
  }else{
  ?>
  <script>location.href='<?php echo $HOSTPATH;  ?>studentrollback&msc=1';</script>
  <?php
    $addstudentrollback = $userObj->addstudentrollback($mysqli);
 }
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
if($idupd>0)
{
  $getstudentrollback = $userObj->getstudentrollback($mysqli,$idupd); 
  if (sizeof($getstudentrollback)>0){
        for($irollback=0;$irollback<sizeof($getstudentrollback);$irollback++){ 
      $id       = $getstudentrollback['studentrollbackid'];
      $standard                  = $getstudentrollback['standard'];
      $section                   = $getstudentrollback['section'];
      $status                    = $getstudentrollback['status'];
        }
      }
      $studentreferenceid=$id;
      $studentrollbackreferencedetails = $userObj->studentrollbackreferencedetails($mysqli, $studentreferenceid);
    }

$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
  $deletestudentrollback = $userObj->deletestudentrollback($mysqli,$del); 
  //die;
  ?>
  <script>location.href='<?php echo $HOSTPATH;  ?>studentrollback&msc=3';</script>
<?php 
}
?>

 <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">STUDENT ROLL BACK</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        </div>
                                    </div>
                                    
                                    <form id="studentreportform" name="studentreportform" action="" method="post">

                                    <div class="card-body">    
                                    <input type="hidden" class="form-control" value="<?php if(isset($id)) echo $id; ?>"  id="id" name="id" aria-describedby="id">
                                   
                                    <div class="row clearfix"> 
                                   
   
                                    <div class="col-sm-6">
                                        <div class="form-group mx-4">
                                        <label>Standard<span class="text-danger">*</span></label>
                                        <select tabindex="1" name="standard" id="standard"  class="form-control" >
                                                    <option value="">Select The Standard</option>
                                                    <option <?php if(isset($standard)) { if($standard == "LKG" ) echo 'selected'; }  ?> value="LKG">LKG</option>
                                                    <option <?php if(isset($standard)) { if($standard == "UKG" ) echo 'selected'; }  ?> value="UKG">UKG</option>
                                                    <option <?php if(isset($standard)) { if($standard == "I"   ) echo 'selected'; }  ?> value="I">I</option>
                                                    <option <?php if(isset($standard)) { if($standard == "II"  ) echo 'selected'; }  ?> value="II">II</option>
                                                    <option <?php if(isset($standard)) { if($standard == "III" ) echo 'selected'; }  ?> value="III">III</option>
                                                    <option <?php if(isset($standard)) { if($standard == "IV"  ) echo 'selected'; }  ?> value="IV">IV</option>
                                                    <option <?php if(isset($standard)) { if($standard == "V"   ) echo 'selected'; }  ?> value="V">V</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VI"  ) echo 'selected'; }  ?> value="VI">VI</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VII" ) echo 'selected'; }  ?> value="VI">VII</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VIII") echo 'selected'; }  ?> value="VIII">VIII</option>
                                                    <option <?php if(isset($standard)) { if($standard == "IX"  ) echo 'selected'; }  ?> value="IX">IX</option>
                                                    <option <?php if(isset($standard)) { if($standard == "X"   ) echo 'selected'; }  ?> value="X">X</option>
                                                    <option <?php if(isset($standard)) { if($standard == "XI"  ) echo 'selected'; }  ?> value="XI">XI</option>
                                                    <option <?php if(isset($standard)) { if($standard == "XII" ) echo 'selected'; }  ?> value="XII">XII</option>
                                                    <option <?php if(isset($standard)) { if($standard == "ALL" ) echo 'selected'; }  ?> value="ALL">ALL</option>
                                            </select>
                                            <label><span id="standardcheck" class="text-danger">Select The Standard</span></label> 
                                        </div>
                                    </div>
                                      <div class="col-sm-6">
                                        <div class="form-group mx-4">
                                        <label>Section<span class="text-danger">*</span></label>
                                            <select tabindex="2" name="section" id="section"  class="form-control" >
                                                    <option value="">Select The Section</option>
                                                    <option <?php if(isset($section)) { if($section == "A" ) echo 'selected'; }  ?> value="A">A</option>
                                                    <option <?php if(isset($section)) { if($section == "B" ) echo 'selected'; }  ?> value="B">B</option>
                                                    <option <?php if(isset($section)) { if($section == "C" ) echo 'selected'; }  ?> value="C">C</option>
                                                    <option <?php if(isset($section)) { if($section == "D" ) echo 'selected'; }  ?> value="D">D</option>
                                                    <option <?php if(isset($section)) { if($section == "E" ) echo 'selected'; }  ?> value="E">E</option>
                                                    <option <?php if(isset($section)) { if($section == "F" ) echo 'selected'; }  ?> value="F">F</option>
                                            </select>
                                            <label><span id="sectioncheck" class="text-danger">Select The Section</span></label>
                                        </div>
                                    </div>
                                </div>
                                <hr>

<?php
if($idupd>0)
{
  if(isset($studentrollbackreferencedetails)){
  if (sizeof($studentrollbackreferencedetails)>0){  {    
    $referenceid          = $studentrollbackreferencedetails['referenceid'];
    $studentname          = $studentrollbackreferencedetails['studentname'];
    $rollnumber           = $studentrollbackreferencedetails['rollnumber'];
    $result               = $studentrollbackreferencedetails['result'];   
    $checks               = $studentrollbackreferencedetails['checks'];
    //$status               = $studentrollbackreferencedetails['status'];
?>
<input type="hidden" class="form-control" value="<?php if(isset($referenceid)) echo $referenceid; ?>"  id="referenceid" name="referenceid" aria-describedby="referenceid">

                                      <div class="row mt-4">
                                      <div class="col-md-12">
                                      <table class="table table-bordered table-hover table-sm">
                                            <thead>
                                                <tr>                                              
                                                <th class="bg-azure text-light text-center"><label   class="  justify-content-center">Check</label></th>
                                                <th class="bg-azure text-light text-center"><label class="  justify-content-center">Roll Number</label></th>
                                                <th class="bg-azure text-light text-center"><label  class="  justify-content-center">Student Name</label></th>
                                                <th class="bg-azure text-light text-center"><label  class="  justify-content-center">Final Exam Result</label></th>  
                                                                                      
                                                </tr>
                                            </thead>

                                            <tbody class="p-0 m-0">
                                                <tr>                                              
                                                <td class="text-center "><input tabindex="49" id="checks" name="checks" type="checkbox" value="Yes" <?php if($checks==0){echo'checked';}?>></td>
                                                <td class="text-center "><input tabindex="21" type="text" name="rollnumber"  id="rollnumber" class="form-control" value="<?php if(isset($rollnumber)) echo $rollnumber; ?>" placeholder="Enter Roll Number"> </td> 
                                                <td class="text-center "><input tabindex="21" type="text" name="studentname" id="studentname" class="form-control" value="<?php if(isset($studentname)) echo $studentname; ?>" placeholder="Enter Student Name"  ></td>
                                                <td>
                                        <select  name="result" id="result"  class="form-control" >
                                         <option value="">Select The Final Result</option>
                                              <option <?php if(isset($result)) { if($result == "pass" ) echo 'selected'; }  ?> value="pass">PASS</option>
                                               <option <?php if(isset($result)) { if($result == "fail" ) echo 'selected'; }  ?> value="fail">FAIL</option>
                                                </select>
                                                </td>
                                                 </tr>
                                            </tbody>
                                            </table>
                                    <div class="form-group">
                                    <div class="kt-checkbox-inline">
                                    <label class="kt-checkbox">
                                    <input tabindex="27" id="status" name="status" type="checkbox" value="Yes" <?php  if($status==0){echo'checked';}else{echo"notchecked";}?> > Is Active?
                                    <span></span></label>
                                    </div>
                                    </div>                                     
                                      </div>
                                    
                                   
<?php }}}}else{ ?>
                                      <div class="row mt-4">
                                      <div class="col-md-12">
                                      <table class="table table-bordered table-hover table-sm">
                                            <thead>
                                                <tr>                                              
                                                <th class="bg-azure text-light text-center"><label   class="  justify-content-center">Check</label></th>
                                                <th class="bg-azure text-light text-center"><label class="  justify-content-center">Roll Number</label></th>
                                                <th class="bg-azure text-light text-center"><label  class="  justify-content-center">Student Name</label></th>
                                                <th class="bg-azure text-light text-center"><label  class="  justify-content-center">Final Exam Result</label></th>
                                              </tr>
                                            </thead>
                                            <tbody class="p-0 m-0">
                                                <tr>                                              
                                                <td class="text-center "><input tabindex="49" id="checks" name="checks" type="checkbox" value="Yes"></td>
                                                <td class="text-center "><input tabindex="21" type="text" name="rollnumber"  id="rollnumber" class="form-control" value="" placeholder="Enter Roll Number" > </td> 
                                                <td class="text-center "><input tabindex="21" type="text" name="studentname"   id="studentname" class="form-control" value="" placeholder="Enter Student Name"  ></td>
                                            <td>
                                           <select  name="result" id="result"  class="form-control" value="">
                                            <option value="">Select The Final Result</option>
                                              <option  value="pass">PASS</option>
                                               <option  value="fail">FAIL</option>
                                                </select>
                                                
                                                </td>
                                                 </tr>
                                            </tbody>
                                            </table>                                     
                                      </div>
                                    <div class="form-group">
                                    <div class="kt-checkbox-inline">
                                    <label class="kt-checkbox">
                                    <input tabindex="27" id="status" name="status" type="checkbox" value="Yes" <?php  if($status==0){echo'checked';}?> > Is Active?
                                    <span></span></label>
                                    </div>
                                    </div>
                                    </div>
                                   
                                    

<?php }?>
                                    <div class="row mt-4">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="submit" tabindex="3" id="submitbtn" name="submitbtn"   class="btn btn-primary ml-4 ">
                                    </div>
                                </div>
                              
                            </div>
                            
                            </div>
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
