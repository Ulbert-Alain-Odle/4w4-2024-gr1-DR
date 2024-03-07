<?php
    get_header();
?>
        <header class="hero">
            <h1>Thème du groupe 1</h1>
            <h2>4w4-Conception d'interface et devloppement web</h2>
            <h3>Tim - collège de maisonneuve</h3>
            <button>Information</button>
        </header>
        <?php
            get_template_part('gabarits/vague') 
        ?>
    </div>
    <div id="accueil" class="global">
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
                            <h3><?= substr(get_the_title(),0,7); ?></h3>
                            <h5><?= substr(get_the_title(),7,strpos(get_the_title(),"(") - 7); ?></h5>
                            <h4><?= substr(get_the_title(),strpos(get_the_title(),"(") + 1, strlen(get_the_title()) - strpos(get_the_title(),"(") - 2)?></h4>
                            <!-- echo get_the_title(); -->
                            <p><?php echo wp_trim_words(get_the_content(),30); ?></p>
                        </div>
                    <?php endwhile ?>
                <?php endif ?>
                </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <blockquote>Si un lapin cours après ses rêves, c'est qu'il n'a jamais mangé une carote verte (Da Vinci - 1814)</blockquote>
        </section>
    </div>
    <div id="evenement" class="global diagonal">
        <section>
            <h2>Evenement</h2>
                <div>
                <button>Voir les évenements</button>
                <button>S'inscrire</button>
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