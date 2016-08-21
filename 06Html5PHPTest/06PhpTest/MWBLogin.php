<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
  <title>辉大微博(MyWeiBo)</title>
  <style type="text/css">
    /*body {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 12px;color: #1d1007; line-height:24px} */
    .navbar{
      font-size: 20px;
    }
    .navbar li{
      float: left;
      width: 25%;
    }
  </style>
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
</head>
<body>
  <script src="js/bootstrap.min.js"></script>
  <header>
  <h1>辉大微博</h1>
  </header>
  <nav>
    <ul class="navbar">
      <li><a href="MWBIndex.html">首页</a></li>
      <li><a href="MWBUser.html">我的微博</a></li>
      <li><a href="MWBFollow.html">我的关注</a></li>
      <li><a href="MWBLogout.action">退出登录</a></li>
    </ul>
  </nav>
  <div style="width:500px">
    <form>
      用户名:<br />
      <input type="text" class="form-control" />
      密码:<br />
      <input type="password" class="form-control" />
      重新输入密码:<br />
      <input type="password" class="form-control" />
      请输入验证码:<br />
      <input type="text" class="form-control" />
      <input type="button" class="btn btn-primary" value="提交"/>
    </form>
  </div>
  
  
</body>

</html>