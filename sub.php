<!DOCTYPE html>
<html>
    <head>
	    <title> HORDB </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="layout.css"/>
		<link rel="stylesheet" type="text/css" href="sub-style.css"/>
         

    </head>

    <body>
	    <?php
	    	require_once("head.php");
        ?>
        <div id="submission">
        	<h1>SUBMISSION :</h1>
        	<table>
        		<tr class="inp"><td class="sub-title"> Protein name : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="inp"><td class="sub-title"> Gene name : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="inp"><td class="sub-title"> Organism : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="tea"><td class="sub-title"> Propeptide: </td> <td><textarea name=""></textarea></td></tr>
        		<tr class="tea"><td class="sub-title"> Sequence : </td> <td><textarea name=""></textarea></td></tr>
        		<tr class="inp"><td class="sub-title"> Length : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="inp"><td class="sub-title"> Singnl : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="inp"><td class="sub-title"> Modification : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="tea"><td class="sub-title"> Function : </td> <td><textarea name=""></textarea></td></tr>
        		<tr class="tea"><td class="sub-title"> Mechanism : </td> <td><textarea name=""></textarea></td></tr>
        		<tr class="inp"><td class="sub-title"> EC50/IC50/ED50 : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="inp"><td class="sub-title"> Target : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="inp"><td class="sub-title"> Expression : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="inp"><td class="sub-title"> PDB ID : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="inp"><td class="sub-title"> PubMed ID : </td> <td><input type="text" name="" /></td></tr>
        		<tr class="tea"><td class="sub-title"> Title : </td> <td><textarea name=""></textarea></td></tr>
				<tr class="inp"><td class="sub-title"> Email : </td> <td><input type="text" name="" /></td></tr>
        	    <tr > <td colspan="2" align="center">   <input type="button" value="Submit" /></td></tr>
        	</table>
        
        </div> 
       
		<?php
			require_once("footer.php");
		?>

	</body>
</html>