<?php
/**
 * MIT License
 *
 * Copyright (c) 2021-2022 FoxxoSnoot
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

define('LOGGED_IN', true);
define('AUTH', [
	'key' => 'jyqMDuN3gntVLt4LHIm5',
	'cookie' => 'calebs_pizza'
]);

if (isset($_POST['se']))
	setcookie('them', $_POST['se'], time() + 31556926);

$theme = match($_COOKIE['them']) {
	'd' => 'dark',
	default => 'light'
};

if (!isset($_COOKIE[AUTH['cookie']]) || $_COOKIE[AUTH['cookie']] != md5(AUTH['key']))
	if (!isset($_POST['stoke'])) {
		require_once('access.php');
		exit;
	} else {
		if ($_POST['stoke'] != AUTH['key'])
			exit('no');
		else {
			setcookie(AUTH['cookie'], md5(AUTH['key']), time() + 31556926);
			exit('yes');
		}
	}