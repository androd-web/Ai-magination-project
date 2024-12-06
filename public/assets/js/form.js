

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("loginForm");
  const emailInput = document.getElementById("email");
  const pseudoInput = document.getElementById("pseudo");
  const messageInput = document.getElementById("message");
  const emailError = document.getElementById("emailError");
  const pseudoError = document.getElementById("pseudoError");
  const successMessage = document.getElementById("mValid");

  // Cacher le message de succès initialement
  successMessage.style.display = "none";

  form.addEventListener("submit", async (event) => {
    event.preventDefault(); // Empêche le rechargement de la page

    // Réinitialisation des messages d'erreur
    emailError.style.display = "none";
    pseudoError.style.display = "none";
    let isValid = true;

    // Validation des champs
    if (!emailInput.value.trim()) {
      emailError.style.display = "block";
      setTimeout(() => {
        emailError.style.display = "none";
      }, 3000);
      isValid = false;
    }   

    if (!pseudoInput.value.trim()) {
      pseudoError.style.display = "block";
      setTimeout(() => {
        pseudoError.style.display = "none";
      }, 3000);
      isValid = false;
    }

    if (isValid) {
      try {
        // Envoi du formulaire via AJAX
        const formData = new FormData(form);
        const response = await fetch(form.action, {
          method: "POST",
          body: formData,
          headers: {
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
          },
        });

        if (response.ok) {
          const result = await response.json();
          successMessage.style.display = "block"; // Afficher le message de succès
          setTimeout(() => {
            successMessage.style.display = "none";
          }, 3000);
          form.reset(); // Réinitialiser le formulaire
        } else {
          console.error("Erreur lors de l'envoi du formulaire");
        }
      } catch (error) {
        console.error("Erreur réseau : ", error);
      }
    }
  });
});