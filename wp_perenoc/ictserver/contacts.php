<?php 
/*
Template Name: ictserver_contacts
*/

?>
<?php get_header(); ?>
<div class="cart">
<div class="cart-container">
        <div class="tinyblock">
            <p>Server ICT > Контакты</p>
        </div>
        <div class="title-cont">
            <p id="bigtitle" class="title-cont-elem">Контакты</p>
            <div class="tce-block">
                <div class="tce-elem" style="flex-direction: column;">
                    <p style="font-weight: 600;font-size: 32px;"><a style="text-decoration: none;color: #000;" href="tel:<?php echo get_post_meta($post->ID, 'Телефон', true); ?>" style="color: #000;"><?php echo get_post_meta($post->ID, 'Телефон', true); ?></a></p>
                    <p style="font-weight: 600;font-size: 32px;margin-top: 8px;"><a style="text-decoration: none;color: #000;" href="mailto:<?php echo get_post_meta($post->ID, 'email', true); ?>" style="color: #000;"><?php echo get_post_meta($post->ID, 'email', true); ?></a></p>
                </div>
                <div class="tce-elem" style="flex-direction: column;font-weight: 400;font-size: 18px;margin-top: 24px;line-height: 20px;">
                    <p style="font-weight: 600;font-size: 32px;"><?php echo get_post_meta($post->ID, 'Улица', true); ?></p><br>
                    <?php the_content(); ?>
                    <style>

                    
                </style>
                </div>
            </div>
        </div>
        <?php echo get_post_meta($post->ID, 'Яндекс карты', true); ?>
    </div>
</div>
<?php get_footer(); ?>