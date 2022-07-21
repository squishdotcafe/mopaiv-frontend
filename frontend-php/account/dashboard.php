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

<?php
$i = 0;
$updates = [
	[
		'title' => 'Welcome back to Mopaiv!',
		'creator' => 'Stokeley'
	],
	[
		'title' => 'Update Log for Jan 3, 2020',
		'creator' => 'Mikeal'
	]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/head.php"); ?>
</head>
<body>
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/navbar.php"); ?>
    
    <main class="container">
		<div class="row">
			<div class="col-md-4 col-lg-3">
				<div class="card text-center">
					<div class="card-body">
						<img src="/cdn/avatar.png" width="90%">
						<div class="row no-gutters justify-content-center mt-4">
							<div class="col-3">
								<a href="/profile/User" class="dashboard-icon">
									<i class="far fa-user"></i>
								</a>
							</div>
							<div class="col-3">
								<a href="/account/character" class="dashboard-icon">
									<i class="far fa-tshirt" style="font-size:85%;"></i>
								</a>
							</div>
							<div class="col-3">
								<a href="/market" class="dashboard-icon">
									<i class="far fa-shopping-cart" style="font-size:85%;"></i>
								</a>
							</div>
							<div class="col-3">
								<a href="/discussion" class="dashboard-icon">
									<i class="far fa-comment-smile"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<h5>News</h5>
				<div class="card">
					<div class="card-body pt-0 pb-0">
						<?php foreach ($updates as $u): ?>
							<?php $i++; ?>
							<div class="has-divider pt-16 pb-16">
								<div class="text-center float-left" style="width:35px;height:35px;position:relative;overflow:hidden;">
									<i class="fad fa-bullhorn text-danger" style="font-size:25px;margin-top:10px;"></i>
								</div>
								<div style="padding-left:50px;">
									<div class="text-truncate font-weight-bold"><a href="#" class="text-reset"><?= $u['title'] ?></a></div>
									<div class="text-muted text-truncate" style="font-size:14px;">by <a href="/profile/User"><?= $u['creator'] ?></a></div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-lg-9">
				<div class="card">
					<div class="card-body">
						<form>
							<div class="input-group">
								<input class="form-control" type="text" name="status" placeholder="What are you up to?">
								<div class="input-group-append">
									<button class="btn btn-success" type="submit">
										<i class="fas fa-share"></i>
										<span class="hide-sm">Share</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<h5>Feed</h5>
				<div class="card">
					<div class="card-body py-0">
						<!-- <h5 class="mt-16">Your feed is empty.</h5>
						<div class="mb-16">Why not try <a href="/users">searching for users</a> or <a href="/discussions">chatting with users</a> on the discussions tab?</div> -->
						<?php for ($i = 1; $i <= 10; $i++): ?>
							<div class="row has-divider py-16">
								<div class="col-4 col-md-3 col-lg-2 text-center">
									<a href="/profile/User">
										<img src="/cdn/avatar.png">
									</a>
								</div>
								<div class="col-8 col-md-9 col-lg-10 align-self-center">
									<div>
										<a href="/profile/User" style="font-size:18px;">User</a>
										<span class="text-muted ml-2" style="font-size:12px;"><i class="fas fa-clock" style="font-size:10px;"></i> 15 minutes ago</span>
										<a href="/report" class="float-right text-danger"><i class="fad fa-flag"></i></a>
									</div>
									<div class="mb-2">I love Mopaiv!</div>
									<i class="far fa-thumbs-up text-success" style="cursor:pointer;"></i> <!-- turn "far" into "fab" if liked -->
									<span>0</span>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>