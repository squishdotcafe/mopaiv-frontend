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
function build_section($uname, $itemCount, $AUTH) {
	$items = '';
	$paginate = $itemCount > 8;
	
	if ($itemCount > 8)
		$itemCount = 8;
	
	if ($itemCount == 0)
		$items = <<<HTML
			<div class="col text-muted mb-16" style="margin-top:-6px;">This user owns no tradeable items.</div>
		HTML;
	else
		for ($i = 0; $i < $itemCount; $i++) {
			$asking = (rand(0, 1)) ? 'border-success' : '';
			$val = rand(25, 1500);
			
			$items .= <<<HTML
				<div class="col-6 col-md-6 col-lg-3 mb-16">
					<div class="card has-top {$asking}">
						<div class="card-top">
							<button class="btn btn-success" style="padding:1px 5px;position:absolute;top:0;right:0;margin-top:5px;margin-right:5px;">
								<i class="fas fa-plus"></i>
							</button>
							<a href="/market/item/1" target="_blank">
								<img src="/cdn/item.png">
							</a>
						</div>
						<div class="card-body">
							<div class="text-truncate"><a href="/market/item/1" class="text-reset" target="_blank">Item</a></div>
							<div>
								<i class="currency" style="transform:scale(0.8);margin-top:-2px;"></i>
								<span>{$val}</span>
							</div>
						</div>
					</div>
				</div>
			HTML;
		}
	
	if ($paginate)
		$items .= <<<HTML
			<div class="col-12 mb-16">
				<hr style="margin-top:-6px;">
				<div class="paginator">
					<button class="btn btn-danger"><i class="fas fa-angle-double-left"></i></button>
					<span class="details">1 of 99</span>
					<button class="btn btn-success"><i class="fas fa-angle-double-right"></i></button>
				</div>
			</div>
		HTML;
	
	$mbtn = ($AUTH) ? 'Add' : 'Request';
	$mtext = ($AUTH) ? 'Giving' : 'Requesting';
	
	return <<<HTML
		<div class="row">
			<div class="col-md-4 col-lg-3">
				<div class="card">
					<div class="card-header py-2 text-truncate"><a href="/profile/{$uname}" class="text-reset">{$uname}</a></div>
					<div class="card-body">
						<a href="/profile/{$uname}">
							<img src="/cdn/avatar.png">
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-lg-9">
				<div class="card">
					<div class="card-header py-2 text-truncate">Inventory</div>
					<div class="card-body pb-0">
						<div class="row">{$items}</div>
					</div>
				</div>
			</div>
		</div>
	HTML;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/head.php"); ?>
</head>
<body>
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/navbar.php"); ?>
    
    <main class="container">
		<div class="row text-center-sm mb-2">
			<div class="col-md align-self-center">
				<h4>Trade with Thad</h4>
			</div>
			<div class="col-md text-right text-center-sm">
				<button class="btn btn-sm btn-success">
					<i class="fas fa-share mr-1"></i>
					<span>Send</span>
				</button>
			</div>
		</div>
		<?= build_section('Stokeley', 0, true) ?>
		<div class="mb-3"></div>
		<?= build_section('Thad', 9, false) ?>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>