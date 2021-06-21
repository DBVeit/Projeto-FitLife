function relogio(){
    setTimeout(function (){
       let x = new Date().toLocaleTimeString();
       document.getElementById('watch').innerHTML = x;
    });
}