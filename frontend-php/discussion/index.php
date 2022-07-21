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
$topics = [
	[
		'name' => 'Announcements',
		'description' => 'Updates, announcements, and much more will be posted here.'
	],
	[
		'name' => 'General',
		'description' => 'Talk about anything here!'
	],
	[
		'name' => 'Suggestions',
		'description' => 'Do you have a suggestion for Mopaiv?'
	],
	[
		'name' => 'Trading',
		'description' => 'Buy, sell, and exchange exclusives here!'
	],
	[
		'name' => 'Clubss',
		'description' => 'Looking for club members or advice on how to run one?'
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
    
    <main class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-11">
				<div class="mb-2">
					<div class="row">
						<div class="col-md text-center-sm align-self-center">
							<a href="/discussion">Discussion</a>
							<span>»</span>
							<span>Home</span>
						</div>
						<div class="col-md text-right text-center-sm">
							<a href="/discussion/my" class="btn btn-sm btn-danger">
								<i class="fas fa-user mr-1"></i>
								<span>My Posts</span>
							</a>
							<a href="/discussion/search" class="btn btn-sm btn-primary">
								<i class="fas fa-search mr-1"></i>
								<span>Search</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-lg-8">
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-6 text-truncate">Forum</div>
							<div class="col-md-2 text-center text-truncate hide-sm">Posts</div>
							<div class="col-md-2 text-center text-truncate hide-sm">Replies</div>
							<div class="col-md-2 text-center text-truncate hide-sm">Last Poster</div>
						</div>
					</div>
					<div class="card-body pt-0 pb-0">
						<?php foreach ($topics as $t): ?>
							<div class="row has-divider pt-16 pb-16">
								<div class="col-md-6">
									<a href="/discussion/topic/1" style="color:inherit;"><strong><?= $t['name'] ?></strong></a>
									<div class="text-muted" style="font-size:14px;"><?= $t['description'] ?></div>
								</div>
								<div class="col-md-2 text-center align-self-center hide-sm">0</div>
								<div class="col-md-2 text-center align-self-center hide-sm">0</div>
								<div class="col-md-2 text-center align-self-center hide-sm">
									<div class="text-truncate"><a href="/profile/User">User</a></div>
									<div class="text-truncate" style="margin-top:-3px;">13 minutes ago</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-3">
				<div class="card">
					<div class="card-header">Recent Posts</div>
					<div class="card-body pt-0 pb-0">
						<?php for ($i=0; $i < 6; $i++): ?>
							<div class="row no-gutters has-divider pt-16 pb-16">
								<div class="col-10">
									<a href="/discussion/topic/1" style="color:inherit;"><strong><div class="text-truncate">hacked by milanotwo XD</div></strong></a>
									<div class="text-muted text-truncate">by <a href="/profile/User">User</a></div>
								</div>
								<div class="col-2 text-center align-self-center">
									<div class="thread-replies bg-primary text-white" style="border-radius:5px;padding:6px 8px;width:75%;float:right;">0</div>
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