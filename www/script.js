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

    // Fetch networth
    fetch('networth.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('networth-info').textContent = `Player 1 networth: $${data.player1_networth}, Player 2 networth: $${data.player2_networth}`;
        })
        .catch(error => {
            console.error('Error fetching networth:', error);
        });
});
