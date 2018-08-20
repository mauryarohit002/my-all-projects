<?php 
$this->load->view('header');
 ?>
      <div class="content-wrapper">
        <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">login</div>
      <div class="card-body">
        <form id="login_form">
          <div class="form-group">
            <div class="form-row">
              
              
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" type="email" name="user_email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password" name="user_password">
                <input type="hidden" name="tablename" value="sms_users">

              </div>
              
            </div>
          </div>
          <button class="btn btn-primary btn-block btn_login" type="button">login</button>
        </form>
        <div class="msg"></div>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
 
  </div>

  <?php 
$this->load->view('footer');
 ?>
