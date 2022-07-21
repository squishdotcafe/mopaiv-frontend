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
		<div class="row">
			<div class="col-md-4">
				<h4>Avatar</h4>
				<div class="card text-center">
					<div class="card-body">
						<img src="/cdn/avatar.png" width="80%">
					</div>
				</div>
				<h4>Colors</h4>
				<div class="card">
					<div class="card-body">
						idk man will body colors be part based or full body (lazy) like last time?>??? just copy from old mopaiv if so
					</div>
				</div>
			</div>
			<div class="col-md-8">
			<h4>Inventory</h4>
				<div class="card">
					<div class="card-body pb-0">
						<nav class="nav nav-pills flex-column flex-sm-row text-center">
							<div class="flex-sm-fill nav-link active cat">Hats</div>
							<div class="flex-sm-fill nav-link cat">Faces</div>
							<div class="flex-sm-fill nav-link cat">Gadgets</div>
							<div class="flex-sm-fill nav-link cat">Shirts</div>
							<div class="flex-sm-fill nav-link cat">Pants</div>
						</nav>
						<hr>
						<!-- <div class="text-muted mb-16" style="margin-top:-6px;">You do not own any items of this type.</div> -->
						<div class="row">
							<div class="col-6 col-md-3 mb-16">
								<div class="card has-top">
									<div class="card-top">
										<button class="btn btn-success" style="padding:1px 5px;position:absolute;top:0;right:0;margin-top:5px;margin-right:5px;">
											<i class="fas fa-plus"></i>
										</button>
										<a href="/market/item/1" target="_blank">
											<img src="/cdn/avatar.png">
										</a>
									</div>
									<div class="card-body">
										<div class="text-truncate"><a href="/market/item/1" style="color:inherit;" target="_blank">Item</a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mb-16">
							<hr style="margin-top:-6px;">
							<div class="paginator">
								<button class="btn btn-danger"><i class="fas fa-angle-double-left"></i></button>
								<span class="details">1 of 99</span>
								<button class="btn btn-success"><i class="fas fa-angle-double-right"></i></button>
							</div>
						</div>
					</div>
				</div>
				<h4>Currently Wearing</h4>
				<div class="card">
					<div class="card-body pb-0">
						<!-- <div class="text-muted mb-16" style="margin-top:-6px;">You are currently not wearing any items.</div> -->
						<div class="row">
							<div class="col-6 col-md-3 mb-16">
								<div class="card has-top">
									<div class="card-top">
										<button class="btn btn-danger" style="padding:1px 5px;position:absolute;top:0;right:0;margin-top:5px;margin-right:5px;">
											<i class="fas fa-times"></i>
										</button>
										<a href="/market/item/1" target="_blank">
											<img src="/cdn/avatar.png">
										</a>
									</div>
									<div class="card-body">
										<div class="text-truncate"><a href="/market/item/1" style="color:inherit;" target="_blank">Item</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>