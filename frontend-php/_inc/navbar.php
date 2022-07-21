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

<nav class="navbar navbar-expand-lg fixed-top">
	<div class="container">
		<a class="navbar-brand show-sm-only" style="padding-right:30px;"></a>
		<a href="/" class="navbar-brand">
			<div class="img-holder">
				<img src="/assets/img/icon.png">
			</div>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
			<i class="fas fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="/market" class="nav-link">
						<i class="far fa-shopping-cart"></i>
						<span>Market</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="/users" class="nav-link">
						<i class="far fa-users"></i>
						<span>Users</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="/clubs" class="nav-link">
						<i class="far fa-city"></i>
						<span>Clubs</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="/discussion" class="nav-link">
						<i class="far fa-comment-alt-smile"></i>
						<span>Discussion</span>
					</a>
				</li>
				<?php if (LOGGED_IN): ?>
					<li class="nav-item">
						<a href="/upgrade" class="nav-link">
							<i class="far fa-rocket"></i>
							<span>Upgrade</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="/admin" class="nav-link">
							<i class="far fa-wrench"></i>
							<span>Admin</span>
						</a>
					</li>
				<?php endif; ?>
			</ul>
			<ul class="navbar-nav ml-auto">
				<?php if (!LOGGED_IN): ?>
					<li class="nav-item">
						<a href="/login" class="nav-link">
							<i class="far fa-user"></i>
							<span>Login</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="/sign-up" class="nav-link">
							<i class="far fa-user-plus"></i>
							<span>Sign Up</span>
						</a>
					</li>
				<?php else: ?>
					<li class="nav-item">
						<a href="/account/inbox" class="nav-link">
							<i class="far fa-mail-bulk"></i>
							<span>0</span>
							<span class="d-lg-none">Messages</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="/account/friend-requests" class="nav-link">
							<i class="far fa-user-plus"></i>
							<span>0</span>
							<span class="d-lg-none">Friend Requests</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="/account/trades" class="nav-link">
							<i class="far fa-dice"></i>
							<span>0</span>
							<span class="d-lg-none">Trades</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="/account/transactions" class="nav-link">
							<i class="currency"></i>
							<span>0</span>
							<span class="d-lg-none">Currency</span>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Stokeley</a>
						<div class="dropdown-menu">
							<a href="/profile/Stokeley" class="dropdown-item">Profile</a>
							<a href="/account/customize" class="dropdown-item">Customize</a>
							<a href="/account/settings" class="dropdown-item">Settings</a>
							<div class="dropdown-divider"></div>
							<a href="/logout" class="dropdown-item">Logout</a>
						</div>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>