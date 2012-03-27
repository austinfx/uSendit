<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
	
	<title>uSendit</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

</head>

<body>
	<div id="wrap">
		<div id="header">
			<h1>uSendit</h1>
			<a href="https://github.com/austinfx/uSendit" title="Back to tutorial">Grab a Copy of uSendit!</a>
	  </div>
		
		<form enctype="multipart/form-data" action="upload.php" method="POST">
			<ul id="contactform">
				<li>
					<label for="name">Your Name*</label>
					<span class="fieldbox"><input type="text" name="full_name" id="name" value=""/></span>
				</li>	
				<li>
					<label for="email">Email*</label>
					<span class="fieldbox"><input type="text" name="email" id="email" value=""/></span>
				</li>
				<li>
					<label for="contact">Clients Email*</label>
					<span class="fieldbox"><input type="text" name="eu_email" id="contact" value=""/></span>
				</li>
                <li>
					<label for="contact">Upload File: <?php echo 'post_max_size = ' . ini_get('post_max_size') . "\n"; ?></label>
					<span class="fieldbox"><input type="file" name="uploaded" id="browse" value=""/></span>
				</li>
				<li>
					<label for="msg">Message</label>
					<span class="msgbox"><textarea class="area" id="msg" name="msg" rows="8" cols="30"></textarea></span>
				</li>
			</ul>
			
			<p>required field*</p>
			<input type="submit" value="Send" id="sendbutton" name="sendbutton"/>
		</form>

	</div>
</body>
</html>