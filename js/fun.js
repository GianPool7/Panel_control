
document.getElementById("guardares").style.display="none";

function verificar(){ 


    if (document.getElementById('gridChecksi').checked) {
        document.getElementById("respuestasi").style.display="flex";
        document.getElementById("guardar").style.display="flex";
        document.getElementById("btnsgtsino").style.display="none";
        document.getElementById("gridCheckno").style.display="none";
        
    }

    if (document.getElementById('gridCheckno').checked) {
        document.getElementById("respuestano").style.display="flex";
        document.getElementById("respuestasi").style.display="none";
        document.getElementById("guardar").style.display="flex";
        document.getElementById("btnsgtsino").style.display="none";
        document.getElementById("gridChecksi").style.display="none";
    }


} 

function mostrarestudiante(){ 


    if (document.getElementById('estu').checked) {
        document.getElementById("mostrarestudiante").style.display="block";
        document.getElementById("ciclo").style.display="block";
        document.getElementById("egresado").style.display="none";
        document.getElementById("btnsgt").style.display="none";
        document.getElementById("egre").style.display="none";
        document.getElementById("egres").style.display="none";
        document.getElementById("egresa").style.display="none";
        document.getElementById("egresad").style.display="none";
    }

    if (document.getElementById('egre').checked) {
        document.getElementById("mostrarestudiante").style.display="block";
        document.getElementById("egresado").style.display="flex";
        document.getElementById("ciclo").style.display="none";
        document.getElementById("btnsgt").style.display="none";
        document.getElementById("estu").style.display="none";
        document.getElementById("egres").style.display="none";
        document.getElementById("egresa").style.display="none";
        document.getElementById("egresad").style.display="none";
    }

    if (document.getElementById('egres').checked) {
        document.getElementById("mostrarestudiante").style.display="block";
        document.getElementById("egresado").style.display="flex";
        document.getElementById("ciclo").style.display="none";
        document.getElementById("btnsgt").style.display="none";
        document.getElementById("estu").style.display="none";
        document.getElementById("egre").style.display="none";
        document.getElementById("egresa").style.display="none";
        document.getElementById("egresad").style.display="none";
    }

    if (document.getElementById('egresa').checked) {
        document.getElementById("mostrarestudiante").style.display="block";
        document.getElementById("egresado").style.display="flex";
        document.getElementById("ciclo").style.display="none";
        document.getElementById("btnsgt").style.display="none";
        document.getElementById("estu").style.display="none";
        document.getElementById("egre").style.display="none";
        document.getElementById("egres").style.display="none";
        document.getElementById("egresad").style.display="none";
    }

    if (document.getElementById('egresad').checked) {
        document.getElementById("mostrarestudiante").style.display="block";
        document.getElementById("egresado").style.display="flex";
        document.getElementById("ciclo").style.display="none";
        document.getElementById("btnsgt").style.display="none";
        document.getElementById("estu").style.display="none";
        document.getElementById("egre").style.display="none";
        document.getElementById("egres").style.display="none";
        document.getElementById("egresa").style.display="none";
    }




} 


