/*function lancement_partie(){

    var theme = document.getElementById("theme");
    var valtheme = theme.value;

    var difficulte = document.getElementById("difficulte");
    var valdifficulte = difficulte.value;
      
    if (valdifficulte === "facile") {
        var tab = [1, 1, 2, 2];
        shuffle(tab);
        var imageContainer = document.getElementById("level_1");
        
        
        for (var i = 0; i < tab.length; i++) {
            var image = document.createElement("img");
            image.src = "/projet/Arigato/assets/images/dos des cartes.jpg";
            imageContainer.appendChild(image);

    }
    }
}

function tableCreate() {
    const tableau = document.getElementById('tableau'),
          tbl = document.createElement('table');
    tbl.style.width = '100px';
  
    for (let i = 0; i < 6; i++) {
      const tr = tbl.insertRow();
      for (let j = 0; j < 6; j++) {
          const td = tr.insertCell();
          let img = document.createElement('img');
              img.src = 'https://cdn.discordapp.com/attachments/1163484337459707946/1171104985241620651/carte.jpeg?ex=655b7782&is=65490282&hm=877e680404fae260b2cc71a7b31e7e567d8a2976aeb37073b9c8cb054e0e1e4e&'
              img.className = 'carte';
              
          td.appendChild(img);
      }
    }
    tableau.appendChild(tbl);
  }

function shuffle(array) {
    let currentIndex = array.length,  randomIndex;

    while (currentIndex > 0) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex--;
      [array[currentIndex], array[randomIndex]] = [
        array[randomIndex], array[currentIndex]];
    }
  
    return array;
  }*/






// récuper la difficulté et le thème 
document.addEventListener("DOMContentLoaded", function(){
  document.getElementById('filter').addEventListener('submit', function(e) {
    e.preventDefault(); // Empêche la soumission du formulaire
    
    
      // Récupérez les valeurs du formulaire
      var theme = document.getElementById('theme').value;
      var difficulte = document.getElementById('difficulte').value;
    
      // Stockez les données dans sessionStorage
      sessionStorage.setItem('theme', theme);
      sessionStorage.setItem('difficulte', difficulte);
    
      // Redirigez l'utilisateur vers la page de jeu
      window.location.href = 'game.php';
    });
    
  
});


var theme = sessionStorage.getItem('theme');
var difficulte = sessionStorage.getItem('difficulte');




  // Sélection des éléments du DOM par leur nom.
const selectors = {
  boardContainer: document.querySelector('.board-container'),  
  board: document.querySelector('.board'), 
  moves: document.querySelector('.moves'), 
  timer: document.querySelector('.timer'),  
  start: document.querySelector('button'),  
  win: document.querySelector('.win')  
}

// État du jeu et initialisation des variables.
const state = {
  gameStarted: false,  
  flippedCards: 0,  
  totalFlips: 0, 
  totalTime: 0,  
  loop: null  
}

// Fonction de mélange d'un tableau.
const shuffle = array => {
  const clonedArray = [...array]

  for (let index = clonedArray.length - 1; index > 0; index--) {
      const randomIndex = Math.floor(Math.random() * (index + 1))
      const original = clonedArray[index]

      clonedArray[index] = clonedArray[randomIndex]
      clonedArray[randomIndex] = original
  }

  return clonedArray
}

// Fonction pour sélectionner des éléments aléatoires d'un tableau.
const pickRandom = (array, items) => {
  const clonedArray = [...array]
  const randomPicks = []

  for (let index = 0; index < items; index++) {
      const randomIndex = Math.floor(Math.random() * clonedArray.length)
      
      randomPicks.push(clonedArray[randomIndex])
      clonedArray.splice(randomIndex, 1)
  }

  return randomPicks
}

// Fonction pour générer le jeu.
const generateGame = () => {

  if(difficulte == "facile")
{
    // Obtenez l'élément avec la classe "board"
    var boardElement = document.querySelector('.board');

    // Modifiez la valeur de l'attribut "data-dimension"
    boardElement.setAttribute('data-dimension', '2');
  
    // Affichez la nouvelle valeur
    console.log(boardElement.getAttribute('data-dimension'));
  
  console.log(difficulte);
}

if(difficulte == "moyen")
{
    // Obtenez l'élément avec la classe "board"
    var boardElement = document.querySelector('.board');

    // Modifiez la valeur de l'attribut "data-dimension"
    boardElement.setAttribute('data-dimension', '4');
  
    // Affichez la nouvelle valeur
    console.log(boardElement.getAttribute('data-dimension'));
  
  console.log(difficulte);
}

if(difficulte == "difficile")
{
    // Obtenez l'élément avec la classe "board"
    var boardElement = document.querySelector('.board');

    // Modifiez la valeur de l'attribut "data-dimension"
    boardElement.setAttribute('data-dimension', '6');
  
    // Affichez la nouvelle valeur
    console.log(boardElement.getAttribute('data-dimension'));
  
  console.log(difficulte);
}


  dimensions = selectors.board.getAttribute('data-dimension')

  // Vérification que la dimension de la grille est paire.
  if (dimensions % 2 !== 0) {
      throw new Error("La dimension de la grille doit être un nombre pair.")
  }

  // Liste d'émoticônes pour le jeu.
  if(theme == "hiragana"){
     emojis = [ "あ", "い", "う", "え", "お", "か", "き", "く", "け", "こ", "さ", "し", "す", "せ", "そ", "た", "ち", "つ", "て", "と", "な", "に", "ぬ", "ね", "の", "は", "ひ", "ふ", "へ", "ほ", "ま", "み", "む", "め", "も", "や", "ゆ", "よ", "ら", "り", "る", "れ", "ろ", "わ", "を", "ん", "が", "ぎ", "ぐ", "げ", "ご", "ざ", "じ", "ず", "ぜ", "ぞ", "だ", "ぢ", "づ", "で", "ど", "ば", "び", "ぶ", "べ", "ぼ", "ぱ", "ぴ", "ぷ", "ぺ", "ぽ"]
    console.log(theme)
  }

  if(theme == "katakana"){
     emojis = ["ア", "イ", "ウ", "エ", "オ", "カ", "キ", "ク", "ケ", "コ", "サ", "シ", "ス", "セ", "ソ", "タ", "チ", "ツ", "テ", "ト", "ナ", "ニ", "ヌ", "ネ", "ノ", "ハ", "ヒ", "フ", "ヘ", "ホ", "マ", "ミ", "ム", "メ", "モ", "ヤ", "ユ", "ヨ", "ラ", "リ", "ル", "レ", "ロ", "ワ", "ヲ", "ン"]
  }

  if(theme == "kana"){
    emojis = ["あ", "い", "う", "え", "お", "か", "き", "く", "け", "こ", "さ", "し", "す", "せ", "そ", "た", "ち", "つ", "て", "と", "な", "に", "ぬ", "ね", "の", "は", "ひ", "ふ", "へ", "ほ", "ま", "み", "む", "め", "も", "や", "ゆ", "よ", "ら", "り", "る", "れ", "ろ", "わ", "を", "ん", "が", "ぎ", "ぐ", "げ", "ご", "ざ", "じ", "ず", "ぜ", "ぞ", "だ", "ぢ", "づ", "で", "ど", "ば", "び", "ぶ", "べ", "ぼ", "ぱ", "ぴ", "ぷ", "ぺ", "ぽ","ア", "イ", "ウ", "エ", "オ", "カ", "キ", "ク", "ケ", "コ", "サ", "シ", "ス", "セ", "ソ", "タ", "チ", "ツ", "テ", "ト", "ナ", "ニ", "ヌ", "ネ", "ノ", "ハ", "ヒ", "フ", "ヘ", "ホ", "マ", "ミ", "ム", "メ", "モ", "ヤ", "ユ", "ヨ", "ラ", "リ", "ル", "レ", "ロ", "ワ", "ヲ", "ン" ]
 }
  
  const picks = pickRandom(emojis, (dimensions * dimensions) / 2) 
  const items = shuffle([...picks, ...picks])

  // Création des cartes du jeu en HTML.
  const cards = `
      <div class="board" style="grid-template-columns: repeat(${dimensions}, auto)">
          ${items.map(item => `
              <div class="card">
                  <div class="card-front"></div>
                  <div class="card-back">${item}</div>
              </div>
          `).join('')}
     </div>
  `
  
  // Utilisation d'un parseur pour transformer le HTML en éléments DOM.
  const parser = new DOMParser().parseFromString(cards, 'text/html')

  // Remplacement de la grille existante par la nouvelle grille générée.
  selectors.board.replaceWith(parser.querySelector('.board'))
}

// Fonction pour démarrer le jeu.
const startGame = () => {
  state.gameStarted = true  
  selectors.start.classList.add('disabled')  

  // Initialisation d'une boucle qui met à jour le temps écoulé.
  state.loop = setInterval(() => {
      state.totalTime++

      selectors.moves.innerText = `${state.totalFlips} mouvements`
      selectors.timer.innerText = `temps : ${state.totalTime} sec`
  }, 1000) 
}

// Fonction pour retourner les cartes face cachée.
const flipBackCards = () => {
  document.querySelectorAll('.card:not(.matched)').forEach(card => {
      card.classList.remove('flipped')
  })

  state.flippedCards = 0
}

// Fonction pour retourner une carte.
const flipCard = card => {
  state.flippedCards++
  state.totalFlips++

  if (!state.gameStarted) {
      startGame()
  }

  if (state.flippedCards <= 2) {
      card.classList.add('flipped')
  }

  if (state.flippedCards === 2) {
      const flippedCards = document.querySelectorAll('.flipped:not(.matched)')

      // Vérification si les cartes retournées correspondent.
      if (flippedCards[0].innerText === flippedCards[1].innerText) {
          flippedCards[0].classList.add('matched')
          flippedCards[1].classList.add('matched')
      }

      setTimeout(() => {
          flipBackCards() 
      }, 1000)
  }

  // Si toutes les cartes sont retournées (appariées), affichage message victoire.
  if (!document.querySelectorAll('.card:not(.flipped)').length) {
      setTimeout(() => {
          selectors.boardContainer.classList.add('flipped')  
          selectors.win.innerHTML = `
              <span class="win-text">
                  Vous avez gagné !<br />
                  avec <span class="highlight">${state.totalFlips}</span> mouvements<br />
                  en moins de <span class="highlight">${state.totalTime}</span> secondes
              </span>
          `

          clearInterval(state.loop)
      }, 1000)
  }
} 

// Fonction pour gerer la logique du jeu, retourner les cartes et de démarrer une nouvelle partie.
const attachEventListeners = () => {
  document.addEventListener('click', event => {
      const eventTarget = event.target
      const eventParent = eventTarget.parentElement

      // Gestion du clic sur les cartes du jeu.
      if (eventTarget.className.includes('card') && !eventParent.className.includes('flipped')) {
          flipCard(eventParent)
      } else if (eventTarget.nodeName === 'BUTTON' && !eventTarget.className.includes('disabled')) {
          startGame()  
      }
  })
}

// Génération du jeu.
generateGame()
attachEventListeners()
