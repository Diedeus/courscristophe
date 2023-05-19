const readline = require('readline');

const rl = readline.createInterface({
input: process.stdin,
output: process.stdout
});

let x = Math.floor(Math.random() * 101); // Génère un nombre aléatoire entre 0 et 100
let y = 0;

// function barrechofroi(y) {
// console.log("fonction", y);
// if (1 <= y && y < 5) {
// console.log("\x1b[41m%s\x1b[0m", " ");
// } else if (5 <= y && y < 10) {
// console.log("\x1b[43m%s\x1b[0m", " ");
// } else if (10 <= y && y < 15) {
// console.log("\x1b[42m%s\x1b[0m", " ");
// } else if (15 <= y && y < 20) {
// console.log("\x1b[44m%s\x1b[0m", " ");
// } else if (y === 0) {
// console.log("\x1b[41m%s\x1b[0m", " ");
// }
// }

const regex = /[0-9]/;


function jouer() {
rl.question("Devinez le nombre entre 0 et 100: ", (valeur) => {
    if (!/^\d+$/.test(valeur)) {
        console.log("Erreur: NON NON NON CRICRI, ou on crève les pneux de ta twingo.");
        jouer();
        return;
      }
      valeur = parseInt(valeur);
if (valeur < x) {
console.log("Votre réponse est en dessous du résultat attendu ==>", valeur);
// y = x - valeur;
// barrechofroi(y);
jouer();
} else if (valeur > x) {
console.log("Votre réponse est au dessus du résultat attendu ==>", valeur);
// y = Math.abs(x - valeur);
// barrechofroi(y);
jouer();
} else if (valeur === x) {
console.log("WOW gg bro, tu as trouvé la réponse ==>", valeur);
// y = x - valeur;
// // barrechofroi(y);
rl.close();
} 
});
}

jouer();