window.addEventListener('DOMContentLoaded', function() {
    var monigote = document.getElementById('monigote');
    var burbuja = document.getElementById('burbuja');

    monigote.addEventListener('mouseover', function() {
        burbuja.style.display = 'block';
    });

    monigote.addEventListener('mouseout', function() {
        burbuja.style.display = 'none';
    });
});