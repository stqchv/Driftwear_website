/* ---------- Is someone logged ---------- */

document.addEventListener("DOMContentLoaded", function () {
    // Sprawdź, czy użytkownik jest zalogowany (możesz dostosować tę część w zależności od twojej aplikacji)
    const isLoggedIn = true; // Załóżmy, że użytkownik jest zalogowany

    // Pobierz elementy HTML
    const loginText = document.getElementById("login-text");
    const iconContainer = document.getElementById("icon-container");

    // Zmień widoczność elementów w zależności od statusu logowania
    if (isLoggedIn) {
        loginText.style.display = "none";
        iconContainer.style.display = "block";
    } else {
        loginText.style.display = "block";
        iconContainer.style.display = "none";
    }
});