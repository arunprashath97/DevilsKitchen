<section class="loginmodal">
	<div id="modal1" class="modal">
	    <div class="modal-content center">
	      <h4>Login with your registered e-mail and password</h4>

	      <h5><small class="center" id="login_error" style="color: red;"></small></h5>
	      <form action="">

	      	<div class="row">

	        <div class="input-field col s12">
	          <input onkeypress="return isEmail(event);" id="email_login" type="email" class="validate">
	          <label for="email">Email</label>
	        </div>

		    <div class="input-field col s12">
	          <input id="password_login" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	        
		  </div>

		  <a href="javascript:void(0)" class="modal-close waves-effect waves-light btn" id="login_btn" style="background: #ee6e73 !important;">Login</a>
	      	
	      </form>
	    </div>
	  </div>
  </section>