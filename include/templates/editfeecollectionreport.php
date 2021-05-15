<div class="ml-4 mt-4">
    <div class="row clearfix">
                            <div class="col-sm-4">
                                    <div class="card-header">
                                      <h3 class="card-title"><div class="text-light bg-azure" data-class="bg-warning">FEE COLLECTION REPORT</div></h3>  
                                </div>
                            </div>
                        </div>


<div class="card-body row">
<div class="col-sm-4">
<span>Select The Academic Year</span>
         <select tabindex="1" id="academicyear"  name="academicyear"  class="form-control" onchange="collectionreport()">
                                               <option value="">--Select Year--</option>
                                               <option value="2001-2002">2001-2002</option>
                                               <option value="2002-2003">2002-2003</option>
                                               <option value="2003-2004">2003-2004</option>
                                               <option value="2004-2005">2004-2005</option>
                                               <option value="2005-2006">2005-2006</option>
                                               <option value="2006-2007">2006-2007</option>
                                               <option value="2007-2008">2007-2008</option>
                                               <option value="2008-2009">2008-2009</option>
                                               <option value="2009-2010">2009-2010</option>
                                               <option value="2010-2011">2010-2011</option>
                                               <option value="2011-2012">2011-2012</option>
                                               <option value="2012-2013">2012-2013</option>
                                               <option value="2013-2014">2013-2014</option>
                                               <option value="2014-2015">2014-2015</option>
                                               <option value="2015-2016">2015-2016</option>
                                               <option value="2016-2017">2016-2017</option>
                                               <option value="2017-2018">2017-2018</option>
                                               <option value="2018-2019">2018-2019</option>
                                               <option value="2019-2020">2019-2020</option>
                                               <option value="2020-2021">2020-2021</option>
                                               <option value="2021-2022">2021-2022</option>
                                            </select>
</div>
</div>

<div id="feecollectioncontent">
</div>
</div>
</div>
</div>

<?php 

$qry="SELECT (SELECT COUNT(feecollectid) FROM feescollection WHERE balancefeecollect=0) AS fullpaidval,
(             SELECT COUNT(feecollectid) FROM feescollection WHERE feecollected=0) AS notpaidval,
(SELECT COUNT(feecollectid) FROM feescollection WHERE (feecollected/finalfeecollected)*100>0  AND (feecollected/finalfeecollected)*100<=30) AS onepaidval,
(SELECT COUNT(feecollectid) FROM feescollection WHERE (feecollected/finalfeecollected)*100>30 AND (feecollected/finalfeecollected)*100<=60) AS twopaidval,
(SELECT COUNT(feecollectid) FROM feescollection WHERE (feecollected/finalfeecollected)*100>60 AND (feecollected/finalfeecollected)*100<=80) AS threepaidval,
(SELECT COUNT(feecollectid) FROM feescollection WHERE (feecollected/finalfeecollected)*100>80 AND (feecollected/finalfeecollected)*100<=95) AS fourpaidval
FROM feescollection WHERE 1";

$res =$mysqli->query($qry)or die("Error in Get All Records".$mysqli->error);

if($mysqli->affected_rows>0)
{
$row = $res->fetch_assoc();
$fullpaid=$row["fullpaidval"];
$notpaid =$row["notpaidval"];
$onepaid=$row["onepaidval"];
$twopaid=$row["twopaidval"];
$threepaid=$row["threepaidval"];
$fourpaid=$row["fourpaidval"];
}
?>

<div class="container">
<script src="chartjs.js"></script>
<canvas id="bar-chart" width="200" height="100"></canvas>
<script>
  var notpaid   = <?php echo $notpaid; ?>;
  var fullpaid  = <?php echo $fullpaid;?>;
  var onepaid   = <?php echo $onepaid; ?>;
  var twopaid   = <?php echo $twopaid; ?>;
  var threepaid = <?php echo $threepaid;?>;
  var fourpaid = <?php echo $fourpaid; ?>;
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Not Paid", "30% Paid", "60% Paid", "80% Paid","95% Paid","Paid Full Amount"],
      datasets: [
        {
          label: "",
          backgroundColor: ["#FF0000","#8e5ea2","#00FFFF","#ff0066","#00ff00","#008000"],
          data: [notpaid, onepaid, twopaid, threepaid, fourpaid,fullpaid]
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
</div>
