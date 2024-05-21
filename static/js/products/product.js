document.addEventListener('DOMContentLoaded', function () {
    const descriptions = document.querySelectorAll('.product-description');

    descriptions.forEach(description => {
        description.addEventListener('click', function () {
            this.classList.toggle('expanded');
            
        });
    });
});
