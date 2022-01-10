<!DOCTYPE html>
<html>
    <head>
	    <title>browse</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="browse-style.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="layout.css"/>
  <script type="text/javascript" src="./jquery/jquery-1.10.2.min.js"></script>
  <script type="text/javascript">
  	function showFile2() {
  if ($("#file2").css("display") == "none") {
   $("#file2").css("display", "inline");
   $("#sign2").text("- ");
 } else {
  $("#file2").css("display", "none");
  $("#sign2").text("+");
  } ;
 }
 $(document).ready(function(){
$("#showfile2").click(showFile2);
 })
  function showFile() {
  if ($("#file").css("display") == "none") {
   $("#file").css("display", "inline");
   $("#sign").text("- ");
 } else {
  $("#file").css("display", "none");
  $("#sign").text("+");
  } ;
 }
 $(document).ready(function(){
$("#showfile").click(showFile);
 })
  function showFile1() {
  if ($("#file1").css("display") == "none") {
   $("#file1").css("display", "inline");
   $("#sign1").text("- ");
 
 } else {
  $("#file1").css("display", "none");
  $("#sign1").text("+");
  } ;
 }
 $(document).ready(function(){
$("#showfile1").click(showFile1);
 })
</script>
	</head>
	<body>
<?php
	require_once("head.php");
  require_once("./mysql/mysql-class.php");
  $sql="select max(ID),Family from hor_gen group by Family";
  $result=mysqli_query($link,$sql);
  
  $total=mysqli_num_rows($result);
  $data=array();
  while($arr=mysqli_fetch_assoc($result)){
                  $data[]=$arr;
                }

?>
  <div id="browlist">
	  	    
	  	     <div id="showfile1"><span id="sign1">-  </span>&nbsp;By source</div>
	  		   <div id="file1"  class="listyle" style="display:inline;">
	  				<ul>
	  				<li><a href="humaninfor.php">Human</a> </li>
	  				<li><a href="animalinfor.php">Animal</a></li>
	  				<li><a href="plantinfor.php">Plant</a></li>
	  				
               </ul>  

              </div>  
              <div id="showfile2"><span id="sign2">-  </span>&nbsp;By data source</div>
	  		   <div id="file2"  class="listyle2" style="display:inline;">
	  				<ul>
	  				<li><a href="peptideinfor">Peptide Data</a> </li>
	  				<li><a href="drugall.php">Drug Data</a></li>
	  				
	  				
               </ul>  

              </div>  
	  			<div id="showfile"><span id="sign">+</span>&nbsp;By famliy</div>
	  			<div id="file" class="listyle"  style="display:none">
	  				<ul>
               <?php
                  
                                foreach ($data as $key => $value){
                  
                            echo "<li><a href='browlist.php?source={$value['Family']}'>{$value['Family']}</a></li>";
                            }
                     ?>
	  				<!-- <li><a href="#Drug Information">Adrenomedullin</a></li>
	  				<li><a href="#Drug Information">AKH/HRTH/RPCH</a></li>
	  				<li><a href="#Drug Information">Allatostatin</a></li>
	  				<li><a href="#Drug Information">Apelin</a></li>
	  				<li><a href="#Drug Information">Arthropod CHH/MIH/GIH/VIH hormone</a></li>
	  				<li><a href="#Drug Information">Arthropod PDH</a></li>
	  				<li><a href="#Drug Information">Bombesin/neuromedin-B/ranatensin</a></li>
	  				<li><a href="#Synonyms">Bradykinin</a></li>
	  				<li><a href="#Active Sequence">Calcitonin</a></li>
	  				<li><a href="#Sequence Length">Calcitonin-like peptide</a></li>
	  				<li><a href="#Molecular Formula">CART</a></li>
	  				<li><a href="#Molecular Weight">CCAP</a></li>
	  				<li><a href="#IUPAC Name">Cerebellins</a></li>
	  				<li><a href="#Type">Chromogranin/secretogranin</a></li>
	  				<li><a href="#Description">Corazonin</a></li>
	  				<li><a href="#UNII">Cystatin</a></li>
	  				<li><a href="#CAS">Ecdysis triggering hormone</a></li>
	  				<li><a href="#InChI">Endothelin/sarafotoxin
</a></li>
                    <li><a href="#InChI Key">FMRFamide related peptide</a></li>
                    <li><a href="#SMILES">Galanin</a></li>
                    <li><a href="#Disease">Gastrin/cholecystokinin</a></li>
                    <li><a href="">Glucagon</a></li>
                    <li><a href="">GnRH</a></li>
                    <li><a href="">Insulin</a></li>
                    <li><a href="">Kinin</a></li>
                    <li><a href="">KISS1</a></li>
                    <li><a href="">Leptin</a></li>
                    <li><a href="">LWamide neuropeptide</a></li>
                    <li><a href="">Melanin-concentrating hormone</a></li>
                    <li><a href="">Molluscan ELH</a></li>
                    <li><a href="">Motilin</a></li>
                    <li><a href="">Myomodulin</a></li>
                    <li><a href="">Myosuppressin</a></li>
                    <li><a href="">NA</a></li>
                    <li><a href="">NAPRTase</a></li>
                    <li><a href="">Natriuretic peptide</a></li>
                    <li><a href="">Neurexophilin</a></li>
                    <li><a href="">Neuromedins</a></li>
                    <li><a href="">Neuropeptide B/W</a></li>
                    <li><a href="">Neuropeptide B/W</a></li>
                    <li><a href="">Neurotensin</a></li>
                    <li><a href="">NPY</a></li>
                    <li><a href="">Nucleobindin</a></li>
                    <li><a href="">Opioid</a></li>
                    <li><a href="">Orcokinin</a></li>
                    <li><a href="">Orexin</a></li>
                    <li><a href="">Parathyroid hormone</a></li>
                    <li><a href="">Periviscerokinin</a></li>
                    <li><a href="">POMC</a></li>
                    <li><a href="">ProSAAS</a></li>
                    <li><a href="">Pyrokinin</a></li>
                    <li><a href="">Resistin/FIZZ</a></li>
                    <li><a href="">RFamide neuropeptide</a></li>
                    <li><a href="">Sauvagine/corticotropin-releasing factor/urotensin I</a></li>
                    <li><a href="">SCP</a></li>
                    <li><a href="">Serpin</a></li>
                    <li><a href="">Somastostatin</a></li>
                    <li><a href="">Somatotropin/prolactin</a></li>
                    <li><a href="">Tachykinin</a></li>
                    <li><a href="">TRH</a></li>
                    <li><a href="">Urotensin-2</a></li>
                    <li><a href="">Vasopressin/oxytocin</a></li>
                    <li><a href="">VGF</a></li>
                    <li><a href="">YGGW-amide related peptide</a></li>-->
                  </ul> 
                 </div>   		  		
	 </div> 
	  <div id="cont-right">
	      	<div class="right-title">
	      		※ other links
	      	</div>
	      	<div class="link">
	      <a href="http://dramp.cpu-bioinfor.org/" target="_blank"><img src="./picture/dramp.png" /> </a>  
	      <a href="http://bacteriocins.cpu-bioinfor.org/" target="_blank"><img src="./picture/bacteriocins.png" /></a><br>
	      <a href="https://www.rcsb.org/" target="_blank"><img src="./picture/pdb.png" /> </a>  
	      <a href="https://www.ncbi.nlm.nih.gov/" target="_blank"><img src="./picture/ncbi.jpg" /></a><br>
	      <a href="https://www.uniprot.org/" target="_blank"><img src="./picture/uniprot.jpg" /> </a>  
	      
	      	</div>
	      	
	      	<div class="adress">	
	      		<div class="right-title2">
	      		※ contact us 
	            </div>
	            <hr>
                <ul>
                	<li>E-mail : zhengh18@hotmail.com</li>
                	<li>Tel:</li>
                	<li>Adress : School of Life Science and Technology, China Pharmaceutical University, Nanjing 210009, China.</li>
                </ul>
	      	</div>
	      </div>
	     
	      	
	     
	</body>
</html>