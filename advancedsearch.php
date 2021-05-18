   <?php
     error_reporting(0);
        header("Content-Type: text/html;charset=utf-8");
        $Glycosylation="";
        $disease="";
        $Glycosylation=$_GET["Glycosylation"];
        $disease=$_GET['disease'];
	    $id=$_GET["id"];                 
	    $pepname=$_GET["pepname"];
	    $squence=$_GET["squ"];
	    $propep=$_GET['propep'];
	    $len1=$_GET["len1"];
	    $len2=$_GET["len2"];
        $source=$_GET["sour"];
        $gene=$_GET["gene"];
        $family=$_GET["family"];
        $expression=$_GET['expression'];
        $target=$_GET['target'];
        $function=$_GET['function'];
         $sql ="";
        $sqlf ="";
        // $id_bool=$_GET["id_bool"];
        // $pepname_bool=$_GET["pepname_bool"];
        // $squ_bool=$_GET["squ_bool"];
        // $len_bool=$_GET["len_bool"];
        // $gene_bool=$_GET["gene_bool"];
        // //$len_bool=$_POST["len_bool"];
        $bool=array($Glycosylation, $disease);
        $content = array("Glycosylation","disease" );

        for ($i=0; $i <3 ; $i++) { 
        	if (!empty($bool[$i])) {
        		if(!empty($sql)){
        		$sql= $sql." " . "and {$content[$i]} is {$bool[$i]} ";
        	} else {
        		$sql="where {$content[$i]} is {$bool[$i]}";
        	}
        	}
        }
        $label = array("ID","searchname","Sequence","Organism","propeptide","G_name" ,"Expression","target","Function","Family");
        $infor = array($id ,$pepname,$squence ,$source,$propep,$gene,$expression,$target,$function,$family);
        // $bool = array($id_bool ,$pepname_bool, $squ_bool,$gene_bool);
       
        for($i=0;$i<10;$i++){
        	if(!empty($infor[$i])){
        		if(!empty($sql)){
        			$sql= $sql." " . "and {$label[$i]} like '%{$infor[$i]}%' ";
        		}else{
        			$sql="where {$label[$i]} like '%{$infor[$i]}%'";
        		}
        		
        	}
        }
        //echo "$sql";
        // for ($i=0; $i <5 ; $i++) { 
        	
        // 	if(!empty($infor[$i])){
        // 		if(!empty($infor[$i+1])){
        // 		   $sql=$sql." " . "where {$label[$i]} like '%{$infor[$i]}%'' " . $bool[$i] ;
        // 		}
        //         else{
        //            $sql=$sql." " . "where {$label[$i]} like '%{$infor[$i]}%' ";
        //         }
        //      }
        //  }
      
        if(!empty($len1)){
        	if(!empty($len2)){
        		$sqll="Length between {$len1} and {$len2}";
        	}else{
        		$sqll="Length between {$len1} and 101";
        	}
        }elseif (!empty($len2)) {
             $sqll="Length between 0 and {$len2}";
        }
        else{
        	$sqll="";
        }
        //echo "$sqll";
      if(!empty($sqll)){

      	if (!empty($sql)) {
            $sqlf=$sql." and " .$sqll;
            }else{
       	     $sqlf="where ".$sqll;
            }
      }else{
      	$sqlf=$sql;
      } 
		 $sql1 = "select * from hor_gen ".$sqlf;
		//var_dump($sql1);
        ?>
  <!DOCTYPE html>
   <html>
    <head>
	    <title>  </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="layout.css"/>
		<link rel="stylesheet" type="text/css" href="adv-style.css"/>
		<link rel="stylesheet" type="text/css" href="sip-table.css"/>
		
</script>
	</head>
	<body>
        <?php
	       require_once("head.php");
	       include_once ('classpage.php');
	        require_once("./mysql/mysql-class.php");
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
	
          <table class="pagetable">
	                 <tr>  
					    
	                    <th width=80px> ID</th>
					    <th>Protein names</th>
					    <th >Squence</th>
					    <th width="70px">Length</th>
	                </tr>
			<?php 
			    
                 while($arr=mysqli_fetch_assoc($result1)){
		              $data[]=$arr;
	            }
	            $i=0;
	            foreach ($data as $key => $value){

	            	       if($i%2==0)echo "<tr class='detalinfor'>";
		                    else 
		                    	echo "<tr class='oddtr'>";
		                    $i++;
		                 //echo "<td ><input type='checkBox' name='search_child' value='{$row['id']}' /></td>";
		                 echo "<td style='padding-left: 8px'><a href='all information.php?id={$value['ID']}'>{$value['ID']}</a></td>";
		                 echo "<td style='padding-left: 8px;'>{$value['P_names']}</td>";
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