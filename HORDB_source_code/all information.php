<!DOCTYPE html>
<html>
    <head>
	    <title>  HORDB </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="layout.css"/>
		<link rel="stylesheet" type="text/css" href="info-style.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://3Dmol.csb.pitt.edu/build/3Dmol-min.js"></script>
	<script type="text/javascript">
     $(function(){
       if($("#allinfo").height() > $("#infor-left").height()){
        $("#infor-left").css("height",$("#allinfo").height());
          }
})
</script>
	</head>
	<body>
<?php
    require_once("head.php");
    require_once("./mysql/mysql-class.php");
    $id=$_GET['id'];
    $sql="select * from hor_phs where ID='{$id}'";
    $sql1="select * from hor_gen where ID='{$id}'";
    $result=mysqli_query($link,$sql1);
    $result_phs=mysqli_query($link,$sql);
    $gen_row=mysqli_fetch_assoc($result);
    $ps_row=mysqli_fetch_assoc($result_phs);
?>
      <div id="information"> 
        <div id="infor-left">
           <div id="quickinfo">
       	<ul class="allgen">
       		<li><a href="#general">ID</a></li>
       		<li><a href="#general">Uniprot ID</a></li>
       		<li><a href="#general">Protein name</a></li>
          <li><a href="#general">Gene name</a></li>
          <li><a href="#general">Organism</a></li>
          <li><a href="#general">Family</a></li>
		  <li><a href="#general">Source</a></li>
          <li><a href="#general">Expression</a></li>
          <li><a href="#general">Disease</a></li>
          <li><a href="#general">Comments</a></li>
          <li><a href="#squence">Squence</a></li>
          <li><a href="#squence">Propeptide</a></li>
          <li><a href="#squence">Signal peptide</a></li>
          <li><a href="#squence">Modification</a></li>
          <li><a href="#squence">Glycosylation</a></li>
          <li><a href="#activity">Mutagenesis</a></li>
          <li><a href="#activity">Function</a></li>
          <li><a href="#activity">Mechanism</a></li>
          <li><a href="#activity">Target</a></li>
          <li><a href="#activity">IC50/ED50/EC50</a></li>
          <li><a href="">Sructure</a></li>
		  <li><a href="">Physical Information</a></li>
          <li><a href="">Literature</a></li>
         
       	</ul>
       </div >
     </div>  
       	
       <div id="allinfo">
       	<div class="general-infor" id="general">
         
      	  <h4>General Information</h4>
          <div class="heng"></div>
      		<ul class="sec-infor">
				<li><strong>ID:</strong>&nbsp;&nbsp;<?php echo $gen_row['ID'] ?></li>
				<li><strong>Uniprot ID:</strong>&nbsp;&nbsp;<?php echo "<a href='https://www.uniprot.org/uniprot/{$gen_row['unid']}' target = '_blank'>{$gen_row['unid']}</a>"?></li>
				<li><strong>Protein name:</strong>&nbsp;&nbsp;<?php echo $gen_row['P_names'] ?></li>  
				<li><strong>Gene name:</strong>&nbsp;&nbsp;<?php echo $gen_row['G_name'] ?></li>  
				<li><strong>Organism:</strong>&nbsp;&nbsp;<?php echo $gen_row['Organism'] ?></li>
				<li><strong>Family:</strong>&nbsp;&nbsp;<?php echo $gen_row['Family'] ?></li>
				<li><strong>Source:</strong>&nbsp;&nbsp;<?php echo $gen_row['source'] ?></li>
				<li><strong>Expression:</strong>&nbsp;&nbsp;<?php echo $gen_row['Expression'] ?></li>
				<li><strong>Disease:</strong>&nbsp;&nbsp;<?php echo $gen_row['disease'] ?></li>
				<li><strong>Comments:</strong>&nbsp;&nbsp;<?php echo $gen_row['Comments'] ?></li>
				<li><strong>Other link:</strong>&nbsp;&nbsp;<?php echo $gen_row['other_link'] ?></li>
            </ul>
       </div> 
       <div class="heng"></div>
       <div id="jg"> </div>
      <div class="general-infor" id="squence">
        <h4>Sequence Information</h4> 
        <div class="heng"></div>        
         <ul class="sec-infor">
            <li><strong>Sequence:</strong>&nbsp;&nbsp;<?php echo $gen_row['Sequence'] ?></li>
            <li><strong>Length:</strong>&nbsp;&nbsp;<?php echo $gen_row['Length'] ?></li>            
            <li><strong>Propeptide:</strong>&nbsp;&nbsp;<?php echo $gen_row['propeptide'] ?></li> 
            <li><strong>Signal peptide:</strong>&nbsp;&nbsp;<?php echo $gen_row['signal'] ?></li> 
            <li><strong>Modification:</strong>&nbsp;&nbsp;<?php echo $gen_row['modification'] ?></li>
            <li><strong>Glycosylation:</strong>&nbsp;&nbsp;<?php echo $gen_row['Glycosylation'] ?></li>
             <li><strong>Mutagenesis:</strong>&nbsp;&nbsp;<?php echo $gen_row['Mutagenesis'] ?></li>
         </ul>
       </div>
       <div class="heng"></div> 
       <div id="jg"> </div>
		   <div class="general-infor" id="activity">
          
          <h4>Activity</h4>
           <div class="heng"></div>
             <ul class="sec-infor">
            <li ><strong>Function:</strong>&nbsp;&nbsp;<?php echo $gen_row['Function'] ?></li>
            <li><strong>Mechanism:</strong>&nbsp;&nbsp;<?php echo $gen_row['mechanism'] ?></li>
			<li><strong>Cross BBB:</strong>&nbsp;&nbsp;<?php echo $gen_row['crossbbb'] ?></li>
            <li><strong>Target:</strong>&nbsp;&nbsp;<?php echo $gen_row['target'] ?></li>
            <li><strong>IC50:</strong>&nbsp;&nbsp;<?php echo $gen_row['IC50'] ?>
             <!--  <table class="activity-table">
            <tr>
              <td></td>
              <td>IC50</td>
              <td>ED50</td>
              <td>EC50</td>
            </tr>
            <tr>
              <td>Activity</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table> -->
        </li>  
            <li><strong>EC50:</strong>&nbsp;&nbsp;<?php echo $gen_row['EC50'] ?></li>  
            <li><strong>ED50:</strong>&nbsp;&nbsp;<?php echo $gen_row['ED50'] ?></li>
         </ul>
		   </div> 
       <div class="heng"></div>
	     <div id="jg"> </div>

       <div class="general-infor">

         <h4>Structure</h4>
         <div class="heng"></div>
         <ul class="sec-infor">
            <li><strong>Disulfide bond:</strong>&nbsp;&nbsp;<?php echo $gen_row['D_bond'] ?></li>
            <li><strong>Structure ID:</strong>&nbsp;&nbsp;<?php echo $gen_row['PDB'];?></li>
			<li><strong>Structure:</strong></li>
		<script src="https://3Dmol.csb.pitt.edu/build/3Dmol-min.js"></script>
		 <?php
         if ($gen_row['structure']!=""){ 
            #echo "<img src='./picture/strjpg/{$gen_row['structure']}.png' width='300px' />"
		    echo "<div style='height: 500px; width: 500px; position: relative;' class='viewer_3Dmoljs' data-href='http://hordb.cpu-bioinfor.org/3d_strcuture/{$gen_row['structure']}.pdb' data-backgroundcolor='0xffffff' data-style='cartoon:color=spectrum' data-ui='config'></div>";
			 #echo "<li>  </li>"
       ;}
         ?>
         </ul>
		  
       </div> 
       <div class="heng"></div>
       <div id="jg"> </div>
       <h4>Physical Information</h4>
       
    <table class="phy-table">
    
    <tr>
      <td class="odd-td">Mass:</td>
      <td class="even-td"><?php echo $ps_row['mass'] ?></td>
      <td class="odd-td">Formula:</td>
      <td class="even-td"><?php echo $ps_row['Formula'] ?></td>
    </tr>
    <tr>
      <td class="odd-td">Absent amino acids:</td>
      <td class="even-td"><?php echo $ps_row['Absent_aa'] ?></td>
      <td class="odd-td">Common amino acids:</td>
      <td class="even-td"><?php echo $ps_row['Common_aa'] ?></td>
    </tr>
    <tr>
    <td class="odd-td">pI:</td>
    <td class="even-td"><?php echo $ps_row['pI'] ?></td>
    <td class="odd-td">Basic residues:</td>
    <td class="even-td"><?php echo $ps_row['Basic_r'] ?></td>
  </tr>
    <tr>
      <td class="odd-td">Polar residues:</td>
      <td class="even-td"><?php echo $ps_row['Polar_r'] ?></td>
      <td class="odd-td">Hydrophobic residues:</td>
      <td class="even-td"><?php echo $ps_row['Hydrophobic_r'] ?></td>
    </tr>
    <tr>
      <td class="odd-td">Hydrophobicity:</td>
      <td class="even-td"><?php echo $ps_row['Hydrophobicity'] ?></td>
      <td class="odd-td">Boman Index:</td>
      <td class="even-td"><?php echo $ps_row['Boman_in'] ?></td>
    </tr>
    <tr>
      <td class="odd-td">Half-Life:</td>
      <td class="even-td"><?php echo $ps_row['Half-Life_m'] ?></td>
      <td class="odd-td">Half-Life Yeast:</td>
      <td class="even-td"><?php echo $ps_row['Half-Life_y'] ?></td>
    </tr>
    <tr>
      <td class="odd-td">Half-Life E.Coli:</td>
      <td class="even-td"><?php echo $ps_row['Half-Life_e'] ?></td>
      <td class="odd-td">Aliphatic Index</td>
      <td class="even-td"><?php echo $ps_row['Aliphatic_in'] ?></td>
    </tr>
    <tr>
      <td class="odd-td">Instability Index:</td>
      <td class="even-td"><?php echo $ps_row['Instability_in'] ?></td>
      <td class="odd-td">Extinction Coefficient cystines:</td>
      <td class="even-td"><?php echo $ps_row['Extinction_cc'] ?></td>
    </tr>
    <tr>
    <td class="odd-td">Absorbance 280nm:</td>
    <td class="even-td"><?php echo $ps_row['Ab280'] ?></td>
   <!--  <td ></td>
    <td ></td> -->
    </tr>
  </table>
  <div id="jg"> </div>
     <div class="general-infor">
          <h4>Literature</h4>
          <div class="heng"></div>
          <ul class="sec-infor">
            <?php
            $oneid=array();
              $onetitle=array();
            $pubid=$gen_row['PM_ID'];
            //var_dump($pubid);
            $pubtitle=$gen_row['title'];
            if (strpos($pubtitle,"##") ) {
                 $oneid=explode("##",$pubid);
                 $onetitle=explode("##",$pubtitle);
                 $numpub=count($oneid);
                 for ($i=0; $i < $numpub; $i++) { 
                    echo "<li><strong>PubMed ID:</strong>&nbsp;&nbsp;<a href='https://pubmed.ncbi.nlm.nih.gov/{$oneid[$i]}/' target = '_blank'>{$oneid[$i]}</a></li>";
                    echo "<li><strong>Title:</strong>&nbsp;&nbsp;{$onetitle[$i]} </li>";
                 }
        } else {
            echo "<li><strong>PubMed ID:</strong>&nbsp;&nbsp;<a href='https://pubmed.ncbi.nlm.nih.gov/{$pubid}/' target = '_blank'>{$pubid}</a></li>
                        <li><strong>Title:</strong>&nbsp;&nbsp;{$pubtitle}</li>";
            }
            
            
            ?>
            <!-- <li><strong>PubMed ID:</strong>&nbsp;&nbsp;<?php echo $gen_row['PM_ID'] ?></li>
            <li><strong>Title:</strong>&nbsp;&nbsp;<?php echo $gen_row['title'] ?></li> -->
            
          </ul>
       </div> 
    <div class="heng"></div>   

   
  </div>
</div>
  
<!-- <?php
   require_once("footer.php")
   ?> -->

	</body>