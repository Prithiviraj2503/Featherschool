<?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text" >Student Rollback Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Student Rollback updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Student Rollback Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="studentrollback_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>Standard</th>
                        <th>Section</th>  
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>		
            </table>
								
