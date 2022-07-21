<!--
MIT License

Copyright (c) 2021-2022 FoxxoSnoot

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/head.php"); ?>
	<script>
		// dont forget this js... not needed but, its cool !!!!!!!!!!!!!!!!!!!!
		// make default page title "Account Settings - Mopaiv"
		$(document).ready(function() {
			$('#settingsSidebar [data-toggle="tab"]').click(function() {
				var tab = $(this).text();
				
				$('#tabName').text(tab);
				document.title = `${tab} Settings - Mopaiv`;
			});
		});
	</script>
</head>
<body>
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/navbar.php"); ?>
    
	<main class="container">
		<h4 id="tabName">Account</h4>
		<div class="row">
			<div class="col-md-3 col-lg-2">
				<nav class="nav nav-pills nav-justified flex-column flex-row" id="settingsSidebar">
					<div href="[data-tab='account']" class="nav-link flex-fill mb-2 active" data-toggle="tab">Account</div>
					<div href="[data-tab='privacy']" class="nav-link flex-fill mb-2" data-toggle="tab">Privacy</div>
					<div href="[data-tab='security']" class="nav-link flex-fill mb-2" data-toggle="tab">Security</div>
					<div href="[data-tab='billing']" class="nav-link flex-fill" data-toggle="tab">Billing</div>
				</nav>
				<div class="mb-3 show-sm-only"></div>
			</div>
			<div class="col-md-9 col-lg-10">
				<div class="tab-content">
					<div class="tab-pane active show" data-tab="account">
						<div class="card">
							<div class="card-header py-2">Information</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-4 col-lg-2">
										<i class="fad fa-key text-warning" style="text-align:center;width:30px;"></i>
										<strong>User ID:</strong>
									</div>
									<div class="col-md-8 col-lg-10">
										<span>4</span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-4 col-lg-2">
										<i class="fad fa-id-card text-success" style="text-align:center;width:30px;"></i>
										<strong>Username:</strong>
									</div>
									<div class="col-md-8 col-lg-10">
										<span>Stokeley</span>
										<button class="btn btn-sm btn-success float-right" style="font-size:11px;" data-toggle="modal" data-target="#usernameModal">
											<i class="fas fa-pencil mr-1" style="font-size:10px;"></i>
											<strong>Change</strong>
										</button>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-4 col-lg-2">
										<i class="fad fa-envelope text-primary" style="text-align:center;width:30px;"></i>
										<strong>Email:</strong>
									</div>
									<div class="col-md-8 col-lg-10">
										<span class="text-danger">None</span>
										<button class="btn btn-sm btn-success float-right" style="font-size:11px;" data-toggle="modal" data-target="#emailModal">
											<i class="fas fa-pencil mr-1" style="font-size:10px;"></i>
											<strong>Change</strong>
										</button>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-4 col-lg-2">
										<i class="fad fa-calendar-alt text-danger" style="text-align:center;width:30px;"></i>
										<strong>Join Date:</strong>
									</div>
									<div class="col-md-8 col-lg-10">
										<span>12/26/2021</span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-4 col-lg-2">
										<i class="fad fa-clock" style="text-align:center;width:30px;"></i>
										<strong>Payout At:</strong>
									</div>
									<div class="col-md-8 col-lg-10">
										<span>January 07, 2022 5:15 PM</span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-4 col-lg-2 mb-2 mb-sm-only">
										<i class="fad fa-palette text-warning" style="text-align:center;width:30px;"></i>
										<strong>Theme:</strong>
									</div>
									<div class="col">
										<select id="thy" class="form-control form-control-sm">
											<option selected="" value="0">Default</option>
											<option value="1">Dark</option>
										</select>
									</div>
									<div class="col-auto">
										<button class="btn btn-success" id="themo" style="font-size:11px;">
											<i class="fas fa-pencil mr-1" style="font-size:10px;"></i>
											<strong>Update</strong>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header py-2">Biography</div>
							<div class="card-body">
								<form id="bio">
									<textarea class="form-control mb-2" name="bio" placeholder="Write something about yourself here..." rows="4"></textarea>
									<div id="bioError"></div>
									<button class="btn btn-success mt-2" type="submit">Update</button>
								</form>
							</div>
						</div>
					</div>
					<div class="tab-pane" data-tab="privacy">
						<div class="card">
							<div class="card-header py-2">Privacy</div>
							<div class="card-body pt-3">
								<form id="privacy">
									<label for="inventory">Who can see your inventory?</label>
									<select class="form-control mb-3" name="inventory">
										<option value="everyone">Everyone</option>
										<option value="friends">Friends Only</option>
										<option value="none">No One</option>
									</select>
									<label for="inventory">Who can message you?</label>
									<select class="form-control mb-3" name="inventory">
										<option value="everyone">Everyone</option>
										<option value="friends">Friends Only</option>
										<option value="none">No One</option>
									</select>
									<label for="inventory">Who can send you trades?</label>
									<select class="form-control mb-3" name="inventory">
										<option value="everyone">Everyone</option>
										<option value="friends">Friends Only</option>
										<option value="none">No One</option>
									</select>
									<div id="privacyError"></div>
									<button class="btn btn-success" type="submit">Update</button>
								</form>
							</div>
						</div>
					</div>
					<div class="tab-pane" data-tab="security">
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-header py-2">Change Password</div>
									<div class="card-body">
										<form id="password">
											<input class="form-control mb-3" type="password" name="current_password" placeholder="Current Password" required>
											<input class="form-control mb-3" type="password" name="new_password" placeholder="New Password" required>
											<input class="form-control mb-3" type="password" name="confirm_new_password" placeholder="Confirm New Password" required>
											<div id="passwordError"></div>
											<button class="btn btn-success" type="submit">Change</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header bg-danger py-2">End All Sessions</div>
									<div class="card-body">
										<form id="sessions">
											<input class="form-control mb-3" type="password" name="password" placeholder="Confirm Password" required>
											<button class="btn btn-danger" type="submit">End All</button>
										</form>
										<div class="text-muted mt-3">By clicking "End All", you will be signed out on all other devices, except your current one.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" data-tab="billing">
						<div class="card">
							<div class="card-header bg-primary py-2">Subscription Status</div>
							<div class="card-body">
								<!-- <p>You currently do not have an active membership. You can purchase one <a href="#">here</a>!</p> -->
								<div class="row">
									<div class="col-md-5 col-lg-3">
										<i class="fad fa-crown text-warning" style="text-align:center;width:30px;"></i>
										<strong>Membership Plan:</strong>
									</div>
									<div class="col-md-7 col-lg-9">
										<span>Plus (Monthly)</span>
										<button class="btn btn-sm btn-danger float-right" style="font-size:11px;">
											<i class="fas fa-times mr-1" style="font-size:10px;"></i>
											<strong>Cancel</strong>
										</button>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-5 col-lg-3">
										<i class="fad fa-calendar-plus text-success" style="text-align:center;width:30px;"></i>
										<strong>Purchase Date:</strong>
									</div>
									<div class="col-md-7 col-lg-9">
										<span>January 07, 2022 5:15 PM</span>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-5 col-lg-3">
										<i class="fad fa-calendar-times text-danger" style="text-align:center;width:30px;"></i>
										<strong>Expiration Date:</strong>
									</div>
									<div class="col-md-7 col-lg-9">
										<span>January 07, 2022 5:15 PM</span>
									</div>
								</div>
							</div>
						</div>
						<p>idk what else to put here?? lol</p>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<div class="modal fade" id="usernameModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="username">
					<div class="modal-header">
						<h5 class="modal-title">Change Username</h5>
						<button class="close" data-dismiss="modal">
							<span>&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input class="form-control mb-3" type="text" name="username" placeholder="New Username" required>
						<input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required>
						<div id="usernameError"></div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
						<button class="btn btn-success" type="submit">Change for <i class="currency"></i> 250</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="emailModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="email">
					<div class="modal-header">
						<h5 class="modal-title">Change Email</h5>
						<button class="close" data-dismiss="modal">
							<span>&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input class="form-control mb-3" type="email" name="email" placeholder="New Email" required>
						<input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required>
						<div id="emailError"></div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
						<button class="btn btn-success" type="submit">Change</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>