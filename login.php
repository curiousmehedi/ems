<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
	input[type="text"], input[type="password"] { width:100%; height:45px; border:none; padding:0 20px; background:#72427a; color:#eee;  border:1px solid #8e6895; 
font-size:16px; }


input.username { border-radius:3px 3px 0 0; border-bottom:1px solid #8e6895;}
input.password { border-radius:0 0 3px 3px; border-top: none;}


  .password , #forgotPwd span , h2 span, button span { -webkit-transition:all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;}


.forgot h2 span, .forgot button span {  -webkit-transform: translateY(-100%);
  -moz-transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  -o-transform: translateY(-100%);
  transform: translateY(-100%); }


.forgot .password { margin-top:-43px;}

  .forgot .password { opacity:0; z-index:-1;}
  .forgot .username { border-radius:3px; }


  #forgotPwd, #forgotPwd span, h2 span  { display:block; overflow: hidden;}
  #forgotPwd { height:36px; margin-bottom: 15px; text-align: right; cursor: pointer; }
  #forgotPwd:hover { text-shadow:0 0 5px #fff;}
  #forgotPwd span { font-size: 13px;
    padding-bottom: px; -webkit-transform: translateY(100%);
  -moz-transform: translateY(100%);
  -ms-transform: translateY(100%);
  -o-transform: translateY(100%);
  transform: translateY(100%);}

   .forgot #forgotPwd span  {  -webkit-transform: translateY(-100%);
  -moz-transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  -o-transform: translateY(-100%);
  transform: translateY(-100%);}

button { background-color: #000;
  background-image: -webkit-linear-gradient(bottom, #cca800, #d5b82f);
  background-image: -moz-linear-gradient(bottom, #cca800, #d5b82f);
  background-image: -o-linear-gradient(bottom, #cca800, #d5b82f);
  background-image: linear-gradient(to top, #cca800, #d5b82f);

  display: block; width:100%; height:40px; overflow: hidden; color:#333; font-size:14px; text-transform: uppercase; border:none; padding:10px 20px; border-radius:3px; }

  button:hover { cursor: pointer; background:#d4b62a;}

button span  {  display: block; height:30px;}

  h2 { color:#fff; height:30px; margin-bottom: 15px; overflow: hidden;}
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

		<div class="box">

		<h2><span>Login</span><span>Recover My Password</span></h2>

		<input type="text" placeholder="Username" class="username" />
		<input type="password" placeholder="Password" class="password" />

		<a id="forgotPwd"><span>Forgot password ?</span>

		<span>Oh I remembered!</span></a>


		<button><span>Sign In</span>   <span>Recover My Password</span></button>

		</div>


 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script>
$(document).ready(function() {


$("#forgotPwd").click(function(){

    $(".box").toggleClass("forgot");

});


});
</script>
</body>
</html>
