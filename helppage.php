<!DOCTYPE html>
<html>
    <head>
	    <title> HorDB</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	  <link rel="stylesheet" type="text/css" href="layout.css"/>
      <link rel="stylesheet" type="text/css" href="help-style.css"/>
      
	</head>
<body>
	 <?php
        require "head.php";
	 ?>
  <div id="help">
        <h1>Help:</h1>
       <h3>Data Sources</h3>
       <p class="ptitle">The data come from the following database:</p>
       <ul class="ptitle">
         <li class="datali">※&nbsp;Uniprot(https://www.uniprot.org/)</li>
         <li class="datali">※&nbsp;NeuroPep(http://isyslab.info/NeuroPep)</li>
         <li class="datali">※&nbsp;NCBI(https://www.ncbi.nlm.nih.gov/)</li>
         <li class="datali">※&nbsp;PDB(http://www.rcsb.org/)</li>
       </ul>
      
         <h3>Search Help</h3>
        <h4>Quick Search</h4>
         <p class="ptitle">※&nbsp;The simple search page allows you to search individual fields found within HORDB.<br>

           &nbsp;&nbsp;&nbsp;&nbsp;1.Enter the appropriate contents in the text area below.<br>
           &nbsp;&nbsp;&nbsp;&nbsp;2.Click "Search" .</p>

         <h4>Advance Search</h4>
         <p class="ptitle">※&nbsp;Enter the appropriate contents in the text area below. The relationship between each item is "and".<br>
        </p>
           <div id="eg">
            <img src="./picture/adv.png" alt="">
            
          </div>
           
         <h3>Data Information</h3>
         <table>
           <tr>
            <td class="tittable">ID</td>
            <td class="conttable">Accessing numble and linking to the HORDB entries</td>
          </tr>
      
          <tr>
            <td class="tittable">Uniprot ID</th>
            <td class="conttable">Uniprot ID</td>
          </tr>
          <tr>
            <td class="tittable">Protein name</td>
            <td class="conttable">Protein name</td>
          </tr>
          <tr>
            <td class="tittable">Gene name</td>
            <td class="conttable">Gene name</td>
          </tr>
         
          <tr>
            <td class="tittable">Source</td>
            <td class="conttable">Organism that generate this protein</td>
          </tr>
          <tr>
            <td class="tittable">Family</td>
            <td class="conttable">Family</td>
          </tr>
          <tr>
            <td class="tittable">Expression</td>
            <td>Organ or cell that generate this protein</td>
          </tr>
          <tr>
            <td class="tittable">Disease</td>
            <td class="conttable">Diseases related to this protein</td>
          </tr>
          <tr>
            <td class="tittable">Comments</td>
            <td class="conttable">Other information related to this protein</td>
          </tr>
          <tr>
            <td class="tittable">Other link</th>
            <td class="conttable">Other link related to this protein</td>
          </tr>
          <tr>
            <td class="tittable">Squence</th>
            <td class="conttable">Amino acid composition</td>
          </tr>
          <tr>
            <td class="tittable">Length</th>
            <td class="conttable">Amino acid length</td>
          </tr>
          <tr>
            <td class="tittable">Propeptide</th>
            <td class="conttable">Sequence before the protein is cleaved</td>
          </tr>
          <tr>
            <td class="tittable">Signal peptide</th>
            <td class="conttable">A peptide chain that guides the transfer of newly synthesized proteins to the secretory pathway</td>
          </tr>
          <tr>
            <td class="tittable">Modification</th>
            <td class="conttable">Modification site and amino acid</td>
          </tr>
          <tr>
            <td class="tittable">Glycosylation</th>
            <td class="conttable">Glycosylation site and amino acid</td>
          </tr>
          <tr>
            <td class="tittable">Mutagenesis</th>
            <td class="conttable">Mutagenesis site and its function</td>
          </tr>
          <tr>
            <td class="tittable">Function</th>
            <td class="conttable">The effect on the organism</td>
          </tr>
          <tr>
            <td class="tittable">Mechanism</th>
            <td class="conttable">The way to realize the function</td>
          </tr>
          <tr>
            <td class="tittable">Bingding/Receptor</th>
            <td class="conttable">Binding protein</td>
          </tr>
           <tr>
            <td class="tittable">IC50</td>
            <td class="conttable">Semi-inhibitory concentration</td>
          </tr>
          <tr>
            <td class="tittable">EC50</th>
            <td class="conttable">Concentration for 50% of maximal effect,</td>
          </tr>
          <tr>
            <td class="tittable">ED50</th>
            <td class="conttable">Median effective dose</td>
          </tr>
         
          <tr>
            <td class="tittable">Disulfide bond</th>
            <td class="conttable">Disulfide bond site</td>
          </tr>
          <tr>
            <td class="tittable">PDB</th>
            <td class="conttable">PDB ID</td>
          </tr>
          <tr>
            <td class="tittable">Physical Information</th>
            <td class="conttable">Physical information calculated by SciDBmaker</td>
          </tr>
          <tr>
            <td class="tittable">Literature</th>
            <td class="conttable">PubMed ID and title</td>
          </tr>
         
         </table>
      
      </div>
     <?php 
     require ("footer.php")
     ?>
</body>
</html>