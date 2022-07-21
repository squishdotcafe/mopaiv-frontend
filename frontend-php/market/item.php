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
			<div class="col-lg-9">
				<h4>Item</h4>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 text-center has-border-right">
								<img src="/cdn/avatar.png">
							</div>
							<div class="col-md-8">
								<div class="row">
									<div class="col-md-5 text-center hide-sm">
										<a href="/profile/User">
											<img src="/cdn/avatar.png">
											<div class="text-truncate">User</div>
										</a>
									</div>
									<div class="col-md-7">
										<?php if (LOGGED_IN): ?>
											<button class="btn btn-block btn-sm btn-success mb-2">Buy for &nbsp;<i class="currency"></i> 10</button>
											<a href="/market/item/1/edit" class="btn btn-block btn-sm btn-primary mb-2">Edit</a>
										<?php endif; ?>
										<div class="card" style="box-shadow:none;margin-bottom:0;">
											<div class="card-body" style="padding:8px 10px;">
												<div class="text-muted" style="font-size:14px;">STATISTICS</div>
												<div>
													<strong>Created:</strong>
													<span>Jan 3, 2021</span>
												</div>
												<div>
													<strong>Last Updated:</strong>
													<span>3 minutes ago</span>
												</div>
												<div class="show-sm-only">
													<strong>Creator:</strong>
													<a href="/profile/User">User</a>
												</div>
												<div>
													<strong>Type:</strong>
													<span>Hat</span>
												</div>
												<div>
													<strong>Sales:</strong>
													<span>113</span>
												</div>
												<!-- Show if Exclusive -->
												<div>
													<strong>Stock Remaining:</strong>
													<span>3</span>
												</div>
											</div>
										</div>
									</div>
									<!-- Show if has description -->
									<div class="col-12 mt-3">
										<div class="card" style="box-shadow:none;margin-bottom:0;">
											<div class="card-body" style="padding:8px 10px;">
												<div class="text-muted" style="font-size:14px;">DESCRIPTION</div>
												<div>This is an item description.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<h4>Other Suggested Items</h4>
				<div class="row mb-16">
					<?php for ($i = 1; $i <= 4; $i++): ?>
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
									<div class="text-truncate"><a href="/market/item/1" style="color:inherit;">Item</a></div>
									<div class="text-truncate font-weight-light" style="font-size:15px;margin-top:-3px;">Creator: <a href="/profile/user">User</a></div>
									<?php if ($i <= 3): ?>
										<div><i class="currency"></i> 10</div>
									<?php else: ?>
										<div class="font-weight-light text-muted">Offsale</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endfor; ?>
				</div>
				<!-- only if exclusive -->
				<h4>Resellers</h4>
				<div class="card">
					<div class="card-body pb-0">
						<!-- <div class="text-muted mb-16">No one is reselling this item.</div> -->
						<div class="row mb-16">
							<div class="col-4 col-md-3 col-lg-2 text-center">
								<a href="/profile/User">
									<img src="/cdn/avatar.png">
								</a>
							</div>
							<div class="col-8 col-md-9 col-lg-10 align-self-center">
								<a href="/profile/User"><h5><div class="text-truncate">User</div></h5></a>
								<button class="btn btn-success mt-2">Buy for &nbsp;<i class="currency"></i> 100</button>
							</div>
						</div>
					</div>
				</div>
				<h4>Item Comments</h4>
				<div class="card">
					<div class="card-body pb-0">
						<?php if (LOGGED_IN): ?>
							<form>
								<textarea class="form-control mb-3" name="comment" placeholder="Write your comment here..." rows="5" required></textarea>
								<button class="btn btn-success" type="submit">Post</button>
							</form>
							<hr>
						<?php endif; ?>
						<!-- <div class="text-muted mb-16">This item has no comments.</div> -->
						<?php for ($i = 1; $i <= 10; $i++): ?>
							<div class="row mb-16">
								<div class="col-4 col-md-3 col-lg-2 text-center">
									<a href="/profile/User">
										<img src="/cdn/avatar.png">
									</a>
								</div>
								<div class="col-8 col-md-9 col-lg-10">
									<div>
										<a href="/profile/User" style="font-size:18px;">User</a>
										<span class="text-muted ml-2" style="font-size:12px;"><i class="fas fa-clock"></i> 15 minutes ago</span>
										<a href="/report" class="float-right text-muted"><i class="fas fa-flag"></i></a>
									</div>
									<div>I own the 100th cap NO CAP</div>
								</div>
							</div>
						<?php endfor; ?>
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