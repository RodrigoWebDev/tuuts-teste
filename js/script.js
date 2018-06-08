(function () {
    //Adiciona transparência na barra de navegação quando o usuário "scrola" a pagina um pouco para baixo
    var navbar = document.querySelector(".navbar");

    window.addEventListener("scroll", addTransparency);

    function addTransparency() {
        if (scrollY > 50) {
            navbar.style.opacity = "0.9";
        } else {
            navbar.style.opacity = "1";
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
