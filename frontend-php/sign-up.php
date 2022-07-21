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
</head>
<body>
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/navbar.php"); ?>
    
    <main class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 col-lg-4 text-center align-self-center hide-sm">
				<img src="/cdn/avatar.png" width="80%">
				<div class="mt-2 text-muted">One of the many possible avatars on Mopaiv</div>
			</div>
			<div class="col-md-7 col-lg-5">
				<h4>Sign Up</h4>
				<div class="card">
					<div class="card-body">
						<form>
							<input class="form-control mb-3" type="text" name="username" placeholder="Username" required>
							<input class="form-control mb-3" type="text" name="password" placeholder="Password" required>
							<input class="form-control mb-3" type="text" name="password_confirmation" placeholder="Confirm Password" required>
							<div class="row">
								<div class="col-4">
									<select class="form-control mb-3" name="day" required>
										<option>Day</option>
									</select>
								</div>
								<div class="col-4">
									<select class="form-control mb-3" name="month" required>
										<option>Month</option>
									</select>
								</div>
								<div class="col-4">
									<select class="form-control mb-3" name="year" required>
										<option>Year</option>
									</select>
								</div>
							</div>
							<button class="btn btn-block btn-success" type="submit">Sign Up</button>
						</form>
						<div class="text-muted mt-3">By clicking the "Sign Up" button, you acknowledge that you agree to our <a href="/policies/terms">Terms of Service</a> and <a href="/policies/privacy">Privacy Policy</a>.</div>
					</div>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>