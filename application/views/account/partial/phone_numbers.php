<div class="container">
	<form id="number_form">
			<?php
				//number 1 start from here
				if($phoneNumber === false){
					echo "<div class='form-group'>";
					echo "<label>Phone Number</label>";
					echo "<input type='text' id='number_1' name='number_1' class='form-control' placeholder='Enter your phone number'>";
					echo "<button class='btn btn-sm btn-success' id='save_1' style='margin-top:5px;'>Save</button>";
					echo "</div>";
					//number 2 start from here

					echo "<div class='form-group'>";
					echo "<label>Phone Number</label>";
					echo "<input type='text' id='number_2' name='number_2' class='form-control' placeholder='Enter your phone number'>";
					echo "<button class='btn btn-sm btn-success' id='save_2' style='margin-top:5px;'>Save</button><br>";
					echo "</div>";
					//number 2 end from here

					//number 3 start from here
					echo "<div class='form-group'>";
					echo "<label>Phone Number</label>
					";
					echo "<input type='text' name='number_3' class='form-control' placeholder='Enter your phone number'>";
					echo "<button class='btn btn-sm btn-success' id='save_3' style='margin-top:5px;'>Save</button><br>";
					echo "</div>";
					//number 3 end from here
				}else{
					echo "<div class='form-group'>";
					echo "<label>Phone number</label>";
					echo "<input type='text' id='number_1' name='number_1' class='form-control' disabled='true' value='".$phoneNumber->phone_1."'>";
					echo "<button class='btn btn-sm btn-success' id='save_save_1' style='margin-top:5px;'>Save</button>";
					echo "<button class='btn btn-sm btn-warning' id='edit_1' style='margin-top:5px;'>Edit</button>";
					echo "</div>";

					if($phoneNumber->phone_3 != "NULL" && $phoneNumber->phone_2 == "NULL"){
						//phone 3 start from here
					echo "<div class='form-group'>";
					echo "<label>Phone number</label>";
					echo "<input type='text' id='number_3' name='number_3' class='form-control' disabled='true' value='".$phoneNumber->phone_3."'>";
					echo "<button class='btn btn-sm btn-success' id='save_save_3' style='margin-top:5px;'>Save</button>";
					echo "<button class='btn btn-sm btn-warning' id='edit_3' style='margin-top:5px;'>Edit</button>";
					echo "<button class='btn btn-sm btn-danger' id='del_3' style='margin-left:5px;'>Delete</button>";
					echo "</div>";
						//phone 3 end from here

						//phone 2 start from here
					echo "<div class='form-group'>";
					echo "<label>Phone Number</label>";
					echo "<input type='text' id='number_2' name='number_2' class='form-control' placeholder='Enter your phone number'>";
					echo "<button class='btn btn-sm btn-success' id='save_2' style='margin-top:5px;'>Save</button><br>";
					echo "</div>";
						//phone 2 end from here
					}else{

						if($phoneNumber->phone_2 != "NULL"){

							echo "<div class='form-group'>";
							echo "<label>Phone number</label>";
							echo "<input type='text' id='number_2' name='number_2' class='form-control' disabled='true' value='".$phoneNumber->phone_2."'>";
							echo "<button class='btn btn-sm btn-success' id='save_save_2' style='margin-top:5px;'>Save</button>";
							echo "<button class='btn btn-sm btn-warning' id='edit_2' style='margin-top:5px;'>Edit</button>";
							echo "<button class='btn btn-sm btn-danger' id='del_2' style='margin-left:5px;'>Delete</button>";
							echo "</div>";

						}else{

							echo "<div class='form-group'>";
							echo "<label>Phone Number</label>";
							echo "<input type='text' id='number_2' name='number_2' class='form-control' placeholder='Enter your phone number'>";
							echo "<button class='btn btn-sm btn-success' id='save_2' style='margin-top:5px;'>Save</button><br>";
							echo "</div>";

						}


						if($phoneNumber->phone_3 != "NULL"){
							echo "<div class='form-group'>";
							echo "<label>Phone number</label>";
							echo "<input type='text' id='number_3' name='number_3' class='form-control' disabled='true' value='".$phoneNumber->phone_3."'>";
							echo "<button class='btn btn-sm btn-success' id='save_save_3' style='margin-top:5px;'>Save</button>";
							echo "<button class='btn btn-sm btn-warning' id='edit_3' style='margin-top:5px;'>Edit</button>";
							echo "<button class='btn btn-sm btn-danger' id='del_3' style='margin-left:5px;'>Delete</button>";
							echo "</div>";
						}else{

							echo "<div class='form-group'>";
							echo "<label>Phone Number</label>
							";
							echo "<input type='text' id='number_3' name='number_3' class='form-control' placeholder='Enter your phone number'>";
							echo "<button class='btn btn-sm btn-success' id='save_3' style='margin-top:5px;'>Save</button><br>";
							echo "</div>";

						}

					}

				}
			?>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#save_save_1").hide();
		$("#save_save_2").hide();
		$("#save_save_3").hide();
	});
	$("#save_1").click(function(event){
		event.preventDefault();
		var btn = document.getElementById("save_1");
		$.ajax({
			url:"<?php echo base_url('/index.php/UserDataProcessor/editNumber'); ?>",
			data:{number:$("#number_1").val(),placeHolder:1},
			dataType:"json",
			type:"POST",
			beforeSend:function(){

			},success:function(respData){
				var comments = 86;
				$("#load_contact_info").load("<?php echo base_url('/index.php/UserDataProcessor/loadPhoneNumbers'); ?>",{phpcomments : comments},function(){
                    $("#contact_loading").hide();
                 });
			}
		});
	});

	$("#save_2").click(function(event){
		event.preventDefault();
		var btn = document.getElementById("save_2");
		$.ajax({
			url:"<?php echo base_url('/index.php/UserDataProcessor/editNumber'); ?>",
			data:{number:$("#number_2").val(),placeHolder:2},
			dataType:"json",
			type:"POST",
			beforeSend:function(){

			},success:function(respData){
				var comments = 86;
				$("#load_contact_info").load("<?php echo base_url('/index.php/UserDataProcessor/loadPhoneNumbers'); ?>",{phpcomments : comments},function(){
                    $("#contact_loading").hide();
                 });
			}
		});
	});

	$("#save_3").click(function(event){
		event.preventDefault();
		var btn = document.getElementById("save_3");
		$.ajax({
			url:"<?php echo base_url('/index.php/UserDataProcessor/editNumber'); ?>",
			data:{number:$("#number_3").val(),placeHolder:3},
			dataType:"json",
			type:"POST",
			beforeSend:function(){

			},success:function(respData){
				var comments = 86;
				$("#load_contact_info").load("<?php echo base_url('/index.php/UserDataProcessor/loadPhoneNumbers'); ?>",{phpcomments : comments},function(){
                    $("#contact_loading").hide();
                 });
			}
		});
	});

	$("#edit_1").click(function(event){
		event.preventDefault();
		document.getElementById("number_1").removeAttribute("disabled");$("#number_1").val(null);
		$("#save_save_1").show();$("#edit_1").hide();
	});

	$("#save_save_1").click(function(event){
		event.preventDefault();
		var btn = document.getElementById("save_1");
		$.ajax({
			url:"<?php echo base_url('/index.php/UserDataProcessor/editNumber'); ?>",
			data:{number:$("#number_1").val(),placeHolder:1},
			dataType:"json",
			type:"POST",
			beforeSend:function(){

			},success:function(respData){
				var comments = 86;
				$("#load_contact_info").load("<?php echo base_url('/index.php/UserDataProcessor/loadPhoneNumbers'); ?>",{phpcomments : comments},function(){
                    $("#contact_loading").hide();
                 });
			}
		});
	});
</script>