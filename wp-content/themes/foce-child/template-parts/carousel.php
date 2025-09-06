
<?php
$characters_query = get_query_var('characters_query');
if ($characters_query->have_posts()) : ?>
    <article id="characters">
        <h3 class="section-title"><span>Les</span><span class="second-span"> personnages</span></h3>
        <div class="swiper characters-swiper">
            <div class="swiper-wrapper">
                <?php
                while ($characters_query->have_posts()) {
                    $characters_query->the_post();
                    ?>
                    <div class="swiper-slide">
                        <figure>
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                            <figcaption><?php the_title(); ?></figcaption>
                        </figure>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </article>
<?php endif; ?>
