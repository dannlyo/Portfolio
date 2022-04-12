var mode = document.getElementById('mode');
var img = document.getElementById('swimode');
mode.addEventListener('click', function ad(){
    document.body.classList.toggle('light');
    if(document.body.classList.contains('light')){
        img.src = '../images/night-mode.png';
    }else{
        img.src = '../images/sun.png';
    }
});