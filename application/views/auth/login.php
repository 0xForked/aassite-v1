<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>A. A. Sumitro - Login Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Login Page Asmith Web" />
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/items/favicon.png">
		
		<!-- css files -->
		<link href="<?php echo base_url();?>assets/css/login-style.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
		<!-- online-fonts -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
		<!--//online-fonts -->

	</head>

	<body>
		<div class="header">
			<h1>Asmith Web</h1>
		</div>

		<div class="container">
		
			<div class="login-page">
			  <div class="form">
				<?php echo form_open("auth");?>
			    <form class="login-form" method="post">
						<h3 style="text-transform: uppercase; letter-spacing: 11px; color: white; text-align: center;">Log in</h3>
			      <input class="wd" type="text" style="margin-top:20px" name="identity" placeholder="Email" required autofocus/>
			      <input class="wd" type="password" name="password" placeholder="password" required autofocus/>
						<p class="cb">
							<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
							<?php echo lang('login_remember_label', 'remember');?>
						</p>
			      <button type="submit">Sign In</button>
			      <p class="message" style="text-align: center;">Back to home!<a href="<?php echo base_url();?>"> Go back</a></p>
			    </form>
					<?php echo form_close();?>
			  </div>
			</div>
		</div>
	</body>
</html>