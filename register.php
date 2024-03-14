<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<h4 class="card-title mt-2">สมัครสมาชิก</h4>
</header>
<article class="card-body">
<form method="post" action="register_action.php">
	<div class="form-row">
		<div class="col form-group">
			<label>ชื่อ-สกุล</label>   
		  	<input type="text" name="name" class="form-control" placeholder="">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>ชื่อผู้ใช้</label>
		  	<input type="text" name="username" class="form-control" placeholder=" ">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>อีเมล</label>
		<input type="email" name="email" class="form-control" placeholder="">
	</div> <!-- form-group end.// -->
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>คณะ</label>
		  <input type="text" name="faculty" class="form-control">
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>สถานะ</label>
		  <select id="inputState" name="status" class="form-control">
		      <option selected="">นักศึกษา</option>
		      <option >เจ้าหน้าที่</option>
		      <option >อาจารย์</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-group">
		<label>รหัสผ่าน</label>
	    <input class="form-control" name="password" type="password">
	</div>
    <div class="form-group">
		<label>ยืนยัน รหัสผ่าน</label>
	    <input class="form-control" name="confirmpassword" type="password">
	</div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> ยืนยัน </button>
    </div> <!-- form-group// -->                                               
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">กลับไปที่<a href="login.php">เข้าสู้ระบบ</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->