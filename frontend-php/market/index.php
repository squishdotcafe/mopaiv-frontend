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
				<h4>Market</h4>
			</div>
			<div class="col text-right">
				<a href="/market/create" class="btn btn-sm btn-success">
					<i class="fas fa-plus"></i>
					<span>Create</span>
				</a>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<nav class="nav nav-pills flex-column flex-sm-row text-center">
					<div class="flex-sm-fill nav-link active cat">Recent</div>
					<div class="flex-sm-fill nav-link cat">Hats</div>
					<div class="flex-sm-fill nav-link cat">Faces</div>
					<div class="flex-sm-fill nav-link cat">Gadgets</div>
					<div class="flex-sm-fill nav-link cat">Shirts</div>
					<div class="flex-sm-fill nav-link cat">Pants</div>
				</nav>
				<hr>
				<div class="row">
					<div class="col-md-8 col-lg-9">
						<div class="input-group">
							<input class="form-control" type="text" id="sassa" placeholder="Search for items...">
							<div class="input-group-append">
								<button id="seaca" class="btn btn-success" type="submit">
									<i class="fas fa-search"></i>
									<span class="hide-sm">Search</span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="mb-2 show-sm-only"></div>
						<select class="form-control" id="sasort">
							<option value="new">Newest</option>
							<option value="old">Oldest</option>
							<option value="least">Least Expensive</option>
							<option value="most">Most Expensive</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<?php for ($i = 1; $i <= 8; $i++): ?>
				<div class="col-6 col-md-3">
					<div class="card has-top">
						<div class="card-top">
							<a href="/market/item/1">
								<?php if ($i == 2): ?>
									<div style="position:absolute;top:0;right:0;color:white;padding:15px;margin-top:-5px;" title="Exclusive Item">
										<i class="exclusive"></i>
									</div>
								<?php endif; ?>
								<img src="/cdn/avatar.png">
							</a>
						</div>
						<div class="card-body">
							<div class="text-truncate"><a href="/market/item/1" class="text-reset">Item</a></div>
							<div class="text-truncate" style="font-size:15px;margin-top:-3px;">Creator: <a href="/profile/user">User</a></div>
							<?php if ($i <= 3): ?>
								<div>
									<i class="currency" style="transform:scale(0.8);margin-top:-2px;"></i>
									<span>10</span>
								</div>
							<?php elseif ($i == 5): ?>
								<div class="text-danger">
									<i class="far fa-exclamation-circle" style="font-size:85%;margin-right:3px;"></i>
									<span style="font-size:15px;">Sold Out</span>
								</div>
							<?php else: ?>
								<div class="text-muted">
									<i class="far fa-times-circle" style="font-size:85%;margin-right:3px;"></i>
									<span style="font-size:15px;">Offsale</span>
								</div>
							<?php endif; ?>
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