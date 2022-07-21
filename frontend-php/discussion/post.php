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
	<style>
		.reply:not(:first-child) {
			padding-top: 25px;
		}

		.reply:not(:last-child) {
			padding-bottom: 25px;
		}

		@media only screen and (max-width: 768px) {
			.reply-creator {
				max-width: 50%;
				margin: 0 auto;
				margin-bottom: 16px;
			}
		}
	</style>
</head>
<body>
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/navbar.php"); ?>
    
    <main class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="mb-2 hide-sm">
					<div class="row">
						<div class="col-md text-center-sm align-self-center">
							<a href="/discussion">Discussion</a>
							<span>»</span>
							<a href="/discussion/topic/1">General Discussion</a>
							<span>»</span>
							<span>Post Title</span>
						</div>
						<div class="col-md text-right text-center-sm">
							<a href="/discussion/reply/1" class="btn btn-sm btn-success">
								<i class="fas fa-plus mr-1"></i>
								<span>Reply</span>
							</a>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-4 col-lg-3 text-center hide-sm">Poster</div>
							<div class="col-md-8 col-lg-9">
								<i class="fas fa-thumbtack mr-1" style="font-size:13px;"></i>
								<i class="fas fa-lock mr-1" style="font-size:13px;"></i>
								<span>Post Title</span>
							</div>
						</div>
					</div>
					<div class="card-body">
						<?php for ($i = 1; $i <= 10; $i++): ?>
							<div class="row reply has-divider">
								<div class="col-md-4 col-lg-3 text-center reply-creator">
									<a href="/profile/User" style="color:inherit;"><strong><div class="text-truncate">User</div></strong></a>
									<img src="/cdn/avatar.png" class="mb-2">
									<?php if ($i == 1): /* If admin */ ?>
										<div class="pl-3 pr-3 text-center text-white" style="background:#c65621;border-radius:10px;padding-bottom:5px;padding-top:3px;">
											<img src="/assets/img/achievements/admin.png" width="18px" style="margin-top:-2px;">
											<strong>Admin</strong>
										</div>
									<?php elseif ($i == 2): /* If plus */ ?>
										<div class="pl-3 pr-3 text-center text-white" style="background:#de0d46;border-radius:10px;padding-bottom:5px;padding-top:3px;">
											<img src="/assets/img/achievements/plus.png" width="18px" style="margin-top:-2px;">
											<strong>Plus</strong>
										</div>
									<?php endif; ?>
									<div class="mt-2"></div>
									<div class="text-center">
										<strong>Posts:</strong>
										<span>0</span>
									</div>
									<div class="text-center">
										<strong>Joined:</strong>
										<span>01/03/22</span>
									</div>
								</div>
								<div class="col-md-8 col-lg-9">
									<span class="text-muted" style="font-size:15px;"><i class="fas fa-clock" style="font-size:12px;"></i> Posted by <a href="/profile/User">User</a>, 13 minutes ago</span>
									<?php if ($i > 1): /* If reply */ ?>
										<a href="#quoteurllol" class="float-right text-primary mr-2"><i class="fad fa-quote-right"></i></a>
									<?php endif; ?>
									<a href="/report" class="float-right text-danger mr-2"><i class="fad fa-flag"></i></a>
									<div class="mb-2"></div>
									<?php if ($i == 2): ?>
										<div class="card" style="border-left:5px solid var(--primary_color);box-shadow:none;">
											<div class="card-body pt-2 pl-3 pr-3 pb-2">
												<div class="mb-1" style="font-size:15px;">"deez nuts deez deeez nuts deez nuts deez deeez nuts deez nuts deez deeez nuts deez nuts deez deeez nuts"</div>
												<div class="text-muted font-italic" style="font-size:14px;">Written by <a href="/profile/User">User</a>, 13 minutes ago</div>
											</div>
										</div>
									<?php endif; ?>
									<div style="font-size:14.5px;">Forum post body goes here blah blah blah not using slurs as placeholders because I am not martex</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
				<div class="text-center">
					<a href="/discussion/reply/1" class="btn btn-success">
						<i class="fas fa-plus mr-1"></i>
						<span>Reply</span>
					</a>
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