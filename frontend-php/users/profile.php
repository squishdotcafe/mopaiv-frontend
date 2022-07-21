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
			<div class="col-md-5 col-lg-4">
				<h4>User</h4>
				<!-- show if status only -->
				<div class="card show-sm-only">
					<div class="card-body p-3">
						<strong>Personal Status:</strong>
						<span>ok im gay</span>
					</div>
				</div>
				<!-- end -->
				<div class="card text-center">
					<div class="card-body">
						<i class="status-circle online" style="font-size:13px;position:absolute;left:0;margin-left:25px;"></i>
						<img src="/cdn/avatar.png" width="85%">
						<!-- only show this below if user has desc -->
						<hr class="mb-2">
						<div class="text-left">This is my description. Nice, isn't it? :-)</div>
					</div>
				</div>
				<?php if (LOGGED_IN): ?>
					<div class="row mb-16">
						<div class="col">
							<button class="btn btn-block btn-success"><i class="fas fa-user-plus"></i></button>
						</div>
						<div class="col">
							<a href="/account/trades/send/User" class="btn btn-block btn-danger"><i class="fas fa-exchange-alt"></i></a>
						</div>
						<div class="col">
							<a href="/account/inbox/send/User" class="btn btn-block btn-primary"><i class="fas fa-envelope"></i></a>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-md-7 col-lg-8">
				<!-- show if status only -->
				<div class="card hide-sm" style="margin-top:33px;">
					<div class="card-body p-3">
						<strong>Personal Status:</strong>
						<span>ok im gay</span>
					</div>
				</div>
				<!-- end -->
				<h4>Achievements</h4>
				<div class="card">
					<div class="card-body pb-0">
						<!-- <div class="text-muted mb-16">(username) does not have any achievements.</div> -->
						<div class="row text-center">
							<div class="col-4 col-lg-2 col-md-3 mb-16">
								<a href="/achievements">
									<img src="/assets/img/achievements/admin.png">
									<div class="text-truncate">Admin</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<h4>Statistics</h4>
				<div class="card text-center">
					<div class="card-body pb-0">
						<div class="row justify-content-center">
							<div class="col-6 col-lg-4 mb-16">
								<h4>100</h4>
								<h6 class="text-muted">Profile Views</h6>
							</div>
							<div class="col-6 col-lg-4 mb-16">
								<h4>100</h4>
								<h6 class="text-muted">Discussion Posts</h6>
							</div>
							<div class="col-6 col-lg-4 mb-16">
								<h4>Jan 3, 2022</h4>
								<h6 class="text-muted">Join Date</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row mb-1">
					<div class="col">
						<h4>Friends</h4>
					</div>
					<div class="col text-right">
						<a href="/profile/friends/User" class="btn btn-sm btn-success">
							<span>View All</span>
							<i class="fas fa-angle-double-right"></i>
						</a>
					</div>
				</div>
				<div class="card">
					<div class="card-body pb-0">
						<!-- <div class="text-muted mb-16">(username) does not have any friends.</div> -->
						<div class="row text-center">
							<?php for ($i = 1; $i <= 6; $i++): ?>
								<div class="col-4 col-md-2 col-lg-4 mb-16">
									<a href="/profile/User">
										<img src="/cdn/avatar.png">
										<div class="text-truncate">User</div>
									</a>
								</div>
							<?php endfor; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row mb-1">
					<div class="col">
						<h4>Clubs</h4>
					</div>
					<div class="col text-right">
						<a href="/profile/clubs/User" class="btn btn-sm btn-success">
							<span>View All</span>
							<i class="fas fa-angle-double-right"></i>
						</a>
					</div>
				</div>
				<div class="card">
					<div class="card-body pb-0">
						<!-- <div class="text-muted mb-16">(username) is not in any clubs.</div> -->
						<div class="row text-center">
							<?php for ($i = 1; $i <= 6; $i++): ?>
								<div class="col-4 col-md-2 col-lg-4 mb-16">
									<a href="/clubs/club/1">
										<img src="/cdn/club.png">
										<div class="text-truncate">Club</div>
									</a>
								</div>
							<?php endfor; ?>
						</div>
					</div>
				</div>
			</div>
			<!-- show inventory only if user inventory isn't private :P -->
			<div class="col-12">
				<h4>Inventory</h4>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-3 col-lg-2 has-border-right">
								<nav class="nav nav-pills nav-justified flex-column flex-row">
									<div class="nav-link flex-fill mb-2 active">Hats</div>
									<div class="nav-link flex-fill mb-2">Faces</div>
									<div class="nav-link flex-fill mb-2">Gadgets</div>
									<div class="nav-link flex-fill mb-2">Shirts</div>
									<div class="nav-link flex-fill mb-2">Pants</div>
									<div class="nav-link flex-fill">Exclusives</div>
								</nav>
								<div class="mb-3 show-sm-only"></div>
							</div>
							<div class="col-md-9 col-lg-10">
								<div class="row">
									<?php for ($i = 1; $i <= 8; $i++): ?>
										<div class="col-6 col-md-3 mb-16">
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
												</div>
											</div>
										</div>
									<?php endfor; ?>
								</div>
							</div>
							<div class="col-12">
								<hr class="mt-0">
								<div class="paginator">
									<button class="btn btn-danger"><i class="fas fa-angle-double-left"></i></button>
									<span class="details">1 of 99</span>
									<button class="btn btn-success"><i class="fas fa-angle-double-right"></i></button>
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