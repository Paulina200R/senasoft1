let divLog = document.querySelector(".login"); 
let divSign = document.querySelector(".registro"); 

document.getElementById("change-login").addEventListener("click", mostrarLog);
document.getElementById("change-signUp").addEventListener("click", mostrarReg);

function mostrarLog(){
    divLog.style.visibility="visible";
    divSign.style.visibility="hidden";
}

function mostrarReg(){
    divLog.style.visibility="hidden";
    divSign.style.visibility="visible";
}