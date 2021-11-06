//Web Orriak erabiliko dituen funtzioak mierdaa
//Adibidez form-ek lortutako balioak baliodunak diren konprobatu
function datuakKonprobatu() {
    //Esparru bakoitzarentzat aldagai bat, ondo: ald=1 edo gaizki=0
    var izKon = 1;
    var abKon = 1;
    var emKon = 1;
    var jdKon = 1;
    var naKon = 1;
    var tlKon = 1;

    //if-etan errorea eman den konprobatzen da, eta egonez gero aldagaia 0 bilakatu
    var izena = document.getElementById("izena").value;
    if (!/[^a-zA-Z]/.test(izena)){
        izKon = 0;
    }
    alert(izena);
    alert(izKon);
    var abizena = document.getElementById("abizena").value;
    if (!/[^a-zA-Z]/.test(abizena)){
        abKon = 0;
    }

    //No muy seguro de que la expresión regular esté en formato acceptable para js ?¿
    var email = document.getElementById("emaila").value;
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(email)){
        emKon = 0;
    }

    var jaioData = document.getElementById("jaiotzeData").value;
    const re2 = /[0-9]{4}[/]{1}[0-9]{2}[/]{1}[0-9]{2}/;
    if (!re2.test(jaioData)){
        jdKon = 0;
    }

    var nan = document.getElementById("nan").value;
    const re3 = /[0-9]{8}[A-Za-z]{1}/;
    if (!re3.test(nan)){
        naKon = 0;
    }
    if (naKon == 1){
        if (letraEgiaztatu(nan) != 1){
            naKon = 0;
        }
    }

    var tlf = document.getElementById("telefonoZenbakia").value;
    if (!/[0-9]{9}/.test(tlf)){
        tlKon = 0;
    }

    // - - - - - - - - - - - - - - - - - - - - - 
    //Dena ondo doa? KK

    if (izKon+abKon+emKon+jdKon+naKon+tlKon==6){
        //Dena ondo joan da
        //document.loginak.submit();
        alert("Okey makey");
    }
    else{
        window.alert("Errorea. Konprobatu datuak");
    }


}

function letraEgiaztatu(dni) {
    var array = JSON.parse("[" + dni + "]");
    var letra = array[9];
    array.splice(9,1);
    var zenb = "array[1]"+"array[2]"+"array[3]"+"array[4]"+"array[5]"+"array[6]"+"array[7]"+"array[8]";
    var zenbakia = toLowerCase(parseInt(zenb,10));
    var letrak = [t,r,w,a,g,m,y,f,p,d,x,b,n,j,z,s,q,v,h,l,c,k,e];
    var pos = (zenbakia%23)+1;
    if (letrak[pos] == letra ){
        return 1;
    }
    else{
        return 0;
    }
}

function existitzenDa() {
    //Función para comprobar que los datos introducidos en login.html (el nombre de usuario), no existea ya en la BD

}

function alerta(){
    window.alert("Botoia klikatu duzu.");
}