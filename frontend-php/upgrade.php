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
			<div class="col-lg-9">
				<h4>Plus Membership</h4>
				<div class="card overflow-hidden mb-5">
					<table class="table">
						<thead>
							<tr>
								<th>Feature</th>
								<th class="text-center">Free</th>
								<th class="text-center">Plus</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Special Achievement</td>
								<td class="text-center"><i class="far fa-times-circle text-danger"></i></td>
								<td class="text-center"><i class="far fa-check-circle text-success"></i></td>
							</tr>
							<tr>
								<td>Special Banner</td>
								<td class="text-center"><i class="far fa-times-circle text-danger"></i></td>
								<td class="text-center"><i class="far fa-check-circle text-success"></i></td>
							</tr>
							<tr>
								<td>Special Item</td>
								<td class="text-center"><i class="far fa-times-circle text-danger"></i></td>
								<td class="text-center"><i class="far fa-check-circle text-success"></i></td>
							</tr>
							<tr>
								<td>Outfit Limit</td>
								<td class="text-center">8</td>
								<td class="text-center">30</td>
							</tr>
							<tr>
								<td>Club Limit</td>
								<td class="text-center">10</td>
								<td class="text-center">30</td>
							</tr>
							<tr>
								<td>Sales Tax</td>
								<td class="text-center">30%</td>
								<td class="text-center">15%</td>
							</tr>
							<tr>
								<td>
									<i class="currency" style="transform:scale(0.8);margin-top:-2px;"></i>
									<span>Daily</span>
								</td>
								<td class="text-center">5</td>
								<td class="text-center">15</td>
							</tr>
						</tbody>
					</table>
					<form class="card-footer px-3 py-3 w-100 d-block text-center" action="https://www.paypal.com/cgi-bin/webscr" method="POST">
						<input type="hidden" name="cmd" value="_donations">
						<input type="hidden" name="image_url" value="https://mopaiv.com/assets/img/full.png">
						<input type="hidden" name="business" value="payments@mopaiv.com">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="no_note" value="1">
						<input type="hidden" name="no_shipping" value="1">
						<input type="hidden" name="amount" value="5.00">
						<input type="hidden" name="notify_url" value="https://mopaiv.com/upgrade/notify">
						<input type="hidden" name="return" value="https://mopaiv.com/upgrade/thanks">
						<input type="hidden" name="cancel_return" value="https://mopaiv.com/upgrade/canceled">
						<input type="hidden" name="item_name" value="membership">
						<input type="hidden" name="item_number" value="4">
						<input type="hidden" name="lc" value="en_US">
						<input type="hidden" name="rm" value="2">
						<input type="hidden" name="cbt" value="Return to Mopaiv">
						<input type="hidden" name="custom" value="4">
						<h5 class="font-weight-bold mb-2">Are you ready?</h5>
						<button class="btn btn-success">Level Up for $5.00/month</button>
					</form>
				</div>
				<h4>Currency Packages</h4>
				<div class="limited-item-promotion text-center mb-3">
					<div class="row align-items-center">
						<div class="col-auto hide-sm">
							<i class="fas fa-alarm-plus"></i>
						</div>
						<div class="col limited-item-info">
							<a href="/market/item/1" class="mb-3 show-sm-only">
								<img src="/assets/img/limitedmoneybag.png" width="100px">
							</a>
							<div class="limited-item-title mb-2 mb-sm-only">Limited Virtual Item Included!</div>
							<div class="limited-item-text">Get this limited time exclusive virtual item by spending $20 or more on currency.</div>
						</div>
						<div class="col-auto limited-item-image hide-sm">
							<a href="/market/item/1">
								<img src="/assets/img/limitedmoneybag.png">
							</a>
						</div>
					</div>
				</div>
				<div class="row text-center justify-content-center">
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h4>
									<i class="currency"></i>
									<span>100</span>
								</h4>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
									<input type="hidden" name="cmd" value="_donations">
									<input type="hidden" name="image_url" value="https://mopaiv.com/assets/img/full.png">
									<input type="hidden" name="business" value="payments@mopaiv.com">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="no_note" value="1">
									<input type="hidden" name="no_shipping" value="1">
									<input type="hidden" name="amount" value="1.00">
									<input type="hidden" name="notify_url" value="https://mopaiv.com/upgrade/notify">
									<input type="hidden" name="return" value="https://mopaiv.com/upgrade/thanks">
									<input type="hidden" name="cancel_return" value="https://mopaiv.com/upgrade/canceled">
									<input type="hidden" name="item_name" value="100_currency">
									<input type="hidden" name="item_number" value="1">
									<input type="hidden" name="lc" value="en_US">
									<input type="hidden" name="rm" value="2">
									<input type="hidden" name="cbt" value="Return to Mopaiv">
									<input type="hidden" name="custom" value="4">
									<button class="btn btn-success mt-2">Buy for $1.00</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h4>
									<i class="currency"></i>
									<span>500</span>
								</h4>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
									<input type="hidden" name="cmd" value="_donations">
									<input type="hidden" name="image_url" value="https://mopaiv.com/assets/img/full.png">
									<input type="hidden" name="business" value="payments@mopaiv.com">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="no_note" value="1">
									<input type="hidden" name="no_shipping" value="1">
									<input type="hidden" name="amount" value="3.00">
									<input type="hidden" name="notify_url" value="https://mopaiv.com/upgrade/notify">
									<input type="hidden" name="return" value="https://mopaiv.com/upgrade/thanks">
									<input type="hidden" name="cancel_return" value="https://mopaiv.com/upgrade/canceled">
									<input type="hidden" name="item_name" value="500_currency">
									<input type="hidden" name="item_number" value="2">
									<input type="hidden" name="lc" value="en_US">
									<input type="hidden" name="rm" value="2">
									<input type="hidden" name="cbt" value="Return to Mopaiv">
									<input type="hidden" name="custom" value="4">
									<button class="btn btn-success mt-2">Buy for $3.00</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h4>
									<i class="currency"></i>
									<span>1000</span>
								</h4>
								<form action="https://www.paypal.com/cgi-bin/webscr" method="POST">
									<input type="hidden" name="cmd" value="_donations">
									<input type="hidden" name="image_url" value="https://mopaiv.com/assets/img/full.png">
									<input type="hidden" name="business" value="payments@mopaiv.com">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="no_note" value="1">
									<input type="hidden" name="no_shipping" value="1">
									<input type="hidden" name="amount" value="5.00">
									<input type="hidden" name="notify_url" value="https://mopaiv.com/upgrade/notify">
									<input type="hidden" name="return" value="https://mopaiv.com/upgrade/thanks">
									<input type="hidden" name="cancel_return" value="https://mopaiv.com/upgrade/canceled">
									<input type="hidden" name="item_name" value="1000_currency">
									<input type="hidden" name="item_number" value="3">
									<input type="hidden" name="lc" value="en_US">
									<input type="hidden" name="rm" value="2">
									<input type="hidden" name="cbt" value="Return to Mopaiv">
									<input type="hidden" name="custom" value="4">
									<button class="btn btn-success mt-2">Buy for $5.00</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
    
    <?php require_once("{$_SERVER['DOCUMENT_ROOT']}/_inc/footer.php"); ?>
</body>
</html>