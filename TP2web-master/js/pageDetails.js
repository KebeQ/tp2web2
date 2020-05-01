function showText() {
    var jeux = localStorage.getItem("gameValue"); 
    if (jeux == 1) {
    document.getElementById("jeux1").style.display = 'block';
    }
    else if (jeux == 2) {
    document.getElementById("jeux2").style.display = 'block';
    }
    else if (jeux == 3) {
    document.getElementById("jeux3").style.display = 'block';
    }
    else if (jeux == 4) {
    document.getElementById("jeux4").style.display = 'block';
    }
    else if (jeux == 5) {
    document.getElementById("jeux5").style.display = 'block';
    }
    else if (jeux == 6) {
    document.getElementById("jeux6").style.display = 'block';
    }
}