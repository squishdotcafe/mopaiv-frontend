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
			<div class="col-md-8 col-lg-6">
				<h4>Account Suspended</h4>
				<div class="card">
					<div class="card-body">
						<p>Suspensions are serious, and multiple violations of rules we expect our community to adhere to may result in permanent closure of your account.</p>
						<hr>
						<div><strong>Reason:</strong></div>
						<div class="mb-3">Spreading False Information, I, Mikeal, am NOT MilanoTwo.</div>
						<div><strong>Suspended Since:</strong></div>
						<div class="mb-3">January 25h, 2022 3:32 AM PST</div>
						<div><strong>Suspended Until:</strong></div>
						<div>January 28th, 2022 3:32 AM PST</div>
						<hr>
						<div class="text-center">
							<button class="btn btn-success" disabled>Reactivate</button>
							<!-- enable when can reactivate -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>