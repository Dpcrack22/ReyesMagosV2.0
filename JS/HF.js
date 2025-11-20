function headerFooter() {
    fetch('INCLUDES/header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('header').innerHTML = data;
            inicializarMenuHamburguesa();
        })
        .catch(error => console.error('Error al cargar el header:', error));

    fetch('INCLUDES/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer').innerHTML = data;
        })
        .catch(error => console.error('Error al cargar el footer:', error));
}

function inicializarMenuHamburguesa() {
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('header nav');

    if (menuToggle && nav) {
        menuToggle.addEventListener('click', function() {
            nav.classList.toggle('active');
        });

        // Cerrar menú al hacer clic en un enlace
        const links = nav.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', function() {
                nav.classList.remove('active');
            });
        });
    }
}

document.addEventListener('DOMContentLoaded', headerFooter);