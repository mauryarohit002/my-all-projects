<?php 
$this->load->view('header');
 ?>
      <div class="content-wrapper">
        <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">change password</div>
      <div class="card-body">
        <form id="login_form">
          <div class="form-group">
            <div class="form-row">
            </div>
          </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">current Password</label>
                <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password" name="user_password">
                <input type="hidden" name="tablename" value="sms_users">

              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">new Password</label>
                <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password" name="user_password">
                <input type="hidden" name="tablename" value="sms_users">

              </div>
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">confirm Password</label>
                <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password" name="user_password">
                <input type="hidden" name="tablename" value="sms_users">

              </div>
              
            </div>
          </div>
          <button class="btn btn-primary btn-block btn_login" type="button">login</button>
        </form>
        <div class="msg"></div>
        </div>
      </div>
    </div>
  </div>
 
  </div>

  <?php 
$this->load->view('footer');
 ?>
