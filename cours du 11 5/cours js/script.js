alert('hello world')

let x = 5;
console.log('x = ' + x);
alert ('regarde la console bro');


function direbonjour(nom){
    console.log("bonjour " + nom)
}
direbonjour("Hugo");

function addition(a, b){
    return a + b;
}
let result = addition(2,3);
console.log(result);

let direbonjour2 = function(nom) {
    console.log("bonjour " + nom)
}
direbonjour2("paul")

let Direbonjour3 = (nom) => { console.log("bonjour " + nom)}
Direbonjour3("Jeanne")

let personne = {
    nom: "john",
    age: 30,
    parler: function() {
        console.log(`bonjour, je m'appelle ${this.nom}`);
    }
};

console.log(personne.nom);
personne.parler();