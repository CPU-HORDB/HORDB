   <!DOCTYPE html>
   <html>
    <head>
	    <title>  </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="layout.css"/>
		<link rel="stylesheet" type="text/css" href="adv-style.css"/>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
         function addrow(){
         var tables = $('#la');
         var addtr = $("<tr>"+
                     "<td><select name='bool[]' class='bol'> <option value='and'> AND</option>"+ 
                      "<option value='not'> NOT</option>  <option value='or'>OR</option></select></td>"+
                      "<td><select name='label[]' class='lab'> <option value='ID'> ID</option> <option value='squence'> Squence</option>  <option value='length'>Length</option></select></td>"+
                      "<td><input type='text' name='cont[]' class='content'></td>"+
                      "<td><input type='button' class='del' value='delete' onclick='deleteTrRow(this);'/></td>"+
                      "</tr>"); 
     tables.before(addtr);     
}
deleteTrRow = function(tr) {
 
    $(tr).parent().parent().remove();
 
}
</script>
	</head>
	<body>
<?php
	require_once("head.php")
?>
    <div id="adv-content">
    	
       <div id="advtext">
    	Advance Search Builder
    	</div>
    	<hr>
	   <form action="advancedsearch.php" method="post">
	       <table  class="table">
	      	  <tr id="row0">
	      		<td width="54.4px"></td>
	      		<td> <select name="label[]" class="lab"> 
	      			     <option value="ID">ID</option>
	      			     <option value="squence">Squence</option>
	      			     <option value="length">Length</option>
	      			     <option value="ID">ID</option>
	      			     <option value="ID">ID</option>
	      			     <option value="ID">ID</option>
	      			     <option value="ID">ID</option>
	      			     <option value="ID">ID</option>
	      			     <option value="ID">ID</option>
	      			     <option value="ID">ID</option>
	      			     <option value="ID">ID</option>
	      		     </select>
	      		  </td>
	      		   <td>  <input type="text" name="cont[]" class="content"></td>
	        	<td>
	      		    <input type="button" class="add" value="&nbsp;&nbsp;add&nbsp;&nbsp;" onclick="addrow();"/>
	      		</td>
	      		<tr id=la>
	      	      	<td colspan="3" align="center">
	      	      		<input type="submit" value="search">
	      	      	</td>
	      	      </tr>
	    </table>
	  </form> 
	</div> 
	</body>
</html>
