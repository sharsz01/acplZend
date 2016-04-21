<div id="userManagement" class="tab-pane fade">
    <h3 style="float: left;">User Management</h3>
    <div id="userControls">
		<div id="updatePassword">
			<button id="updatePasswordBtn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#passwordModal">Update Password</button>
		</div>
		<?php
			if((isset($_SESSION['user']) AND ($_SESSION['user']=='admin')) OR (isset($_COOKIE['user']) AND ($_COOKIE['user']=='admin')))
			{
				echo '<br>
					<div id="addNewUser">
						<button id="addNewUserBtn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#newUserModal">Add New User</button>
					</div>';
			}
		?>
	</div>
	
    <form id="newPasswordForm" name="newPasswordForm" method="post" action="userControls/updatePassword.php">
		<div id="passwordModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Update Password</h4>
					</div>
					<div class="modal-body">
						<?php
							$username;
							if(isset($_COOKIE['user']))
							{
								$username = $_COOKIE['user'];
							}
							else if(isset($_SESSION['user']))
							{
								$username = $_SESSION['user'];
							}
							echo '<div class="form-group">
									<label for="usr">Username</label>
									<input type="text" readonly value="'.$username.'" class="form-control" name="username" id="usr">
								</div>';
						?>
						<div class="form-group">
							<label for="currentPassword">Enter current password</label>
							<input type="password" placeholder="Password" class="form-control" name="currentPassword" id="currentPassword">
						</div>
						<div class="form-group">
							<label for="newPassword">Enter new password</label>
							<input type="password" placeholder="New Password" class="form-control" name="newPassword" id="newPassword">
						</div>
						<div class="form-group">
							<label for="newPasswordAgain">Confirm new password</label>
							<input type="password" placeholder="New Password" class="form-control" name="newPasswordAgain" id="newPasswordAgain">
						</div>
					</div>
					<div class="modal-footer">
						<button id="savePassword" type="submit" class="btn btn-primary">Save</button>
						<button id="cancelPassword" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	
	<form id="newUserForm" name="newUserForm" method="post" action="userControls/addUser.php">
		<div id="newUserModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add New User</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="currentPassword">Enter New Username</label>
							<input type="text" placeholder="Username" class="form-control" name="newUsername" id="newUsername">
						</div>
						<div class="form-group">
							<label for="newPassword">Enter password</label>
							<input type="password" placeholder="Password" class="form-control" name="newUserPassword" id="newUserPassword">
						</div>
						<div class="form-group">
							<label for="newPasswordAgain">Confirm password</label>
							<input type="password" placeholder="Password" class="form-control" name="newUserPasswordAgain" id="newUserPasswordAgain">
						</div>
					</div>
					<div class="modal-footer">
						<button id="savePassword" type="submit" class="btn btn-primary">Save</button>
						<button id="cancelPassword" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
