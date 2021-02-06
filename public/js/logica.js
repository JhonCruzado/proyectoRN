document.getElementById('btnEntrenar').addEventListener("click", entrenar, false);
document.getElementById('btnCalcular').addEventListener("click", hallar, false);

//Variables
var fA, wB, w1, w2;
const xB = 1;
var x1 = [1,1,0,1,0,0,1,0];
var x2 = [1,1,1,0,0,1,0,0];
var x3 = [1,0,1,1,1,0,0,0];
let bodyTab = '';

//Establece los valores a wB,w1 y w2
function randomPesos(min, max) {
    const r = Math.random() * (max - min) + min;
    return r.toFixed(2);
}

function pesosIniciales() {
    wB = parseFloat(randomPesos(-3,3));
    w1 = parseFloat(randomPesos(-3,3));
    w2 = parseFloat(randomPesos(-3,3));
    w3 = parseFloat(randomPesos(-3,3));
    //wB = parseFloat(-2.5);
    //w1 = parseFloat(0.5);
    //w2 = parseFloat(1.5);
    //w3 = parseFloat(0.5);
    fA = parseFloat(0.5);
}

function fnNet(x1, x2, x3) {
    return (x1 * w1) + (x2 * w2) + (x3 * w3) + (xB * wB);
}

function fnYs(net) {
    if (net >= 0) return 1;
    else return 0;
}

function fnYd(x1, x2, x3) {
    if (x1 == 1 && x2 == 1 && x3 == 1) {
        return 1;
    }else if (x1 == 1 && x2 == 1 && x3 == 0) {
        return 1;
    }else if (x1 == 0 && x2 == 1 && x3 == 1) {
        return 1;
    }else if (x1 == 1 && x2 == 0 && x3 == 1) {
        return 1;
    }else {
        return 0;
    }
}

//Algoritmo de RN para determinar una OR
function entrenar() {
    
    off = false;
    while (off == false) {
        pesosIniciales();
        i = 0; j = 0; x = 1; on = false; bodyTab = '';
        while (on == false) {

            net = fnNet(x1[i], x2[i], x3[i]);
            Ys = fnYs(net);
            Yd = fnYd(x1[i], x2[i], x3[i]);

            if(x > 1000){
                on = true;
            }

            if (Ys == Yd) {
                j += 1;
                if (j == x1.length){
                    on = true;
                    off = true;
                } 
            } else {
                updatePesos(Yd, Ys, x1[i], x2[i], x3[i]);
            }
            tabla(x1[i], x2[i], x3[i], Ys, Yd, x);
            i += 1;
            if (i == x1.length) {
                i = 0; j = 0; x += 1;
            }
        }
    }
    mostrar();
}

function tabla(x1, x2, x3, yd, ys, x) {
    estado = "La neurona NO aprendio";
    if (ys == yd) estado = "La neurona aprendio";
    bodyTab += `
        <tr>
            <th>${x}</th>
            <td>${x1}</td>
            <td>${x2}</td>
            <td>${x3}</td>
            <td>${yd}</td>
            <td>${ys}</td>
            <td>${estado}</td>
        </tr>
        `
}

function mostrar() {
    document.getElementById("itera").innerHTML = bodyTab;
    document.getElementById("fa").value = fA;
    document.getElementById("wb").value = wB;
    document.getElementById("w1").value = w1;
    document.getElementById("w2").value = w2;
    document.getElementById("w3").value = w3;
}

function hallar() {
    n1 = document.getElementById("x1").value;
    n2 = document.getElementById("x2").value;
    n3 = document.getElementById("x3").value;

    if (document.getElementById("wb").value != ""){
        if(n1 !='' && n2 !='' && n3 !=''){
            varX1 = valorBin(n1);
            varX2 = valorBin(n2);
            varX3 = valorBin(n3);
            net = fnNet(varX1, varX2, varX3);
            Ys = fnYs(net);
            if(Ys == 1) document.getElementById("yd").value = "Aprobado";
            else document.getElementById("yd").value = "Desaprobado";

            document.getElementById("net").value = net.toFixed(4);
        }else{
            alert("Ingrese las notas");
        }
    }else{
        alert("Aún no ha entrenado a la neurona, presione ENTRENAR...!");
    }
}

//Cuando aún no aprende
function updatePesos(Yd, Ys, x1, x2, x3) {
    wB = parseFloat(wB + fA * (Yd - Ys) * xB).toFixed(2)
    w1 = w1 + fA * (Yd - Ys) * x1;
    w2 = w2 + fA * (Yd - Ys) * x2;
    w3 = w3 + fA * (Yd - Ys) * x3;
}

function valorBin(xval) {
    if (xval >= 11) {
        return 1;
    }else {
        return 0;
    }
}