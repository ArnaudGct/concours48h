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
                <p>Le règlement</p>
                <i class="fi fi-bs-medical-star"></i>
            </div>
            <div class="background_title-main">
                <p>Le règlement</p>
            </div>
        </section>

        <div class="separation-main"></div>

        <section class="container_articles-le_reglement">
            <article class="item_article-le_reglement">
                <p>1. Objectif du concours</p>
                <p>Stimuler la créativité en créant un court-métrage de 5 minutes maximum en 48 heures, intégrant trois contraintes révélées le vendredi à 18h.</p>
            </article>
            <article class="item_article-le_reglement">
                <p>2. Déroulement</p>
                <p>Le concours débute le vendredi à 18h. À ce moment, sur la page d'accueil de ce site web, vous découvrirez un encadré présentant les contraintes du concours, une vidéo à intégrer au début de votre court-métrage, ainsi qu'un bouton permettant de soumettre votre création. La date limite pour soumettre votre court-métrage est fixée le dimanche à 18h.</p>
            </article>
            <article class="item_article-le_reglement">
                <p>3. Contraintes</p>
                <ul>
                    <li>Les 3 contraintes sont révélées le vendredi à 18h sur la page d'accueil de ce site web.</li>
                    <li>Les contraintes sont les mêmes pour tous les participants.</li>
                    <li>Les contraintes sont à intégrer obligatoirement dans le court-métrage sous peine d'élimination.</li>
                </ul>
            </article>
            <article class="item_article-le_reglement">
                <p>4. Inscriptions et Équipes</p>
                <ul>
                    <li>Inscrivez-vous en ligne sur ce site web.</li>
                    <li>Pour une expérience optimale, le nombre d'étudiant.e.s au sein des équipes peut varier de 4 à 6 personnes.</li>
                    <li>Priorité : Les premières équipes inscrites bénéficient de la priorité, en raison du matériel limité.</li>
                </ul>
            </article>
            <article class="item_article-le_reglement">
                <p>5. Matériel</p>
                <ul>
                    <li>Le matériel est fourni par l'IUT d'Angoulême.</li>
                    <li>Le matériel de l'IUT est à rendre à la fin du concours dans le même état qu'il a été fourni.</li>
                    <li>Chaque équipe est libre d'utiliser son matériel personnel en l'indiquant lors de l'inscription.</li>
                </ul>
            </article>
            <article class="item_article-le_reglement">
                <p>6. Droits d'utilisation de contenu</p>
                <ul>
                    <li>En participant au concours, chaque équipe confirme avoir les droits nécessaires pour utiliser tout contenu, y compris, de manière non exhaustive, musiques, sons, images, et tout autre élément tiers intégré dans leur court-métrage.</li>
                    <li>Il est de la responsabilité de chaque équipe de respecter les droits d'auteur et les licences applicables. Les équipes doivent s'assurer d'obtenir les autorisations nécessaires et de mentionner correctement toute attribution requise pour le contenu tiers utilisé.</li>
                    <li>L'IUT d'Angoulême et les organisateurs du concours déclinent toute responsabilité en cas de violation des droits d'auteur ou de licences par les participants.</li>
                </ul>
            </article>
            <article class="item_article-le_reglement">
                <p>7. Rendu du court-métrage</p>
                <p>Le court-métrage devra être publié sur une plateforme telle que YouTube par exemple ou alors WeTransfer (pour une qualité optimale). Il devra être envoyer via le formulaire de page d'accueil du site web (qui sera affiché au début du concours). En participant au concours, vous acceptez que les organisateurs du 48h mettent en ligne votre court-métrage sur <a href="https://www.youtube.com/channel/UCJnZaF7PD6B4kBL77GLHZXA" target="_blank">leur chaîne YouTube</a> et que des extraits peuvent être utilisés sur leurs réseaux sociaux.</p>
                <div style="height:10px"></div>
                <ul>
                    <li>Format : 16/9 (qui admet des bandes noires pour du 21/9 ou 4/3). La vidéo présentant les contraintes ne soit pas avoir de bandes noires.</li>
                    <li>Qualité : 1080p minimum.</li>
                    <li>Durée : 5 minutes maximum avec la vidéo présentant les contraines intégrée au début du court-métrage.</li>
                </ul>
            </article>
            <article class="item_article-le_reglement">
                <p>8. Prix attribués</p>
                <p>Deux prix à attribuer :</p>
                <ul>
                    <li>Prix du Public : Vote lors de la projection.</li>
                    <li>Prix du Jury : Évalué par des professeurs basé sur la qualité et le respect des contraintes.</li>
                </ul>
            </article>
            <article class="item_article-le_reglement">
                <p>9. Critères d'Évaluation</p>
                <ul>
                    <li>Respect des contraintes.</li>
                    <li>Qualité du scénario.</li>
                    <li>Qualité de la réalisation.</li>
                    <li>Qualité du montage.</li>
                    <li>Qualité du son.</li>
                    <li>Qualité de l'interprétation.</li>
                    <li>Niveau d'étude des étudiant.e.s</li>
                </ul>
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