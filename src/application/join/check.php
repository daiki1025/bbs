</<?php session_start();
header('Expires:-1');
header('Cache-Control:');
header('Pragma:')
if(!isset($_session['join'])){
  header('Location: top.php');
  exit();
} ?>

<from aciton="" methpd="post">
  <d1>
    <ユーザー名</dt>
    <dd>
      <?php echo htmlspecialchars($_session['join']['name'],ENT_QUOTES, 'UTF-8'); ?>
