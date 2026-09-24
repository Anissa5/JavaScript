

let secretNumber = Math.floor(Math.random() * 20) + 1;

console.log(secretNumber);

let guess = Number(document.querySelector('input').value);

console.log(guess);

const checkButton = document.querySelector('button');

checkButton.addEventListener('click', function () {
    console.log("J'ai cliqué !");
});