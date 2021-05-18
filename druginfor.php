<!DOCTYPE html>
<html>
    <head>
	    <title>  HORDB </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="layout.css"/>
		<link rel="stylesheet" type="text/css" href="info-style.css"/>
		<link rel="stylesheet" type="text/css" href="druginfor-style.css"/>
	</head>
	<body>
<?php
    require_once("head.php");
    require_once("./mysql/mysql-class.php");
    $id=$_GET['id'];
    $sql="select * from activepep where ID='{$id}'";
    $sql1="select * from marketpeptide where ID='{$id}'";
    $result=mysqli_query($link,$sql);
    $result_market=mysqli_query($link,$sql1);
    $drug_row=mysqli_fetch_assoc($result);
    $res=array();
	 while($arr=mysqli_fetch_assoc($result_market)){
		              $res[]=$arr;

	            }
?>
      <div id="information"> 
        
    
       	
       
       	<div class="general-infor" id="general">
         
      	  <h4>Protein Information</h4>
          <div class="heng"></div>
      		<ul class="sec-infor">
      			<li><strong>ID:</strong>&nbsp;&nbsp;<?php echo $drug_row['ID'] ?></li>
      			<li><strong>Active Ingredients:</strong>&nbsp;&nbsp;<?php echo $drug_row['AI'] ?></li>
      		
            <li><strong>DRUGBANK Accession Number:</strong>&nbsp;&nbsp;<?php echo $drug_row['DRUGBANK Accession Number'] ?></li>  
         
            <li><strong>Active Sequence:</strong>&nbsp;&nbsp;<?php echo $drug_row['asquence'] ?></li>  
         
      			<li><strong>Sequence Length:</strong>&nbsp;&nbsp;<?php echo $drug_row['Sequence Length'] ?></li>
      			
            <li><strong>Type:</strong>&nbsp;&nbsp;<?php echo $drug_row['Type'] ?></li>       
            <li><strong>Description:</strong>&nbsp;&nbsp;<?php echo $drug_row['Description'] ?></li>
            <li><strong>Disease:</strong>&nbsp;&nbsp;<?php echo $drug_row['disease'] ?></li>
            <li><strong>CAS:</strong>&nbsp;&nbsp;<?php echo $drug_row['CAS'] ?></li>
            <li><strong>SMILES:</strong>&nbsp;&nbsp;<?php echo $drug_row['SMILES'] ?></li>
         </ul>
       </div>  
       <div class="heng"></div>
       <div id="jg"> </div>
       <h4>Drug Information</h4>
       
    <table class="phy-table">
    
    <tr >
	                   <th >Drug Name</th>
					    <th>Strength</th>
					    <th width="160px">Dosage Form/Route</th>
					    <th>Company</th>
					    <th width="150px">Marketing Status</th>
					    <th width="100px">Drug ID</th>
					    <th>Approval year</th>
	                </tr>
	                 <?php
	                 $i=0;
	               foreach ($res as $key => $value) { 
	               	      if($i%2==0)echo '<tr>';
		                    else 
		                  echo "<tr class='oddtr'>";
		                    $i++;
	                 
		                 echo "<td class='row2'>{$value['DrugName']}</td>";
		                 echo "<td class='row2'>{$value['Strength']}</td>";
		                 echo "<td class='row3'>{$value['DosageFormRoute']}</td>";
		                 echo "<td class='row4'>{$value['Company']}</td>";
		                 echo "<td class='row5'>{$value['MarketingStatus']}</td>";
		                
		                 echo "<td class='row6'>{$value['DrugID']}</td>";
		                 echo "<td class='row6'>{$value['Approvalyear']}</td>";
		                 echo "</tr>";
	            }
	     ?>
  </table>
  <div id="jg"> </div>
</div>
  <?php 
     require ("footer.php")
     ?>

	</body>
</html>