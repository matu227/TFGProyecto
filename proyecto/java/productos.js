
var productos = [
    //zapatilla//
    {
        nombre: "Air Jordan 1 Chicago",
        precio: 179.00,
        imagen: "fotos/zapatilla1/zpa4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 1 Zoom ",
        precio: 169.00,
        imagen: "fotos/zapatilla2/zpa14.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 2 H Wings",
        precio: 209.99,
        imagen: "fotos/zapatilla3/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 1 Sail",
        precio: 189.99,
        imagen: "fotos/zapatilla4/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 6 Toro Bravo",
        precio: 209.99,
        imagen: "fotos/zapatilla5/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 5 Craft",
        precio: 219.99,
        imagen: "fotos/zapatilla6/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 1 High Multicolor",
        precio: 189.99,
        imagen: "fotos/zapatilla7/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 1 Heritage",
        precio: 169.99,
        imagen: "fotos/zapatilla8/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 1 Black and Smoke Grey",
        precio: 179.99,
        imagen: "fotos/zapatilla9/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 4 A Ma Maniére",
        precio: 224.99,
        imagen: "fotos/zapatilla10/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 1 Starfish",
        precio: 179.99,
        imagen: "fotos/zapatilla11/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
    {
        nombre: "Air Jordan 9 Fire Red",
        precio: 189.99,
        imagen: "fotos/zapatilla12/4.jpg",
        tallaDisponible: ["EU 38", "EU 38.5", "EU 39", "EU 40", "EU 40.5", "EU 41"],
    },
];

function mostrarProductos() {
    var listaProductos = document.getElementById('lista-productos');

    productos.forEach(function (producto) {
        var productoDiv = document.createElement('div');
        productoDiv.classList.add('producto');

        productoDiv.innerHTML = `
            <img src="${producto.imagen}" alt="${producto.nombre}">
            <h2 class="nombre">${producto.nombre}</h2>
            <p class="precio">${producto.precio} €</p>
            <p>${producto.descripcion}</p>
            <div class="talla">
                <select id="talla-${producto.nombre}">
                    <option value="">Seleccionar Talla</option>
                    ${producto.tallaDisponible.map(talla => `<option value="${talla}">${talla}</option>`).join('')}
                </select>
            </div>
            <button class="button2" data-nombre="${producto.nombre}" data-precio="${producto.precio}" data-imagen="${producto.imagen}" onclick="agregarAlCarrito(this)">Comprar ${producto.precio} €</button>
        `;

        listaProductos.appendChild(productoDiv);
    });
}

mostrarProductos();
