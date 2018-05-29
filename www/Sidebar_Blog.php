<?php
function get_categories_menu($ParentID = 0,$SelectedID = 0,$indent = '')
{
	$r = mysql_query("SELECT ID, CategoryName, Icon FROM blog_categories WHERE ParentID = '".(int)$ParentID."' ORDER BY ID") or die("blog_categories select: " . mysql_error());
	if(mysql_num_rows($r) > 0)
	{
		while($RsC = mysql_fetch_assoc($r))
		{
			echo '<li><a href="Blog.php?CategoryID='.$RsC['ID'].'"><span><i class="fa '.$RsC['Icon'].'"></i></span>'.$indent.$RsC['CategoryName'].'</a></li>';		 
		}
	}
}
?>
<div class="left-blog-sidebar">
                                <div class="blog-sidebar mb-30 fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Search</h4>
                                    <form action="<?php echo $self;?>" method="post" id="blog-search">
                                        <input type="text" placeholder="Search...."name="Search" value="<?php echo $Search;?>" />
                                        <button class="submit"><i class="zmdi zmdi-search"></i></button>
									<input type="hidden" name="search_key" value="search_value" />
									</form>
                                </div>
                                <div class="blog-sidebar mb-30 fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Categories</h4>
                                  <?php
						         echo get_categories_menu(0, $ParentID, '');
					             ?>
                                </div>
                                
								
								

								
								<div class="blog-sidebar post mb-30 fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Recent Post</h4>
                                    <ul>
                                        <li>
                                            <div class="post-thumb b-img">
                                                <a href="blog-details.html">
                                                    <img src="images/product/product-details/s-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-details.html">Blog image post</a>
                                                <span>March 10, 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb b-img">
                                                <a href="blog-details.html">
                                                    <img src="images/product/product-details/s-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-details.html">Blog image post</a>
                                                <span>March 10, 2015</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-thumb b-img">
                                                <a href="blog-details.html">
                                                    <img src="images/product/product-details/s-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <a href="blog-details.html">Blog image post</a>
                                                <span>March 10, 2015</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-sidebar mb-30 fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Popular Tags</h4>
                                    <ul class="tags-list">
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">accessories</a></li>
                                        <li><a href="#">fashion</a></li>
                                        <li><a href="#">footwear</a></li>
                                        <li><a href="#">good</a></li>
                                        <li><a href="#">kid</a></li>
                                        <li><a href="#">men</a></li>
                                        <li><a href="#">women</a></li>
                                    </ul>
                                    <div class="actions">
                                        <a href="#">View All Tags</a>
                                    </div>
                                </div>
                                <div class="blog-sidebar fix">
                                    <h4 class="aside-title text-uppercase pb-20 mb-30">Blog Archives</h4>
                                    <ul>             
									<?php
							//	while($row=mysql_fetch_array($res)){
				?>

                                        <li><a href="#">January 2016</a></li>
                                        <li><a href="#">December 2015</a></li>
                                        <li><a href="#">November 2015</a></li>
                                        <li><a href="#">September 2015</a></li>
                                        <li><a href="#">August 2015</a></li>
										<?php
				//}
				?>
                                    </ul>
                                </div>
                            </div>
                        