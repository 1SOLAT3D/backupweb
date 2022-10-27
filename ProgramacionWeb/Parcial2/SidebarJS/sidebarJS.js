
window.onload = function() {
    document.getElementById("btn").addEventListener("click",alternarMenu);

    function alternarMenu() {
        document.getElementById("sidebar").classList.toggle("MenuEscondido");
        document.getElementById("contenido").classList.toggle("MargenCero");
    }
}