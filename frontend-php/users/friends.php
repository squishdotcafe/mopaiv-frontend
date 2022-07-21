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
		<h4>User's Friends</h4>
		<div class="card">
			<div class="card-body pb-0">
				<!-- <div class="text-muted mb-16">(username) does not have any friends.</div> -->
				<div class="row text-center">
					<?php for ($i = 1; $i <= 24; $i++): ?>
						<div class="col-6 col-md-4 col-lg-2 mb-16">
							<i class="fas fa-times-circle text-danger" style="font-size:25px;position:absolute;right:0;margin-right:30px;cursor:pointer;" data-toggle="modal" data-target="#unfriendModal"></i>
							<a href="/profile/User">
								<img src="/cdn/avatar.png">
								<div class="text-truncate">User</div>
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
	
	<div class="modal fade" id="unfriendModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Unfriend User</h5>
					<button class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
				</div>
				<div class="modal-body">Are you sure that you want to unfriend (username here)? This can not be undone!</div>
				<div class="modal-footer">
					<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
					<button class="btn btn-success">Yes</button>
				</div>
			</div>
		</div>
	</div>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>