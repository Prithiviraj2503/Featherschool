
 <?php 
  $holidayid =0;
  $status =0;
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {
     if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){		
         $id = $_POST['id']; 	
     $feemasterupdatedetails = $userObj->updatefeemaster($mysqli,$id);  
     ?>
  <script>location.href='<?php echo $HOSTPATH;  ?>feemaster&msc=2';</script>
    <?php	}
     else{
   
	
		$holidayadddetails = $userObj->addfeemaster($mysqli);   
        ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>feemaster&msc=1';</script>
        <?php
}
 }  


$del=0;
 if(isset($_GET['del']))
 {
 $del=$_GET['del'];
 }
 if($del>0)
 {
	$feemasterdeletedetails = $userObj->deletefeemaster($mysqli,$del); 
	//die;
	?>
	<script>location.href='<?php  echo $HOSTPATH;  ?>feemaster&msc=3';</script>-
<?php	
}

if(isset($_GET['upd']))
 {
 $idupd=$_GET['upd'];
 }
 $status =0;
 if($idupd>0)
 {
 	$feemasterdetails = $userObj->getfeemaster($mysqli,$idupd); 
	
 	if (sizeof($feemasterdetails)>0) {
         for($ifeemaster=0;$ifeemaster<sizeof($feemasterdetails);$ifeemaster++)  {			
			$feesid                    = $feemasterdetails['feesid'];
 			$standard             		 = $feemasterdetails['standardlist'];
 			$medium               		 = $feemasterdetails['medium'];
 			$academicyear          		 = $feemasterdetails['academicyear'];		
 			$status          		       = $feemasterdetails['status'];
						
 		}
 	}
   $idfees=$feesid ;
   $coursefeedetails = $userObj->getcoursefee($mysqli,$idfees); 
   $extrafeedetails  = $userObj->getextrafee($mysqli,$idfees); 
   $amenityfeedetails  = $userObj->getamenityfee($mysqli,$idfees); 

  
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

<div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
<div class="card">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                    <div class="card-header">
                                      <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Fee Master</div></h3>  
                                </div>
                            </div>

                        </div>

                                                              
<form id="feemasterform" name="feemasterform" action="" method="post">
<div id="entireform">
<!-- Heading-->    
<div class="card-body"> 
<div class="row clearfix">
<input type="hidden" class="form-control" value="<?php if(isset($feesid)) echo $feesid; ?>"  id="id" name="id" aria-describedby="feesid" placeholder="Enter feesid">
                                 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Standard</label>
                                            <select name="standard" id="standard"  class="form-control" tabindex="1">
                                            <option value="">-- Select Standard --</option>
	<option <?php if(isset($standard)) { if($standard == "LKG" ) echo 'selected'; }  ?> value="LKG">LKG</option>
	<option <?php if(isset($standard)) { if($standard == "UKG" ) echo 'selected'; }  ?> value="UKG">UKG</option>
	<option <?php if(isset($standard)) { if($standard == "I" ) echo 'selected'; }  ?> value="I">I</option>
	<option <?php if(isset($standard)) { if($standard == "II" ) echo 'selected'; }  ?> value="II">II</option>
	<option <?php if(isset($standard)) { if($standard == "III" ) echo 'selected'; }  ?> value="III">III</option>
	<option <?php if(isset($standard)) { if($standard == "IV" ) echo 'selected'; }  ?> value="IV">IV</option>
	<option <?php if(isset($standard)) { if($standard == "V" ) echo 'selected'; }  ?> value="V">V</option>
	<option <?php if(isset($standard)) { if($standard == "VI" ) echo 'selected'; }  ?> value="VI">VI</option>
	<option <?php if(isset($standard)) { if($standard == "VII" ) echo 'selected'; }  ?> value="VII">VII</option>
	<option <?php if(isset($standard)) { if($standard == "VIII" ) echo 'selected'; }  ?> value="VIII">VIII</option>
	<option <?php if(isset($standard)) { if($standard == "IX" ) echo 'selected'; }  ?> value="IX">IX</option>
	<option <?php if(isset($standard)) { if($standard == "X" ) echo 'selected'; }  ?> value="X">X</option>
	<option <?php if(isset($standard)) { if($standard == "XI" ) echo 'selected'; }  ?> value="XI">XI</option>
	<option <?php if(isset($standard)) { if($standard == "XII" ) echo 'selected'; }  ?> value="XII">XII</option>
                                            </select>
                                            <label><span id="standardcheck" class="text-danger">Select The Standard</span></label> 
                                       </div>
                                    </div>

                                   <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Section</label>
                                            <select name="section" id="section"  class="form-control" tabindex="2">
                                              <option value="">-- Select Section --</option>
                                                <option <?php if(isset($medium)) { if($medium == "English" ) echo 'selected'; }  ?>  value="English">English</option>
                                                <option <?php if(isset($medium)) { if($medium == "Tamil" ) echo 'selected'; }  ?>  value="Tamil">Tamil</option>
                                            </select>
                                             <label><span id="sectioncheck" class="text-danger">Select The Section</span></label>
                                       </div>
                                    </div>

                                      <div class="col-sm-4">
                                        <div class="form-group">
                                        <label>Academic Year</label><br>
                                        <select name="academicyear" id="academicyear"  class="form-control" tabindex="3">
                                          <option value="">-- Select Academic Year--</option>
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
                                          <option <?php if(isset($academicyear)) { if($academicyear == "2019-2020" ) echo 'selected'; }  ?> value="2019-2020">2019-2020</option>
                                          <option <?php if(isset($academicyear)) { if($academicyear == "2021-2022" ) echo 'selected'; }  ?> value="2021-2022">2021-2022</option>
                                        </select>
                                         <label><span id="academicyearcheck" class="text-danger">Select The Academic Year</span></label>
                                       </div>
                                    </div>
                                 </div>
                             </div>
                                 <hr>
<!--Heading 1 End-->

<!-- Row 1-->
<div id="entireCourseFee">
<div class="row">
<div class="card-header">
<h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Course Fee</div></h3>
</div>
</div>

<div id="coursefee">
<div class="card-body row clearfix"> 
<?php
 if($idupd>0)
 {
if (sizeof($coursefeedetails)>0) {  
       for($icoursefeemaster=0;$icoursefeemaster<sizeof($coursefeedetails);$icoursefeemaster++)  {		
      $coursefeeid               = $coursefeedetails[$icoursefeemaster]['coursefeeid'];
 			$coursefees             	 = $coursefeedetails[$icoursefeemaster]['coursefees'];
 			$courseamount           	 = $coursefeedetails[$icoursefeemaster]['courseamount'];
 			$coursecollectiontype      = $coursefeedetails[$icoursefeemaster]['coursecollectiontype'];		
      $courseduedate             = $coursefeedetails[$icoursefeemaster]['courseduedate'];
 		?>
       <input type="hidden" class="form-control" value="<?php if(isset($coursefeeid)) echo $coursefeeid; ?>" id="coursefeeid[]" name="coursefeeid[]"  aria-describedby="coursefeeid" placeholder="Enter coursefeeid">
						  <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Fees</label>
                                         <select name="coursefees[]"  class="form-control">
                                              <option value="">-- Select Course Fees--</option>
                                              <option <?php if(isset($coursefees)) { if($coursefees == "tutionfees" ) echo 'selected'; }  ?> value="tutionfees">Tution Fees</option>
                                              <option <?php if(isset($coursefees)) { if($coursefees == "specialfees" ) echo 'selected'; }  ?> value="specialfees">Special Fees</option>
                                              <option <?php if(isset($coursefees)) { if($coursefees == "others" ) echo 'selected'; }  ?> value="others">Others</option>
                                            </select>
                                            <label><span id="coursefeescheck" class="text-danger">Select The Course Fees</span></label>
                                       </div>
                                    </div>


                                    <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input  type="number"  name="courseamount[]" value="<?php if(isset($courseamount)) echo $courseamount; ?>" class="form-control" placeholder="Fee">
                                       
                                       </div>
                                    </div>

                                   <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Collection Type</label>
                                            <select name="coursecollection[]" class="form-control">
                                                    
                                                    <option  <?php if(isset($coursecollectiontype)) { if($coursecollectiontype == "monthly" ) echo 'selected'; }  ?>  value="monthly">Monthly</option>
                                                    <option  <?php if(isset($coursecollectiontype)) { if($coursecollectiontype == "quaterly" ) echo 'selected'; }  ?>  value="quaterly">Quaterly</option>
                                                    <option  <?php if(isset($coursecollectiontype)) { if($coursecollectiontype == "halfyearly" ) echo 'selected'; }  ?> value="halfyearly">Half yearly</option>
                                                    <option  <?php if(isset($coursecollectiontype)) { if($coursecollectiontype == "annually" ) echo 'selected'; }  ?> value="annually">Annually</option>
                                            </select>
                                            
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Due Date</label><br>
                                        <input type="date" value="<?php if(isset($courseduedate)) echo $courseduedate; ?>" name="courseduedate[]" class="form-control">
                                        
                                       </div>
                                    </div>


                                  <!--    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label></label><br>
                                            <button type="button"  class="roundbtn"  id="addCourseFee">+</button>
                                            <button type="button"  class="roundbtn" id="removeCourseFee">-</button>
                                        </div>
                                    </div>-->
 	<?php	}
 	}
}
   else{
     ?>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Fees</label>
                                         <select name="coursefees[]"  class="form-control" tabindex="4">
                                             <option value="">-- Select Course Fees--</option>
                                              <option value="tutionfees">Tution Fees</option>
                                              <option value="specialfees">Special Fees</option>
                                              <option value="others">Others</option>
                                            </select>
                                       </div>
                                    </div>


                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input  type="number"  name="courseamount[]" class="form-control" placeholder="Fee" tabindex="5">
                                       </div>
                                    </div>

                                   <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Collection Type</label>
                                            <select name="coursecollection[]" class="form-control" tabindex="6">
                                                    <option value="">-- Select Collection Type--</option>
                                                    <option  value="monthly">Monthly</option>
                                                    <option value="quaterly">Quaterly</option>
                                                    <option value="halfyearly">Half yearly</option>
                                                    <option value="annually">Annually</option>
                                            </select>
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Due Date</label><br>
                                        <input type="date" name="courseduedate[]" class="form-control" tabindex="7">
                                       </div>
                                    </div>


                                       <div class="col-sm-2">
                                        <div class="form-group">
                                            <label></label><br>
                                            <button type="button"  class="roundbtn"  id="addCourseFee">+</button>
                                            <button type="button"  class="roundbtn" id="removeCourseFee">-</button>
                                        </div>
                                    </div>
<?php }?>

                                 </div>
                             </div>
<div id="crsFeeFields"></div>
<hr>
</div>

<!--Row 1 End-->    

<!--Row 2 Start-->
<div class="entireExtra">
<div class="row">
<div class="card-header">
<h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Extra Curricular Activity Fee</div></h3>
</div>
</div>

<div id="extra_cur_fee">
<div class="card-body row clearfix"> 

<?php
 if($idupd>0)
 {

if (sizeof($extrafeedetails)>0) {  
       for($iextrafeemaster=0;$iextrafeemaster<sizeof($extrafeedetails);$iextrafeemaster++)  {		
      $extrafeeid                = $extrafeedetails[$iextrafeemaster]['extrafeeid'];
 			$extrafees             	   = $extrafeedetails[$iextrafeemaster]['extrafees'];
 			$extraamount             	 = $extrafeedetails[$iextrafeemaster]['extraamount'];
 			$extracollection           = $extrafeedetails[$iextrafeemaster]['extracollection'];		
      $extraduedate              = $extrafeedetails[$iextrafeemaster]['extraduedate'];
 		?>

<input type="hidden" class="form-control" value="<?php if(isset($extrafeeid)) echo $extrafeeid; ?>"  id="extrafeeid[]" name="extrafeeid[]" aria-describedby="extrafeeid" placeholder="Enter extrafeeid">



 <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Fees</label>
                                        <select class="form-control"  name="extrafees[]">
                                        <option <?php if(isset($extrafees)) { if($extrafees == "music" ) echo 'selected'; }  ?> value="music">Music</option>
                                        <option <?php if(isset($extrafees)) { if($extrafees == "yoga" ) echo 'selected'; }  ?> value="yoga">Yoga</option>
                                        <option <?php if(isset($extrafees)) { if($extrafees == "others" ) echo 'selected'; }  ?> value="others">Others</option>
                                      </select>
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input  type="number" name="extraamount[]"  class="form-control" value="<?php if(isset($extraamount)) echo $extraamount; ?>"placeholder="Fee">
                                       </div>
                                    </div>

                                   <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Collection Type</label>
                                            <select name="extracollection[]" class="form-control">
                                            <option <?php if(isset($extracollection)) { if($extracollection == "monthly" ) echo 'selected'; }  ?> value="monthly">Monthly</option>
                                            <option <?php if(isset($extracollection)) { if($extracollection == "quaterly" ) echo 'selected'; }  ?> value="quaterly">Quaterly</option>
                                            <option <?php if(isset($extracollection)) { if($extracollection == "halfyearly" ) echo 'selected'; }  ?> value="halfyearly">Half yearly</option>
                                            <option <?php if(isset($extracollection)) { if($extracollection == "annually" ) echo 'selected'; }  ?> value="annually">Annually</option>
                                            </select>
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Due Date</label><br>
                                        <input type="date" value="<?php if(isset($extraduedate)) echo $extraduedate; ?>" name="extrafeeduedate[]" class="form-control">
                                       </div>
                                    </div>


                                      <!--  <div class="col-sm-2">
                                        <div class="form-group">
                                            <label></label><br>
                                            <button type="button" class="roundbtn"  id="addExCurFee">+</button>
                                            <button type="button" class="roundbtn"  id="removeExCurFee">-</button>
                                        </div>
                                    </div>-->
                               

      <?php }
      }
    }
       else
       {
         
         ?>

                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Fees</label>
                                        <select class="form-control"  name="extrafees[]" tabindex="8">
                                        <option value="music">Music</option>
                                        <option value="yoga">Yoga</option>
                                        <option value="others">Others</option>
                                      </select>
                                       </div>
                                    </div>

                                      <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input  type="number" name="extraamount[]"  class="form-control" placeholder="Fee" tabindex="9">
                                       </div>
                                    </div>

                                   <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Collection Type</label>
                                            <select name="extracollection[]" class="form-control" tabindex="10">
                                            <option value="monthly">Monthly</option>
                                            <option value="quaterly">Quaterly</option>
                                            <option value="halfyearly">Half yearly</option>
                                            <option value="annually">Annually</option>
                                            </select>
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Due Date</label><br>
                                        <input type="date" name="extrafeeduedate[]" class="form-control" tabindex="11">
                                       </div>
                                    </div>


                                      <div class="col-sm-2">
                                        <div class="form-group">
                                            <label></label><br>
                                            <button type="button" class="roundbtn"  id="addExCurFee">+</button>
                                            <button type="button" class="roundbtn"  id="removeExCurFee">-</button>
                                        </div>
                                    </div>
                                    <?php } ?>
                                 </div>                            

                             </div>
                           
<div id="exCurField"></div>
<hr>
</div>


<!--Row 2 End-->

<!--Row 3 Start-->
<div class="entireamenity">

<div class="row">
<div class="card-header">
<h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">Amenity Fee</div></h3>
</div>
</div>

<div id="amenityfee">
<div class="card-body row clearfix "> 

<?php
 if($idupd>0)
 {

if (sizeof($amenityfeedetails)>0) {  
       for($iamenityfeemaster=0;$iamenityfeemaster<sizeof($amenityfeedetails);$iamenityfeemaster++)  {		
      $amenityfeeid                = $amenityfeedetails[$iamenityfeemaster]['amenityfeeid'];
 			$amenityfees             	   = $amenityfeedetails[$iamenityfeemaster]['amenityfees'];
 			$amenityamount             	 = $amenityfeedetails[$iamenityfeemaster]['amenityamount'];
 			$amenitycollection           = $amenityfeedetails[$iamenityfeemaster]['amenitycollection'];		
      $amenityduedate              = $amenityfeedetails[$iamenityfeemaster]['amenityduedate'];
 		?>
<input type="hidden" class="form-control" value="<?php if(isset($amenityfeeid)) echo $amenityfeeid; ?>"  id="amenityfeeid[]" name="amenityfeeid[]" aria-describedby="amenityfeeid" placeholder="Enter amenityfeeid">
                                   <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Fees</label>
                                        <select name="amenityfees[]"  class="form-control">
                                        <option  <?php if(isset($amenityfees)) { if($amenityfees == "bookfees" ) echo 'selected'; }  ?> value="bookfees">Book fees</option>
                                        <option  <?php if(isset($amenityfees)) { if($amenityfees == "others" ) echo 'selected'; }  ?> value="others">Others</option>
                                      </select>
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input  type="number" value="<?php if(isset($amenityamount)) echo $amenityamount; ?>" name="amenityamount[]"  class="form-control"  placeholder="Fee">
                                       </div>
                                    </div>

                                   <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Collection Type</label>
                                            <select name="amenitycollection[]" class="form-control">
                                            <option   <?php if(isset($amenitycollection)) { if($amenitycollection == "monthly" ) echo 'selected'; }  ?>  value="monthly">Monthly</option>
                                            <option   <?php if(isset($amenitycollection)) { if($amenitycollection == "quaterly" ) echo 'selected'; }  ?> value="quaterly">Quaterly</option>
                                            <option   <?php if(isset($amenitycollection)) { if($amenitycollection == "halfyearly" ) echo 'selected'; }  ?>  value="halfyearly">Half yearly</option>
                                            <option  <?php if(isset($amenitycollection)) { if($amenitycollection == "annually" ) echo 'selected'; }  ?> value="annually">Annually</option>
                                            </select>
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Due Date</label><br>
                                        <input type="date" name="amenityduedate[]" value="<?php if(isset($amenityduedate)) echo $amenityduedate; ?>" class="form-control">
                                       </div>
                                    </div>


                                       <!-- <div class="col-sm-2">
                                        <div class="form-group">
                                            <label></label><br>
                                            <button type="button" class="roundbtn" id="addAmField">+</button>
                                            <button type="button" class="roundbtn" id="removeAmField">-</button>
                                        </div>
                                    </div> -->
                                    <?php }
      }
    }
       else
       {        
         ?>

<div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Fees</label>
                                        <select name="amenityfees[]"  class="form-control" tabindex="12">
                                        <option value="bookfees">Book fees</option>
                                        <option value="others">Others</option>
                                      </select>
                                       </div>
                                    </div>

                                      <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Amount</label>
                                        <input  type="number" name="amenityamount[]"  class="form-control" name="" placeholder="Amount" tabindex="13">
                                       </div>
                                    </div>

                                   <div class="col-sm-2">
                                        <div class="form-group">
                                        <label>Collection Type</label>
                                            <select name="amenitycollection[]" class="form-control" tabindex="14">
                                            <option value="monthly">Monthly</option>
                                            <option value="quaterly">Quaterly</option>
                                            <option value="halfyearly">Half yearly</option>
                                            <option value="annually">Annually</option>
                                            </select>
                                       </div>
                                    </div>

                                      <div class="col-sm-3">
                                        <div class="form-group">
                                        <label>Due Date</label><br>
                                        <input type="date" name="amenityduedate[]" name="duedate" class="form-control" tabindex="15">
                                       </div>
                                    </div>


                                      <div class="col-sm-2">
                                        <div class="form-group">
                                            <label></label><br>
                                            <button type="button" class="roundbtn" id="addAmField">+</button>
                                            <button type="button" class="roundbtn" id="removeAmField">-</button>
                                        </div>
                                    </div>



<?php } ?>
                                 </div>
                             </div>
<div id="amenityField"></div>
</div>
<!--Row 3 End-->

<div class="row">
<div class="col-sm-1"></div>
							<div class="col-sm-11">
							<div class="form-group">
							<div class="kt-checkbox-inline">
							<label class="kt-checkbox">
                                                    <input tabindex="16" id="status" name="status" type="checkbox" value="Yes"  <?php if($status==0){echo'checked';}?> > Is Active?
                                                    <span></span>
                                                </label>
												</div>
							</div></div></div>
<!--Submit Field Start-->
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2"></div>
    <div class="col-sm-3">
      <div class="form-group">
      <div class="text-right">
          <input  type="submit" id="submitbtn" name="submitbtn" class="btn btn-primary" tabindex="17">
            <button type="reset" class="btn btn-outline-secondary" tabindex="18">Cancel</button><br/>
        </div>
    </div>
</div>
</div>
<!--Submit Field End-->

                        </div>
                  </form>
            </div>
        </div>






