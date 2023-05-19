let fruits =["pomme", "banane", "orange", "mangue", "tomate", "poire"];
console.log(fruits[0]);

let fruitsUn = new Array();
console.log(fruitsUn.length);

let fruitsDeux = new Array(3);
console.log(fruitsDeux.length);

let fruitsTrois = new Array({objetUn: {type: "valeur"}});
console.log(fruitsTrois[0].objetUn.type);

console.log(fruits.indexOf("banane"));
console.log(!fruits.includes("kiwi"));

let chiffre = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
let x = 0 
chiffres(x)

function chiffres(x){
    if(x===0){
        console.log(chiffre[0])
        x++
        chiffres(x)
    } else if(x===1){
        console.log(chiffre[1])
        x++
        chiffres(x)
    } else if(x===2){
        console.log(chiffre[2])
        x++
        chiffres(x)
    }else if(x===3){
        console.log(chiffre[3])
        x++
        chiffres(x)
    }else if(x===4){
        console.log(chiffre[4])
        x++
        chiffres(x)
    }else if(x===5){
        console.log(chiffre[5])
        x++
        chiffres(x)
    }else if(x===6){
        console.log(chiffre[6])
        x++
        chiffres(x)
    }else if(x===7){
        console.log(chiffre[7])
        x++
        chiffres(x)
    }else if(x===8){
        console.log(chiffre[8])
        x++
        chiffres(x)
    }else if(x===9){
        console.log(chiffre[9])
        x++
        chiffres(x)
    }else if(x===10){
        console.log(chiffre[10])
    }
}


// for(let chiffre =[0]; chiffre <= [10]; chiffre ++){
//     console.log(chiffre);
//     }

let personne = [
    {nom: "alice", age:30 },
    {nom:"bob", age:37},
    {nom: "christophe", age:46},
    {nom: "Albelebg", age:25}
]


for(let i = 0; i < personne.length; i++){
    console.log("nom = " + personne[i].nom);
    console.log("age = " + personne[i].age);
}