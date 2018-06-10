(function () {
    //Deixa o fundo como "none" quando ta no topo da pagina
    var nav = document.getElementsByClassName("navbar")[0];

    window.addEventListener("scroll", addTransparency);

    function addTransparency() {
        if (scrollY > 0) {
            nav.style.background = "#202124";
            nav.classList.add("sticky-top");
            console.log(nav.style.background)
            
        } else {
            nav.style.background = "none";
            nav.classList.remove("sticky-top");
            console.log(nav.style.background);
        }
    }
    
    //Alterna entre os projetos clicados
    
    var alert = document.querySelectorAll(".alert");
    var project = document.querySelector(".project");
    
    for(var i = 0; i < alert.length; i++){
        alert[i].addEventListener("click", function(){
            project.textContent = this.textContent;
        });
    }
})();
