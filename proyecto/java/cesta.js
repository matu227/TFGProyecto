var carrito = [];
var productos = []; // Variable para almacenar los productos

function actualizarCarrito() {
  var cestaLista = $('#cesta-lista');
  cestaLista.empty();

  var total = 0;

  for (var i = 0; i < carrito.length; i++) {
    var producto = carrito[i];
    var imagen = '<img src="' + producto.imagen + '" alt="' + producto.nombre + '">';
    var nombre = producto.nombre;
    var precio = producto.precio.toFixed(2) + ' €';
    var cantidad = producto.cantidad;
    var precioTotal = (producto.precio * cantidad).toFixed(2) + ' €';

    cestaLista.append('<tr><td>' + imagen + '</td><td>' + nombre + '</td><td>' + precio + '</td><td>' + cantidad + '</td></tr>');

    total += producto.precio * cantidad;
  }

  $('#total').text('Total: ' + total.toFixed(2) + ' €');
}

function cargarProductosDesdeJSON() {
  $.getJSON('../java/productos.json', function (data) {
    productos = data; // Asigna los productos del JSON a la variable 'productos'
    actualizarCarrito(); // Actualiza el carrito después de cargar los productos
  });
}

function getProductById(id) {
  for (var i = 0; i < productos.length; i++) {
    if (productos[i].id === id) {
      return productos[i];
    }
  }
  return null;
}

// Cargar datos del carrito desde el localStorage si existen
if (localStorage.getItem('carrito')) {
  carrito = JSON.parse(localStorage.getItem('carrito'));
  actualizarCarrito();
}

$(document).ready(function() {
  cargarProductosDesdeJSON(); // Carga los productos desde el JSON al iniciar la página

  $('#boton-comprar').click(function() {
    var productoId = $(this).data('producto');
    var producto = getProductById(productoId);

    if (producto) {
      var index = carrito.findIndex(item => item.id === producto.id);
      if (index !== -1) {
        carrito[index].cantidad++;
      } else {
        producto.cantidad = 1;
        carrito.push(producto);
      }
      // Guardar datos del carrito en el localStorage
      localStorage.setItem('carrito', JSON.stringify(carrito));
      actualizarCarrito();
      console.log("Añadido al carrito"); // Agrega una salida de consola para verificar
    }
  });
});
