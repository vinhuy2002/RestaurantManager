<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form action="/Register" method="POST">
					@csrf
					<center><b>ĐĂNG KÝ NHÀ HÀNG</b></center>
					<br>

					<div class="form-outline mb-4">
						<input type="input" id="form2Example1" class="form-control" name="tennhahang" />
						<label class="form-label" for="form2Example1" >Tên nhà hàng</label>
					</div>

					<div class="form-outline mb-4">
						<input type="input" id="form2Example1" class="form-control" name="diachi"/>
						<label class="form-label" for="form2Example1" >Địa chỉ</label>
					</div>

					<div class="form-outline mb-4">
						<input type="input" id="form2Example1" class="form-control" name="sdt"/>
						<label class="form-label" for="form2Example1" >Số điện thoại</label>
					</div>

					<div class="form-outline mb-4">
						<input type="email" id="form2Example1" class="form-control" name="email"/>
						<label class="form-label" for="form2Example1" >Email</label>
					</div>

					<div class="form-outline mb-4">
						<input type="input" id="form2Example1" class="form-control" name="tendangnhap"/>
						<label class="form-label" for="form2Example1">Tên đăng nhập</label>
					</div>

					<div class="form-outline mb-4">
						<input type="password" id="form2Example2" class="form-control" name="mk1"/>
						<label class="form-label" for="form2Example2">Mật khẩu</label>
					</div>

					<div class="form-outline mb-4">
						<input type="password" id="form2Example2" class="form-control" name="mk2" />
						<label class="form-label" for="form2Example2">Nhập lại mật khẩu</label>
					</div>


					<button type="submit" class="btn btn-primary btn-block mb-4">Đăng ký</button>

					<div class="text-center">
						<p>Đã có tài khoản? 
							<a href="#!" data-mdb-dismiss="modal" data-mdb-toggle="modal" data-mdb-target="#login">Đăng nhập</a>
						</p>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>