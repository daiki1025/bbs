<html>
<head>
<meta charset="utf-8">
<title>sport_basketball</title>
<link href="<?php echo base_url().'css/style.css'; ?>" rel="stylesheet" type="text/css">

</style>
</head>
<body bgcolor="#FF9933">
  <header>
    <h1>バスケットボール<br>
      <a href="<?php echo base_url().'music/japan'; ?>">邦楽</a>
      <a href="<?php echo base_url().'music/foreign'; ?>">洋楽</a>
      <a href="<?php echo base_url().'music/rock'; ?>">ロック</a>
      <a href="<?php echo base_url().'sport/soccer'; ?>">サッカー</a>
      <a href="<?php echo base_url().'sport/baseball'; ?>">野球</a>
      <a href="<?php echo base_url().'sport/basketball'; ?>">バスケットボール</a>
      <a href="<?php echo base_url().'game/fps'; ?>">FPS</a>
      <a href="<?php echo base_url().'game/puzzle'; ?>">パズル</a>
      <a href="<?php echo base_url().'game/race'; ?>">レース</a>
    </h1>
</header>

<center>
<div>
  <form action="<?php echo base_url().'sport/basketball'; ?>" method="post">
  <textarea name = 'comment' cols="200" rows="25">
    <?php foreach($data as $key => $value ):  ?>
      <?php echo "No.".$key." 名前 : ".$value['name'].PHP_EOL;  ?>

      <?php echo "     コメント : ".$value['mess'].PHP_EOL;  ?>

    <?php endforeach; ?>
  </textarea>
</form>
  <hr>
  <form action="<?php echo base_url().'sport/send_basketball'; ?>" method="post">
    <br>
    <a>名前</a> <input name="name" style="position:absolute;top:640px;left:880">
    <br>
    <br>
    <br>
    <br>
    <br>

    <a>コメント</a><textarea name="mess" cols="60" rows="8" style=position:absolute;top:720px;left:750></textarea><br>
    <input type="submit" name="write" value="送信" class="btn" style=position:absolute;top:840px;left:920>
    </form>
</center>
</hr>
</div>
    <a href="<?php echo base_url().'home/main'; ?>">
      <div style="position:absolute;top:800px;left:1500px;">
        <img src="<?php echo base_url().'img/deru.jpg'; ?>" width="250" height="60" alt="">
      </div>

</body>
</html>
