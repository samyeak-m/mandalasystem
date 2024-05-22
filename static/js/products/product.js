document.addEventListener('DOMContentLoaded', function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'static/data/product.json', true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);
            renderProducts(data);
        }
    };
    xhr.send();

    function renderProducts(products) {
        var productsContainer = document.getElementById('products-container');
        productsContainer.innerHTML = '';

        products.forEach(function(product) {
            var productCard = `
                <figure class="product-card" >
                    <img src="${product.image}" alt="Software Image">
                    <figcaption>
                        <h2 class="product-name">${product.name}</h2>
                        <p class="product-description">
                            ${product.description}
                        </p>
                        <div class="actionbtn">
                            <p class="product-price">${product.price}</p>
                            <button class="enquire-btn" data-id="${product.id}">Enquire</button>
                        </div>
                    </figcaption>
                </figure>
            `;
            productsContainer.insertAdjacentHTML('beforeend', productCard);
        });

            const descriptions = document.querySelectorAll('.product-description');
        
            descriptions.forEach(description => {
                description.addEventListener('click', function () {
                    this.classList.toggle('expanded');
                    
                });
            });
        

        var productCards = document.querySelectorAll('.enquire-btn');
        productCards.forEach(function(card) {
            card.addEventListener('click', function() {
                var productId = this.getAttribute('data-id');
                window.location.href = `singleproduct?id=${productId}`;
            });
        });
    }
});
