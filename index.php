<?php get_header(); ?>

<main>

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

        <div class="glider-contain">
            <div class="glider">
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

            <div role="tablist" class="dots"></div>
        </div>
        
        
    </section>

    <section class="contato container" id="contato">
        <h1>Contato</h1>
        <?= do_shortcode("[contact-form-7 id='15' title='Formulário de contato 1']"); ?>
    </section>
    
</main>

<?php get_footer(); ?>