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
		let lastCode = '';
		
		$(document).ready(function() {
			$('#code-form').submit(function(event) {
				event.preventDefault();
				const $button = $(this).find('.btn[type="submit"]');
				const code = $(this).find('input[name="code"]').val();
				
				if (code == lastCode)
					return;
				
				lastCode = code;
				$button.attr('disabled', true);
				
				$.post('/api/redeem-code', { code }).always(function() {
					$button.attr('disabled', false);
				}).done(function(response) {
					if (response == 'success') {
						$('#code-message').removeClass('text-danger').addClass('text-success').show();
						$('#code-message i').removeClass('fas fa-times-circle').addClass('fas fa-check-circle');
						$('#code-message strong').html('This code has been redeemed successfully.');
					} else {
						$('#code-message').removeClass('text-success').addClass('text-danger');
						$('#code-message i').removeClass('fas fa-check-circle').addClass('fas fa-times-circle');
						$('#code-message strong').html(response);
					}
				}).fail(function() {
					$('#code-message').removeClass('text-success').addClass('text-danger').show();
					$('#code-message i').removeClass('fas fa-check-circle').addClass('fas fa-times-circle');
					$('#code-message strong').html('Please confirm you have a valid network connection, then try again.');
				});
			});
		});
	</script>
</head>
<body>
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/navbar.php"); ?>
    
    <main class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<h4>How does it work?</h4>
				<div class="card text-center">
					<div class="card-body">
						<i class="fad fa-question-circle text-danger mb-2" style="font-size:80px;"></i>
						<p>Enter a code for exclusive items.<br>Codes can be obtained through events, promotions or our social media feeds.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 align-self-center">
				<h4>Redeem</h4>
				<form id="code-form">
					<div class="input-group">
						<input class="form-control" type="password" name="code" placeholder="Enter code..." required>
						<div class="input-group-append">
							<button class="btn btn-success" type="submit">
								<i class="fas fa-ticket-alt mr-1" style="font-size:90%;"></i>
								<span class="hide-sm">Redeem</span>
							</button>
						</div>
					</div>
					<div class="mt-2" id="code-message" style="display:none;">
						<i class="mr-1" style="font-size:90%;"></i>
						<strong></strong>
					</div>
					<h4 class="mt-3">Available Items</h4>
						<div class="row">
							<div class="col-6 col-lg-4">
								<div class="card has-top">
									<div class="card-top">
										<a href="/market/item/1" target="_blank">
											<img src="/cdn/avatar.png">
										</a>
									</div>
									<div class="card-body">
										<div class="text-truncate"><a href="/market/item/1" class="text-reset" target="_blank">Item</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>