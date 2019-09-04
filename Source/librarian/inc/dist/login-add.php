<?php
if (isset($_POST["login"])) {
    $count=0;
    $res= mysqli_query($link, "select * from lib_registration where username='$_POST[username]' && password= '$_POST[password]' ");
    $count = mysqli_num_rows($res);
    if ($count==0) {
        ?>
        <div class="alert alert-warning">
            <strong style="color:#333">Invalid!</strong> <span style="color: red;font-weight: bold; ">Username Or Password.</span>
        </div>
        <?php
    }
    else{
        $_SESSION["username"] = $_POST["username"];
        ?>
        <script type="text/javascript">
            window.location="dashboard.php";
        </script>
        <?php
    }
}
?>