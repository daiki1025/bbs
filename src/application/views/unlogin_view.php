<html>
<head>
<meta charset="utf-8">
<title>keizi</title>
<from method="post" action="login/check">
  <link href="<?php echo base_url().'css/style.css'; ?>" rel="stylesheet" type="text/css">


</style>
</head>
<body bgcolor="#FF9933">
  <font size="5" color="#FFFFFF">
    <div name="name"style="position:absolute;top:220px;left:850px;">
      <font color="#ff0000">※アカウント名かパスワードが間違っています。</font>
      <h2>アカウント名</h2>
    </div>
  </font>
  <font size="5" color="#FFFFFF">
    <div style="position:absolute;top:370px;left:860px;">
      <h2>パスワード</h2>
    </div>
  </font>
 <form action="login/check" method="post">
   <div style="position:absolute;top:300px;left:750px;">
   <input type="text" name="id" value ="" style="width:400px;height:50px;">
 </div>
 <br />
  <div style="position:absolute;top:450px;left:750px;">
    <input type="password" name="pass" style="width:400px;height:50px;">
  </div>
<div style="position:absolute;top:600px;left:800px;">
  <button type="submit"name="loginbutton">
    <img src="<?php echo base_url().'img/login.jpg'; ?>" width="300" height="60" alt="">
  </button>
</div>
  <a href="signup">
    <div style="position:absolute;top:700px;left:1300px;">
      <img src="<?php echo base_url().'img/account.jpg'; ?>" width="250" height="60" alt="">
    </div>
  </a>
</form>
</body>
</html>
