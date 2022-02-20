<?php get_header(); ?>

<main>

    <section class="banners">
        <div class="banner-container">
            <div class="slider-banner">
                <?php
                    global $post;
                    $args = array( 'numberposts' => 10, 'category_name' => 'pneus' );
                    $posts = get_posts( $args );
                    foreach( $posts as $post ): setup_postdata($post); 
                ?>
                    <div class="swiper-slide">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="quem-somos container" id="quem-somos">
        <h1>Quem Somos</h1>

        <?php
            global $post;
            $args = array( 'numberposts' => 10, 'category_name' => 'quem-somos' );
            $posts = get_posts( $args );
            foreach( $posts as $post ): setup_postdata($post); 
        ?>
            <div>
                <div class="post-text">
                    <?php the_content(); ?>
                </div>
                <div class="post-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="servicos container" id="servicos">
        <h1>Serviços</h1>

        <?php
            global $post;
            $args = array( 'numberposts' => 10, 'category_name' => 'servicos' );
            $posts = get_posts( $args );
            foreach( $posts as $post ): setup_postdata($post); 
        ?>
            <div>
                <div class="post-title">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                </div>
                <div class="post-text">
                    <?php the_content(); ?>
                </div>
                <div class="post-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="pneus" id="pneus">
        <h1>Pneus</h1>

        <div class="pneus-slider-contain mobile">
            <div class="slider-pneus">
                <?php
                    global $post;
                    $args = array( 'numberposts' => 10, 'category_name' => 'pneus' );
                    $posts = get_posts( $args );
                    foreach( $posts as $post ): setup_postdata($post); 
                ?>
                    <div class="swiper-slide">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    
                <?php endforeach; ?>
            </div>

            <div class="pneus-dots"></div>
        </div>
        
        
    </section>

    <section class="contato-mapa container" id="contato">
        <div class="contato">
            <h1>Contato</h1>
            <?= do_shortcode("[contact-form-7 id='15' title='Formulário de contato 1']"); ?>
        </div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3474.4631227484933!2d-51.96722608489887!3d-29.44448398210456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951c616caa6f4f51%3A0x78d3f428c715f313!2sPira%C3%AD%20Pneus!5e0!3m2!1spt-BR!2sbr!4v1645300738988!5m2!1spt-BR!2sbr" 
                width="100%" 
                height="100%" 
                style="border:0; min-height: 300px" 
                allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>