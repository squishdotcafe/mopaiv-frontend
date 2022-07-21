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
$posts = [
	[
		'title' => 'pppppppppp',
		'pin' => true,
		'lock' => false
	],
	[
		'title' => 'swswwswsws',
		'pin' => false,
		'lock' => true
	],
	[
		'title' => 'wqawswswsw',
		'pin' => false,
		'lock' => false
	],
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
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="mb-2">
					<div class="row">
						<div class="col-md text-center-sm align-self-center hide-sm">
							<a href="/discussion">Discussion</a>
							<span>»</span>
							<span>General Discussion</span>
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
							<a href="/discussion/create/1" class="btn btn-sm btn-success">
								<i class="fas fa-plus mr-1"></i>
								<span>Create</span>
							</a>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<div class="row">
							<div class="col-md-6 text-truncate">
								<span class="hide-sm">Thread</span>
								<span class="show-sm-only">General Discussion</span>
							</div>
							<div class="col-md-2 text-center text-truncate hide-sm">Replies</div>
							<div class="col-md-2 text-center text-truncate hide-sm">Views</div>
							<div class="col-md-2 text-center text-truncate hide-sm">Last Poster</div>
						</div>
					</div>
					<div class="card-body pt-0 pb-0">
						<?php foreach ($posts as $p): ?>
							<div class="row has-divider pt-16 pb-16">
								<div class="col-md-6">
									<div class="text-center float-left" style="width:50px;height:50px;position:relative;overflow:hidden;">
                                        <?php if ($p['pin']): ?>
                                            <i class="fad fa-bullhorn text-danger" style="font-size:35px;margin-top:10px;"></i>
                                        <?php elseif ($p['lock']): ?>
                                            <i class="fad fa-lock-alt text-warning" style="font-size:40px;margin-top:10px;"></i>
                                        <?php else: ?>
                                            <i class="fad fa-file-alt text-primary" style="font-size:40px;margin-top:5px;"></i>
                                        <?php endif; ?>
                                    </div>
                                    <div style="padding-left:70px;">
                                        <a href="/discussion/post/1" style="color:inherit;font-size:18px;"><strong><div class="text-truncate"><?= $p['title'] ?></div></strong></a>
                                        <div class="text-muted text-truncate">by <a href="/profile/User">User</a></div>
                                    </div>
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