<section class="registermodal">
	<div id="modal2" class="modal">
	    <div class="modal-content center">
	      <h4>Đăng ký ngay!</h4>
	      <h5><small class="center" id="reg_error" style="color: red;"></small></h5>
	      <form>
	      	<div class="row">
	      	<div class="input-field col s12">
	          <input onkeypress="return isAlphaNumSpace(event);" id="name_reg" type="text" class="validate">
	          <label for="name_reg">Tên</label>
	        </div>

	        <div class="input-field col s12">
	          <input onkeypress="return isEmail(event);" id="email_reg" type="email" class="validate">
	          <label for="email_reg">Email</label>
	        </div>

	    </div>

	    <div class="row">
		    <div class="input-field col s6">
	          <input id="password_reg" type="password" class="validate">
	          <label for="password_reg">Mật khẩu</label>
	        </div>

	        <div class="input-field col s6">
	          <input id="con_password_reg" type="password" class="validate">
	          <label for="con_password_reg">Nhập lại mật khẩu</label>
	        </div>
		  </div>

		  <a href="javascript:void(0)" id="submit_reg" class="waves-effect waves-light btn" style="background: #ee6e73 !important;">Đăng ký</a>
	      	
	      </form>
	    </div>
	  </div>
  </section>