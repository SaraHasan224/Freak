 <?php
$sql = "SELECT ID,Status,Image,DATE_FORMAT(DateAdded,'%b %d %Y %h:%i %p') as Added ,DATE_FORMAT(DateModified,'%b %d %Y %h:%i %p') as Updated FROM banner where ID<>0";
$res = mysql_query($sql) or die(mysql_error());
?>
 <div class="banner-area section-padding">
                <div class="container">
            	     
			<div class="row">
<?php
					while($row=mysql_fetch_array($res))				{

?>				
				 <div class="col-sm-6">
                      <div class="banner-img banner-hover mb-30">
					            <a href="#" class="b-img">
                                    <img src="<?php echo DIR_UPLOADING_BANNER.$row['Image'];?>" alt="">
                                </a>
						<div class="shop-cart-icon">
												<a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
							</div>
					  </div>
				</div>
				<?php
				}
				?>	
			 </div>
		<!--
		                   <div class="row">
                        <div class="col-sm-5">
                            <div class="banner-img banner-hover mb-30">
                                <a href="#" class="b-img">
                                    <img src="images/banner/1.jpg" alt="">
                                </a>
                                <div class="shop-cart-icon">
                                    <a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="banner-img banner-hover mb-30">
                                <a href="#" class="b-img">
                                    <img src="images/banner/2.jpg" alt="">
                                </a>
                                <div class="shop-cart-icon">
                                    <a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="banner-img banner-hover rmb-30">
                                <a href="#" class="b-img">
                                    <img src="images/banner/3.jpg" alt="">
                                </a>
                                <div class="shop-cart-icon">
                                    <a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="banner-img banner-hover">
                                <a href="#" class="b-img">
                                    <img src="images/banner/4.jpg" alt="">
                                </a>
                                <div class="shop-cart-icon">
                                    <a href="#"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
		-->
                    
				</div>
</div>
