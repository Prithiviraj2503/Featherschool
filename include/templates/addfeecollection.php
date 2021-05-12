<?php 
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {
     if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){    
     $id = $_POST['id'];  
     $updatefeecollection = $userObj->updatefeecollection($mysqli,$id);
     ?>
  <script>location.href='<?php echo $HOSTPATH;  ?>feecollection&msc=2';</script>
    <?php }
     else{
    $addfeecollection = $userObj->addfeecollection($mysqli);   
        ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>feecollection&msc=1';</script>
        <?php
 }  
}

if(isset($_GET['upd']))
 {
 $idupd=$_GET['upd'];
 }
 $status =0;
 if($idupd>0)
 {
  $feecollectiondetails = $userObj->getfeecollectiondetails($mysqli,$idupd); 
  if (sizeof($feecollectiondetails)>0) {
         for($ifeecollect=0;$ifeecollect<sizeof($feecollectiondetails);$ifeecollect++)  {      
      $id                        = $feecollectiondetails['feecollectid'];
      $receiptnumber             = $feecollectiondetails['receiptnumber'];
      $registernumber            = $feecollectiondetails['registernumber'];
      $studentid                 = $feecollectiondetails['studentid'];   
      $receiptdate               = $feecollectiondetails['receiptdate'];
      $academicyear              = $feecollectiondetails['academicyear'];
      $standard                  = $feecollectiondetails['standard'];
      $otherchanges              = $feecollectiondetails['otherchanges'];   
      $otherfeesrecieved         = $feecollectiondetails['otherfeesrecieved'];
      $totalfeecollected         = $feecollectiondetails['totalfeecollected'];
      $finalfeecollected         = $feecollectiondetails['finalfeecollected'];
      $feecollected              = $feecollectiondetails['feecollected'];
      $balancefeecollect         = $feecollectiondetails['balancefeecollect'];   
      $status                    = $feecollectiondetails['status'];       
    }
  }
   $idfeescol=$id;
   $groupfeedetails = $userObj->getgroupfeedetails($mysqli,$idfeescol); 
   $payfeedetails   = $userObj->getpayfeedetails($mysqli,$idfeescol); 
}


$del=0;
 if(isset($_GET['del']))
 {
 $del=$_GET['del'];  
 }
 if($del>0)
 { 
  $deletefeecollection = $userObj->deletefeecollection($mysqli,$del); 
  ?>
  <script>location.href='<?php echo $HOSTPATH; ?>feecollection&msc=3';</script>
<?php 
}
?>

 <style>
    .roundbtn{
        border-radius: 50%;
        color: white;
        font-weight: bold;
        background-color: #17468f;
        outline: none;
        border: none;
        border-style: none;
        width:30px;
        height:30px;
    }
</style>
<div class="namecontent"></div>
 <div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                          
<form id="feecollectionform" name="feecollectionform" action="" method="post"> 
<div class="card">

                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">School Fees Collection</div></h3>
                                    </div>

                                        <input type="hidden" class="form-control" value="<?php if(isset($id)) echo $id; ?>"  id="id" name="id" aria-describedby="feecollectid" placeholder="Enter The id">

                                        <div class="card-body row clearfix">
                                        <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Receipt Number<span class="text-danger">*</span></label>
                                            <input type="text" tabindex="1" type="text" value="<?php if(isset($receiptnumber)) echo $receiptnumber; ?>" id="receiptnumber"  name="receiptnumber" placeholder="Enter The Receipt Number" class="form-control" >
                                            <label><span id="receiptnumbercheck" class="text-danger">Enter The Receipt Number</span></label>
                                          </div>
                                          </div>


                                        <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Register Number<span class="text-danger">*</span></label>
                                            <input type="text" tabindex="1" type="text" value="<?php if(isset($registernumber)) echo $registernumber; ?>" id="registernumber"  name="registernumber" placeholder="Enter The Register Number" 
                                            class="form-control" onkeyup="getname()">
                                            <label><span id="registernumbercheck" class="text-danger">Enter The Register Number</span></label>
                                          </div>
                                          </div>

                     
                                       <div class="col-sm-4">
                                        <div class="form-group">
                                          <?php
                                           if(isset($studentid)){
                                             $qry = "SELECT studentid, studentname FROM student WHERE studentid='".$studentid."' ";
                                             $res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);
                                            $row = mysqli_fetch_array($res);
                                             $studentid = $row["studentid"];
                                             $studentname = $row["studentname"];
                                           }
                                          ?>
                                              <label>Student Name<span class="text-danger">*</span></label>
                                              <input readonly type="text" id="studentname" tabindex="2" name="studentname" class="form-control" value="<?php if (isset($studentname)){echo $studentname; }?>">
                                              <input type="hidden" id="studentid" name="studentid" value="<?php if (isset($studentid)){echo $studentid; }?>">  
                                              <label><span id="studentidcheck" class="text-danger">No Student Available</span></label>            
                                          </div>
                                          </div>


                                        <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Receipt Date<span class="text-danger">*</span></label>
                                            <input type="date"  tabindex="4" type="text" value="<?php if(isset($receiptdate)) echo $receiptdate; ?>" id="receiptdate"  name="receiptdate" placeholder="Enter The Receipt Date" class="form-control" >
                                            <label><span id="receiptdatecheck" class="text-danger">Enter The Receipt Date</span></label>
                                          </div>
                                          </div>

                                        <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Academic Year<span class="text-danger">*</span></label>
                                        <select tabindex="5" type="text"  id="academicyear"  name="academicyear"  class="form-control">
                                               <option value="">--Select Year--</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2001-2002" ) echo 'selected'; }  ?> value="2001-2002">2001-2002</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2002-2003" ) echo 'selected'; }  ?> value="2002-2003">2002-2003</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2003-2004" ) echo 'selected'; }  ?> value="2003-2004">2003-2004</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2004-2005" ) echo 'selected'; }  ?> value="2004-2005">2004-2005</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2005-2006" ) echo 'selected'; }  ?> value="2005-2006">2005-2006</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2006-2007" ) echo 'selected'; }  ?> value="2006-2007">2006-2007</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2007-2008" ) echo 'selected'; }  ?> value="2007-2008">2007-2008</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2008-2009" ) echo 'selected'; }  ?> value="2008-2009">2008-2009</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2009-2010" ) echo 'selected'; }  ?> value="2009-2010">2009-2010</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2010-2011" ) echo 'selected'; }  ?> value="2010-2011">2010-2011</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2011-2012" ) echo 'selected'; }  ?> value="2011-2012">2011-2012</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2012-2013" ) echo 'selected'; }  ?> value="2012-2013">2012-2013</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2013-2014" ) echo 'selected'; }  ?> value="2013-2014">2013-2014</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2014-2015" ) echo 'selected'; }  ?> value="2014-2015">2014-2015</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2015-2016" ) echo 'selected'; }  ?> value="2015-2016">2015-2016</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2016-2017" ) echo 'selected'; }  ?> value="2016-2017">2016-2017</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2017-2018" ) echo 'selected'; }  ?> value="2017-2018">2017-2018</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2018-2019" ) echo 'selected'; }  ?> value="2018-2019">2018-2019</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2019-2020" ) echo 'selected'; }  ?>  value="2019-2020">2019-2020</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2020-2021" ) echo 'selected'; }  ?> value="2020-2021">2020-2021</option>
                                               <option <?php if(isset($academicyear)) { if($academicyear == "2021-2022" ) echo 'selected'; }  ?> value="2021-2022">2021-2022</option>

                                            </select> 
                                            <label><span id="academicyearcheck" class="text-danger">Select The Academic Year</span></label>
                                          </div>
                                          </div>

                                        <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Standard<span class="text-danger">*</span></label>
                                            <select tabindex="6"   id="standard"  name="standard" class="form-control" >
                                                    <option value="">Select Standard</option>
                                                    <option <?php if(isset($standard)) { if($standard == "LKG" ) echo 'selected'; }  ?> value="LKG">LKG</option>
                                                    <option <?php if(isset($standard)) { if($standard == "UKG" ) echo 'selected'; }  ?> value="UKG">UKG</option>
                                                    <option <?php if(isset($standard)) { if($standard == "I" ) echo 'selected'; }  ?> value="I">I</option>
                                                    <option <?php if(isset($standard)) { if($standard == "II" ) echo 'selected'; }  ?> value="II">II</option>
                                                    <option <?php if(isset($standard)) { if($standard == "III" ) echo 'selected'; }  ?> value="III">III</option>
                                                    <option <?php if(isset($standard)) { if($standard == "IV" ) echo 'selected'; }  ?> value="IV">IV</option>
                                                    <option <?php if(isset($standard)) { if($standard == "V" ) echo 'selected'; }  ?> value="V">V</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VI" ) echo 'selected'; }  ?> value="VI">VI</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VII" ) echo 'selected'; }  ?> value="VI">VII</option>
                                                    <option <?php if(isset($standard)) { if($standard == "VIII" ) echo 'selected'; }  ?> value="VIII">VIII</option>
                                                    <option <?php if(isset($standard)) { if($standard == "IX" ) echo 'selected'; }  ?> value="IX">IX</option>
                                                    <option <?php if(isset($standard)) { if($standard == "X" ) echo 'selected'; }  ?> value="X">X</option>
                                                    <option <?php if(isset($standard)) { if($standard == "XI" ) echo 'selected'; }  ?> value="XI">XI</option>
                                                    <option <?php if(isset($standard)) { if($standard == "XII" ) echo 'selected'; }  ?> value="XII">XII</option>
                                            </select>
                                            
                                            <label><span id="standardcheck" class="text-danger">Select The Standard</span></label>
                                          </div>
                                          </div> 
                                        </div>
             
<div class="card-header">
<h3 class="row card-title  clearfix"><div class="text-light bg-azure" data-class="bg-warning">GROUP FEES COLLECTION</div></h3>
</div>                                 
<!-- //Working here -->
<div id="groupfeescollection">
<div class="card-body row clearfix">

<?php
 if($idupd>0)
 {
if (sizeof($groupfeedetails)>0) {  
       for($igroupfee=0;$igroupfee<sizeof($groupfeedetails);$igroupfee++)  {    
      $groupfeeid                = $groupfeedetails[$igroupfee]['groupfeeid'];
      $groupfees                 = $groupfeedetails[$igroupfee]['groupfees'];
      $groupfeesamount           = $groupfeedetails[$igroupfee]['groupfeesamount'];
      $feesrecieved              = $groupfeedetails[$igroupfee]['feesrecieved'];   
      $scholarship               = $groupfeedetails[$igroupfee]['scholarship'];
      $balance                   = $groupfeedetails[$igroupfee]['balance'];
    ?>
    <input type="hidden" class="form-control" value="<?php if(isset($groupfeeid)) echo $groupfeeid; ?>"  id="groupfeeid" name="groupfeeid[]" aria-describedby="groupfeeid" placeholder="Enter groupfeeid">
                                    <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Group Fees</label>
                                        <input type="text" tabindex="7" class="form-control"  name="groupfees[]" id="groupfees" placeholder="Group" value="<?php if(isset($groupfees)) echo $groupfees; ?>">
                                       </div>
                                    </div>

                                      <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input  type="number" tabindex="8" name="groupfeesamount[]" id="groupfeesamount" class="form-control" value="<?php if(isset($groupfeesamount)) echo $groupfeesamount; ?>"placeholder="Amount">
                                       </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Fees Recieved</label>
                                        <input  type="number" tabindex="9" name="feesrecieved[]" id="feesrecieved" class="form-control" value="<?php if(isset($feesrecieved)) echo $feesrecieved; ?>"placeholder="Fees Recieved">
                                       </div>
                                    </div>

                                      <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Scholarship</label>
                                        <input  type="text" tabindex="10" name="scholarship[]" id="scholarship" class="form-control" value="<?php if(isset($scholarship)) echo $scholarship; ?>"placeholder="Scholarship">
                                       </div>
                                    </div>

                                     <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Balance To Pay</label>
                                        <input  type="number" tabindex="11" name="balance[]" id="balance" class="form-control" value="<?php if(isset($balance)) echo $balance; ?>"placeholder="Balance">
                                       </div>
                                    </div>
                                  </div>
      <?php }
      }
    }
       else
       {
         
         ?>


                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Group Fees</label>
                                        <input type="text" tabindex="7" class="form-control"  name="groupfees[]" id="groupfees" placeholder="Group" value="<?php if(isset($groupfees)) echo $groupfees; ?>">
                                       </div>
                                    </div>

                                      <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input  type="number" tabindex="8" name="groupfeesamount[]"  class="form-control" value="<?php if(isset($groupfeesamount)) echo $groupfeesamount; ?>"placeholder="Amount">
                                       </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Fees Received</label>
                                        <input  type="number" tabindex="9" name="feesrecieved[]" id="feesrecieved" class="form-control" value="<?php if(isset($feesrecieved)) echo $feesrecieved; ?>"placeholder="Fees Recieved">
                                       </div>
                                    </div>

                                      <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Scholarship</label>
                                        <input  type="text" tabindex="10" name="scholarship[]" id="scholarship" class="form-control" value="<?php if(isset($scholarship)) echo $scholarship; ?>"placeholder="Scholarship">
                                       </div>
                                    </div>

                                     <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Balance To Pay</label>
                                        <input  type="number" tabindex="11" name="balance[]" id="balance" class="form-control" value="<?php if(isset($balance)) echo $balance; ?>"placeholder="Balance">
                                       </div>
                                    </div>

                                      <div class="col-sm-2">
                                        <div class="form-group">
                                            <label></label><br>
                                            <button type="button" tabindex="12" class="roundbtn"  id="addfeescollection">+</button>
                                            <button type="button"  tabindex="13" class="roundbtn"  id="removefeescollection">-</button>
                                        </div>
                                    </div>
                                   </div>
                                 <?php }?>
                                  </div>
                                  <div id="feescollectionfield"></div>


                                      <div class="card-body row clearfix">
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Other Changes</label>
                                        <input  type="text" tabindex="14" name="otherchanges" id="otherchanges" class="form-control" value="<?php if(isset($otherchanges)) echo $otherchanges; ?>"placeholder="Enter the Other Changes">
                                       </div>
                                    </div>
                                 

                                       <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Fees Received</label>
                                        <input  type="number" tabindex="15" name="otherfeesrecieved" id="otherfeesrecieved" class="form-control" value="<?php if(isset($otherfeesrecieved)) echo $otherfeesrecieved; ?>"placeholder="Enter the Fees Received">
                                       </div>
                                    </div>
                                     </div>
<div class="card-header">
<h3 class="row card-title  clearfix"><div class="text-light bg-azure" data-class="bg-warning">SUMMARY DETAILS</div></h3>
</div>

                                     <div class="card-body row clearfix">

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Total Fees To Be Collected</label>
                                        <input tabindex="16" type="number" name="totalfeecollected" id="totalfeecollected" class="form-control" value="<?php if(isset($totalfeecollected)) echo $totalfeecollected; ?>"placeholder="Total Fees To Be Collected">
                                         <label><span id="totalfeecollectedcheck" class="text-danger">Enter The Total Fees </span></label>
                                       </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Final Amount To Be Collected</label>
                                        <input tabindex="17" type="number" name="finalfeecollected" id="finalfeecollected" class="form-control" value="<?php if(isset($finalfeecollected)) echo $finalfeecollected; ?>"placeholder="Final Amount To Be Collected">
                                         <label><span id="finalfeecollectedcheck" class="text-danger">Enter The Final Amount </span></label>
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Fees Collected</label>
                                        <input tabindex="18" type="text" name="feecollected" id="feecollected" class="form-control" value="<?php if(isset($feecollected)) echo $feecollected; ?>"placeholder="Fees Collected">
                                         <label><span id="feecollectedcheck" class="text-danger">Enter The Fees Collected</span></label>
                                       </div>
                                    </div>

                                     <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Balance To Be Paid</label>
                                        <input tabindex="19" type="number" name="balancefeecollect" id="balancefeecollect" class="form-control" value="<?php if(isset($balancefeecollect)) echo $balancefeecollect; ?>"placeholder="Balance To Be Paid">
                                         <label><span id="balancefeecollectcheck" class="text-danger">Enter The Balance</span></label>
                                       </div>
                                    </div>
                                     </div>
<div class="card-header">
<h3 class="row card-title clearfix"><div class="text-light bg-azure" data-class="bg-warning">PAYMENT DENOMINATION</div></h3>
</div>


<div id="payamountcollection">
<div class="card-body row clearfix">
  <?php
 if($idupd>0)
 {
if (sizeof($payfeedetails)>0) {  
       for($ipayfee=0;$ipayfee<sizeof($payfeedetails);$ipayfee++)  {    
      $payfeeid           = $payfeedetails[$ipayfee]['payfeeid'];
      $payrupees          = $payfeedetails[$ipayfee]['payrupees'];
      $paynumberofrupees  = $payfeedetails[$ipayfee]['paynumberofrupees'];
      $payamount          = $payfeedetails[$ipayfee]['payamount'];
    ?>
<input type="hidden" class="form-control" value="<?php if(isset($payfeeid)) echo $payfeeid; ?>"  id="payfeeid" name="payfeeid[]" aria-describedby="payfeeid" placeholder="Enter payfeeid">

                             
                                   <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Rupees</label>
                                        <input tabindex="20" type="number" name="payrupees[]"  class="form-control"  value="<?php if(isset($payrupees)) echo $payrupees; ?>" placeholder="Rupees" onkeyup="calculate();" >
                                       </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Number Of Rupees</label>
                                        <input tabindex="21" type="number" name="paynumberofrupees[]"  id="paynumberofrupees" class="form-control" value="<?php if(isset($paynumberofrupees)) echo $paynumberofrupees; ?>" placeholder="Number Of Rupees"  onkeyup="calculate();"> 
                                       </div>
                                    </div>

                                      <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input tabindex="22" type="number"  name="payamount[]" id="payamount" class="form-control" value="<?php if(isset($payamount)) echo $payamount; ?>"placeholder="Amount">
                                       </div>
                                    </div>


 <?php }
      }
    }
       else
       {
         ?>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Rupees</label>
                                        <input tabindex="20" type="number" name="payrupees[]"  id="payrupees" class="form-control"  value="<?php if(isset($payrupees)) echo $payrupees; ?>" placeholder="Rupees" onkeyup="calculate()">
                                       </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Number Of Rupees</label>
                                        <input tabindex="21" type="number" name="paynumberofrupees[]"  id="paynumberofrupees" class="form-control" value="<?php if(isset($paynumberofrupees)) echo $paynumberofrupees; ?>" placeholder="Number Of Rupees"  onkeyup="calculate()"> 
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input tabindex="22" type="number"  name="payamount[]" id="payamount" class="form-control" value="<?php if(isset($payamount)) echo $payamount; ?>"placeholder="Amount">
                                       </div>
                                    </div>

                                     <div class="col-sm-3">
                                        <div class="form-group">
                                            <label></label><br>
                                            <button tabindex="23" type="button" class="roundbtn"  id="addpayamount">+</button>
                                            <button  tabindex="24" type="button" class="roundbtn"  id="removepayamount">-</button>
                                        </div>
                                    </div>

                                   </div>

                                 <?php }?>

                                  </div>

                                  <div id="payamountfield"></div>

 <script>
    function calculate(){
    var rupees=document.getElementById("payrupees").value;
    var numrps =document.getElementById("paynumberofrupees").value;
    var amount=parseInt(rupees)*parseInt(numrps);
    document.getElementById("payamount").value = amount;
}
 </script>

                                              <div class="card-body row col-sm-4">
                                                 <div class="form-group">
                                                 <div class="kt-checkbox-inline">
                                                  <label class="kt-checkbox">
                                                    <input tabindex="25" id="status" name="status" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                                                    <span></span>
                                                </label>
                                                 </div>
                                                </div>
                                              </div>

                                
                                              <div class="card-body row clearfix">
                                              <div class="col-md-4">
                                              </div>
                                              <div class="col-md-4">
                                              </div>
                                              <div class="col-md-4">
                                              <input type="submit" tabindex="26" id="submitbtn" name="submitbtn"   class="btn btn-primary ml-4 " />
                                               <button type="reset" tabindex="27" class="btn btn-outline-secondary">Cancel</button><br/>
                                              </div>
                                           </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


                                
                      
                       
