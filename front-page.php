<?php
    get_header();
?>
        <header class="hero">
            <h1><?= get_bloginfo("name") ?></h1>
            <h2><?= get_bloginfo("description"); ?></h2>
            <button class="clr-agencement-btn-base">Information</button>
        </header>
        <?php
            get_template_part('gabarits/vague') 
        ?>
    </div>
    <div id="accueil" class="global clr-agencement-secondaire">
        <section>
            <h2>
                Accueil
            </h2>
            <!-- création des carte de catégories -->
            <?php
                // Récupération des catégories
                //print_r(get_categories()) ;
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => true, // Changez à false si vous voulez inclure les catégories sans articles
                ));
                //print_r($categories) ;
                // Début du markup HTML
                $output = '<div class="categories-cartes">';

                foreach ($categories as $categorie) {
                    // URL de la catégorie
                    $cat_link = get_category_link($categorie->term_id);

                    // Description de la catégorie, limitée à 10 mots
                    $description = wp_trim_words($categorie->description, 10, '...');
                    // Construction de chaque carte
                    $output .= sprintf(
                        '<div class="categorie-carte">
                            <a href="%s">
                                <h3>%s</h3>
                                <p>%s</p>
                                <p>Articles: %d</p>
                            </a>
                        </div>',
                        esc_url($cat_link),
                        esc_html($categorie->name),
                        esc_html($description),
                        $categorie->count
                    );
                }

                // Fin du markup HTML
                $output .= '</div>';

                // Retour du contenu HTML
                echo $output;
            ?>

            <div class="cours bck-primaire-100">
            <?php
                    if(have_posts()): 
                        while(have_posts()): the_post();?>
                        <div class="carte">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words(get_the_content(),10); ?> </p>
                            <a href="<?php the_permalink(); ?>"> En savoir plus</a>
                        </div>
                        <?php endwhile ?>
                <?php endif ?>
                </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <blockquote>Si un lapin cours après ses rêves, c'est qu'il n'a jamais mangé une carote verte (Da Vinci - 1814)</blockquote>
        </section>
    </div>
    <div id="evenement" class="global diagonal bck-secondaire-100">
        <section>
            <h2>Evenement</h2>
                <div>
                <button class="clr-agencement-btn-base">Voir les évenements</button>
                <button class="clr-agencement-btn-base">S'inscrire</button>
                </div>

        </section>
    </div>
    <div id="galerie" class="global clr-agencement-secondaire-inv">
        <section>
            <h2>Galerie</h2>
            <div>
                <div><img src="image/voyage01.jpg" alt="voyage au caraibe"></div>
                <div><img src="image/voyage02.jpeg" alt="mer déchainé du mexique"></div>
                <div><img src="image/voyage03.jpg" alt="volcan au costa rica"></div>
                <div><img src="image/voyage04.jpg" alt="ile caimen"></div>

            </div>
        </section>
            <?php
               get_template_part('gabarits/vague') 
            ?>
    </div>
<?php get_footer() ?>