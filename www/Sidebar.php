<?php
$sql = "SELECT ID,CatagoryName,ParentID FROM catagories  where ID <>0";
$res = mysql_query($sql) or die(mysql_error());
function get_catagories_menu($ParentID = 0,$SelectedID = 0,$indent = '')
{
	$r = mysql_query("SELECT ID, CatagoryName FROM catagories WHERE ParentID = '".(int)$ParentID."' ORDER BY ID") or die("catagories select: " . mysql_error());
	if(mysql_num_rows($r) > 0)
	{
		while($RsC = mysql_fetch_assoc($r))
		{
			 echo '<li '.($SelectedID==$RsC['ID'] ? 'selected' : '' ).' value="'.$RsC['ID'].'">'.$indent.''.$RsC['CatagoryName'].$SelectedID.'</li>';
			 get_catagories_menu($RsC['ID'],$SelectedID,$indent . INDENT.'');
			 
		}
	}
}
?>
	<div class="col-xs-12 col-sm-3 col-sm-pull-9">
                            <div class="aside-list">
                                <aside class="single-aside mb-35">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">Categories</h4>
                                    <div id="cat-treeview" class="product-cat">
                                        <ul class="treeview">										
								<?php
											while($row=mysql_fetch_array($res))
				{
								?>
								<li class="closed"><a href="#"><?php echo $row['CatagoryName'];?></a>
                                       <ul>
												<?php
												echo get_catagories_menu(0,$ParentID,'');
												?>	
                                                    <li <?php echo($ParentID==$row['ID'] ? 'selected' : '' ); ?> value="<?php echo $row['ID']; ?>"><?php echo $row['CatagoryName']; ?><a href="#">Television</a>
                                                      
												  <ul>
                                                            <li>
																<a href="#">LCD TV</a>
															</li>
                                                            <!--
													       <li><a href="#">LED TV</a></li>
                                                            <li><a href="#">Plasma TV</a></li>
                                                     		<li><a href="#">Curved TV</a></li>
															-->
                                                        </ul>
                                                    </li>
                                         <!--           <li><a href="#">Refrigrator</a>
                                                        <ul>
                                                            <li><a href="#">LG</a></li>
                                                            <li><a href="#">Samsung</a></li>
                                                            <li><a href="#">Tosiba</a></li>
                                                            <li><a href="#">Panasonic</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Air Conditanior</a>
                                                        <ul>
                                                            <li><a href="#">General</a></li>
                                                            <li><a href="#">Singer</a></li>
                                                            <li><a href="#">Samsung</a></li>
                                                            <li><a href="#">Gree</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            -->
											</li>
											
									<!--		
                                            <li class="closed"><a href="#">Features</a>
                                                <ul class="treeview">
                                                    <li><a href="#">Men Bag</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                    <li><a href="#">Tops</a></li>
                                                    <li><a href="#">Watch</a></li>
                                                    <li><a href="#">T-shirt</a></li>
                                                </ul>
                                            </li>
                                            <li class="closed"><a href="#">Accessories</a>
                                                <ul class="treeview">
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">LG</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Sony</a></li>
                                                </ul>
                                            </li>
                                            <li class="closed"><a href="#">Top Brands</a>
                                                <ul class="treeview">
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">LG</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Sony</a></li>
                                                </ul>
                                            </li>
                                            <li class="closed"><a href="#">Jewelry</a></li>
                                            <li class="closed"><a href="#">Features</a></li>
                                            <li class="closed"><a href="#">Transportation</a></li>
                                            <li class="closed"><a href="#">Video Games</a></li>
                                    -->


								<?php
										}
								?>









										</ul>
                                    </div>
                                </aside>
                         

























						 <!--  <aside class="single-aside mb-35">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">price</h4>
                                    <div class="price-filter mt-10">
                                        <div class="price-slider-amount mb-10">
                                            <label>You range</label>
                                            <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        </div>
                                        <div id="slider-range"></div>
                                    </div>
                                </aside> 
                                <aside class="single-aside aside-size mb-35">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">size</h4>
                                    <ul class="text-ash text-uppercase mt-20">
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">s</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">sl</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </aside> 
                                <aside class="single-aside aside-color mb-35">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">color</h4>
                                    <ul class="mt-20">
                                        <li class="color-1"><a href="#"></a></li>
                                        <li class="color-2"><a href="#"></a></li>
                                        <li class="color-3"><a href="#"></a></li>
                                        <li class="color-4"><a href="#"></a></li>
                                        <li class="color-5"><a href="#"></a></li>
                                        <li class="color-6"><a href="#"></a></li>
                                        <li class="color-7"><a href="#"></a></li>
                                    </ul>
                                </aside> 
                                <aside class="single-aside product-cat mb-40">
                                    <h4 class="aside-title text-uppercase pb-20 m-0">filter by brands</h4>
                                    <ul class="text-uppercase">
                                        <li><a href="#">raibon</a></li>
                                        <li><a href="#">Aenim</a></li>
                                        <li><a href="#">Aolo</a></li>
                                        <li><a href="#">nike</a></li>
                                        <li><a href="#">yellow</a></li>
                                        <li><a href="#">arong</a></li>
                                    </ul>
                                </aside> 
                                <aside class="single-aside aside-img">
                                    <a href="#" class="b-img widget-img text-uppercase">
                                        <img src="images/widget/1.jpg" alt="">
                                        <div class="best">best</div>
                                        <div class="brand">brand</div>
                                    </a>
                                </aside>    
                            -->
							</div>
                        </div>
           