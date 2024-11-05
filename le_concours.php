<?php

include './Helpers/functions.php';
echo head('Le concours 48h - MMI Angoulême');

?>

<body>
    <?php echo header_main(); ?>

    <main class="main_all">
        <div style="height: calc(5.5625rem + 3.125rem);"></div>

        <section class="title_section-main">
            <div class="content_title_section-main">
                <i class="fi fi-bs-medical-star"></i>
                <p>Le concours</p>
                <i class="fi fi-bs-medical-star"></i>
            </div>
            <div class="background_title-main">
                <p>Le concours</p>
            </div>
        </section>

        <div class="separation-main"></div>

        <section class="container_articles-le_concours">
            <article class="item_article-le_concours">
                <!-- <div class="illustration_article-le_concours">
                    <img src="./assets/img/le_concours/le_concours_1.jpg" alt="Image du concours 48h" />
                </div> -->
                <div class="content_article-le_concours">
                    <p>Explication du concours :</p>
                    <p>Comme son nom l'indique, le concours 48h propose à des équipes d’étudiant.e.s un défi temporel. En effet, ils disposent de 48 heures pour écrire, tourner et monter un court-métrage de moins de 5 minutes, en intégrant trois contraintes spécifiques. Ces contraintes sont dévoilées dès le début du concours sur la page d'accueil, accompagnées d'une vidéo explicative. Cette vidéo récapitule les trois contraintes et doit être intégrée au début de chaque court-métrage, facilitant ainsi la compréhension par le public extérieur qui visionne les productions.</p>
                </div>
            </article>

            <article class="item_article-le_concours right">
                <div class="illustration_article-le_concours">
                    <img src="./assets/img/tournage_la_liste.webp" alt="Image du concours 48h" />
                    <p>Tournage du court-métrage : “La Liste”</p>
                </div>
                <div class="content_article-le_concours">
                    <p>Pourquoi le concours a été créé ?</p>
                    <p>Le concours 48h a été créé par les étudiant.e.s de la filière TSI (Technique du son et de l'image), une licence qui n'est plus proposée au sein de l'IUT d'Angoulême. Cette édition marque la première année où la formation MMI prend en charge l'organisation du concours. À l'origine de sa création, l'objectif était de permettre aux étudiant.e.s de s'affranchir du cadre académique et d'explorer davantage leur créativité dans le domaine audiovisuel, tout en intégrant des contraintes pour encadrer le scénario. Aujourd'hui, cette aspiration demeure inchangée, et l'ambition est de faire du concours 48h un évènement attendu par tous les étudiant.e.s, propice à l'expérimentation de nouvelles idées.</p>
                </div>
            </article>

            <article class="item_article-le_concours left">
                <div class="illustration_article-le_concours">
                    <img src="./assets/img/visuel_site_web.webp" alt="Image du concours 48h" />
                    <p>Visuel du site web illustrant la nouvelle charte graphique</p>
                </div>
                <div class="content_article-le_concours">
                    <p>Quelles sont les nouveautés pour cette édition ?</p>
                    <p>Cette année marque la première édition du concours organisée par la formation MMI, et elle se distingue par plusieurs changements significatifs. L'organisation a bénéficié d'une collaboration étroite entre les étudiants, avec la participation active d'Arnaud Graciet, qui a joué un rôle essentiel dans l'initiation de la création d'une nouvelle charte graphique. L'objectif de cette démarche était de conférer une identité distinctive au concours. La mise en place de cette charte graphique s'est avérée réussie, que ce soit à travers la conception d'un site web dédié ou la réalisation d'affiches. Ces éléments visuels unifiés visent à promouvoir de manière cohérente cet événement au sein de notre communauté étudiante.</p>
                </div>
            </article>
        </section>

        <div style="height: 3.125rem;"></div>

        <section class="inscription-le_concours">
            <div class="flex_inscription-le_concours">
                <div class="btn_all">
                    <a href="./les_editions.php">Voir tous les courts-métrages</a>
                </div>
            </div>
        </section>
        

        <div style="height: 3.125rem;"></div>
    </main>

    <?php echo footer_main(); ?>

    <script src="./assets/js/anime.min.js"></script>
    <script src="./assets/js/menu.js"></script>
    <script>
        

    </script>
</body>

</html>