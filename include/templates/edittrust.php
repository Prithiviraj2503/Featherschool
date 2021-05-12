   


   <?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text">Trust Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Trust updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Trust Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="trust_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>Trust Name</th>
                        <th>Pannumber</th>
                        <th>Tannumber</th>
                        <th>Flatno</th>
                        <th>Street</th>
                        <th>Area</th>
						<th>District</th>
                        <th>Pincode</th>    
						<th>Status</th>	
                        <th>Action</th>				
                    </tr>
                </thead>		
            </table>
								
								