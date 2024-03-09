let listras = document.querySelector("#listras");
let menu = document.querySelector("#menu");
let itens = document.querySelectorAll(".item");

function abrirMenu(){
    if (menu.classList.contains("active")){
        menu.classList.remove("active");
        listras.querySelector("a").innerHTML = 
            "<i class= 'fas fa-bars'></i>";
    }
    else{
        menu.classList.add("active");
        listras.querySelector("a").innerHTML = 
            "<i class= 'fas fa-times'></i>";
    }
}
listras.addEventListener("click", abrirMenu);