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
		<div class="row justify-content-center text-center pt-5">
			<div class="col-md-7 col-lg-5">
				<div class="card">
					<div class="card-body">
						<i class="fab fa-discord mb-2" style="color:#5865f2;font-size:70px;"></i>
						<h4 class="font-weight-bold"><?= (isset($_GET['un'])) ? 'Unlink' : 'Link' ?> Discord Account</h4>
						<?php if (isset($_GET['gen'])): ?>
							<p>Send the code below to our Discord verification bot to complete the verification process.</p>
							<input class="form-control" value="code here yolo" readonly>
						<?php elseif (isset($_GET['un'])): ?>
							<p>You can unlink your Discord account by clicking the button below. By doing so you will lose access to our community channels.</p>
							<button class="btn btn-block btn-danger" id="t">Unlink</button>
						<?php else: ?>
							<p>To talk and view our community channels, you will need to verify.</p>
							<p>Get started by clicking the button below.</p>
							<button class="btn btn-block btn-success" id="gen">Generate Code</button>
						<?php endif; ?>
					</div>
				</div>
				<?php if (isset($_GET['gen'])) {
					echo '<small><a id="un">unlink page</a></small>';
				} ?>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
	<script>
		$('#gen').click(() => document.location = '/account/discord?gen');
		$('#un').click(() => document.location = '/account/discord?un');
		$('#t').click(() => document.location = '/account/discord');
	</script>
</body>
</html>