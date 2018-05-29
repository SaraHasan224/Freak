<?php
$CatIDs = "";
$sql = "SELECT ID,Status,Price,CatIDs,ProductName,Discount,Description,Image,DATE_FORMAT(DateAdded,'%b %d %Y %h:%i %p') as Added ,DATE_FORMAT(DateModified,'%b %d %Y %h:%i %p') as Updated FROM products where ID<>0";
$res = mysql_query($sql) or die(mysql_error());


?>  
   <!-- Start Product List -->
                     
                                    <div class="product-list tab-content">
           
     <?php
			while($row=mysql_fetch_array($res))
			{
	?>    

<div role="tabpanel" class="tab-pane fade in active" id="home">
           
								<div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="Product-details.php">
                                                                <img src="<?php echo DIR_UPLOADING_PRODUCTS.$row['Image'];?>" alt="" width="200px"; heights="250px";>
                                                            </a>
                                                        </div>
                                                        <div class="product-action text-center">
                                                            <a href="Shop_women.php" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="Cart.php" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="Wishlist.php" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.php" title="Slim Shirt With Stretch"><?php echo $row['ProductName']; ?></</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price"><?php echo $row['Price']; ?></</span>
                                                        </div>
                                                    </div>
                                                </div>
           

								 <!--          <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="product-details.php">
                                                                <img src="images/product/8.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-action text-center">
                                                            <a href="Shop_women.php" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="Cart.php" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="Wishlist.php" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.php" title="Men’s White Short Item">Men’s White Short Item</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">£ 150.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="product-details.php">
                                                                <img src="images/product/1.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <span class="new-label text-uppercase">-30%</span>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="#" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.php" title="Twill Oversized ">Twill Oversized </a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">£ 150.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                  -->     
								</div>
</div>
             
     <?php
		}
     ?>




<!--
			 <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="product-details.php">
                                                                <img src="images/product/4.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <span class="new-label red-color text-uppercase">sale</span>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="#" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.php" title="Men’s White Short Item">Men’s White Short Item</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">£ 177.00</span>
                                                            <span class="old-price">£ 200.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="product-details.php">
                                                                <img src="images/product/7.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <span class="new-label text-uppercase">-30%</span>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="#" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.php" title="Men’s White Short Item">Men’s White Short Item</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">£ 21.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="product-details.php">
                                                                <img src="images/product/2.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="#" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.php" title="Men’s White Short Item">Men’s White Short Item</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">£ 21.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
             <div class="col-md-4 hidden-sm hidden-xs">
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="product-details.php">
                                                                <img src="images/product/1.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <span class="new-label text-uppercase">New</span>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="#" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.php" title="Men’s White Short Item">Men’s White Short Item</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">£ 38.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="product-details.php">
                                                                <img src="images/product/6.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="#" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.php" title="Men’s White Short Item">Men’s White Short Item</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">£ 21.65</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-product mb-40">
                                                    <div class="product-img-content mb-20">
                                                        <div class="product-img">
                                                            <a href="product-details.php">
                                                                <img src="images/product/3.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <span class="new-label text-uppercase">-30%</span>
                                                        <div class="product-action text-center">
                                                            <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </a>
                                                            <a href="#" title="Add to cart">
                                                                <i class="zmdi zmdi-shopping-cart"></i>
                                                            </a>
                                                            <a href="#" title="Add to Wishlist">
                                                                <i class="zmdi zmdi-favorite"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center text-uppercase">
                                                        <a href="product-details.php" title="Men’s White Short Item">Men’s White Short Item</a>
                                                        <div class="rating-icon">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price">
                                                            <span class="new-price">£ 21.65</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
-->
									</div>
    


	<!--                          <div role="tabpanel" class="tab-pane fade" id="menu1">
                                            <div class="single-product mb-30 clearfix">
                                                <div class="col-xs-12 col-sm-5 col-md-4">
                                                    <div class="product-img">
                                                        <a href="product-details.php">
                                                            <img src="images/product/6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action text-center">
                                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </a>
                                                        <a title="Add to cart" href="#">
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                        </a>
                                                        <a title="Add to Wishlist" href="#">
                                                            <i class="zmdi zmdi-favorite"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7 col-md-8">
                                                    <div class="product-content text-uppercase mt-50">
                                                        <a title="Men’s Blue Short T-Shirt" href="product-details.php">Men’s Blue Short T-Shirt</a>
                                                        <div class="rating-icon ptb-10">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price pb-10">
                                                            <span class="new-price">£ 38.00</span>
                                                            <span class="old-price">£ 45.00</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempici didunt ut labore et dolore magna aliqua. Ut enim ad min im veniam, quis notrud cai exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis a aute irure dolor in reprehenderit in voluptate </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-product mb-30 clearfix">
                                                <div class="col-xs-12 col-sm-5 col-md-4">
                                                    <div class="product-img">
                                                        <a href="product-details.php">
                                                            <img src="images/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action text-center">
                                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </a>
                                                        <a title="Add to cart" href="#">
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                        </a>
                                                        <a title="Add to Wishlist" href="#">
                                                            <i class="zmdi zmdi-favorite"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7 col-md-8">
                                                    <div class="product-content text-uppercase mt-50">
                                                        <a title="Men’s White Short Item" href="product-details.php">Men’s White Short Item</a>
                                                        <div class="rating-icon ptb-10">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price pb-10">
                                                            <span class="new-price">£ 38.00</span>
                                                            <span class="old-price">£ 45.00</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempici didunt ut labore et dolore magna aliqua. Ut enim ad min im veniam, quis notrud cai exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis a aute irure dolor in reprehenderit in voluptate </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-product mb-30 clearfix">
                                                <div class="col-xs-12 col-sm-5 col-md-4">
                                                    <div class="product-img">
                                                        <a href="product-details.php">
                                                            <img src="images/product/5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action text-center">
                                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </a>
                                                        <a title="Add to cart" href="#">
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                        </a>
                                                        <a title="Add to Wishlist" href="#">
                                                            <i class="zmdi zmdi-favorite"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7 col-md-8">
                                                    <div class="product-content text-uppercase mt-50">
                                                        <a title="Men’s White Short Item" href="product-details.php">Men’s White Short Item</a>
                                                        <div class="rating-icon ptb-10">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price pb-10">
                                                            <span class="new-price">£ 38.00</span>
                                                            <span class="old-price">£ 45.00</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempici didunt ut labore et dolore magna aliqua. Ut enim ad min im veniam, quis notrud cai exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis a aute irure dolor in reprehenderit in voluptate </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-product mb-30 clearfix">
                                                <div class="col-xs-12 col-sm-5 col-md-4">
                                                    <div class="product-img">
                                                        <a href="product-details.php">
                                                            <img src="images/product/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action text-center">
                                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                            <i class="zmdi zmdi-eye"></i>
                                                        </a>
                                                        <a title="Add to cart" href="#">
                                                            <i class="zmdi zmdi-shopping-cart"></i>
                                                        </a>
                                                        <a title="Add to Wishlist" href="#">
                                                            <i class="zmdi zmdi-favorite"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7 col-md-8">
                                                    <div class="product-content text-uppercase mt-50">
                                                        <a title="Men’s White Short Item" href="product-details.php">Men’s White Short Item</a>
                                                        <div class="rating-icon ptb-10">
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                            <i class="zmdi zmdi-star-half"></i>
                                                        </div>
                                                        <div class="product-price pb-10">
                                                            <span class="new-price">£ 38.00</span>
                                                            <span class="old-price">£ 45.00</span>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempici didunt ut labore et dolore magna aliqua. Ut enim ad min im veniam, quis notrud cai exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis a aute irure dolor in reprehenderit in voluptate </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
           -->                       
			


								</div>
                            <!-- End Of Product List -->        
                          