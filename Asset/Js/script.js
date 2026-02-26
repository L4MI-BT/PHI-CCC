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
xmlhttp.open("GET", `./models/autocompletion.php?codepostal=${valInput}`, true);

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
        div.textContent = `${element.nom_ville} ${element.code_postal}`

        div.addEventListener("click", function () {
            elcodepostal.value = element.code_postal;
            elVilleInput.value = element.nom_ville; 
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
        xmlhttp.open("GET",`./models/autocompletion.php?ville=${valInput}`, true);
        
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
        div.textContent = `${element.nom_ville} ${element.code_postal}`;
        
        div.addEventListener("click", function () {
            elcodepostal.value = element.code_postal;
            elVilleInput.value = element.nom_ville; 
            elDepartement.value = element.departement;
            elId_ville.value = element.id_ville;
            elresult.innerHTML = "";
        });

    elresult.appendChild(div);
  });
}
//--------------------------------------//