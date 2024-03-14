<?php
    get_header();
?>
        <section>
            <h2>
                Accueil
            </h2>
            <div class="cours">
            <?php
                // if (have_posts()){
                //     while(have_posts()){
                //         the_post();
                //         the_title('<h5>','</h5>');
                //         echo wp_trim_words(get_the_content(),30);

                //     }
                // }

                //standart wordpress
                if(have_posts()):
                    while(have_posts()): the_post();?>
                        <div class="carte">
                            <h2><?php the_title(); ?></h3>
                            <p><?php the_content(); ?> </p>
                        </div>
                    <?php endwhile ?>
                <?php endif ?>
                </div>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Galerie</h2>
            <div>
                <div><img src="" alt="ceci n'est pas une image"></div>
                <div><img src="" alt="ceci n'est pas une image"></div>
                <div><img src="" alt="ceci n'est pas une image"></div>
                <div><img src="" alt="ceci n'est pas une image"></div>
            </div>
        </section>
            <?php
               get_template_part('gabarits/vague') 
            ?>
    </div>
    <div id="footer" class="global">
        <footer>
            <h2>Footer (h2)</h2>
            <h3>Réalisation de: (h3)</h3>
            <h4>David Rousseau (h4)</h4>
            <h5>company TM</h5>
            <a href="#">ceci n'est pas un lien</a>
        </footer>
    </div>
</body>
</html>