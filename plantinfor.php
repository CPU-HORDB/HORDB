
<!DOCTYPE html>
<html>
    <head>
	    <title> HORDB</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="layout.css"/>
		<link rel="stylesheet" type="text/css" href="sip-table.css"/>

    </head>

    <body>
	       <?php
	        require_once("head.php");

            header("Content-Type: text/html;charset=utf-8");
            include_once ('classpage.php');
	        $link= mysqli_connect("localhost","root","maikongjian","hordb");
		    $sql1 = "select * from hor_gen where source = 'plant'";
			
			$result=mysqli_query($link,$sql1);//查询记录
			$pagenum=isset($_GET['page'])?$_GET['page']:1;
			$total=mysqli_num_rows($result);//记录总数
			$listnum=4;
	        $num=20;//每页显示16个
			$page=new Page($total,$num,$listnum);
			$offset=($pagenum-1)*$num;
			$sql=$sql1 . " limit {$offset},{$num}";
		    $result1=mysqli_query($link,$sql);
			$data=array();
			if(empty($result1)){
              echo "<div id='result'>";
             
              echo "No Result!";

               echo "</div>";
                     require("footer.php");
                     mysqli_close($link);
               die();

             } 
	
	?>
	         <table class="pagetable" >
	                  <tr >  
					 <!-- <td><input type='checkBox' name='search_child' value="{$row['id']}" /></td>-->
	                    <th width="60px" > ID</th>
					    <th width="120px">Protein name</th>
					    <th >sequence</th>
					    <th width="60px">length</th>
	                </tr>
			<?php 
			    
                 while($arr=mysqli_fetch_assoc($result1)){
		              $data[]=$arr;
	            }
	           // print_r($data);
	            $i=0;
	            foreach ($data as $key => $value){

	            	       if($i%2==0)echo "<tr class='detalinfor'>";
		                    else 
		                    	echo "<tr class='oddtr'>";
		                    $i++;
		                 //echo "<td ><input type='checkBox' name='search_child' value='{$row['ID']}' /></td>";
		                 echo "<td style='padding-left: 8px;width :80px;'><a href='all information.php?id={$value['ID']}'>{$value['ID']}</a></td>";
		                 echo "<td style='padding-left: 8px;width :200px;'>{$value['P_names']}</td>";
		                 echo "<td style='padding-left: 5px'>{$value['Sequence']}</td>";
		                 echo "<td style='padding-left: 15px'>{$value['Length']}</td>";
		                 echo "</tr>";
	            }	
	             echo "<tr class='yema'><td colspan='5' align='right'>".$page->fpage().'</td></tr>'	;		
                 echo '</table>' ; 			 
			?>
			<div>
			  <?php
				mysqli_close($link);
			  ?>
			</div>
			<?php
			require_once("footer.php");
			?>

	</body>
</html>