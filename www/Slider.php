<?php 
$sql = "SELECT ID,Image,Description,Heading,Year,Link,Status,DATE_FORMAT(DateAdded,'%b %d %Y %h:%i %p') as Added,DATE_FORMAT(DateModified, '%b %d %Y %h:%i %p') as Updated FROM slider_main";
$res = mysql_query($sql) or die(mysql_error());
?>
 <div class="slider-area">
          
		<div id="ensign-nivoslider" class="slides">   
<?php
					while($row=mysql_fetch_array($res))				{
				?> 				

				<img src="<?php echo DIR_UPLOADING_SLIDER.$row['Image'];?>" alt="" title="#htmlcaption1"/>
              <?php
					}				
				?> 
            </div>
            <!-- direction 1 -->
<?php
					$es = mysql_query($sql) or die(mysql_error());

					while($r=mysql_fetch_array($es))	
					{
?> 
				<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-md-offset-5 col-md-7 slider-height">
            		<div class="slide-text">
			
		   <div class="cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="0s">
                                    <h2><strong><?php echo $row['Year']; ?></strong></h2>
                                </div>
                                <div class="cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="0s">
                                    <h2><?php echo $row['Heading']; ?></h2>
                                </div>
                                <div class="cap-sub-title wow bounceInDown mb-30 text-white" data-wow-duration="1.5s" data-wow-delay="0s">
                                    <p><?php echo $row['Description']; ?></p>
                                </div>
                                <div class="cap-shop wow bounceInUp" data-wow-duration="2s" data-wow-delay=".5s">
                                    <a href="#" class="button extra-small text-uppercase">
                                        <span>Shop now</span>
                                    </a>
                                </div>                      
						   </div>
				   
				
                        </div>
                    </div>
                </div>  
            </div>
<?php
			}
?>  

		   <!-- direction 2 -->
          <!--    <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                <div class="container slider-height">
                    <div class="row slider-height">
                        <div class="col-md-offset-5 col-md-7 slider-height">
                            <div class="slide-text">
                                <div class="cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="0s">
                                    <h2><strong>2016</strong></h2>
                                </div>
                                <div class="cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="0s">
                                    <h2>boutique special collection</h2>
                                </div>
                                <div class="cap-sub-title wow bounceInDown mb-30 text-white" data-wow-duration="1.5s" data-wow-delay="0s">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ipsum dolor sit amet labore et dolore</p>
                                </div>
                                <div class="cap-shop wow bounceInUp" data-wow-duration="2s" data-wow-delay=".5s">
                                    <a href="#" class="button extra-small text-uppercase">
                                        <span>Shop now</span>
                                    </a>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
       --> </div> 