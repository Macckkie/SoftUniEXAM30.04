<li class="property-card">
					<div class="property-primary">
						<h1 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<div class="property-meta">
							<span class="meta-location"><?php the_category();?></span>
							<span class="meta-total-area"><?php the_date()?></span>
						</div>
					</div>
					<div class="property-image">
						<div class="property-image-box">
                            <?php 
                            if (has_post_thumbnail() ){
                                the_post_thumbnail();
                            } else 
                            echo 
                            '<img src="../images/bedroom.jpg" alt="default image">'
                            ?>
							
						</div>
					</div>
				</li>