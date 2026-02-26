//--------------------code postal-----------------------//
console.log("kekette")


const elcodepostal = document.getElementById("monInput");
const elresult = document.getElementById("result");
const elVilleInput = document.getElementById("villeInput");
const elDepartement = document.getElementById("departementInput");
const elId_ville = document.getElementById("id_ville");

elcodepostal.addEventListener("input", function () {
    const valInput = this.value;
    if (valInput.length === 0) {
        elresult.innerHTML = "";
        return;
    };

let xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", `/PHI-CCC/src/Database/autocompletion.php?codepostal=${valInput}`, true);

xmlhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      let myArr = JSON.parse(this.responseText);
      afficherVilles(myArr);
    }
    };

    xmlhttp.send();
});

function afficherVilles(arr) {
    elresult.innerHTML = "";
    
    arr.forEach(element => {
        let div = document.createElement("div");
        div.textContent = `${element.ville} ${element.code_postal}`

        div.addEventListener("click", function () {
            elcodepostal.value = element.code_postal;
            elVilleInput.value = element.ville; 
            elDepartement.value = element.departement;
            elId_ville.value = element.id_ville;
            elresult.innerHTML = "";
        });

        elresult.appendChild(div);
    });
}

//--------------------ville-----------------------//  

elVilleInput.addEventListener("input", function () {
    const valInput = this.value;
    if (valInput.length === 0) {
    elresult.innerHTML = "";
    return;
  };
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", `/PHI-CCC/src/Database/autocompletion.php?ville=${valInput}`, true);
        
        xmlhttp.onreadystatechange = function () {
            
            if (this.readyState === 4 && this.status === 200) {
                let myArr = JSON.parse(this.responseText);
                afficherCodePostal(myArr);
            }
        };
        xmlhttp.send();
});

function afficherCodePostal(arr) {
  elresult.innerHTML = "";
    arr.forEach(element => {
        let div = document.createElement("div");
        div.textContent = `${element.ville} ${element.code_postal}`;
        
        div.addEventListener("click", function () {
            elcodepostal.value = element.code_postal;
            elVilleInput.value = element.ville; 
            elDepartement.value = element.departement;
            elId_ville.value = element.id_ville;
            elresult.innerHTML = "";
        });

    elresult.appendChild(div);
  });
}
//--------------------------------------DONS--------------
 function switchTab(name, btn) {
    // Masquer tous les panels et désactiver tous les boutons
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));

    // Activer le bon
    document.getElementById('panel-' + name).classList.add('active');
    btn.classList.add('active');
  }
