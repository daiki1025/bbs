<html>
<head>
<meta charset="utf-8">
<title>kadai</title>

<link href="<?php echo base_url().'css/style.css'; ?>" rel="stylesheet" type="text/css">



</style>
</head>
<body bgcolor="#FF9933">
  <header>
<h1>趣味掲示板へようこそ！！</h1>
</header>
  <form method="post" action="home/music">
    <a href="<?php echo base_url().'home/music'; ?>">
      <div style="position:absolute;top:300px;left:300px;">
        <img src="<?php echo base_url().'img/music.jpg'; ?>" width="370" height="220" >
      </a>
    </div>
  </form>
    <a href="sport_view">
      <div style="position:absolute;top:300px;left:800px;">
        <img src="<?php echo base_url().'img/sport.jpg'; ?>" width="370" height="220" >
      </a>
    </div>
    <a href="game_view">
      <div style="position:absolute;top:300px;left:1300px;">
        <img src="<?php echo base_url().'img/game.jpg'; ?>" width="370" height="220" >
      </a>
    </div>
  <a href="<?php echo base_url().'logout/'.$user_id; ?>">
    <div name="logout"style="position:absolute;top:100px;left:1600px;">
      <img src="<?php echo base_url().'img/logout.jpg'; ?>" width="250" height="60" >
  </a>
  <div style="position:absolute;top:500px;right:50px;"><ul id="normal" class="dropmenu">
         <li>
           <a href="#">カテゴリ</a>
             <ul>
                 <li><a href="#">邦楽</a></li>
                 <li><a href="#">洋楽</a></li>
                 <li><a href="#">ロック</a></li>
                 <li><a href="#">FPS</a></li>
                 <li><a href="#">パズル</a></li>
                 <li><a href="#">レース</a></li>
                 <li><a href="#">サッカー</a></li>
                 <li><a href="#">野球</a></li>
            </ul>
         </li>

</div>

</div>
</body>
</html>
