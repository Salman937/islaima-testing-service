<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" >
</head>
<body>
  <div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
      <div class="panel panel-info" >
        <div class="panel-heading">
          <div class="panel-title">Sign In</div>
          <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
        </div>     

        <div style="padding-top:50px" class="panel-body" >

        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
          
          <form action="http://localhost/ITSS/index.php/auth/login" method="post" accept-charset="utf-8">

          <form id="loginform" class="form-horizontal" role="form">

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
             <!--  <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">    -->
             <input type="text" class="form-control"  name="identity" value="" id="identity"  />                                     
            </div>

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <!-- <input id="login-password" type="password" class="form-control" name="password" placeholder="password"> -->
                <input type="password" class="form-control"  name="password" value="" id="password"  />  
            </div>



            <div class="input-group">
              <div class="checkbox">
                <label>

                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                </label>

              </div>
            </div>


            <div style="margin-top:10px" class="form-group">
              <!-- Button -->

              <div class="col-sm-12 controls">
               <!--  <a id="btn-login" href="#" class="btn btn-success">Login  </a> -->
                <input type="submit" class="btn btn-success" name="submit" value="Login"  />
                <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

              </div>
            </div>

<!-- 
              <div class="form-group">
                <div class="col-md-12 control">
                  <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                    Don't have an account! 
                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                      Sign Up Here
                    </a>
                  </div>
                </div>
              </div>   -->  
          </form>     



        </div>                     
      </div>  
    </div>
</body>
</html>
<!-- 
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->