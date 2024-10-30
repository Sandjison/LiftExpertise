/* 

SECTION 


*/

// Ecouter l'événement d'ouverture du modal pour démarrer la vidéo
document.addEventListener('DOMContentLoaded', function () {
    var videoModal = document.getElementById('videoModal');
    var videoIframe = document.getElementById('video');

    videoModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget; // Bouton qui a déclenché l'ouverture
        var videoSrc = button.getAttribute('data-src'); // Récupère le data-src de la vidéo
        videoIframe.src = videoSrc; // Assigne le lien YouTube à l'iframe
    });

    // Arrêter la vidéo lorsque le modal est fermé
    videoModal.addEventListener('hidden.bs.modal', function () {
        videoIframe.src = ""; // Vider le src pour stopper la vidéo
    });
});

/* 

SECTION 


*/

// Fonction pour animer un compteur jusqu'à la valeur cible
function animateCounter(counterId, target) {
    const counterElement = document.getElementById(counterId);
    let currentCount = 0;
    const duration = 2000; // Durée totale de l'animation en ms
    const interval = 30; // Fréquence de mise à jour en ms
    const step = target / (duration / interval); // Pas à chaque intervalle

    const countInterval = setInterval(() => {
        currentCount += step;
        if (currentCount >= target) {
            currentCount = target;
            clearInterval(countInterval); // Arrêter l'intervalle une fois atteint
        }
        counterElement.innerText = Math.floor(currentCount) + '%'; // Mise à jour de l'affichage
    }, interval);
}

// Utilisation de IntersectionObserver pour détecter l'apparition de chaque compteur
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            if (entry.target.id === 'counter1') {
                animateCounter('counter1', 90); // Compteur 1 à 90%
            } else if (entry.target.id === 'counter2') {
                animateCounter('counter2', 80); // Compteur 2 à 80%
            } else if (entry.target.id === 'counter3') {
                animateCounter('counter3', 100); // Compteur 3 à 100%
            }
            observer.unobserve(entry.target); // Ne plus observer une fois l'animation commencée
        }
    });
}, { threshold: 0.5 }); // L'élément doit être visible à 50%

// Observer chaque compteur
observer.observe(document.getElementById('counter1'));
observer.observe(document.getElementById('counter2'));
observer.observe(document.getElementById('counter3'));

/* 

SECTION 


*/


//menu responsive code JS

var menu_toggle = document.querySelector('.menu_toggle');
var menu = document.querySelector('.menu');
var menu_toggle_span = document.querySelector('.menu_toggle span');

menu_toggle.onclick = function () {
    menu_toggle.classList.toggle('active');
    menu_toggle_span.classList.toggle('active');
    menu.classList.toggle('responsive');
}


/* 

SECTION 


*/

function showProfile(button) {
    var imgSrc = button.getAttribute('data-img');
    var profileImg = document.getElementById('profile-img');
    var profileName = document.getElementById('profile-rating');
    var profileSkill = document.getElementById('profile-skill');
    var profileRating = document.getElementById('profile-rating');
    var profileRatingBar = document.getElementById('profile-rating-bar');
    var profileCompletion = document.getElementById('profile-completion');
    var profileCompletionBar = document.getElementById('profile-completion-bar');
    var profileResponseTime = document.getElementById('profile-response-time');
    var profileResponseTimeBar = document.getElementById('profile-response-time-bar');

    profileImg.src = imgSrc;

    // Met à jour les autres détails (remplacer les valeurs fixes par des valeurs dynamiques si nécessaire)
    profileName.innerText = button.closest('.card').querySelector('.card-title').innerText;
    profileSkill.innerText = `(${button.closest('.card').querySelector('.card-text').innerText})`;
    profileRating.innerText = button.closest('.card').querySelector('h4').innerText;

    // Assurez-vous que la barre de progression est correctement mise à jour
    profileRatingBar.style.width = '90%';
    profileCompletion.innerText = '90/100';
    profileCompletionBar.style.width = '90%';
    profileResponseTime.innerText = 'Moy 4 Heure /Jour';
    profileResponseTimeBar.style.width = '16.67%';

    document.getElementById('profile').style.transform = 'scale(1)';
    document.getElementById('profile').style.opacity = 1;
}

function hideProfile() {
    document.getElementById('profile').style.transform = 'scale(0)';
    document.getElementById('profile').style.opacity = 0;
}

/* 

SECTION 


*/

(function() {
    var autoUpdate = true, // Active l'auto-update
        timeTrans = 6000; 

    var cdSlider = document.querySelector('.cd-slider'),
        item = cdSlider.querySelectorAll("li"),
        nav = cdSlider.querySelector("nav");

    item[0].className = "current_slide";

    function nextSlide() {
        var currentSlide = cdSlider.querySelector("li.current_slide"),
            nextElement = currentSlide.nextElementSibling,
            nextSlide = (nextElement !== null) ? nextElement : item[0];

        currentSlide.className = "";
        nextSlide.className = "current_slide";
        updateNavColor(); // Met à jour les couleurs de navigation
    }

    function prevSlide() {
        var currentSlide = cdSlider.querySelector("li.current_slide"),
            prevElement = currentSlide.previousElementSibling,
            prevSlide = (prevElement !== null) ? prevElement : item[item.length - 1];

        currentSlide.className = "";
        prevSlide.className = "current_slide";
        updateNavColor(); // Met à jour les couleurs de navigation
    }

    function updateNavColor() {
        var currentSlide = cdSlider.querySelector("li.current_slide");

        var nextColor = (currentSlide.nextElementSibling !== null) 
            ? currentSlide.nextElementSibling.getAttribute("data-color") 
            : item[0].getAttribute("data-color");

        var prevColor = (currentSlide.previousElementSibling !== null) 
            ? currentSlide.previousElementSibling.getAttribute("data-color") 
            : item[item.length - 1].getAttribute("data-color");

        nav.querySelector(".prev").style.backgroundColor = prevColor;
        nav.querySelector(".next").style.backgroundColor = nextColor;
    }

    nav.querySelector(".next").addEventListener('click', function(event) {
        event.preventDefault();
        nextSlide();
        autoUpdate = false; // Désactive l'auto-update lorsque l'utilisateur clique sur "Suivant"
    });

    nav.querySelector(".prev").addEventListener("click", function(event) {
        event.preventDefault();
        prevSlide();
        autoUpdate = false; // Désactive l'auto-update lorsque l'utilisateur clique sur "Précédent"
    });

    // Réactive l'auto-update lorsque la souris quitte les boutons
    nav.querySelector(".next").addEventListener("mouseout", function() {
        autoUpdate = true; // Réactive l'auto-update
    });

    nav.querySelector(".prev").addEventListener("mouseout", function() {
        autoUpdate = true; // Réactive l'auto-update
    });

    // Auto-update toutes les 10 secondes
    setInterval(function() {
        if (autoUpdate) {
            nextSlide();
        }
    }, timeTrans);

})();


/* 

SECTION 


*/






/* 

SECTION 


*/























