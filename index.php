<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème gr.1</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="entete" class="global">
        <header class="entete__header">
            <h1>Thème du groupe 1</h1>
            <h2>4w4-Conception d'interface et devloppement web</h2>
            <h3>Tim - collège de maisonneuve</h3>
            <button>Information</button>
        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
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
                            <h3><?= substr(get_the_title(),0,7) ?></h3>
                            <h3><?= substr(get_the_title(),strpos(get_the_title(),"("), strlen(get_the_title())-strpos(get_the_title(),"("))?></h3>
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
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" style="fill: var(--couleur-arriere-footer)"></path>
            </svg>
        </div>
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