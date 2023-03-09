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
                    <p style="font-weight: 600;font-size: 32px;">127005, ул. Болотникова, 19</p><br>
                    <?php the_content(); ?>
                    <style>

                    
                </style>
                </div>
            </div>
        </div>
        <div style="position:relative;overflow:hidden;border-radius: 10px;margin-top: 40px;"><a href="https://yandex.ru/maps?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Яндекс Карты</a><a href="https://yandex.ru/maps/213/moscow/stops/station__9858778/?ll=37.860927%2C55.719167&tab=overview&utm_medium=mapframe&utm_source=maps&z=9.53" style="color:#eee;font-size:12px;position:absolute;top:14px;">Арбатская — Яндекс Карты</a><iframe style="width: 70%;border-radius: 10px;" src="https://yandex.ru/map-widget/v1/?ll=37.860927%2C55.719167&masstransit%5BstopId%5D=station__9858778&mode=masstransit&tab=overview&z=9.53" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
    </div>
</div>
<?php get_footer(); ?>