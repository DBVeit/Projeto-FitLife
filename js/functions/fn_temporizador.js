function relogio(){
    setInterval(function (){
       let x = new Date().toLocaleTimeString();
       document.getElementById('watch').innerHTML = x;
    }, 1000);
}