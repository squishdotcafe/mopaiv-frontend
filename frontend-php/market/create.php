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
			<div class="col-md-9 col-lg-6">
				<h4>Create Item</h4>
				<div class="card">
					<div class="card-body">
						<form>
							<input class="form-control mb-3" type="text" name="name" placeholder="Name" required>
							<textarea class="form-control mb-3" name="description" placeholder="Write something about your item here..." rows="5"></textarea>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="currency" style="margin-left:1.5px;margin-right:1.5px;"></i></span>
								</div>
								<input class="form-control" type="number" name="price" placeholder="Price" required>
							</div>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text">Sell</span>
								</div>
								<select class="form-control" name="onsale" required>
									<option value="1">Yes</option>
									<option value="0">No</option>
								</select>
							</div>
							<button class="btn btn-block btn-success" type="submit">Create</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-lg-5">
				<h4>Template</h4>
				<div class="card text-center">
					<div class="card-body">
						<a href="/assets/img/template.png" download>
							<img src="/assets/img/template.png" width="77%">
						</a>
						<a href="/assets/img/template.png" class="btn btn-block btn-primary mt-3" download><i class="fas fa-download"></i></a>
					</div>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>