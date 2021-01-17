<?php 
    require "admin/layout/head-admin.php";
    require "dao/admin.php";
?>
<?php 
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$admin = admin_select_by_email($email);
		if( $admin != null){
			if($admin['Password'] == $password)
			{
				$_SESSION['admin'] = [
					'id' => $admin['AdminID'],
					'name' => $admin['NameAdmin'],
					'email' => $admin['Email']
				];
				
			}else{
                $mes = 'Mật khẩu không chính xác';
                echo '<script language="javascript">';
                echo 'alert('.$mes.')';
                echo '</script>'; 
            }
            echo'<script>
					window.location.assign("admin.php?page=tour")
				</script>';
		}else{
            $mes = 'Tài khoản không tồn tại';
            echo '<script language="javascript">';
            echo 'alert('.$mes.')';
            echo '</script>'; 
		}
	}
?>     
<!-- Begin Preloader -->
<div id="preloader">
    <div class="canvas">
        <img src="admin/assets/img/last_logo.png" alt="logo" class="loader-logo">
        <div class="spinner"></div>   
    </div>
</div>
<!-- End Preloader -->
<!-- Begin Container -->
<div class="container-fluid no-padding h-100">
    <div class="row flex-row h-100 bg-white">
        <!-- Begin Left Content -->
        <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
            <div class="elisyam-bg background-01">
                <div class="elisyam-overlay overlay-01"></div>
                <div class="authentication-col-content mx-auto">
                    <h1 class="gradient-text-01">
                        Xin chào Nhóm Nicetrip!
                    </h1>
                    <span class="description">
                        Chúc nhóm có một buổi sáng tốt lành!!!
                    </span>
                </div>
            </div>
        </div>
        <!-- End Left Content -->
        <!-- Begin Right Content -->
        <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
            <!-- Begin Form -->
            <div class="authentication-form mx-auto">
                <div class="logo-centered">
                    <a href="db-default.html">
                        <img src="admin/assets/img/last_logo.png" alt="logo">
                    </a>
                </div>
                <h3>Đăng nhập bằng tài khoản Admin</h3>
                <form method='post' action=''>
                    <div class="group material-input">
                        <input type="text" name='email' required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Tên đăng nhập</label>
                    </div>
                    <div class="group material-input">
                        <input type="password"  name='password' required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Mật khẩu</label>
                    </div>
                    <div class="sign-btn text-center">
                        <button name="submit" type="submit" class="btn btn-lg btn-gradient-01"> Vào thôi</button>                    
                    </div>
                </form>
                <div class="row">
                    <div class="col text-right">
                        <a href="pages-forgot-password.html">Quên mật khẩu ?</a>
                    </div>
                </div>
                
            </div>
            <!-- End Form -->                        
        </div>
        <!-- End Right Content -->
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->
<?php 
    require "admin/layout/foot-admin.php";
?>