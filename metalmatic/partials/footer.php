<footer class="mmfooter">
     <div class="container">
         <div class="row contactgegevens">
            <div class="col-sm-12 col-md-3 d-flex flex-column justify-content-around">
                <div class="logo_f">
                        <?php if (function_exists('the_custom_logo')) { the_custom_logo();} ?>
                </div>
                <div class="socials">
                <?php if( have_rows('social_media', 'option' )): ?>
                            <?php while( have_rows('social_media' , 'option') ): the_row(); ?>
                            <a href="<?php the_sub_field('facebook_link', 'option'); ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="<?php the_sub_field('instagram_link', 'option'); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <h3>Diensten</h3>
            <?php
                        wp_nav_menu(array(
                        'theme_location' => 'menu-diensten',
                        'container_class' => 'metalmatic-diensten-menu nav justify-content-flex-end' ));
                         ?>
            </div>
            <div class="adresgegevens col-sm-12 col-md-3">
                <h3>Contact</h3>
                    <?php if( have_rows('contactgegevens', 'option' )): ?>
                            <?php while( have_rows('contactgegevens' , 'option') ): the_row(); ?>
                            <p class="address"><?php the_sub_field('adres', 'option'); ?></p>
                            <a href="mailto: <?php the_sub_field('e-mail', 'option'); ?>">E-mail: <?php the_sub_field('e-mail'); ?></a><br>
                            <a href="tel:<?php the_sub_field('telefoonnummer', 'option'); ?>">Tel: <?php the_sub_field('telefoonnummer'); ?></a>
                            <?php endwhile; ?>
                    <?php endif; ?>
            </div>
            <div class=" col-sm-12 col-md-3">
            <h3>Service</h3>
            <?php
                        wp_nav_menu(array(
                        'theme_location' => 'menu-service',
                        'container_class' => 'metalmatic-service-menu' ));
                         ?>
            </div>
         </div>
     </div>
        <div class="footer_copy">
            <div class="container">
                <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> </p>
                <p><a href="https://yungo.be" target="_blank"
                            rel="noreferrer noopener"> Made with 🤍 by Yungo</a></p>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    </body>

    </html>