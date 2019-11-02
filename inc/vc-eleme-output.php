<?php



//banner section 


function main_slider_shortcode($slider){
$result = shortcode_atts(array(

'slider_title' =>'',
'slider_text' =>'',
'slider_link' =>'',
'slider_cont' =>'',




),$slider);
extract($result);
ob_start();
?>


<!-- Slider -->
<section id="banner">
				<div class="inner">
					<h2><?php echo esc_html($slider_title);?></h2>
					<p><?php echo esc_html($slider_text);?><a href="<?php echo esc_html($slider_link);?>"><?php echo esc_html($slider_cont);?></a></p>
					<ul class="actions">
						<li><a href="#content" class="button big special">Sign Up</a></li>
						<li><a href="#elements" class="button big alt">Learn More</a></li>
					</ul>
				</div>
			</section>


<!-- Slider Section End -->	





<?php 
return ob_get_clean(); 
} 
add_shortcode('main_slider','main_slider_shortcode');



// first text
function text($text){
	
	extract(
	shortcode_atts(
	
	array(
		'text_p'	=>'',
		'text_d'	=>'',
	),$text
	)
	
	);
	ob_start();
	?>
	<section id="one" class="wrapper style1">
	<header class="major">
					<h2><?php echo esc_attr($text_p);?></h2>
					<p><?php echo esc_attr($text_d);?></p>
				</header>
		</section>
	<?php 
	return ob_get_clean();
}

add_shortcode('text1','text');


// first text
function textic($textic){
	
	extract(
	shortcode_atts(
	
	array(
		'icon_p'	=>'',
		'icon_text_p'	=>'',
		'icon_text_d'	=>'',
	),$textic
	)
	
	);
	ob_start();
	?>				<div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box">
								<i class="icon <?php esc_attr($icon_p);?> major"></i>
								<h3><?php esc_attr($icon_text_p);?></h3>
								<p><?php esc_attr($icon_text_d);?></p>
							</section>
					</div>
				</div>
				</div>
	<?php 
	return ob_get_clean();
}

add_shortcode('texticon','textic');





add_shortcode('service_section','service_section_shortcode');
function service_section_shortcode($story){
$result = shortcode_atts(array(
'ser_sec_group'	=> '',
'ser_titt'	=> '',
'ser_contt'	=> '',
),$story);
extract($result);
ob_start();
?>

<!-- One -->
<section id="one" class="wrapper style1">
<header class="major">
<h2><?php echo esc_html($ser_titt); ?></h2>
<p><?php echo esc_html($ser_contt); ?></p>
</header>
<div class="container">
<div class="row">
<?php 
$service_group = vc_param_group_parse_atts($ser_sec_group);

foreach ($service_group as $service_value) :
?>
<div class="4u">
<section class="special box">
<i class="icon major<?php echo esc_html(' '.$service_value['service_icon']); ?>"></i>
<h3><?php echo esc_html($service_value['service_tit']); ?></h3>
<p><?php echo esc_html($service_value['service_cont']); ?></p>
</section>
</div>
<?php endforeach;?> 
</div>
</div>
</section>


<!-- service section End -->	

<?php 
return ob_get_clean(); 
} 







// for comodo work

function faisal($faisal){
	extract(
	 shortcode_atts(
	 
		array(
			'comot_heading'  =>	'',
			'comod_des'  =>	'',
			'como_work_p'  =>	'',
			
		),$faisal
	 
	 )
	
	
	);
	ob_start();
	?>
	<?php 
	
	$agrs=array('post_type' =>'comodo', 'posts_per_page' => $comodo);
	$the_query= new WP_Query($agrs);
	
	?>
		<section id="two" class="wrapper style2">
				<header class="major">
					<h2><?php echo  esc_attr($comot_heading);?></h2>
					<p><?php echo  esc_attr($comod_des);?></p>
				</header>
				<div class="container">
					<div class="row">
					<?php while($the_query->have_posts()):$the_query->the_post();?>
						
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="<?php the_post_thumbnail_url();?>" alt="" /></a>
								<h3><?php the_title();?></h3>
								<p><?php the_content();?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<?php wp_reset_postdata();;?>
						<?php endwhile;?>
					</div>
				</div>
			</section>

	<?php
	return ob_get_clean();
}

add_shortcode('comodo_work','faisal');



// for molls1 work

function mollst($mollst){
	extract(
	 shortcode_atts(
	 
		array(
			
			'molls_work_p'  =>	'',
			
		),$mollst
	 
	 )
	
	
	);
	ob_start();
	?>
	<?php 
	
	$agrs=array('post_type' =>'molls', 'posts_per_page' => $molls);
	$the_query= new WP_Query($agrs);
	
	?>
		<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
						
						<?php while($the_query->have_posts()):$the_query->the_post(); ?>
						<div class="8u" style="margin-left:80px;">
							<section>
								<h2><?php the_title();?></h2>
								<a href="#" class="image fit"><img src="<?php the_post_thumbnail_url();?>" alt="" /></a>
								<p><?php the_content();?></p>
							</section>
							</div>
							<?php wp_reset_postdata();?>
							<?php endwhile;?>
						
						
					</div>
				</div>
			</section>	
	<?php
	return ob_get_clean();
}

add_shortcode('molls_work','mollst');


// for molls2 work

function mollst2($mollst2){
	extract(
	 shortcode_atts(
	 
		array(
			
			'molls2_work_t'  =>	'',
			'molls2_work_c'  =>	'',
			
		),$mollst2
	 
	 )
	
	
	);
	ob_start();
	?>
	<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
	<div class="4u">
						<section>
								<h3><?php echo esc_attr($molls2_work_t);?></h3>
								<p><?php echo esc_attr($molls2_work_c);?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
							</div>
							</div>
							</div>
							</section>
				<hr / style="margin-top:0px;">			
	<?php
	return ob_get_clean();
}

add_shortcode('molls2_work','mollst2');


// comodo two work
add_shortcode('faisal_section','faisal_com');
function faisal_com($faisal_com){
$result = shortcode_atts(array(
'faisal_sec_group'	=> '',
'faisal_titt'	=> '',

),$faisal_com);
extract($result);
ob_start();
?>

				<div class="container">
					<div class="row">
	<div class="4u">
<section>
<h3><?php echo esc_html($faisal_titt);?></h3>
<?php 
$com_faisal_group = vc_param_group_parse_atts($faisal_sec_group);

foreach ($com_faisal_group as $faisal_value) :
?>

				
				<ul class="alt" style="margin-bottom:0px;">
									<li><a style="color: #629DD1;
    text-decoration: underline;"href="#"><?php echo esc_html($faisal_value['faisal_tit']);?></a></li>
									<hr/ style="margin:3px;">
									
								</ul>
							
							
				<?php endforeach;?> 

</section>
</div>
							</div>
							</div>
							
	
<!-- service section End -->	

<?php 
return ob_get_clean(); 
} 


// footer one work
add_shortcode('footer_section','footer');
function footer($footer){
$result = shortcode_atts(array(
'footer_sec_group'	=> '',
'footer_titt'	=> '',

),$footer);
extract($result);
ob_start();
?>

				
					
<div class="6u">
							<div class="row collapse-at-2">
					<div class="6u">
									<h3><?php echo esc_html($footer_titt);?></h3>
									<?php $footer_result_keys= vc_param_group_parse_atts($footer_sec_group);
									foreach($footer_result_keys as $footer_result_key):
									?>
									<ul class="alt">
										<li><a href="#"><?php echo esc_html($footer_result_key['footer_tit']);?></a></li>
										
									</ul>
									<?php endforeach;?>
								</div>
								</div>
								</div>
								
								
								
								
							
	
<!-- service section End -->	

<?php 
return ob_get_clean(); 
} 



// for footer work

function footers($footers){
	extract(
	 shortcode_atts(
	 
		array(
			
			'footer_text_p'  =>	'',
			'footer_text_d'  =>	'',
			
		),$footers
	 
	 )
	
	
	);
	ob_start();
	?>
	
				<div class="container">
					<div class="row double">
	<div class="6u">
	<h2><?php echo esc_html($footer_text_p);?></h2>
							<p><?php echo esc_html($footer_text_d);?></p>
		</div>	
		</div>	
		</div>	
		
		
	<?php
	return ob_get_clean();
}

add_shortcode('footericon','footers');




?>