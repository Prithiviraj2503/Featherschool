
   <?php
$mscid=0;
if(isset($_GET['msc']))
{
$mscid=$_GET['msc'];
if($mscid==1)
{?>
		<div class="alert alert-success" role="alert">
                            <div class="alert-text" >Student Report Added Successfully!</div>
                        </div> 
<?php
}
if($mscid==2)
{?>
	<div class="alert alert-success" role="alert">
	<div class="alert-text">Student Report updated Successfully!</div>
</div>
<?php
}
if($mscid==3)
{?>
<div class="alert alert-danger" role="alert">
                            <div class="alert-text">Student Report Inactive Successfully!</div>
                        </div>
<?php
}
}
?>
   
   <table id="studenteport_info" class="table table-bordered table-striped">
     <thead>
                    <tr class="text-light bg-azure">
                        <th>studentname</th>
                        <th>rollnumber</th>
                        <th>standard</th>   
                        <th>section</th>

                        <th>reportfrom</th>
                        <th>reportto</th> 

                        <th>workingdays</th>
                        <th>absent</th>
                        <th>attendancepercent</th> 

                        <th>perattendance</th>
                        <th>perpunctuality</th>
                        <th>perdiscipline</th> 
                        <th>perattitude</th>
                        <th>percommunication</th>
                        <th>perclassparticipation</th> 
                        <th>percapability</th>
                        <th>perskill</th>

                        <th>test1name</th>
						<th>test1marks</th>
                        <th>test2name</th>
                        <th>test2marks</th> 
                        <th>test3name</th>
                        <th>test3marks</th>
                        <th>test4name</th>
                        <th>test4marks</th>

                        <th>reportcomments</th>
                        <th>status</th>
                        <th>action</th>
                      
                    </tr>
                </thead>		
            </table>
								
