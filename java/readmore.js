	  function alternarTexto() {
            // Obtén el elemento de párrafo por su ID
            var parrafo = document.getElementById('miParrafo');

            // Verifica el estilo actual
            if (parrafo.style.display === 'none') {
                // Si está oculto, muestra el texto
                parrafo.style.display = 'block';
            } else {
                // Si está visible, oculta el texto
                parrafo.style.display = 'none';
            }
        }