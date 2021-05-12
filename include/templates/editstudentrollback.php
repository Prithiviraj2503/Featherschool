<?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text " >Student Report Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text ">Student Report updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text ">Student Report Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="studentrollback_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>studentname</th>
                        <th>rollnumber</th>
                        <th>standard</th>   
                        <th>section</th>
                        
                        <th>checks</th>
                        <th>final Result</th>
                        <th>action</th>
                      
                    </tr>
                </thead>		
            </table>
