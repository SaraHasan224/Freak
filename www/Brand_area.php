
<?php 
	   $sql = "SELECT ID,Image FROM brands";
	   $res = mysql_query($sql) or die(mysql_error());
?>
	   <div class="brand-area pb-90">
                <div class="container">
                    <div class="row">
                        <div class="brand-list">
							<?php
								/*$sql = "SELECT ID,Image FROM brands";
							    $res = mysql_query($sql) or die(mysql_error());
								*/while($row = mysql_fetch_array($res))
								{
							?>
							<div class="single-logo">
								<a href="#">
									<div class="single-brand text-center">
										<img src="<?php echo DIR_UPLOADING_BRAND.$row['Image']?>" alt="Brand" />
									</div>
								</a>
							</div>
							<?php 
							    }
							?>
						</div>
                       </div>
                        </div>
                    </div>