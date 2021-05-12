<?php

$status =0;
 if(isset($_POST['submitbtn']) && $_POST['submitbtn'] != '')
 {
   if($_POST['generalmessage'] != '' && $_POST['email'] != '' )
  {
    if(isset($_POST['id']) && $_POST['id'] >0 && is_numeric($_POST['id'])){   
    $id = $_POST['id'];   


    $updategeneralmessagedetails = $userObj->updategeneralmessagedetails($mysqli,$id);  
    ?>
   <script>location.href='<?php echo $HOSTPATH;  ?>generalsms&msc=2';</script>
    <?php }

    else{
  $addgeneralmessage = $userObj-> addgeneralmessage($mysqli);
        ?>
    <script>location.href='<?php echo $HOSTPATH;  ?>generalsms&msc=1';</script>
        <?php
    }
 }  
}

if(isset($_GET['upd']))
{
$idupd=$_GET['upd'];
}
$status =0;
if($idupd>0)
{
  $generalsmsdetails = $userObj->generalsmsdetails($mysqli,$idupd); 
  
  if (sizeof($generalsmsdetails)>0) {
        for($igeneralsms=0;$igeneralsms<sizeof($generalsmsdetails);$igeneralsms++){ 
      $id                        = $generalsmsdetails['id'];
      $name                      = $generalsmsdetails['name'];
      $contact                   = $generalsmsdetails['contact'];
      $email                     = $generalsmsdetails['email'];
      $subject                   = $generalsmsdetails['subject'];
      $generalmessage            = $generalsmsdetails['generalmessage'];
      $status                    = $generalsmsdetails['status'];
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
  $deletegeneralsms = $userObj->deletegeneralsms($mysqli,$del); 
  //die;
  ?>
  <script>location.href='<?php echo $HOSTPATH;  ?>generalsms&msc=3';</script>
<?php 
}

?>

<div class="tab-pane <?php if($msc!=2){ echo "active"; }?>" id="trust-add">
                        <div class="row clearfix">                            <div class="col-lg-8 col-md-12 col-sm-12">
                               
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">General Message</div></h3>
                                        <div class="card-options ">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                       
                                        </div>
                                    </div>
                                    <div class="card-body">	
                                       <div class="container-fluid">
                                       <form id="generalsmsform" name="generalsmsform" action="" method="post">

                                        <input type="hidden" class="form-control" value="<?php if(isset($id)) echo $id; ?>"  id="id" name="id" aria-describedby="id" placeholder="Enter The id">

                                    
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name <span class="text-danger">*</span></label>
                                                    <input tabindex="1"  type="text" value="<?php if(isset($name)) echo $name; ?>" id="name"  name="name" placeholder="Enter The Name" class="form-control">
                                                    
                                                    <span id="namecheck" class="text-danger">Enter The Name</span></label> 
                                                </div>
                                               
                                               
                                                <div class="col-md-6">
                                                    <label>Contact <span class="text-danger">*</span></label>
                                                    <input tabindex="2"  type="number" value="<?php if(isset($contact)) echo $contact; ?>" id="contact" name="contact" placeholder="Enter The Contact" class="form-control">
                                                    <span id="contactcheck" class="text-danger">Enter The Contact Number</span></label> 
                                        
                                                </div>
                                               
                                                </div>

                                                <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email <span class="text-danger">*</span></label>
                                                    <input tabindex="3"  type="email"  value="<?php if(isset($email)) echo $email; ?>" id="email"  name="email" placeholder="Enter The E-mail" class="form-control">
                                                    <span id="invalid" class="text-danger">Enter Valid Email Address</span></label> 
                                                    <span id="emailcheck" class="text-danger">Enter The Email</span></label> 
                                                </div>
                                               
                                               
                                                <div class="col-md-6">  
                                                    <label>Subject <span class="text-danger">*</span></label>
                                                    <input tabindex="4"  type="text" value="<?php if(isset($subject)) echo $subject; ?>" id="subject" name="subject" placeholder="Enter The Subject" class="form-control">
                                                   <span id="subjectcheck" class="text-danger">Enter The subject</span></label> 
                                                    
                                                </div>
                                                </div>

                                      <div class="row">
                                        <div class="col-sm-12">
                                        <div class="form-group">
                                        <label>Message <span class="text-danger">*</span></label>
                                            <textarea id="generalmessage" name="generalmessage" tabindex="5" rows="4" cols="30" class="form-control no-resize"  onkeyup="clicks(this)" value="" placeholder="Enter the Message"><?php if(isset($generalmessage)) echo $generalmessage; ?></textarea>
                                            <label><span id="generalmessagecheck" class="text-danger">Enter The Message</span></label>
                                        </div>
                                    </div>   
                                        </div>
                                           
                                              <div class="row">
                                              <div class="col-md-4">
                                                  <div class="form-group">
                                                           <div class="kt-checkbox-inline">
                                                                <label class="kt-checkbox">
                                                                        <input tabindex="6" id="status" name="status" type="checkbox" value="Yes"   <?php if($status==0){echo'checked';}?> > Is Active?
                                                                        <span></span>
                                                                </label>
                                       </div>
                                                        </div>
                                              </div>
                                              <div class="col-md-4">
                                              </div>
                                              <div class="col-md-4">
                                              <input type="submit" tabindex="7" id="submitbtn" name="submitbtn"   class="btn btn-primary ml-4 " />
                                              <button type="reset" tabindex="8" class="btn btn-outline-secondary">Cancel</button><br/>
                                              </div>
                                           </div>

                                           </form>   
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>   
                      </div>
                       