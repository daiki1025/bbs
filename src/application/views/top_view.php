<html>
<head>
<meta charset="utf-8">
<title>home</title>

<link href="<?php echo base_url().'css/style.css'; ?>" rel="stylesheet" type="text/css">

</style>
</head>
<body bgcolor="#FF9933">
  <header>
<h1>趣味掲示板へようこそ</h1>
</header>
  <form method="post" action="login/view">
    <a href="<?php echo base_url().'category/music'; ?>">
      <div style="position:absolute;top:300px;left:300px;">
        <img src="<?php echo base_url().'img/music.jpg'; ?>" width="370" height="220" >
      </a>
    </div>
  </form>
    <a href="<?php echo base_url().'category/sport'; ?>">
      <div style="position:absolute;top:300px;left:800px;">
        <img src="<?php echo base_url().'img/sport.jpg'; ?>" width="370" height="220" >
      </a>
    </div>
    <a href="<?php echo base_url().'category/game'; ?>">
      <div style="position:absolute;top:300px;left:1300px;">
        <img src="<?php echo base_url().'img/game.jpg'; ?>" width="370" height="220" >
      </a>
    </div>
  <a href="<?php echo base_url().'logout/'.$user_id; ?>">
    <div name="logout"style="position:absolute;top:50px;left:1600px;">
      <img src="<?php echo base_url().'img/logout.jpg'; ?>" width="250" height="60" >
  </a>
  <div style="position:absolute;top:500px;right:50px;"><ul id="normal" class="dropmenu">
         <li>
           <a href="">カテゴリ</a>
             <ul>
                 <li><a href="<?php echo base_url().'Music/japan'; ?>">邦楽</a></li>
                 <li><a href="<?php echo base_url().'Music/foreign'; ?>">洋楽</a></li>
                 <li><a href="<?php echo base_url().'Music/rock'; ?>">ロック</a></li>
                 <li><a href="<?php echo base_url().'Sport/soccer'; ?>">サッカー</a></li>
                 <li><a href="<?php echo base_url().'Sport/baseball'; ?>">野球</a></li>
                 <li><a href="<?php echo base_url().'Sport/basketball'; ?>">バスケットボール</a></li>
                 <li><a href="<?php echo base_url().'Game/fps'; ?>">FPS</a></li>
                 <li><a href="<?php echo base_url().'Game/pszzule'; ?>">パズル</a></li>
                 <li><a href="<?php echo base_url().'Game/race'; ?>">レース</a></li>
            </ul>
         </li>
       </div>
     </div>
   </body>
   </html>
