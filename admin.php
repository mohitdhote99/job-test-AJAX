<?php include 'header.php';?>

<section class="heading_">
	<h1>ADMIN PANNEL</h1>
	<span>-:All Registed Candidates List:-</span>
</section>
<section id="admin_section">
	<div>
		<table id="JT_List">
			<thead class="JT_thead"><tr>
				<th>EMAIL</th>
				<th>NAME</th>
				<th>CONTACT</th>
				<th>DOB</th>
				<th>GENDER</th>
				<th>TIME</th>
				<th>RESULT</th>
				<th>PINCODE</th>
				<th>ACTIONS</th>
			</tr></thead>
			<tbody></tbody>
		</table>
		<div class="clr MT" id="paginat_margin">
				<!-- <div class="FR">kjnknik</div> -->
		</div>
	</div>
</section>
	<!-- <h1 class="NO_REGIS_FOUND">No Registration Found Sorry !</h1> -->
<!-- succes popup -->
</div></section>

<section id="JT_modal"><div>
<form method="post" id="jobTestupdate" enctype="multipart/form-data">
<div>
<h1 style="color:var(--theme-color);text-align:center" class="MB">update Form:-</h1>
	<section id="for_reset">
		<input type="hidden" name="id">
		<div class="clr two">
			<div class="FL">
				<label>Email</label>
				<div class="JT_input"><input type="email" name="jt_email_up"></div>
				<p class="error jt_email_up"></p>
			</div>
			<div class="FR">
				<label>Name</label>
				<div class="JT_input"><input type="text" name="name"></div>
				<p class="error name"></p>
			</div>
		<!-- perform on url method -->
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
</form>
<!-- submit reset-->
	<section class="_cent_lay">
		<div class="clr">
			<div class="FL ML"><button class="CP JT_buttn jtupdate" id="JT_Udate">update</button></div>
			<div class="FL"><button class="CP JT_buttn RESet_">reset</button></div>
		</div>
	</section>
<!-- submit reset-->
		</div>
	</section>
<?php include 'footer.php';?>