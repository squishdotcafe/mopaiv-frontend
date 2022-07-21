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
		<h4>User's Clubs</h4>
		<div class="card">
			<div class="card-body pb-0">
				<!-- <div class="text-muted mb-16">(username) is not in any clubs.</div> -->
				<div class="row text-center">
					<?php for ($i = 1; $i <= 24; $i++): ?>
						<div class="col-6 col-md-4 col-lg-2 mb-16">
							<a href="/clubs/club/1">
								<img src="/cdn/club.png">
								<div class="text-truncate">Club</div>
							</a>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</div>
		<div class="paginator">
			<button class="btn btn-danger"><i class="fas fa-angle-double-left"></i></button>
			<span class="details">1 of 99</span>
			<button class="btn btn-success"><i class="fas fa-angle-double-right"></i></button>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>