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
		<div class="row mb-2">
			<div class="col">
				<h4>Clubs</h4>
			</div>
			<div class="col text-right">
				<a href="/market/create" class="btn btn-sm btn-success">
					<i class="fas fa-plus"></i>
					<span>Create</span>
				</a>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<form>
					<div class="input-group">
						<input class="form-control" type="text" name="search" placeholder="Search for clubs...">
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
			<?php for ($i = 1; $i <= 16; $i++): ?>
				<div class="col-md-3 text-center mb-3">
					<div class="card club-holder">
						<a href="/clubs/club/1">
							<img class="club-logo" src="/cdn/club.png">
						</a>
						<div class="club-info card-body">
							<div class="text-truncate">
								<a href="/clubs/club/1" style="color:inherit;">Club</a>
							</div>
							<div class="text-truncate text-muted" style="font-size:15px;margin-top:-3px;">
								<i class="fas fa-user-friends" style="font-size:15px;width:20px;"></i>
								<span>420</span>
							</div>
							<div style="font-size:14px;height:55px;overflow:hidden;margin-top:8px;">mopaiv deez nuts</div>
						</div>
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