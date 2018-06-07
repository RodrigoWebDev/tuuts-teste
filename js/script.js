(function(){
    var navbar =  document.querySelector(".navbar");
    
    //Adiciona transparência na barra de navegação quando o usuário "scrola" a pagina um pouco para baixo
    
    window.addEventListener("scroll", addTransparency);
    
    function addTransparency(){
        if(scrollY > 50){
            navbar.style.opacity = "0.9";
        }else{
            navbar.style.opacity = "1";
        }
    }
})();