document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', () => {
        // Masquer toutes les réponses déjà ouvertes
        document.querySelectorAll('.faq-answer').forEach(answer => {
            if (answer.previousElementSibling !== item) {
                answer.style.display = 'none';
                answer.previousElementSibling.classList.remove('active');
            }
        });

        // Afficher/Masquer la réponse actuelle
        const answer = item.nextElementSibling; // L'élément suivant (réponse)
        const isActive = item.classList.contains('active');

        if (isActive) {
            answer.style.display = 'none';
        } else {
            answer.style.display = 'block';
        }

        // Basculer la classe active
        item.classList.toggle('active');
    });
});
