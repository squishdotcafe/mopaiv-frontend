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
    
    <div class="landing-header text-center-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6 align-self-center">
                    <h1>Welcome to Mopaiv!</h1>
                    <h2 class="text-muted mb-4">Mopaiv is a free, 3D avatar community where users can socialize and customize their own character.</h2>
                    <a href="/sign-up" class="btn btn-lg btn-primary mr-2">
                        <i class="fas fa-user-plus"></i>
                        <strong>Sign Up</strong>
                    </a>
                    <a href="/login" class="btn btn-lg btn-success">
                        <i class="fas fa-user"></i>
                        <strong>Login</strong>
                    </a>
                </div>
                <div class="col-md-4 col-lg-3 hide-sm">
                    <img src="/assets/img/landing.png">
                </div>
            </div>
        </div>
    </div>
    
    <div class="landing-info container text-center">
        <h2>What is there to do?</h2>
        <div class="row mt-4">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-gamepad text-primary"></i>
                        <h5>Create Games</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-shopping-bag text-warning"></i>
                        <h5>Buy & Create Items</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-users text-success"></i>
                        <h5>Meet New Friends</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-comments text-danger"></i>
                        <h5>Forum With Users</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>