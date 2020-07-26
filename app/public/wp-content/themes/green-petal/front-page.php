<?php
    // Template Name: Frontpage
    get_header();
?>

<!-- About -->
<section class="home-about" data-scroll-section>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                    $aboutSection = get_field('about_section');  
                    if($aboutSection['image']['url']){
                        echo '<figure>
                            <img src="'.$aboutSection['image']['url'].'" alt=""  data-scroll data-scroll-speed="-2">>
                        </figure>';
                    }                  
                ?>                
            </div>
            <div class="col">
                <p class="small-title">About</p>
                <h2><?php echo $aboutSection['title']; ?></h2>
                <?php echo $aboutSection['content']; ?>
                <?php 
                    if($aboutSection['link']['url']){
                        echo '<a href="'.$aboutSection['link']['url'].'" target="'.$aboutSection['link']['target'].'">
                            <button class="site-button"><span>'.$aboutSection['link']['title'].'</span></button>
                        </a>';
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- About Ends -->
<section class="home-benefits" data-scroll-section>
    <?php 
        $benefits = get_field('benefits_of_sorghum');        
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="small-title"><?php echo $benefits['small_title']; ?></p>
                <h2><?php echo $benefits['title']; ?></h2>
                <?php echo $benefits['content']; ?>
            </div>           
            <div class="benefits-wrap row">
                <div class="col">
                    <ul class="unstyled-list">
                        <?php
                            $features = array();
                            if(have_rows('benefits_of_sorghum')):
                                while(have_rows('benefits_of_sorghum')):
                                    the_row();
                                    if(have_rows('features_list')):
                                        while(have_rows('features_list')):
                                            the_row();
                                            $features[] = get_sub_field('feature');
                                        endwhile;
                                    endif;
                                endwhile;
                            endif;
                        ?>
                        <?php
                            $x = 0;
                            foreach($features as $feature){ ?>
                                <li>
                                    <img src="<?php echo ASSETS.'/images/feature-'.($x + 1).'.svg'; ?>" alt="Feature Icon">
                                    <?php echo $feature; ?>
                                </li>
                            <?php $x++; if($x == 3) break; } ?>
                    </ul>
                </div>
                <div class="col img-col">
                    <figure class="cat-img">
                        <img src="<?php echo $benefits['image']['url']; ?>" alt="" data-scroll data-scroll-speed="-1">
                    </figure>
                </div>
                <div class="col">
                    <ul class="unstyled-list">
                        <?php
                            $x = 3;
                            for($x; $x<count($features); $x++){ ?>
                                <li>
                                    <img src="<?php echo ASSETS.'/images/feature-'.($x + 1).'.svg'; ?>" alt="Feature Icon">
                                    <?php echo $features[$x]; ?>
                                </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sorghum Syrup -->
<section class="sorghum-syrup" data-scroll-section>   
    <div class="container">        
        <div class="row">
            <div class="col">
                <h2>Sorghum Syrup</h2>
                <p>Sorghum Syrup is a natural old fashioned sweetener that tastes similar to Honey. Sweet Sorghum Crop was explored as a source to obtain syrup which can be used as sugar alternative in various food industries.</p>          
            </div>
            <div class="col">
                <figure>
                    <img src="<?php echo ASSETS.'/images/jar.png'; ?>" alt="" data-scroll data-scroll-speed="1">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- Sorghum Syrup Ends -->

<!-- Nutrional Values -->
<section class="nutritional-values" data-scroll-section>
    <?php 
        $nutritionalValues = get_field('nutritional_values');
    ?>
    <figure data-scroll data-scroll-speed="1">
        <img src="<?php echo $nutritionalValues['image']['url']; ?>" alt="Nutritional Values Image">
    </figure>    
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?php echo $nutritionalValues['title']; ?></h2>                
            </div>
            <div class="col">
                <?php echo $nutritionalValues['content']; ?>
                <ul class="unstyled-list row">
                    <?php
                        if(have_rows('nutritional_values')):
                            while(have_rows('nutritional_values')):
                                the_row();
                                if(have_rows('nutritional_table')):
                                    while(have_rows('nutritional_table')):
                                        the_row();
                                        echo '<li>
                                            <span class="title">'.get_sub_field('title').'</span>
                                            <span>'.get_sub_field('value').'</span>
                                        </li>';
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>                    
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Nutrional Values End -->

<!-- Products Home -->
<?php
    $args = array(
        'post_type' => 'sorghum_products',
        'posts_per_page' => 3,
        'meta_key'		=> 'featuerd',
        'meta_value'	=> true
    );
    $products = new WP_Query($args);
    if($products->found_posts){ ?>
        <section class="products home-listing" data-scroll-section>
            <div class="listing-background" data-scroll data-scroll-speed="-2">
                <?php
                    $products_options = get_field('products_section');
                ?>
                <figure>
                    <img src="<?php echo $products_options['image']['url']; ?>" alt="Sorghum Products">
                </figure>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2><?php echo $products_options['title']; ?></h2>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $x = 1;
                        if ( $products->have_posts() ) {                            
                            while ( $products->have_posts() ) {
                                echo '<div class="col" data-scroll data-scroll-speed="'.$x.'"><div>';
                                    $products->the_post();
                                    $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );
                                    echo '<div><img src="'.$url.'" alt=""></div>';
                                    echo '<h4>' . get_the_title() .'</h4>';
                                    $features = get_field('meta_featured', get_the_ID());
                                    var_dump($features);
                                    echo $features['short_description'];
                                echo "</div></div>";
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
    <?php }
?>
<!-- Products Home End -->
<?php get_footer(); ?>