// resources/js/app.js file

// JavaScript file (e.g., resources/js/app.js)
document.addEventListener('DOMContentLoaded', function() {
    const textFade = document.getElementById('text-fade');
    const words = textFade.getElementsByTagName('span');

    let index = 0;

    function fadeInWord() {
        if (index < words.length) {
            words[index].style.opacity = 1;
            index++;
            setTimeout(fadeInWord, 500); // Adjust the delay as needed
        }
    }

    fadeInWord(); // Start the animation
});