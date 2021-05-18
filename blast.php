<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HORDB</title>
</head>
<head>
    <link rel="stylesheet" type="text/css" href="layout.css"/>
     <link rel="stylesheet" type="text/css" href="blast.css"/>
</head>
<body>
<div id="container">
<?php

	  require_once ("head.php");

?>
 <div id="content">
  <h2 style="padding-top:20px;margin-left:90px;font-size: 22px">BLAST</h2>
  <div class="line"></div>
        <form method="get" action="http://hordb.cpu-bioinfor.org/cgi-bin/blast.cgi">
             <div class="wd_blast1">
                 <p>Sequence (FASTA):</p>
                 <textarea  name="simi_area" rows="5" id="text_blast"  placeholder="Enter sequence in FASTA format."></textarea>
             </div>

             <div class="wd_blast" id="file_blast">
                  <label for="Inputfile_blast" class="file-content">Or,upload a file</label>
                  <input type="file" id="Inputfile_blast" >
             </div>     

             <div class="wd_blast">
                            <label for="seq_two" class="lb_blast" style="font-size: 16px;
  font-weight: 500;">Scoring Matrix : </label>
                            <select class="form-control input-lg" name="matrix">
                      
                                <option value="BLOSUM45">BLOSUM45</option>
                                <option value="BLOSUM50">BLOSUM50</option>
                                <option value="BLOSUM62" selected="selected">BLOSUM62</option>
                                <option value="BLOSUM80">BLOSUM80</option>
                                <option value="BLOSUM90">BLOSUM90</option>
                                <option value="PAM30">PAM30</option>
                                <option value="PAM70">PAM70</option>
                                <option value="PAM250">PAM250</option>
                                
                            </select>
             </div>
			 <div class="wd_blast">
                  <button type="reset" class="btn_right" id="reset_blast">Reset</button>
                  <button type="submit" class="btn_left">Submit</button>
             </div>
          </form>
</div>
 <div class="clear"></div>
<?php

    require_once("footer.php");

?>
</div>
</body>
</html>