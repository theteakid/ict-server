<?php 
/*
Template Name: ictserver_about
Template Post Type: post, page, product
*/

?>
<?php get_header(); ?>
<div class="cart">
<div class="cart-container">
        <div class="tinyblock">
            <p>Server ICT > О компании</p>
        </div>
        <div class="title-cont">
            <p id="bigtitle" class="title-cont-elem">Server ICT</p>
            <div class="tce-block">
                <div class="tce-elem">
                    <div class="vivod">


                        <?php the_content();  ?>
                        

                    </div>
                    <style>
                    p {
                        font-weight: 400;
                        font-size: 18px;
                        margin-top: 24px;
                        line-height: 20px;
                    }

                </style>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php get_footer(); ?>