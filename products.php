<?php include("header.php");
   include('admin/includes/config.php');
   ?>
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
         
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <?php

$query = "SELECT item_id,item_name,item_title,item_desc,item.cat_id as item_cat_id,item_price,price_offer,
item_date,item_image
FROM item 
WHERE item.cat_id={$_GET['id']}";
$select_cat="SELECT * FROM category WHERE cat_id={$_GET['id']}";
$query_run_cat = mysqli_query($conn, $select_cat);

$query_run = mysqli_query($conn, $query);
?>
    <!-- ***** Products Area Starts ***** -->
    <?php
         if (mysqli_num_rows($query_run_cat) > 0)
          {
            while ($row = mysqli_fetch_assoc($query_run_cat))
             {
              ?>
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2><?php echo $row['cat_name'];?></h2>
                        <span>Check out all of our products.</span>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <?php
             }
           }
            else  {
            echo "NO Record Found";
          }
         ?>
        <div class="container">
            <div class="row">
            <?php
         if (mysqli_num_rows($query_run) > 0)
          {
            while ($row = mysqli_fetch_assoc($query_run))
             {
              ?>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.php?id=<?php echo $row['item_id']?>"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="money/addtocart.php?id=<?php echo $row['item_id']?>"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>   
                            </div>
                            <img src="admin/assets/item_images/<?php echo $row['item_image'];?>" alt="">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $row['item_name'];?></h4>
                            <span> $<?php echo $row['item_price'];?></span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
             }
           }
            else  {
            echo "NO Record Found";
          }
         ?>

                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Products Area Ends ***** -->
    <?php include("footer.php");?>