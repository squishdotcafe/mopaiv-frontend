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
$achievements = [
	[
		'name' => 'Admin',
		'description' => 'This achievement can only be obtained by official Mopaiv employees.',
		'image' => 'admin'
	],
	[
		'name' => 'Bug Hunter',
		'description' => 'This achievement can only be obtained by reporting a vulnerability to a Mopaiv employee.',
		'image' => 'hunter'
	],
	[
		'name' => 'Beta User',
		'description' => 'This achievement can no longer be obtained. It was previously obtainable by joining Mopaiv during a specific time period.',
		'image' => 'beta'
	],
	[
		'name' => 'Spender',
		'description' => 'This achievement can only be obtained by purchasing currency or a membership.',
		'image' => 'donate'
	],
	[
		'name' => 'Plus',
		'description' => 'This achievement can only be obtained by having an active membership.',
		'image' => 'plus'
	],
	[
		'name' => 'Creator',
		'description' => 'This achievement can only be obtained by having 50 sales on an item.',
		'image' => 'creator'
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
		<h4>Achievements</h4>
		<div class="card">
			<div class="card-body">
				<?php foreach ($achievements as $a): ?>
					<?php $i++; ?>
					<div class="row">
						<div class="col-4 col-md-3 col-lg-2 text-center">
							<img src="/assets/img/achievements/<?= $a['image'] ?>.png">
						</div>
						<div class="col-8 col-md-9 col-lg-10 align-self-center">
							<h5><strong><?= $a['name'] ?></strong></h5>
							<div class="mt-2"><?= $a['description'] ?></div>
						</div>
					</div>
					<?php if ($i < count($achievements)): ?>
						<hr>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>