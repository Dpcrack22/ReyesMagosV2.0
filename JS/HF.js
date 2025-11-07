function headerFooter() {
    const headerEl = document.getElementById('header');
    const footerEl = document.getElementById('footer');

    fetch('INCLUDES/header.html')
        .then(res => res.text())
        .then(data => headerEl.innerHTML = data)
        .catch(err => console.error('Error cargando header:', err));

    fetch('INCLUDES/footer.html')
        .then(res => res.text())
        .then(data => footerEl.innerHTML = data)
        .catch(err => console.error('Error cargando footer:', err));
}

document.addEventListener('DOMContentLoaded', headerFooter);