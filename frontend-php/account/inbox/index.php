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
			<div class="col-lg-10">
				<h4>Inbox</h4>
				<div class="card">
					<div class="card-body" style="padding-bottom:0;">
						<nav class="nav nav-pills flex-column flex-sm-row text-center">
							<div class="flex-sm-fill nav-link active cat">Incoming</div>
							<div class="flex-sm-fill nav-link cat">Sent</div>
							<div class="flex-sm-fill nav-link cat">History</div>
						</nav>
						<hr style="margin-bottom:0;">
						<!-- <p class="mt-3 mb-16">error here</p> -->
						<div class="has-divider" style="padding-top:16px;padding-bottom:16px;">
							<div class="text-truncate">
								<a href="/account/inbox/message" style="color:inherit;font-size:20px;font-weight:600;">title</a>
								<div class="text-muted" style="font-size:17px;margin-top:-4px;">
									<span>From <a href="/profile/User">User</a>, 3 minutes ago</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="paginator">
					<button class="btn btn-danger"><i class="fas fa-angle-double-left"></i></button>
					<span class="details">1 of 99</span>
					<button class="btn btn-success"><i class="fas fa-angle-double-right"></i></button>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>