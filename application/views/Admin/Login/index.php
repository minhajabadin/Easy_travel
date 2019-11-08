<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
 <link href="<?php echo $css ?>bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo $css ?>style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo $css ?>font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?php echo $js ?>jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $js ?>bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">ADMIN lOGIN</h2>
  
  <div class="app-cam">
      <h4><?php echo $this->session->flashdata('notification'); ?></h4>
      <form action="<?php site_url('login')?>" method="POST">
		<input name="l_email" type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
		<input name="l_password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                <input type="hidden" name="trigger" value="login">
                <div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		
		
        </form>
    </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2017 hotel portal. All Rights Reserved | Design by <a href="#" target="_blank">Minhaj rana, Shuhed Ahmed</a> </p>
   </div>
</body>
</html>
