<?php 
//Total Column
$result=$mysqli->query("SELECT count(studentid) as totallkg from student where standard='LKG' ");
$data=$result->fetch_assoc();
$totallkg= $data['totallkg'];

$result=$mysqli->query("SELECT count(studentid) as totalukg from student where standard='UKG' ");
$data=$result->fetch_assoc();
$totalukg= $data['totalukg'];

$result=$mysqli->query("SELECT count(studentid) as totalI from student where standard='I' ");
$data=$result->fetch_assoc();
$totalI= $data['totalI'];

$result=$mysqli->query("SELECT count(studentid) as totalII from student where standard='II' ");
$data=$result->fetch_assoc();
$totalII= $data['totalII'];

$result=$mysqli->query("SELECT count(studentid) as totalIII from student where standard='III' ");
$data=$result->fetch_assoc();
$totalIII= $data['totalIII'];

$result=$mysqli->query("SELECT count(studentid) as totalIV from student where standard='IV' ");
$data=$result->fetch_assoc();
$totalIV= $data['totalIV'];

$result=$mysqli->query("SELECT count(studentid) as totalV from student where standard='V' ");
$data=$result->fetch_assoc();
$totalV= $data['totalV'];

$result=$mysqli->query("SELECT count(studentid) as totalVI from student where standard='VI' ");
$data=$result->fetch_assoc();
$totalVI= $data['totalVI'];

$result=$mysqli->query("SELECT count(studentid) as totalVII from student where standard='VII' ");
$data=$result->fetch_assoc();
$totalVII= $data['totalVII'];

$result=$mysqli->query("SELECT count(studentid) as totalVIII from student where standard='VIII' ");
$data=$result->fetch_assoc();
$totalVIII= $data['totalVIII'];

$result=$mysqli->query("SELECT count(studentid) as totalIX from student where standard='XI' ");
$data=$result->fetch_assoc();
$totalIX= $data['totalIX'];

$result=$mysqli->query("SELECT count(studentid) as totalX from student where standard='X' ");
$data=$result->fetch_assoc();
$totalX= $data['totalX'];

$result=$mysqli->query("SELECT count(studentid) as totalXI from student where standard='XI' ");
$data=$result->fetch_assoc();
$totalXI= $data['totalXI'];

$result=$mysqli->query("SELECT count(studentid) as totalXII from student where standard='XII' ");
$data=$result->fetch_assoc();
$totalXII= $data['totalXII'];

$totalall=$totallkg+$totalukg+$totalI+$totalII+$totalIII+$totalIV+$totalV+$totalVI+$totalVII+$totalVIII+$totalIX+$totalX+$totalXI+$totalXII;

//Hindu BC Boys

$result=$mysqli->query("SELECT count(studentid) as hindubcboyslkg from student where standard='LKG' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboyslkg= $data['hindubcboyslkg'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysukg from student where standard='UKG' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysukg= $data['hindubcboysukg'];


$result=$mysqli->query("SELECT count(studentid) as hindubcboysI from student where standard='I' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysI= $data['hindubcboysI'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysII from student where standard='II' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysII= $data['hindubcboysII'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysIII from student where standard='III' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysIII= $data['hindubcboysIII'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysIV from student where standard='IV' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysIV= $data['hindubcboysIV'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysV from student where standard='V' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysV= $data['hindubcboysV'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysVI from student where standard='VI' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysVI= $data['hindubcboysVI'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysVII from student where standard='VII' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysVII= $data['hindubcboysVII'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysVIII from student where standard='VIII' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysVIII= $data['hindubcboysVIII'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysIX from student where standard='IX' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysIX= $data['hindubcboysIX'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysX from student where standard='X' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysX= $data['hindubcboysX'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysXI from student where standard='XI' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysXI= $data['hindubcboysXI'];

$result=$mysqli->query("SELECT count(studentid) as hindubcboysXII from student where standard='XII' AND gender='Male' AND region='Hindu' AND category='BC' ");
$data=$result->fetch_assoc();
$hindubcboysXII= $data['hindubcboysXII'];

$hindubcboystotal=$hindubcboyslkg+$hindubcboysukg+$hindubcboysI+$hindubcboysII+$hindubcboysIII+$hindubcboysIV+$hindubcboysV+$hindubcboysVI+$hindubcboysVII+$hindubcboysVIII+$hindubcboysIX+$hindubcboysX+$hindubcboysXI+$hindubcboysXII;


//Hindu BC Girls



?>
							

                                         <div class="checkbox ml-4 mt-4">
                                            <span>Click and separate Caste details:</span>
                                             <input type="checkbox" aria-label="Checkbox for following text input" class="ml-4"><lable class="ml-1">BC</lable>
                                            <input type="checkbox" aria-label="Checkbox for following text input" class="ml-4"><lable class="ml-1">MBC</lable>
                                            <input type="checkbox" aria-label="Checkbox for following text input" class="ml-4"><lable class="ml-1">SC</lable>
                                            <input type="checkbox" aria-label="Checkbox for following text input" class="ml-4"><lable class="ml-1">ST</lable>
                                            <input type="checkbox" aria-label="Checkbox for following text input" class="ml-4"><lable class="ml-1">OBC</lable>
                                            <input type="checkbox" aria-label="Checkbox for following text input" class="ml-4"><lable class="ml-1">DNC</lable>
                                            <input type="checkbox" aria-label="Checkbox for following text input" class="ml-4"><lable class="ml-1">Others</lable>
                                            
                                        </div>
                                        <br>
                                       <table class="table table-bordered"  id="castereport_info" >
                                                  <thead class="text-center">
                                                    <tr>
                                                      <th scope="col" rowspan="3"  class="text-dark  ">Standard</th>
                                                      <th scope="col" rowspan="3" class="text-dark">Total</th>
                                                      <th scope="col" colspan="6" class="text-dark">BC</th>
                                                      <th scope="col" colspan="6" class="text-dark">MBC</th>
                                                      <th scope="col"  colspan="6" class="text-dark">SC</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody class="text-center">
                                                    <tr>
                                                     <!-- <th scope="col" rowspan="2"  class="text-dark"></th> -->
                                                      <th scope="col" rowspan="2"  class="text-dark"></th>
                                                      <th scope="col"  rowspan="2" class="text-dark"></th>
                                                      <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                                                      <th scope="col"  colspan="2" class="text-dark">Christian</th>
                                                      <th scope="col" colspan="2"  class="text-dark">Muslim</th>
                                                      <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                                                      <th scope="col"  colspan="2" class="text-dark">Christian</th>
                                                      <th scope="col" colspan="2"  class="text-dark">Muslim</th>
                                                      <th scope="col"  colspan="2" class="text-dark">Hindu</th>
                                                      <th scope="col"  colspan="2" class="text-dark">Christian</th>
                                                      <th scope="col" colspan="2"  class="text-dark">Muslim</th>
                                                    </tr>
                                                    <tr>
                                                    <!-- <th scope="col"  class="text-dark"></th> -->
                                                      <th scope="col"   class="text-dark">Boys</th>
                                                      <th scope="col"   class="text-dark">Girls</th>
                                                      <th scope="col"   class="text-dark">Boys</th>
                                                      <th scope="col"   class="text-dark">Girls</th>
                                                      <th scope="col"   class="text-dark">Boys</th>
                                                      <th scope="col"   class="text-dark">Girls</th>
                                                      <th scope="col"   class="text-dark">Boys</th>
                                                      <th scope="col"   class="text-dark">Girls</th>
                                                      <th scope="col"   class="text-dark">Boys</th>
                                                      <th scope="col"   class="text-dark">Girls</th>
                                                      <th scope="col"   class="text-dark">Boys</th>
                                                      <th scope="col"   class="text-dark">Girls</th>
                                                      <th scope="col"   class="text-dark">Boys</th>
                                                      <th scope="col"   class="text-dark">Girls</th>
                                                      <th scope="col"   class="text-dark">Boys</th>
                                                      <th scope="col"   class="text-dark">Girls</th>
                                                      <th scope="col"   class="text-dark">Boys</th>
                                                      <th scope="col"   class="text-dark">Girls</th>
                                                      
                                                     
                                                    </tr>
                                                  
                                                    <tr>
                                                      <th scope="row" class="text-dark">LKG</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totallkg)){ echo $totallkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboyslkg)){ echo $hindubcboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlslkg)){ echo $hindubcgirlslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      
                                                    </tr>
                                                    <tr>
                                                      <th scope="row" class="text-dark">UKG</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalukg)){ echo $totalukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysukg)){ echo $hindubcboysukg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsukg)){ echo $hindubcgirlsukg; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">I</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalI)){ echo $totalI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysI)){ echo $hindubcboysI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboyslkg)){ echo $hindubcboyslkg; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcgirlsI)){ echo $hindubcgirlsI; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">II</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalII)){ echo $totalII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysII)){ echo $hindubcboysII; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">III</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalIII)){ echo $totalIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysIII)){ echo $hindubcboysIII; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">IV</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalIV)){ echo $totalIV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysIV)){ echo $hindubcboysIV; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">V</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalV)){ echo $totalV; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysV)){ echo $hindubcboysV; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">VI</th>
                                                      <td scope="col"   class="text-dark"><?php if(isset($totalVI)){ echo $totalVI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysVI)){ echo $hindubcboysVI; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">VII</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalVII)){ echo $totalVII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysVII)){ echo $hindubcboysVII; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">VIII</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalVIII)){ echo $totalVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysVIII)){ echo $hindubcboysVIII; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">IX</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalIX)){ echo $totalIX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysIX)){ echo $hindubcboysIX; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">X</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalX)){ echo $totalX; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysX)){ echo $hindubcboysX; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">XI</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalXI)){ echo $totalXI; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysXI)){ echo $hindubcboysXI; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    </tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">XII</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalXII)){ echo $totalXII; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboysXII)){ echo $hindubcboysXII; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    <tr>
                                                    <tr>
                                                    <th scope="row" class="text-dark">Total</th>
                                                    <td scope="col"   class="text-dark"><?php if(isset($totalXII)){ echo $totalall; } ?></td>
                                                      <td scope="col"   class="text-dark"><?php if(isset($hindubcboystotal)){ echo $hindubcboystotal; } ?></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                      <td scope="col"   class="text-dark"></td>
                                                    <tr>
                                                   
                                                  </tbody>
                                                </table>
         
