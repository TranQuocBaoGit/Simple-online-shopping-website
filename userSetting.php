<div class="container">
		<div class="panel panel-primary" style="width: 500px; margin: 75px auto; border: 1px solid #3336a3; border-radius: 10px; padding: 2% 5%;">
			<div class="panel-heading">
				<h2 class="text-center" style="color: #61107a;">Profile</h2>

			</div>
			<div class="panel-body">
				<form method="post" action="changeProfile.php">
					<input type="hidden" class="form-control" id="email" name="page" 
					  		 value="home" style="border: 1px solid #c3c4e8;">
					<div class="form-group mb-2">
					  <label for="name" style="color: #040acf;" >Name</label>
					  <input required="true" type="text" class="form-control" id="name" name="name" 
					  		 value="<?= htmlspecialchars($_SESSION["name"] ?? "")?>" style="border: 1px solid #c3c4e8;">
					</div>
                    <div class="form-group mb-2">
					  <label for="birthdate" style="color: #040acf;" >Birthdate</label>
					  <input required="true" type="date" class="form-control" id="birthdate" name="birthdate" 
					  		 value='<?php echo $_SESSION["birthdate"] ?>' style="border: 1px solid #c3c4e8;">
					</div>
                    <div class="form-group mb-2">
					  <label for="address" style="color: #040acf;" >Address</label>
					  <input required="true" type="text" class="form-control" id="address" name="address" 
					  		 value="<?= htmlspecialchars($_SESSION["address"] ?? "")?>" style="border: 1px solid #c3c4e8;">
					</div>
					
					<button class="btn" style="width: 100%; margin: 0.5rem auto; margin-top:1rem; color: #040acf; border: 1px solid #3336a3; border-radius: 5px; background-color: #f0f0f5;">Change Profile</button>
				</form>
			</div>
		</div>
	</div>