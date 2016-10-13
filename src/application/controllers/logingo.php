<?php
session_start();

if(!empty($_post)){

if($_post['name'] == ''){
  $error['name'] = 'blank';
}
if(strlen($_post['pass']) < 4){
  $error['pass'] = 'length';
}
if($_post['pass'] == ''){
  $error['pass']
 = 'blank';}
}
if(empty($error)){
  $_session['join'] = $_post;
  header('Location: check.php');
  exit();
}
}
