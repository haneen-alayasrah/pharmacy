	
	<?php include("../admin/includes/config.php");?>
	
<?php
print_r($_SESSION['login']=='true');
	if ($_SESSION['login']=='false') {
	?><script>
	alert("Go and Login");
	
</script>
<div>
	<a href="../account/login.php">LOGIN</a>
</div>
<?php
	}else{
	$arr=implode(",",($_SESSION['cart']['items']));
	echo $arr;

	$select = "SELECT * FROM item where item_id in($arr) ";
	$res = $conn->query($select);
	
	$full_price=0;
	
	?>

    <div class="container">
		<div style="margin-top: 100px;">
		<h1>Shopping Cart</h1>
		</div>
	<?php while($row=$res->fetch_assoc()):?>
		<section id="cart"> 
			<article class="product">
				<header id="ImgCart">
				
						<img src="../admin/assets/item_images/<?php echo $row['item_image']?>" alt="">

	</header>

				<div class="content">

					<h1><?php echo $row['item_name']?></h1>

					<p><?php echo $row['item_title']?></p>

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
		<?php endwhile;?>
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

	<?php }?>
	