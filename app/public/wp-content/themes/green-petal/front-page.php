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
<section class="nutrional-values" data-scroll-section>
    <img src="<?php echo ASSETS.'/images/tbg1.jpg'; ?>" alt="">
    <!-- <video style="position:absolute;left:0;top:0;width:100%;height:100%;object-fit:cover;z-index:-1" loop src="<?php echo ASSETS.'/images/sorghum-vid.mp4'; ?>" autoplay muted></video> -->
    <div class="container">
        <div class="row">
            <div class="col" data-scroll data-scroll-speed="1">
                <h2>Nutritional Values</h2>
                <p>Sorghum Juice has a balanced nutritional profile containing Protein, essential amino acids and minerals. 1Tbsp Sorghum (20g) = 62 Cal + 15g Carbohydrtaes. Sweet sorgum is a source of iron, calcium, and potassium and also has high antioxidant activity when compared to darkest honey.</p>
            </div>
            <div class="col">
                <ul class="unstyled-list">
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Nutrional Values End -->
<?php get_footer(); ?>