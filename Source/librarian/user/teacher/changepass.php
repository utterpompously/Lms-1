<?php 
     session_start();
    if (!isset($_SESSION["teacher"])) {
        ?>
            <script type="text/javascript">
                window.location="login.php";
            </script>
        <?php
    }
    include 'inc/header.php';
    include 'inc/connection.php';
 ?>
	<!--dashboard area-->
	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="left">
							<p><span>dashboard</span>Control panel</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							<a href="dashboard.php"><i class="fas fa-home"></i>home</a>
							<span class="disabled">change password</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form action="" class="pass-content">
							<b>Type New Password:</b>
							<input type="password" class="form-control mt-10" name="cpassword" placeholder="type new password">
							<br>
							<b>Conform Password:</b>
							<input type="password" class="form-control mt-10" name="conpass" placeholder="conform password">
							<br>
							<input type="submit" name="submit" class="btn btn-info" value="Change Password">
						</form>
					</div>
				</div>
			</div>					
		</div>
	</div>
	<?php 
		include 'inc/footer.php';
	 ?>