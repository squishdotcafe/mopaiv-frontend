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
				<h4>Club</h4>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 col-lg-3">
								<img src="/cdn/club.png" class="mb-2">
								<strong>Logo</strong>
								<input type="file" name="image" accept=".jpeg,.jpg,.png">
								<hr class="show-sm-only">
							</div>
							<div class="col-md-8 col-lg-9">
								<strong>Description</strong>
								<textarea class="form-control" rows="15">long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc long desc</textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-1">
					<div class="col">
						<h4>Ranks</h4>
					</div>
					<div class="col text-right">
						<button class="btn btn-sm btn-success">Create</button>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-3 col-lg-2">
								<strong>ID</strong>
							</div>
							<div class="col-md-9 col-lg-10">
								<strong>Name</strong>
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-3 col-lg-2">
								<input class="form-control" type="number" name="id" placeholder="ID" value="1" disabled>
							</div>
							<div class="col-md-9 col-lg-10">
								<input class="form-control" type="text" name="id" placeholder="Name" value="Member">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-3 col-lg-2">
								<input class="form-control" type="number" name="id" placeholder="ID" value="1" disabled>
							</div>
							<div class="col-md-9 col-lg-10">
								<input class="form-control" type="text" name="id" placeholder="Name" value="Member">
							</div>
						</div>
						<div class="row mt-2">
							<div class="col-md-3 col-lg-2">
								<input class="form-control" type="number" name="id" placeholder="ID" value="1" disabled>
							</div>
							<div class="col-md-9 col-lg-10">
								<input class="form-control" type="text" name="id" placeholder="Name" value="Member">
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<nav class="nav nav-pills flex-column flex-sm-row text-center">
							<div href="[data-tab='members']" class="flex-sm-fill nav-link active cat" data-toggle="tab">Members</div>
							<div href="[data-tab='relationships']" class="flex-sm-fill nav-link cat" data-toggle="tab">Affiliates</div>
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
										<select class="form-control mt-1">
											<option value="1">Member</option>
											<option value="254">Admin</option>
											<option value="255">Owner</option>
										</select>
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
								<h4>Send Request</h4>
								<form>
									<div class="input-group">
										<input class="form-control" type="number" name="id" placeholder="Club ID">
										<div class="input-group-append">
											<button class="btn btn-success" type="submit">
												<i class="fas fa-paper-plane"></i>
												<span class="hide-sm">Send Request</span>
											</button>
										</div>
									</div>
								</form>
								<hr>
								<h4>Incoming Requests</h4>
								<div class="row" id="allyreq">
									<!-- <div class="col text-muted">You have no incoming affiliate requests.</div> -->
									<div class="col-6 col-md-3 text-center mb-2">
										<i class="fas fa-check-circle text-success" style="font-size:25px;position:absolute;right:0;margin-top:10px;margin-right:50px;cursor:pointer;"></i>
										<i class="fas fa-times-circle text-danger" style="font-size:25px;position:absolute;right:0;margin-top:10px;margin-right:20px;cursor:pointer;"></i>
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
								<h4>Current Affiliates</h4>
								<div class="row" id="allies">
									<!-- <div class="col text-muted">You have no affiliates.</div> -->
									<div class="col-6 col-md-3 text-center mb-2">
										<i class="fas fa-times-circle text-danger" style="font-size:25px;position:absolute;right:0;margin-top:10px;margin-right:20px;cursor:pointer;"></i>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>