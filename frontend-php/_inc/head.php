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

<?php require_once(__DIR__ . '/_config.php'); ?>
<title>Mopaiv</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#1890ff">
<link rel="shortcut icon" href="/assets/img/icon.png">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600,700">
<link rel="stylesheet" href="/assets/css/theme_<?= $theme ?>.css?v=<?= time() ?>">
<link rel="stylesheet" href="/assets/css/redesign.css?v=<?= time() ?>">
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script id="st_themeswitcher_dev">
	$(document).ready(function() {
		$('[data-theme]').click(function() {
			$.post('/', {
				se: $(this).attr('data-theme')
			}).always(function() {
				location.reload();
			});
		});
	});
</script>