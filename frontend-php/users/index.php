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
		<h4>Users</h4>
		<div class="card">
			<div class="card-body">
				<form>
					<div class="input-group">
						<input class="form-control" type="text" name="search" placeholder="Search for users...">
						<div class="input-group-append">
							<button class="btn btn-success" type="submit">
								<i class="fas fa-search"></i>
								<span class="hide-sm">Search</span>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<?php for ($i = 1; $i <= 18; $i++): ?>
				<div class="col-6 col-md-4 col-lg-2">
					<div class="card has-top	">
						<div class="card-top">
							<a href="/profile/User">
								<img src="/cdn/avatar.png">
							</a>
						</div>
						<div class="card-body py-2">
							<div class="text-truncate">
								<a href="/profile/User" class="text-reset">User</a>
							</div>
						</div>
						<div class="border-<?= ($i <= 4) ? 'online' : 'offline' ?>" style="border-bottom:6px solid;"></div>
					</div>
				</div>
			<?php endfor; ?>
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