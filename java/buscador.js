document.addEventListener("DOMContentLoaded", function () {
    // Obtener referencias a elementos DOM
    var searchInput = document.getElementById("searchInput");
    var imageContainers = document.querySelectorAll(".image-container");

    // Agregar un evento de escucha al campo de búsqueda
    searchInput.addEventListener("input", function () {
         var searchTerm = searchInput.value.toLowerCase();

         // Iterar sobre los contenedores de imágenes y ocultar/mostrar según la búsqueda
        imageContainers.forEach(function (container) {
            var caption = container.querySelector(".caption").textContent.toLowerCase();

            if (caption.includes(searchTerm)) {
                container.style.display = "block";
            } else {
                container.style.display = "none";
            }
        });
    });
});