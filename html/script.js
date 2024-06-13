// scripts.js
document.addEventListener('DOMContentLoaded', function () {
    // Fetch stock price
    fetch('stock-price.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('stock-price-info').textContent = `Current stock price: $${data.price}`;
        })
        .catch(error => {
            console.error('Error fetching stock price:', error);
        });
});
