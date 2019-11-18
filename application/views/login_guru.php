<html>

<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>
</head>

<body>

	<div class="row no-gutters w-100 h-100 justify-content-center align-items-center">
		<div class="col h-100" style="background-color:#c3f0ca">
			<img class="mx-auto d-block img-fluid" src="<?php echo base_url('assets/image/home1.png'); ?>"
				style="min-width:200px;max-height: 350px;margin-top:20%">
		</div>
		<div class="col h-100 text-light" style="background-color:#018ABE">
			<div class="d-md-flex justify-content-center align-items-center container" style="margin-top:25%">
			<form method="POST" action="actionguru">
            <label class="font-weight-bold">Login Guru</p>
            
				<div class="form-group">
					<label>NIP</label>
					<input type="text" name="nip" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<button type="submit" name="login" class="btn btn-light">Login</button>
			</form>
            </div>

		</div>

</body>

</html>
