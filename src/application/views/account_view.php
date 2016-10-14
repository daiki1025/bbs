<html>
<head>
<meta charset="utf-8">
<title>kadai</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#FF9933">
  <font size="5" color="#FFFFFF">
    <div style="position:absolute;top:70px;left:850px;">
      <h2>アカウント名
      </h2>
    </div>
  </font>
<font size="5" color="#FFFFFF">
  <div style="position:absolute;top:220px;left:850px;">
    <h2>ユーザー名
    </h2>
  </div>
</font>
  <font size="5" color="#FFFFFF">
    <div style="position:absolute;top:370px;left:860px;">
      <h2>パスワード</h2>
    </div>
  </font>
  <form action="<?php echo base_url().'User'; ?>" method="post">
    <div style="position:absolute;top:150px;left:750px;">
    <input type="text"name="id"style="width:400px;height:50px;">
  </div>
  <div style="position:absolute;top:300px;left:750px;">
  <input type="text"name="name"style="width:400px;height:50px;">
</div>
    <div style="position:absolute;top:450px;left:750px;">
    <input type="password"name="pass"style="width:400px;height:50px;">
  </div>
  <div style="position:absolute;top:600px;left:800px;">
    <button type="submit">
      <img src="<?php echo base_url().'img/touroku.jpg'; ?>" width="300" height="60" alt="">
    </button>
  </div>
    <a href="login">
      <div style="position:absolute;top:700px;left:1300px;">
        <img src="<?php echo base_url().'img/back.jpg'; ?>" width="250" height="60" alt="">
      </a>
    </form>
</div>
</body>
</html>
