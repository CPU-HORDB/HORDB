<?php
           
	        header("Content-Type: text/html;charset=utf-8");
	        $link= mysqli_connect("localhost","root","960314","hordb");
            $perpage=15;//每页显示15个
			$sq= " where id like '%1%' AND length between 2 and 100";
			$sql1 = "select id,name,squence,length from mondb {$sq}";
		       var_dump($sql1);
			$result1=mysqli_query($link,$sql1);//查询记录
			
			$page=isset($_GET['page'])?$_GET['page']:1;
			$totalrow=mysqli_num_rows($result1);//记录总数
			$totalpage=ceil($totalrow/$perpage);//总页数
			
			$offset=($page-1)*$perpage;
			$sql=$sql1 . " order by id limit {$offset},{$perpage}";
		    $result=mysqli_query($link,$sql);
			$url="mysqli.php";		
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>  激素多肽数据库 </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/ >
			
    </head>

    <body>
	       
	         <table border=1 align="center">
	                 <tr>  
					    <td><input type='checkBox' name='search_child' value="{$row['id']}" /></td>
	                    <th> ID</th>
					    <th>source</th>
					    <th>squence</th>
					    <th>length</th>
	                </tr>
			<?php 
			     if(!mysqli_fetch_array($result)){
					 echo 'result:0';
					 die();
				 }
                 while($arr=mysqli_fetch_array($result)){
		              $data[]=$arr;
	            }
	            for($i=0,$len=count($data);$i<$len;$i++){
		                 $row=$data[$i];
		                 echo '<tr>';
		                 echo "<td><input type='checkBox' name='search_child' value='{$row['id']}' /></td>";
		                 echo "<td><a href='all information.php?id={$row['id']}'>{$row['id']}</a></td>";
		                 echo "<td>{$row['name']}</td>";
		                 echo "<td>{$row['squence']}</td>";
		                 echo "<td>{$row['length']}</td>";
		                 echo "</tr>";
	            }				
                 echo '</table>' ; 			 
			?>
			<div>
			  <?php
			    echo "result: {$totalrow} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				if($totalpage>1){   
			       
				   echo "<a href='{$url}?search={$search}&page=1'>first</a>&nbsp;&nbsp;";
				         
				    for($i=1;$i<=$totalpage;$i++){
						echo "<a href='{$url}?search={$search}&page={$i}'>{$i}</a>&nbsp;&nbsp;";
					}
				    
					     echo "<a href='{$url}?search={$search}&page={$totalpage}'>last</a>&nbsp;&nbsp;";
					
				}
				mysqli_close($link);
			  ?>
			</div>

	</body>
</html>
 