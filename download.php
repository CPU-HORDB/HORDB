<!DOCTYPE html>
<html>
    <head>
	    <title> HORDB</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<link rel="stylesheet" type="text/css" href="layout.css"/>
      <link rel="stylesheet" type="text/css" href="dow-style.css"/>
	</head>
	<body>
      <?php
        require_once("head.php");
      ?>
      <div id="download">
        <h1>DOWNLODA:</h1>
        <table>
          <tr>
            <th>Data</th>
            <th>Link</th>
          </tr>
          <tr>
            <td>General Data</td>
            <td><a href="./data/general information.xls">General information.xls</a></td>
          </tr>
          <tr>
            <td>Physical information</td>
            <td><a href="./data/physical information.xls">physical information.xls</a></td>
          </tr>
          <tr>
            <td>Drug protein</td>
            <td><a href="./data/drug protein.xls">drug protein.xls</a></td>
          </tr>
          <tr>
            <td>Drug products</th>
            <td><a href="./data/drug products.xls">drug products.xls</a></td>
          </tr>
          
          
        </table>
    
      </div>
      <?php
        require_once("footer.php");

        ?>
    </body>
</html>
