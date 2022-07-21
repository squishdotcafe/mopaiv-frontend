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
		let username, password, passwordConf;
		
		$(document).ready(function() {
			$('#username').submit(function(event) {
				event.preventDefault();
				
				let check = $(this).find('[name="username"]').val();
				
				if (check == username)
					return;
				
				username = check;
				
				$.post('/api/username', { username }).done(function(response) {
					if (response.err) {
						$('#uErr').show();
						$('#uErrText').html(response.err);
					} else {
						$('#usernameStep').slideToggle(100, function() {
							$('#passwordStep').slideToggle();
						});
					}
				});
			});
			
			$('#password').submit(function(event) {
				event.preventDefault();
				
				password = $(this).find('[name="password"]').val();
				passwordConf = $(this).find('[name="passwordConf"]').val();
				
				if (password != passwordConf) {
					$('#pErr').show();
					$('#pErrText').html('Passwords do not match.');
				} else {
					// only handle the first part because the browser form api already checks for length and stuff
					// and u validate it on the server at the last step anyway
					$('#passwordStep').slideToggle(100, function() {
						$('#finishStep').slideToggle();
					});
				}
			});
		});
		
		function ccb(ke) {
			$.post('/api/' + ke, {
				umds: username,
				ojna: password,
				cpaw: passwordConf,
				safo: 'ss'
			}).done(function(response) {
				if (response == 'success')
					window.location = '/dash';
				else {
					$('#finishStep').slideToggle(100, function() {
						let error = '#uErr', step = '#usernameStep';
						
						if ((response.toLowerCase()).includes('password'))
							error = '#pErr', step = '#passwordStep';
						
						$(error).show();
						$(error + 'Text').html(response);
						$(step).slideToggle();
					});
				}
			}).fail(function(p) {
				console.log(p); // WHY THE FUCK
				$('#finishStep').slideToggle(100, function() {
					$('#uErr').show();
					$('#uErrText').html('Please confirm you have a valid network connection, then try again.');
					$('#usernameStep').slideToggle();
				});
			});
		}
	</script>
</head>
<body>
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/navbar.php"); ?>
    
    <main class="container">
		<div class="row justify-content-center py-5">
			<div class="col-md-10 col-lg-6 align-self-center text-center">
				<div id="usernameStep">
					<h3 class="font-weight-bold">Welcome to Mopaiv!</h3>
					<h4 class="mb-4">Lets get started by choosing a username.</h4>
					<form id="username">
						<div class="input-group">
							<input class="form-control" type="text" name="username" placeholder="JohnDoe" maxlength="20" required>
							<div class="input-group-append">
								<button id="seaca" class="btn btn-success" type="submit">
									<i class="fas fa-arrow-right"></i>
								</button>
							</div>
						</div>
						<div class="text-danger text-left mt-2" id="uErr" style="display:none;">
							<i class="fas fa-times-circle mr-1"></i>
							<strong id="uErrText"></strong>
						</div>
					</form>
				</div>
				<div id="passwordStep" style="display:none;">
					<h3 class="font-weight-bold">Password</h3>
					<h4 class="mb-4">Be sure to make this as secure as possible!</h4>
					<form id="password">
						<div class="row">
							<div class="col-md-6 mb-3">
								<input class="form-control" type="password" name="password" placeholder="Password" minlength="6" maxlength="72" required>
							</div>
							<div class="col-md-6 mb-3">
								<input class="form-control" type="password" name="passwordConf" placeholder="Confirm Password" minlength="6" maxlength="72" required>
							</div>
						</div>
						<button class="btn btn-block btn-success">
							<i class="fas fa-arrow-right"></i>
						</button>
						<div class="text-danger text-left mt-2" id="pErr" style="display:none;">
							<i class="fas fa-times-circle mr-1"></i>
							<strong id="pErrText"></strong>
						</div>
					</form>
				</div>
				<div id="finishStep" style="display:none;">
					<h3 class="font-weight-bold">Complete Registration</h3>
					<h4 class="mb-4">Verify yourself and you're set!</h4>
					<div>[imagine a captcha here and trigger signup request once its done. also add "d-inline-block" to captcha element.]</div>
					<button class="btn btn-primary" onclick="ccb('mommy')">pass</button>
					<button class="btn btn-warning" onclick="ccb('bozo')">name</button>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>