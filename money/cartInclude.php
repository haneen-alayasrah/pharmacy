	<?php include("../admin/includes/config.php");?>
	<?php 
	$select = "SELECT * FROM item ";
	$res = $conn->query($select);
	$row=$res->fetch_assoc();
	$full_price=0;
	?>

    <div class="container">
		<div style="margin-top: 100px;">
		<h1>Shopping Cart</h1>
		</div>
	
		<section id="cart"> 
			<article class="product">
				<header>
				
						<img src="../admin/assets/item_images/<?php echo $row['item_image']?>" alt="">

				</header>

				<div class="content" style="overflow:auto">

					<h1><?php echo $row['item_name']?></h1>

					<p><?php echo $row['item_desc']?></p>

				</div>

				<footer class="content">
					<span class="qt-minus">-</span>
					<span class="qt">1</span>
					<span class="qt-plus">+</span>

					<h2 class="full-price">
						<?php echo $row['item_price']." $"?>
					</h2>

					<h2 class="price">
						<?php echo $row['item_price']." $ "?>
					</h2>
				</footer>
			</article>

			
        </section>
		<section id="cart"> 
			<article class="product">
				<header>
				<?php $row=$res->fetch_assoc();?>
				<?php $row=$res->fetch_assoc();?>
				<?php $row=$res->fetch_assoc();?>
				<?php $row=$res->fetch_assoc();?>
						<img src="../admin/assets/item_images/<?php echo $row['item_image']?>" alt="">

				</header>

				<div class="content" style="overflow:auto">

					<h1><?php echo $row['item_name']?></h1>

					<p><?php echo $row['item_desc']?></p>

				</div>

				<footer class="content">
					<span class="qt-minus">-</span>
					<span class="qt">1</span>
					<span class="qt-plus">+</span>

					<h2 class="full-price">
						<?php echo $row['item_price']." $"?>
					</h2>

					<h2 class="price">
						<?php echo $row['item_price']." $ "?>
					</h2>
				</footer>
			</article>

			
        </section>

	</div>

	<footer id="site-footer">
		<div class="container clearfix">

			<div class="left">
				<h2 class="subtotal">Subtotal: <span>163.96</span>$</h2>
				<h3 class="tax">Taxes (5%): <span>8.2</span>$</h3>
				<h3 class="shipping">Shipping: <span>5.00</span>$</h3>
			</div>

			<div class="right">
				<h1 class="total">Total: <span>177.16</span>$</h1>
				<a class="btn" href="index.php?id=1" >Checkout</a>
			</div>

		</div>
	</footer>
	