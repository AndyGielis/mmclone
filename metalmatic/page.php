<?php get_template_part( 'partials/header' ); ?>

    <?php if( is_page( 17 ) ) : ?>
        <section>
        <div class="hero">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-sm-12 col-md-6 d-flex flex-column justify-content-center">
                    <h1><?php the_field('hero_titel'); ?></h1>
                    <p><?php the_field('hero_korte_omschrijving'); ?></p>
                </div>
                <div class="col-sm-12 col-md-6 heroimg">
                    <?php 
                    $image = get_field('hero_afbeelding');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
        </section>
        
    <section>
        <?php if( have_rows('components') ): ?>
               <?php while( have_rows('components') ): the_row(); ?>
                        <?php if( get_row_layout() == 'cta_blocks' ): ?>
                            <?php if( have_rows('cta_block') ): ?>
                                <?php while( have_rows('cta_block') ): the_row(); ?>
                                    <div class="infoblock " style="background-image: url('<?php the_sub_field('cta_block_bg_img'); ?>')">
                                        <h1><?php the_sub_field('cta_block_title'); ?></h1>
                                        <p><?php the_sub_field('cta_block_description'); ?></p>
                                    </div>
                           <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endif; ?>
            </div>

            <?php if( get_row_layout() == 'components_txt_img' ): ?>
                <div class="txt_img <?php the_sub_field('components_txt_img_bg_color'); ?>"   >
                          <div class="container">
                                    <div class="row <?php the_sub_field('components_txt_img_img_position');?>">
                                            <div class="col-6 d-flex flex-column justify-content-center txt_img_content">
                                                <h1> <?php the_sub_field('components_txt_img_title'); ?></h1>
                                                <p><?php the_sub_field('components_txt_img_description'); ?></p>
                                                <?php 
                                                $link = get_sub_field('components_txt_img_cta_link');
                                                if( $link ): 
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                    <a class="button primary_button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-6 txt_img_image">
                                            <img src="<?php the_sub_field('components_txt_img_img'); ?>" width="398px">     
                                    </div>
                                 </div>
                            </div>
                        </div>
                    <?php endif; ?>


                    <div class="contact_banner bg-black" >
                        <?php if( get_row_layout() == 'components_contact_banner' ): ?>
                                   <div class="row">
                                   <div class="col-sm-12 col-md-5 contact_img">
                                      <img src="<?php the_sub_field('components_contact_banner_img'); ?>">
                                    </div>
                                  
                                    <div class="contactbanner_txt col-sm-12  col-md-7 d-flex flex-column justify-content-center">
                                        <h1><?php the_sub_field('components_contact_banner_title'); ?></h1>
                                        <?php 
                                                $link = get_sub_field('components_contact_banner_cta_link');
                                                if( $link ): 
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                    <div class="contact_button">
                                                    <a class="button secondary_button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                                                    </div>
                                                <?php endif; ?>
                                    </div>
                                   </div>
                        <?php endif; ?>
                    </div>
                    
                    <?php if( get_row_layout() == 'components_galery' ): ?>
                    <div class="fotogallerij">
                         <div class="container">
                                    <div class="gallerij">
                                        <h1><?php the_sub_field('components_galery_title'); ?></h1>
                                       <div class="row">
                                           <?php 
                                           $images = get_sub_field('components_galery_galery');
                                           $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                           if( $images ): ?>
                                               <?php foreach( $images as $image ): ?>
                                                       <div class="col-sm-12 col-md-4 image gy-5">
                                                       <a href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a> 
                                                       </div>
                                                   <?php endforeach; ?>
                                            <?php endif; ?>
                                       </div>
                                            
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                            
                        </section>
                        
                        
                        
                        <?php endwhile; ?>
                        <?php endif; ?>







        <?php endif; ?>    

   

    
   

<?php get_template_part( 'partials/footer' ); ?>