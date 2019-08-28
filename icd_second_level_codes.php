<?php 
require_once('../main/auth.php');
 ?>
 <!DOCTYPE html>
<html>
<title>second level codes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>

<body>
</header><?php include('connect.php'); ?>
  
  <div class="content-wrapper" style=" background-image: url('../images/doctor.jpg');">
     <p></p>
    
    <div class="container" style="background: white">
    <a href="icd_first_level_codes.php?id=<?php echo $_GET['back']; ?>&back=<?php echo $_GET['reload']; ?>"><button class="btn btn-success">back</button></a>
    
    <div class="container" style="background: white">
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left; width:60%;">
  <thead>
    <tr>
    <th width="13%">diseases</th>
       </tr>
  </thead>
  <tbody>
    
      <?php  
      $id=$_GET['id'];     
        $result = $db->prepare("SELECT * FROM  icd_second_level_codes WHERE  icd_first_level_code_id=:a");
        $result->BindParam(':a', $id);
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){
      ?>
      <tr class="record">
      <td> <?php echo $row['title']; ?></td>
      </td>
      
      </tr>
      <?php
        }
      ?>
    
  </tbody>
  
      
</table>
</div>

</html>