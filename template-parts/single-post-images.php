<div class="single-post__images">
    <?php $single_post_images = carbon_get_post_meta(34, 'crb_single_post_gallery'); ?>
    <?php foreach($single_post_images as $image): ?>
        <?php echo kama_thumb_img('w=476 &h=367', $image); ?>
    <?php endforeach; ?>
</div>
