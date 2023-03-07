<?php 
/*
Template Name: ictserver_order
Template Post Type: post, page, product
*/

?>
<?php get_header(); ?>
<div class="cart">
<div class="cart-container">
        <div class="tinyblock">
            <p>Server ICT > Оплата и доставка</p>
        </div>
        <div class="title-cont">
            <p id="bigtitle" class="title-cont-elem">Оплата и доставка</p>
            <div class="tce-block">
                <div class="tce-elem" style="flex-direction: column;">
                    <p style="font-weight: 600;font-size: 32px;"><?php echo get_post_meta($post->ID, 'Заголовок1', true); ?></p>
                    <p style="font-weight: 400;font-size: 18px;margin-top: 24px;line-height: 20px;"><?php echo get_post_meta($post->ID, 'Способы доставки', true); ?></p>
                </div>
                <div class="tce-elem" style="flex-direction: column;">
                    <p style="font-weight: 600;font-size: 32px;"><?php echo get_post_meta($post->ID, 'Заголовок2', true); ?></p>
                    <p style="font-weight: 400;font-size: 18px;margin-top: 24px;line-height: 20px;"><?php echo get_post_meta($post->ID, 'Способы оплаты', true); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>