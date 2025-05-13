let seconds = 10;
const countdownElement = document.getElementById('countdown');

setInterval(function() {
    seconds--;
    countdownElement.textContent = seconds;
    
    if (seconds <= 0) {
        window.location.href = window.location.href;
    }
}, 1000);
