function headerFooter() {
    fetch('/INCLUDES/header.html')
        .then(response => response.text())
        .then(data => document.getElementById('header').innerHTML = data);

    fetch('/INCLUDES/footer.html')
        .then(response => response.text())
        .then(data => document.getElementById('footer').innerHTML = data);
};