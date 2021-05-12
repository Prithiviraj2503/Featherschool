<?php
  $id =0;
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {

if( $_POST['medium'] != '' && $_POST['standard'] != ''
&& $_POST['section'] != '' && $_POST['studentname'] != ''  )
{
    
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){     
        $id = $_POST['id'];    
   
    $updatependingfee = $userObj->viewfeehistory($mysqli,$id);  
    
    }
 }  
}

$del=0;
if(isset($_GET['del']))
{
$del=$_GET['del'];
}
if($del>0)
{
    $deletependingfee = $userObj->deletependingfee($mysqli,$del); 
    //die;
    ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>pendingfee&msc=3';</script>
<?php   
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
    $viewfeehistory = $userObj->viewfeehistory($mysqli,$idupd); 
    
    if (sizeof($getpendingfee)>0) {
        for($ipending=0;$ipending<sizeof($getpendingfee);$ipending++)  {   
         
            $studentname               = $getpendingfee['studentname'];
            ?>
            <select  id="slct" name="psl" class="select">
        <option value="<?php if(isset($rollnumber)) echo $rollnumber; ?>" selected><?php if(isset($rollnumber)) echo $rollnumber; ?></option>
       
       </select>

 <?php
        }
    }
}


?>

 <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                           
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Fee History</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                        </div>
                                    </div>
                                    
                                    <form id="studentreportform" name="studentreportform" action="" method="post">

                                    <div class="card-body">    
                                    <input type="hidden" class="form-control" value="<?php if(isset($id)) echo $id; ?>"  id="id" name="id" aria-describedby="id">
                                   
                                    <div class="row clearfix"> 
                                   
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Medium<span class="text-danger">*</span></label>
                                        <select tabindex="3" name="medium" id="medium"  class="form-control" tabindex="3">
                                                    <option value="">Select The Medium</option>
                                                    <option <?php if(isset($medium)) { if($medium == "Tamil" ) echo 'selected'; }  ?> value="Tamil">Tamil</option>
                                                    <option <?php if(isset($medium)) { if($medium == "English" ) echo 'selected'; }  ?> value="English">English</option>
                                         </select>
                                            <label><span id="mediumcheck" class="text-danger">Select The Medium</span></label> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Standard<span class="text-danger">*</span></label>
                                        <select tabindex="4" name="standard" id="standard"  class="form-control" >
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
                                            </select>
                                            <label><span id="standardcheck" class="text-danger">Select The Standard</span></label> 
                                        </div>
                                        
                                    </div>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Section<span class="text-danger">*</span></label>
                                            <select tabindex="5" name="section" id="section"  class="form-control" >
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
                                        <label for="" class="justify-content-center text-center align-items-center">OR</label>
                                    </div>
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Student Name<span class="text-danger">*</span></label>
                                        <input tabindex="2"  type="text" value="<?php if(isset($student)) echo $student; ?>" id="studentname" name="studentname" placeholder="Enter The student name" class="form-control">
                                            <label><span id="studentnamecheck" class="text-danger">Enter The Roll Number</span></label> 
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-sm-3">
                                        <div class="form-group">
                                          <label>Select a Student<span class="text-danger">*</span></label>
                                          <input tabindex="1"  type="text" value="<?php if(isset($selectstudent)) echo $selectstudent; ?>" id="selectstudent" name="selectstudent" placeholder="Select The Student Name" class="form-control">

                                            <label><span id="selectstudentcheck" class="text-danger">Select The Student Name</span></label> 
                                        </div>
                                    </div>
                               
                                    <div class="row clearfix my-4">
                                    <?php
                                    if(isset($_GET['upd']))
                                    {
                                    $idupd=$_GET['upd'];
                                    }
                                    $status =0;
                                    if($idupd>0)
                                    {
                                        $viewfeehistory = $userObj->viewfeehistory($mysqli,$idupd); 
                                        ?> <select  id="slct" name="psl" class="select">
                                        <?php
                                       
                                        if (sizeof($getpendingfee)>0) {
                                            for($ipending=0;$ipending<sizeof($getpendingfee);$ipending++)  {   
                                            
                                                $studentname               = $getpendingfee['studentname'];
                                                ?>
                                                
                                                     <option value="<?php if(isset($studentname)) echo $studentname; ?>" selected><?php if(isset($studentname)) echo $studentname; ?></option>
                                        
                                                

                                    <?php
                                            }
                                            ?></select>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <div class="col-md-6 text-center">
                                    <input tabindex="1"  type="hidden" value="Pay Fee" id="payfee" name="payfee" class="btn btn-primary">

                                    </div>
                                    <div class="col-md-6 text-center">
                                    <input tabindex="1"  type="hidden" value="Pay Transport Fee" id="paytransportfee" name="paytransportfee"  class="btn btn-primary">

                                    </div>
                                    </div>
                                    <div class="row clearfix"> 
                                        <div class="col-md-6">

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>                                              
                                                <th scope="col"  colspan="2" class=" text-center font-weight-bold bg-azure">Student Details</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>                                         
                                                <td><label   id="admissionnumber" name="admissionnumber"></label>admission Number</td>
                                                <td > <label value="<?php if(isset($admissionnumber)) echo $admissionnumber; ?>"   id="" name=""></label></td>
                                                </tr>
                                                <tr>                                              
                                                <td><label   id="rollnumber" name="rollnumber">Roll Number</label></td>
                                                <td> <label  value="<?php if(isset($rollnumber)) echo $rollnumber; ?>"  id="" name=""></label></td>
                                                </tr>
                                                <tr>
                                                <td><label   id="classandsection" name="classandsection">Class & Section</label></td>
                                                <td > <label value="<?php if(isset($classandsection)) echo $classandsection; ?>"  id="" name=""></label></td>
                                                </tr>
                                                <tr>
                                                <td><label   id="studentname" name="studentname">Student Name</label></td>
                                                <td > <label value="<?php if(isset($studentname)) echo $studentname; ?>"  id="" name=""></label></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">

                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>                                              
                                                <th scope="col"  colspan="2" class=" text-center font-weight-bold bg-azure">Fee Details</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>                                         
                                                <td><label   id="grosspayable" name="grosspayable">Gross Payable</td>
                                                <td > <label  value="<?php if(isset($grosspayable)) echo $grosspayable; ?>" id="" name=""></label></td>
                                                </tr>
                                                <tr>                                              
                                                <td><label  id="amountpayed" name="amountpayed">Amount Payed</label></td>
                                                <td ><label value="<?php if(isset($amountpayed)) echo $amountpayed; ?>" id="" name=""></label></td>
                                                </tr>
                                                <tr>
                                                <td><label  id="concession" name="concession">Concession</label></td>
                                                <td ><label  value="<?php if(isset($concession)) echo $concession; ?>" id="" name=""></label></td>
                                                </tr>
                                                <tr>
                                                <td><label   id="notpayable" name="notpayable">Not Payable</label></td>
                                                <td ><label value="<?php if(isset($notpayable)) echo $notpayable; ?>" id="" name=""></label></td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                    
                                    </div>


                                    <div class="row">
                                      
                                      <div class="col-md-12">
                                      <table class="table table-bordered">
                                            <thead>
                                                <tr>                                              
                                                <th scope="col"  colspan="4" class=" text-center font-weight-bold bg-azure ">Paid Details</th>
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>                                         
                                                <th class="bg-azure text-light text-center"><label id="grosspayable" name="receiptdate" class="  justify-content-center">Receipt Date</label></th>
                                                <th class="bg-azure text-light text-center"><label id="grosspayable" name="receiptnumber" class="  justify-content-center">Receipt number</label></th>
                                                <th class="bg-azure text-light text-center"><label id="grosspayable" name="totalamount" class="  justify-content-center">Total Amount</label></th>
                                                <th class="bg-azure text-light text-center"><label id="grosspayable" name="action" class="  justify-content-center">Action</label></th>
                                                
                                                
                                                
                                                </tr>
                                                <tr>                                              
                                                <td><label id="grosspayable" name=""></label></td>
                                                <td><label id="grosspayable" name=""></label></td> 
                                                <td><label id="grosspayable" name=""></label></td>
                                                <td><label id="grosspayable" name=""></label></td>
                                                </tr>
                                                <tr>
                                                <td><label id="grosspayable" name=""></label></td>
                                                <td><label id="grosspayable" name=""></label></td>
                                                <td><label id="grosspayable" name=""></label></td>
                                                <td><label id="grosspayable" name=""></label></td>
                                                </tr>
                                                <tr>
                                                <td><label id="grosspayable" name=""></label></td>
                                                <td><label id="grosspayable" name=""></label></td>
                                                <td><label id="grosspayable" name=""></label></td>
                                                <td><label id="grosspayable" name=""></label></td>
                                                </tr>
                                               
                                            </tbody>
                                            </table>
                                      
                                      </div>
                                    
                                    </div>
                              
                            </div>
                            
                            </div>
                            
                        </form>
                   
                </div>
            </div>
        </div>
    </div>
