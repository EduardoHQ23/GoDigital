let ubicacionPrincipal = window.pageYOffset; //0

  AOS.init();

window.addEventListener("scroll", function(){
    let desplazamientoActual = window.pageYOffset; //180
    if(ubicacionPrincipal >= desplazamientoActual){ // 200 > 180
        document.getElementsByTagName("nav")[0].style.top = "0px"
    }else{
        document.getElementsByTagName("nav")[0].style.top = "-100px"
    }
    ubicacionPrincipal= desplazamientoActual; //200

})

// Menu

let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let semaforo = true;

document.querySelectorAll(".hamburguer")[0].addEventListener("click", function(){
    if(semaforo){
        document.querySelectorAll(".hamburguer")[0].style.color ="white";
        semaforo= false;
    }else{
        document.querySelectorAll(".hamburguer")[0].style.color ="#10aac1";
        semaforo= true;
    }

    enlacesHeader.classList.toggle("menudos");
})

// click derecho  y f12
// document.oncontextmenu =function(){return false;}
// document.onkeydown = function(){return false;}

//POP UP

function abrir1(){
    document.getElementById("ventana1").style.display="block";
}
function cerrar1(){
    document.getElementById("ventana1").style.display="none";
}

// <figure>
//                         <a href="javascript:abrir1()" id="btn-popup1">                    
//                             <img src="img/principal/crm.png" alt="">
//                             </img>
//                         </a>
//                         <div id="ventana1">
//                             <div id="cerrar1">
//                                 <a href="javascript:cerrar1()">
//                                     <i class="far fa-times-circle"></i>
//                                 </a></div>
//                             Administración o gestión basada en la relación con los clientes: un modelo de gestión de toda la organización, basada en la satisfacción del cliente.
//                         </div>
                        
//                     </figure>