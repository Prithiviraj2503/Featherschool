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
								
<canvas id="totalstudentschart" width="100%" height="50%"></canvas>
<script src="chartjs.js"></script>
<script>
    var totallkg   = <?php if(isset($totallkg)){echo $totallkg; } ?>;
    var totalukg   = <?php if(isset($totalukg)){echo $totalukg; } ?>;
    var totalI     = <?php if(isset($totalI)){echo $totalI; } ?>;
    var totalII    = <?php if(isset($totalII)){echo $totalII; } ?>;
    var totalIII   = <?php if(isset($totalIII)){echo $totalIII; } ?>;
    var totalIV    = <?php if(isset($totalIV)){echo $totalIV; } ?>;
    var totalV     = <?php if(isset($totalV)){echo $totalV; } ?>;
    var totalVI    = <?php if(isset($totalVI)){echo $totalVI; } ?>;
    var totalVII   = <?php if(isset($totalVII)){echo $totalVII; } ?>;
    var totalVIII  = <?php if(isset($totalVIII)){echo $totalVIII; }?>;
    var totalIX    = <?php if(isset($totalXI)){echo $totalXI; } ?>;
    var totalX     = <?php if(isset($totalX)){echo $totalX; } ?>;
    var totalXI    = <?php if(isset($totalXI)){echo $totalXI; } ?>;
    var totalXII   = <?php if(isset($totalXII)){echo $totalXII; }?>; 

new Chart(document.getElementById("totalstudentschart"), {
    type: 'bar',
    data: {
      labels: ["LKG","UKG","I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII"],
      datasets: [
        {
          label: "",
          backgroundColor: ["#ff0000", "#ff8000","#ffff00","#00ff80","#00ff00",
          "#00bfff","#ff0080","#8000ff","#0000ff","#00cca3","#ff0080","#b37700","#99cc00","#408000"],
          data: [totallkg, totalukg, totalI, totalII, totalIII, totalIV, totalV, totalVI, totalVII, totalVIII, totalIX, totalX, totalXI, totalXII]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number Of Students'
      }
    }
});

</script>
