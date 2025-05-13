var countdown = document.getElementById('countdown');
var time = 10;

setInterval(function() {
    time--;
    countdown.textContent = time;
    if (time <= 0) location.reload();
}, 1000); 