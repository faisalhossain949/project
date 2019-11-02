<!-- Footer --><?php global $shaju;?>
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
									<?php dynamic_sidebar('sidebar_2');?>
								</div>
								<div class="6u">
									<h3>Faucibus</h3>
									<ul class="alt">
										<li><a href="#">Nascetur nunc varius</a></li>
										<li><a href="#">Vis faucibus sed tempor</a></li>
										<li><a href="#">Massa amet lobortis vel</a></li>
										<li><a href="#">Nascetur nunc varius</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="6u">
							<?php dynamic_sidebar('sidebar_1');?>
				
							<ul class="icons">
								<a href="https://twitter.com/home?status=<?php echo get_permalink( get_the_ID() ); ?>"target="_blank"  class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="http://www.facebook.com/sharer.php?url=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="instagram://send?text=<?php echo $currentUrl; ?>" data-action="share/instagram/share" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink());?>" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php echo $image->guid;?>&amp;description=<?php echo rawurlencode(get_the_title()); ?>"class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							</ul>
						</div>
					</div>
					<ul class="copyright">
						<li><?php echo $shaju['footer'];?></li>
						<li>Design: <a href="<?php echo $shaju['url_text_url'];?>"><?php echo $shaju['url_text'];?></a></li>
						<li>Images: <a href="<?php echo $shaju['2url_text_url'];?>"><?php echo $shaju['2url_text'];?></a></li>
					</ul>
				</div>
			</footer>
<?php wp_footer();?>
	</body>
</html>