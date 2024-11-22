<?php

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
?>
