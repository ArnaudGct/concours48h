// Menu mobile
const btn_burger = document.querySelector('.btn_burger-header_mobile');
const menu_header_mobile = document.querySelector('.menu-header_mobile');
const menu_links = document.querySelectorAll('.menu-header_mobile a');

// anime({
//     targets: '.menu-header_mobile',
//     opacity: 0,
//     duration: 1,
// });

btn_burger.addEventListener('click', () => {
    document.querySelector('body').classList.toggle('overflow-hidden'); // Empêcher le scroll de la page
    // if (document.querySelector('body').classList.contains('overflow-hidden')) {
    //     anime({
    //         targets: '.menu-header_mobile',
    //         opacity: 1,
    //         easing: 'linear',
    //         duration: 300,
    //     });
    // }else{
    //     anime({
    //         targets: '.menu-header_mobile',
    //         opacity: 0,
    //         easing: 'linear',
    //         duration: 300,
    //     });
    // }
    
    menu_header_mobile.classList.toggle('hidden');
    
    toggleIcon(); // Appel à la fonction pour changer l'icône du menu
});

// Ajouter un écouteur d'événements à chaque lien du menu
menu_links.forEach(link => {
    link.addEventListener('click', () => {
        // anime({
        //     targets: '.menu-header_mobile',
        //     opacity: 0,
        //     easing: 'linear',
        //     duration: 300,
        // });
        document.querySelector('body').classList.remove('overflow-hidden'); // Réactiver le scroll de la page
        toggleIcon(); // Appel à la fonction pour changer l'icône du menu
    });
});

// Fonction pour changer l'icône du menu
function toggleIcon() {
    const icon = btn_burger.querySelector('i');
    icon.classList.toggle('fi-br-menu-burger');
    icon.classList.toggle('fi-br-cross');
}