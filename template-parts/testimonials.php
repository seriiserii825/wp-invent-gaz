<?php $testimonials = carbon_get_theme_option('crb_numbers_fields'); ?>

<?php if($testimonials): ?>
	<section class="section testimonials">
		<div class="container">
			<div class="testimonials__content">
				<?php foreach($testimonials as $item): ?>
					<div class="testimonials__item"><div class="testimonials__img"><img src="<?php echo $item['crb_testimonials_icon']; ?>" alt=""></div>
						<h3 class="testimonials__title"><?php echo $item['crb_testimonials_title'.get_lang()]; ?></h3>
						<p class="testimonials__text"><?php echo $item['crb_testimonials_text'.get_lang()]; ?></p>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
