<!DOCTYPE html>
   <html>
    <head>
	    <title>  </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="layout.css"/>
		<link rel="stylesheet" type="text/css" href="adv-style.css"/>
	</head>
	<body>
        <?php
	require_once("head.php");
        ?>
        <div id="adv-content">
        	<div id="adv-text">
           <p>Advance Search</p>
            </div>
       
        <div class="line"></div>
        <div>
        <form action="advancedsearch.php" method="get">
	       <table  class="adv-table">
	       	   
	      	  <tr class="row0">
	      	  	
	      		<td class="adv-title">ID&nbsp;:</td>
	      		<td colspan="3" align="left">  <input type="text" name="id"></td>
	      		
	      		</tr>
	      		<tr class="row0">
	      		
	      		<td class="adv-title">Peptide Name&nbsp;:</td>
	      		<td colspan="3" align="left">  <input type="text" name="pepname"></td>
	      		
	      		</tr>
	      		<tr class="row0">
	      		
	      		<td class="adv-title">Family Name&nbsp;:</td>
	      		<td colspan="3" align="left">  <input type="text" name="family"></td>
	      		
	      		</tr>
	      		<tr class="row0"> 
	      			
	      		<td class="adv-title">Squence&nbsp;:</td>
	      		<td colspan="3" align="left">  <textarea name="squ" ></textarea></td>
	      		
	      		</tr>
	      		<tr class="row0"> 
	      			
	      		<td class="adv-title">Propeptide&nbsp;:</td>
	      		<td colspan="3" align="left">  <textarea name="propep" ></textarea></td>
	      		
	      		</tr>
	      		<tr class="row1"> 
	      			
	      		  <td class="adv-title">Length&nbsp;:</td>
	      		  <td style="width: 120px">  <input type="text" name="len1"></td>
	      		  <td>to</td>
	      		  <td>  <input type="text" name="len2"></td>
	      		
	      		</tr>
	      		<tr class="row0">
	      		
	      		  <td class="adv-title">Source&nbsp;:</td>
	      		  <td colspan="3" align="left">  <input type="text" name="sour"></td>
	      		
	      		</tr>
	      		<tr class="row0"> 
	      		
	      		  <td class="adv-title">Gene Name&nbsp;:</td>
	      		   <td colspan="3" align="left">  <input type="text" name="gene"></td>
	      		
	      		</tr>
	      		<tr class="row0">
	      		  <td class="adv-title">Expression&nbsp;:</td>
	      		  <td colspan="3" align="left">  <input type="text" name="expression"></td>
	      		</tr>
	      		<tr class="row0">
	      		  <td class="adv-title">Target&nbsp;:</td>
	      		  <td colspan="3" align="left">  <input type="text" name="target"></td>
	      		</tr>
	      		<tr class="row0">
	      		  <td class="adv-title">Function&nbsp;:</td>
	      		   <td colspan="3" align="left">  <input type="text" name="function"></td>
	      		</tr>
	      		
	      		<tr id="la">
	      	      	<td colspan="4" align="center">
	      	      		<input type="submit" value="search">
	      	      	</td>
	      	      </tr>
	    </table>
	  </form>
	  </div> 
	  </div>
	   <div id="footer">
        	<div style="height: 16px"></div>
        	E-mail:zhengh18@hotmail.com</br>
        	School of Life Science and Technology, China Pharmaceutical University, Nanjing 210009, China.
        </div>
	</body>
</html>