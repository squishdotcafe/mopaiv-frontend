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
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 col-lg-3">
								<img src="/cdn/club.png" class="mb-2">
								<div class="text-truncate">
									<strong>Owner:</strong>
									<a href="/profile/User">User</a>
								</div>
								<div>
									<strong>Members:</strong>
									<span>1</span>
								</div>
								<!-- SHOW IF LOGGED INNN -->
								<div class="mb-2"></div>
								<button class="btn btn-block btn-sm btn-success">Join</button>
								<button class="btn btn-block btn-sm btn-danger">Leave</button>
								<button class="btn btn-block btn-sm btn-primary">Edit</button>
								<button class="btn btn-block btn-sm btn-warning">Create Item</button>
								<!-- /END -->
								<hr class="show-sm-only">
							</div>
							<div class="col-md-8 col-lg-9">
								<h3>Club</h3>
								<!-- <div class="text-muted">This club has no description.</div> -->
								<div style="max-height:300px;overflow-x:hidden;overflow-y:auto;">long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-4 col-md-3 col-lg-2 text-center">
								<a href="/profile/User">
									<img src="/cdn/avatar.png">
								</a>
							</div>
							<div class="col-8 col-md-9 col-lg-10 align-self-center">
								<div class="text-truncate mb-2">
									<a href="/profile/User" style="font-size:18px;">User</a>
									<span class="hide-sm">&nbsp;&nbsp;</span>
									<br class="show-sm-only">
									<span class="text-muted" style="font-size:13px;"><i class="fas fa-clock"></i> 3 minutes ago</span>
								</div>
								<div>Shout ok?</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<nav class="nav nav-pills flex-column flex-sm-row text-center">
							<div href="[data-tab='members']" class="flex-sm-fill nav-link active cat" data-toggle="tab">Members</div>
							<div href="[data-tab='relationships']" class="flex-sm-fill nav-link cat" data-toggle="tab">Relationships</div>
							<div href="[data-tab='market']" class="flex-sm-fill nav-link cat" data-toggle="tab">Market</div>
						</nav>
						<hr>
						<div class="tab-content">
							<div class="tab-pane active show" data-tab="members">
								<div class="row mb-3">
									<div class="col-md-6 offset-md-6">
										<select class="form-control">
											<option value="1">Member</option>
											<option value="254">Admin</option>
											<option value="255">Owner</option>
										</select>
									</div>
								</div>
								<div class="row" id="members">
									<!-- <div class="col text-muted">No members found.</div> -->
									<div class="col-6 col-md-3 text-center mb-2">
										<a href="/profile/User">
											<img src="/cdn/avatar.png">
											<div class="text-truncate">User</div>
										</a>
									</div>
									<div class="col-12">
										<div class="paginator">
											<button class="btn btn-danger"><i class="fas fa-angle-double-left"></i></button>
											<span class="details">1 of 99</span>
											<button class="btn btn-success"><i class="fas fa-angle-double-right"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" data-tab="relationships">
								<h4>Allies</h4>
								<div class="row" id="allies">
									<!-- <div class="col text-muted">This club has no allies.</div> -->
									<div class="col-6 col-md-3 text-center mb-2">
										<a href="/clubs/club/1">
											<img src="/cdn/club.png">
											<div class="text-truncate">Club</div>
										</a>
									</div>
									<div class="col-12">
										<div class="paginator">
											<button class="btn btn-danger"><i class="fas fa-angle-double-left"></i></button>
											<span class="details">1 of 99</span>
											<button class="btn btn-success"><i class="fas fa-angle-double-right"></i></button>
										</div>
									</div>
								</div>
								<hr>
								<h4>Enemies</h4>
								<div class="row" id="enemies">
									<!-- <div class="col text-muted">This club has no enemies.</div> -->
									<div class="col-6 col-md-3 text-center mb-2">
										<a href="/clubs/club/1">
											<img src="/cdn/club.png">
											<div class="text-truncate">Club</div>
										</a>
									</div>
									<div class="col-12">
										<div class="paginator">
											<button class="btn btn-danger"><i class="fas fa-angle-double-left"></i></button>
											<span class="details">1 of 99</span>
											<button class="btn btn-success"><i class="fas fa-angle-double-right"></i></button>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" data-tab="market">
								<form>
									<div class="input-group mb-3">
										<input class="form-control" type="text" name="search" placeholder="Search for items...">
										<div class="input-group-append">
											<button class="btn btn-success" type="submit">
												<i class="fas fa-search"></i>
												<span class="hide-sm">Search</span>
											</button>
										</div>
									</div>
								</form>
								<div class="row" id="items">
									<!-- <div class="col text-muted">This club has no items.</div> -->
									<div class="col-6 col-md-3 mb-16">
										<div class="card has-top">
											<div class="card-top">
												<a href="/market/item/1">
													<img src="/cdn/avatar.png">
												</a>
											</div>
											<div class="card-body">
												<div class="text-truncate"><a href="/market/item/1" style="color:inherit;">Item</a></div>
												<div><i class="currency"></i> 10</div>
											</div>
										</div>
									</div>
									<div class="col-6 col-md-3 mb-16">
										<div class="card has-top">
											<div class="card-top">
												<a href="/market/item/1">
													<img src="/cdn/avatar.png">
												</a>
											</div>
											<div class="card-body">
												<div class="text-truncate"><a href="/market/item/1" style="color:inherit;">Item</a></div>
												<div class="font-weight-light text-muted">Offsale</div>
											</div>
										</div>
									</div>
									<div class="col-12">
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
				<h4>Wall</h4>
				<div class="card">
					<div class="card-body">
						<form>
						<textarea class="form-control mb-3" name="body" placeholder="Body" rows="3" minlength="3" maxlength="150"></textarea>
						<p class="text-danger" id="wallPostError"></p>
						<button class="btn btn-success" type="submit">Post</button>
					</form>
					<hr>
					<div id="wall">
						<!-- <div class="text-muted">No wall posts found.</div> -->
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-3 col-md-2">
										<a href="/profile/User">
											<img src="/cdn/avatar.png">
										</a>
									</div>
									<div class="col-9 col-md-10">
										<div class="text-truncate mb-2">
											<a href="/profile/User" style="font-size:18px;">User</a>
											<span class="hide-sm">&nbsp;&nbsp;</span>
											<br class="show-sm-only">
											<span class="text-muted" style="font-size:13px;"><i class="fas fa-clock"></i> 3 minutes ago</span>
										</div>
										<div>When is the next shutdown?</div>
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
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>