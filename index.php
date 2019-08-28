 <!DOCTYPE html>
<html>
<title>chapters</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
  </header><?php include('connect.php'); ?>
  <div class="container" style="background: white">
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left; width:60%;">
  <thead>
    <tr>
    <th width="13%">chapters</th>
       </tr>
  </thead>
  <tbody>
    
      <?php       
        $result = $db->prepare("SELECT * FROM icd_chapters");
        
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){
      ?>
      <tr class="record">
      <td><a href="icd_blocks.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a></td>
      </td>
      
      </tr>
      <?php
        }
      ?>
    
  </tbody>
  
      
</table>
</div>

</html>