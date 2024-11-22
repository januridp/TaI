<?php


?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="JDP">
    <link rel="shortcut icon" href="favicon.ico">
	  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>

    <title>Home | Tools and Information</title>

    <!-- core CSS -->
<link rel="stylesheet" href="bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <style type="text/css">
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  padding-bottom: 20px;
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}

    </style>
    <script type="text/javascript">
function show_alert()
{
alert("Just somthing like a shit!");
}
</script>
  </head>
  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation" onclick="show_alert()" class="active"><a href="#aboutmodal">About</a></li>
            
            <li role="presentation" class="active"><a href="">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><label class="label label-warning">TaI <small>v.1</small></label></h3>
      </div>

      <div class="jumbotron">
        <h1>Welcome, TaI</h1>
        <p class="lead">
Tools and Information
        </p>
        <p><a class="btn btn-success" href="#Ngeden!" role="button">Ngeden!</a></p>
      </div>

      <div id="result">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Result</h3>
          </div>
            <div class="panel-body">

              <p align="center">
			  
			  
			Result{<?php

//check if the form has been submitted
if(isset($_POST['md5me'])) {
  //MD5 encode the submitted content
  $md5ed = md5($_POST['md5me']);
}

//check if the form has been submitted
if(isset($_POST['String2Hexme'])) {
  //MD5 encode the submitted content
  $String2Hex = dechex(ord($_POST['String2Hexme']));
}

//check if the form has been submitted
if(isset($_POST['Hex2Stringme'])) {
  //MD5 encode the submitted content
  $Hex2String = chr(hexdec($_POST['Hex2Stringme']));
}

//check if the form has been submitted
if(isset($_POST['sha1me'])) {
  //MD5 encode the submitted content
  $sha1 = sha1($_POST['sha1me']);
}
$app = array(isset($_POST['md5me']), isset($_POST['sha1me']), isset($_POST['Hex2Stringme']), isset($_POST['String2Hexme']));
if ($app == isset($_POST['md5me'])) {
    echo $md5ed;
} elseif ($app == isset($_POST['sha1me'])) {
    echo $sha1;
} elseif ($app == isset($_POST['String2Hexme'])) {
    echo $String2Hex;
} elseif ($app == isset($_POST['Hex2Stringme'])) {
    echo $Hex2String;
} else {
    echo "...";
}
?>}
			  </p>
          </div>
        </div>
      </div><!-- div about -->
      <div class="panel panel-success" id="Ngeden!">
        <div class="panel-heading">
        <h3 class="panel-title">Ngeden!</h3>
      </div>
<div class="panel-body">
      <div class="row marketing">
        <div class="col-lg-6" id="md5">
          <h4>md5();</h4>
          <p>
            
<p>Hash: <strong><?php echo $md5ed;?></strong></p>
<form action="#" method="post" class="form-inline">
    <label for="md5me">String:</label>
    <input name="md5me" id="md5me" type="text" class="form-control" />
	<div class="cf-turnstile" data-sitekey="0x4AAAAAAA0mwmJW4SiePBYu"></div>
    <input class="btn btn-sm btn-primary" type="submit" value="Brat!" />
</form>
</p>

          <h4>String2Hex</h4>
          <p>
<p>Hash: <strong><?php echo $String2Hex;?></strong></p>
<form action="#" method="post" class="form-inline">
    <label for="String2Hexme">String:</label>
    <input name="String2Hexme" id="String2Hexme" type="text" class="form-control" />
	<div class="cf-turnstile" data-sitekey="0x4AAAAAAA0mwmJW4SiePBYu"></div>
    <input class="btn btn-sm btn-primary" type="submit" value="Brit!" />
</form>

</p>

          <h4>Hex2String</h4>
          <p>
<p>String: <strong><?php echo $Hex2String;?></strong></p>
<form action="#" method="post" class="form-inline">
    <label for="Hex2Stringme">Hex:</label>
    <input name="Hex2Stringme" id="Hex2Stringme" type="text" class="form-control" />
	<div class="cf-turnstile" data-sitekey="0x4AAAAAAA0mwmJW4SiePBYu"></div>
    <input class="btn btn-sm btn-primary" type="submit" value="Brut!" />
</form></p>
        <h4>h44</h4>
          <p>tag p</p>
          <h4>h45</h4>
          <p>tag p</p>
          <h4>h46</h4>
          <p>tag p</p>
          <h4>h47</h4>
          <p>tag p</p>
          <h4>h48</h4>
          <p>tag p</p>
          <h4>h49</h4>
          <p>tag p</p>
          <h4>h410</h4>
          <p>tag p</p>
        </div>

        <div class="col-lg-6">
          <h4>sha1();</h4>
          <p>
            
<p>Hash: <strong><?php echo $sha1;?></strong></p>
<form action="#" method="post" class="form-inline">
    <label for="sha1me">String:</label>
    <input name="sha1me" id="sha1me" type="text" class="form-control" />
	<div class="cf-turnstile" data-sitekey="0x4AAAAAAA0mwmJW4SiePBYu"></div>
    <input class="btn btn-sm btn-primary" type="submit" value="Bret!" />
</form>
</p>

          <h4>whois</h4>
          <p><input /></p>

          <h4>h4</h4>
          <p>tag p</p>
        </div>
      </div><!-- /div Ngeden! -->
    </div><!-- /div panel-body -->
  </div><!-- /panel Ngeden! -->
      
      <footer class="footer">
        <p>&copy; TaI 2015.
        <a href="#" class="pull-right">Back Top↑</a></p>
      </footer>
    </div> <!-- /container -->


    </div>
  </div>
</div>


    </body>
</html>
