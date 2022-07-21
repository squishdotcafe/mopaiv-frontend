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
	<script>
		let lastBody = '';
		
		$(document).ready(function() {
			$('#reply-button').click(function() {
				$(this).hide();
				$('#reply-box').show();
			});
			
			$('#reply-form').submit(function(event) {
				event.preventDefault();
				const $button = $(this).find('.btn[type="submit"]');
				const body = $(this).find('textarea[name="body"]').val();
				
				if (body == lastBody)
					return;
				
				lastBody = body;
				$button.attr('disabled', true);
				
				$.post('/whatever', { body }).always(function() {
					$button.attr('disabled', false);
				}).done(function(response) {
					if (response == 'success')
						window.location.reload();
					else {
						$('#reply-error').show();
						$('#reply-error strong').html(response);
					}
				}).fail(function() {
					$('#reply-error').show();
					$('#reply-error strong').html('Please confirm you have a valid network connection, then try again.');
				});
			});
		});
	</script>
</head>
<body>
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/navbar.php"); ?>
    
    <main class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<h4>UR A BITCH</h4>
				<div class="card">
					<div class="card-body py-1">
						<?php for ($i = 1; $i <= 3; $i++): ?>
							<div class="row has-divider py-16">
								<div class="col-md-3 text-center align-self-center">
									<a href="/profile/User">
										<img src="/cdn/avatar.png" class="shrink-avatar-sm">
										<div class="text-truncate mt-1">User</div>
									</a>
									<div class="pb-16 show-sm-only"></div>
								</div>
								<div class="col-md-9">
									<div class="text-muted" style="font-size:15px;">
										<i class="fas fa-clock" style="font-size:12px;"></i>
										<span>3 minutes ago</span>
										<a href="/report" class="float-right text-danger"><i class="fad fa-flag"></i></a>
									</div>
									<div class="mt-1" style="font-size:14.5px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
				<div class="card" id="reply-box" style="display:none;">
					<div class="card-body">
						<form id="reply-form">
							<textarea class="form-control mb-3" name="body" placeholder="Write your reply here..." rows="5"></textarea>
							<div class="text-danger mb-2" id="reply-error" style="display:none;">
								<i class="fas fa-times-circle mr-1" style="font-size:90%;"></i>
								<strong></strong>
							</div>
							<button class="btn btn-success" type="submit">Send</button>
						</form>
					</div>
				</div>
				<div class="text-center">
					<button class="btn btn-success" id="reply-button">
						<i class="fas fa-plus mr-1"></i>
						<span>Reply</span>
					</button>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>