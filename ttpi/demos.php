<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TTPI Filespace</title>
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<link rel="stylesheet" type="text/css" href="assets/mystyles.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body bgcolor="#ffffff">
<table width="600" align="center">
  	<tr>
	  <td>
		<div class="header" >
		  <h1>Test Server, Please Ignore</h1>
		</div>		  
	  </td>
	</tr>
	<tr>
	  <td>
	  <div class="navigation">
		<script src="assets/MenuBar.js"></script>
      </div>
	  </td>
  </tr>
	<tr>
	  <td>
		  <div class="body">
		  <ol>
			<?php
				echo "<h3>Availible Demos</h3>";
				$dir = "demos/";
				
				$files = scandir($dir);
				sort($files);
				$i=1;
				
				foreach($files as $file) {
					if($file != "." && $file != ".." && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
						echo "<li><a href='$dir/$file'>$file</a></li>";
						$i++;
					}
				}
			?> 
			</ol>
		</div>
	  </td>
  </tr>
	<tr>
		<td>                
			<div class="footer">
			<script src="assets/Footer.js"></script>
          </div>	
  </tr>
</table>
</body>
</html>
