function validanum1() {
    if(document.getElementsByName("num1")[0].value=="") {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num1")[0].focus();
        return false;
    }
}

function validanum2() {
    if(document.getElementsByName("num2")[0].value=="")  {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num2")[0].focus();
        return false;
    } 
}

function validanum3() {
    if(document.getElementsByName("num3")[0].value=="")  {
        alert("Por Favor, Preencha O Campo!");
        document.getElementsByName("num3")[0].focus();
        return false;
    } 
}