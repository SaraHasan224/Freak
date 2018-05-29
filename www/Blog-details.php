<?php
$sql = "SELECT c.ID,c.Status,c.Image,c.Description,c.Title,DATE_FORMAT(c.DateAdded,'%b %d %Y %h:%i %p') as Added ,DATE_FORMAT(c.DateModified,'%b %d %Y %h:%i %p') as Updated,c1.CategoryName,c1.Icon FROM blogs c LEFT JOIN blog_categories c1 ON c1.ID=c.ID where c.ID<>0";
$res = mysql_query($sql) or die(mysql_error());



?>
<html>
                 <?php
					while($row=mysql_fetch_array($res))
				{
				?>   
					   <div class="col-sm-6 col-xs-12">
                                    <div class="single-blog-2 mb-30">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="blog-image">
                                                    <a href="BlogDetails.php?BlogID=<?php echo $row['ID'];?>'">
                                       <img style="width:360px;" src="<?php echo DIR_UPLOADING_BLOGS.$row['Image'];?>"/>
                   
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="blog-desc text-center pt-30">
                                                    <h6 class="blog-title-2 text-text-capitalize">
                                                    <a href="BlogDetails.php"><?php echo $row['Title']; ?></a>
                                                    </h6>
                                                        <p><?php echo $row['Description']; ?></p>
																<div class="read-more">
                                                        <a href="BlogDetails.php">Read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                    <?php
						}
					?>                                  
					
				
</html>