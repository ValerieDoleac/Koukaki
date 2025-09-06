<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner slide-down">

            <!--  Etape 2 vidéo --> 
            <video class="background-video" autoplay muted loop playsinline poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner.png">
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/StudioKoukakiVideo.mp4" type="video/mp4">
                Votre navigateur ne supporte pas les vidéos HTML5.
            </video>

            <!-- Image de la bannière -->
            <img class="background-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="Bannière Studio Koukaki">

            <div class="flottant">
                <img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" 
                alt="Logo" data-start="transform: translateY(0%);" data-end="transform: translateY(350%);">
            </div>
        </section>

        <section id="story" class="story slide-up">
            <h2 class="section-title"><span>L'</span><span class="second-span">histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>

            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key' => '_main_char_field',
                'orderby' => 'meta_value_num',
            );
            $characters_query = new WP_Query($args);
            
            // Passe la requête au template partiel
            set_query_var('characters_query', $characters_query);
            get_template_part('template-parts/carousel');
            ?>

            <article id="place">
                <div>
                    <h3 class="section-title"><span>Le</span><span class="second-span"> Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <!-- Nuages pour l'effet de parallaxe -->
                <div class="cloud cloud-1" 
                    data-start="transform: translateX(100%);" 

                    data-end="transform: translateX(-500%);">
                </div>
                <div class="cloud cloud-2" 
                    data-start="transform: translateX(100%);" 

                    data-end="transform: translateX(-500%);">
                </div>

            </article>
        </section>


        <section id="studio" class="studio slide-up">
            <h2 class="section-title"><span>Studio</span><span class="second-span"> Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>



    </main><!-- #main -->

<?php
get_footer();