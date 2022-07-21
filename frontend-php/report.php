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
			<div class="col-md-10 md col-lg-8">
				<h4>report title lol</h4>
				<div class="card">
					<div class="card-body">
						<form>
							<label class="mb-1" for="reason">What is the reason for your report?</label>
							<select class="form-control mb-3" name="reason" required>
								<option value="0">Select...</option>
								<option value="1">Includes Personal Information/Requesting Personal Information</option>
								<option value="2">Adult Content</option>
								<option value="3">Spam</option>
								<option value="4">Phishing/Hacking Users</option>
								<option value="5">Harassing me/someone else</option>
								<option value="6">Swearing</option>
							</select>
							<label class="mb-1" for="reason">Provide a Comment (Optional)</label>
							<textarea class="form-control mb-3" name="comment" placeholder="Comment" rows="5"></textarea>
							<button class="btn btn-success" type="submit">Submit Report</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>