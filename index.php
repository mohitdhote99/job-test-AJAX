<?php include 'header.php';?>

<section class="heading_ clr">
	<h1 class="FL MR">Fill Form For Registration :-</h1>
			<div class="clr">
		<div class="FR ML"><a href="admin.php" class="JT_buttn">View Candidates List</a>
	</div>
</section>
<section id="JT"><div>
<form method="post" id="jobTestReg" enctype="multipart/form-data">
<div>
	<section id="for_reset">
		<div class="clr three">
			<div class="FL">
				<label>Email</label>
				<div class="JT_input"><input type="email" name="jt_email"></div>
				<p class="error jt_email"></p>
			</div>
			<div class="FL">
				<label>Name</label>
				<div class="JT_input"><input type="text" name="name"></div>
				<p class="error name"></p>
			</div>
		<!-- perform on url method -->
			<div class="FL">
				<label>Passsword</label>
				<div class="JT_input PASS_EYE"><input type="password" name="password">
					<label class="pass_icon CP">view</label>
				</div>
				<p class="error password"></p>
			</div>

		</div>

		<div class="clr two">
			<div class="FL">
				<label>Contact no</label>
				<div class="JT_input"><input type="text" name="number"></div>
				<p class="error number"></p>
			</div>
			<div class="FR">
				<label>Pincode</label>
				<div class="JT_input"><input type="text" name="PIN_CODE"></div>
				<p class="error PIN_CODE"></p>
			</div>
		</div>
		<!-- data array serialize -->
<!-- 		<section class="JT_main_heading"><div>Fill Form For Registration :-</div></section> -->
		<div class="clr two">
			<div>
				<label>Dob</label>
				<div class="date_Up">
					<input type="date" name="dob" id="birthday">
					<label></label>
				</div>
				<p class="error dob"></p>
			</div>
			<div class="FR">
				<label>Meeting At</label>
				<div class="Time_Up">
					<input id="time" type="time" name="time">
					<label></label>
				</div>
				<p class="error time"></p>
			</div>
		</div>
		<div class="clr">
			<div>
				<label>Fav Color</label>
				<div class="Color_Up">
					<label for="color_" class="color CP">Favourite Color</label>
					<input id="color_" type="color" name="color">
					<label class="color_set"></label>
					<label class="JT_buttn CP" id="color_check">check</label>
				</div>
				<p class="error color"></p>
			</div>
		</div>
		
		<div class="three clr">
			<div>
				<label>tenth result</label>
				<div class="clr rad">
					<div class="JT_radio">
						<input type="radio" name="tenth" value="fail" id="tenTHfail">
						<label class="my_radio CP tenTH" for="tenTHfail">Fail</label>
					</div>
					<div class="JT_radio">
						<input type="radio" name="tenth" value="pass" id="tenTHpass">
						<label class="my_radio CP tenTH" for="tenTHpass">Pass</label>
					</div>
				</div>
				<p class="error tenth"></p>
			</div>
			<div>
				<label>twelfth result</label>
				<div class="clr rad">
				<div class="JT_radio">
					<input type="radio" name="twelfth" value="fail" id="tweTHfail">
					<label class="my_radio CP tweTH" for="tweTHfail">Fail</label>
				</div>
				<div class="JT_radio">
					<input  type="radio" name="twelfth" value="pass" id="tweTHpass">
					<label class="my_radio CP tweTH" for="tweTHpass">Pass</label>
				</div>
				</div>
				<p class="error twelfth"></p>
			</div>
			<div>
				<label>Gender</label>
				<div class="clr rad">
				<div class="JT_radio">
					<input type="radio" name="gender" value="male" id="male"><label class="my_radio CP gender" for="male">Male</label></div>
				<div class="JT_radio">
					<input type="radio" name="gender" value="female" id="female"><label class="my_radio CP gender" for="female">Female</label></div>
				</div>
				<p class="error gender"></p>
			</div>
		</div>
	</section>


<!-- submit reset-->
	<section class="_cent_lay">
		<div class="clr">
			<div class="FL ML"><button class="CP JT_buttn jtSubmit" id="submit_jt">submit</button></div>
			<div class="FL"><button class="CP JT_buttn RESet_" id="reset_jt">reset</button></div>
		</div>
	</section>
<!-- submit reset-->



<div>
</form>

</div></section>
<?php include 'footer.php'; ?>