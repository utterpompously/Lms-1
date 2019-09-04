<?php 
    session_start();
    if (!isset($_SESSION["username"])) {
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
							<span class="disabled">send message to teacher</span>
						</div>
					</div>
				</div>
				<div class="sendMessage">
					<form action="" method="post" name="form1" class="col-lg-6" enctype="multipart/form-data">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td>
                                  <select name="dusername" class="form-control">
	                                    <option value="">nahid22(1001)</option>
	                                    <option value="">joyho(1002)</option>
	                                    <option value="">shuvo22(1003)</option>
	                                    <option value="">nahid001(1004)</option>
                                  </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="Enter title" name="title">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea name="msg" class="form-control" placeholder="Message here...."></textarea>
                                </td>
                            </tr>
                            <tr>
                        </table>
                        <input type="submit" name="submit" value="Send Message" class="btn btn-info">
                    </form>
				</div>
			</div>					
		</div>
	</div>
	<?php 
		include 'inc/footer.php';
	 ?>