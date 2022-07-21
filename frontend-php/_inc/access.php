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

    <?php include('head.php'); ?>
    <style>
        .container {
            text-align: center;
            max-width: 1000px;
            margin-top: 100px;
            margin-bottom: 30px;
        }
        
        img {
            width: 100px;
            margin-bottom: 16px;
        }
        
        .fa-times-circle {
            font-size: 75%;
        }
    </style>
</head>
<body>
    <form method="POST">
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-md-7 col-lg-6">
                    <img src="/assets/img/icon.png">
                    <div id="in">
                        <div class="input-group">
                            <input class="form-control" type="password" placeholder="Developer Key" required>
                            <div class="input-group-append">
                                <button class="btn btn-<?= ($e) ? 'danger' : 'success' ?>" type="submit">Login</button>
                            </div>
                        </div>
                        <div class="text-danger text-left mt-2" id="err" style="display:none;">
                            <i class="fas fa-times-circle mr-1"></i>
                            <strong>Incorrect developer key.</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        const ivk = [];
        
        $('form').submit(function(e) {
            e.preventDefault();
            
            const key = $('input').val();
            
            if (ivk.includes(key))
                return;
            
            $('button').attr('disabled', true);
            $.post('/', {
                stoke: key
            }).always(function(response) {
                if (response.includes('yes'))
                    window.location = '/';
                else {
                    ivk.push(key);
                    
                    $('input').addClass('border-danger');
                    $('button').attr('disabled', false).removeClass('btn-success').addClass('btn-danger');
                    $('#err').show();
                }
            });
        });
    </script>
</body>
</html>