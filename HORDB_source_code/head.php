<?php
print<<<hello
	             <div id="container">
	    	<div style="width:18%;height: 10px;float: left;"></div>
	        <div id="header">
	        	<div id="left">
	        	<span id="na">HORDB</span>
	        	<span id ="na2">A database of peptide hormones </span>
	        	</div>
	        	<div id="right">
	        	 
	              <form name="search" action="mysqli.php" method="get"> 
		       
			     <input type="text" name='searvalue'  placeholder="ID/Name/Squence" id="sipinput"><input type=submit value="search" id="sipbut"> 
				
			     <a href="adsearchinfo.php" id="adv">advance</a>
			  
		        </form>
          
			
	        	</div>
			</div>
		
			 <div id="menu">
			 	<div style="width:19%;height: 10px;float: left;"></div>
			     <ul class="first">
					 <li class="sec-content"> <a href="http://hordb.cpu-bioinfor.org/">Home</a> </li>
					 <li style="width: 120px"> <a href="">Classification <span style="font-size: 12px;">▼<span></a>  
						 <ul class="sec"> 
						 <li style="width:200px;opacity: 0.9"><a href="browse.php"> Browse List</a></li> 
						 	 <li style="width: 200px;opacity: 0.9;"><a href="peptideinfor.php">Peptide Information</a></li>
							 <li style="width: 200px;opacity: 0.9;"><a href="drugall.php">Drug Information</a></li> 
						    
							</ul>
						</li>
					    <li> <a href="blast.php">BLAST</a> </li>
					   <li> <a href="static.php">Statistics</a>  </li>
						
					    
					    <li> <a href="helppage.php">Help</a>  </li>
						<li> <a href="download.php">Download</a>  </li>
						<li> <a href="sub.php">Submit</a>  </li>
					</ul>
			</div>
	    </div>	
hello
?>		