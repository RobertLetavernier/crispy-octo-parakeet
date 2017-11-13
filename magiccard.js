/*
 * Buttons
 */
function tCard(_b) {
    pic = _b.getElementsByClassName('cardPic')[0];
    pic.classList.add('tapped');
}
function qCard(_b) {
    pic = _b.getElementsByClassName('cardPic')[0];
    pic.classList.remove('tapped');
}

/*
 * Section Actions
 */
function addCard(sect, img) {
		var card = document.createElement('div');
		card.classList = ['card'];
		
		var cardImg = document.createElement('img');
		cardImg.src = img;
		card.appendChild(cardImg);
		
		var tapBtn = document.createElement('div');
		tapBtn.classList = ['tapBtn'];
		card.appendChild(tapBtn);
		
		var seeBtn = document.createElement('div');
		seeBtn.classList = ['seeBtn'];
		card.appendChild(seeBtn);
		
		sect.appendChild(card);
	}
	
	function shuffleSect(sect) {
    var currentIndex = sect.children.length-1;
	var randomIndex;

    // While there remain elements to shuffle...
    while (1 !== currentIndex) {

      // Pick a remaining element...
      randomIndex = Math.floor(Math.random() * currentIndex)+1;
	  console.log('currentIndex', currentIndex);
	  console.log('randomIndex', randomIndex);
      currentIndex -= 1;

	  sect.insertBefore	(sect.children[randomIndex], sect.children[currentIndex]);
	  
    }

/*
 * D&D
 */ 
    
function dragStart(event) {
    event.dataTransfer.setData("Text", event.currentTarget.id);
}

function dragging(event) {
    console.log('Dragging');
}

function allowDrop(event) {
    event.preventDefault();
}

function dropAfter(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("Text");
    var target = event.target;
    while (target.className.indexOf('cardBlock') == -1) { 
        // Cette boucle permet de remonter jusqu'à la zone de drop parente
        target = target.parentNode;
    }
    
    console.warn('drop After');
    target.parentNode.insertBefore(document.getElementById(data), target.nextSibling);
}
function dropIn(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("Text");
    var target = event.target;
    while (target.className.indexOf('cardZone') == -1) { 
        // Cette boucle permet de remonter jusqu'à la zone de drop parente
        target = target.parentNode;
    }
    console.warn('drop In');
    target.insertBefore(document.getElementById(data), target.firstElementChild.nextSibling);
}

// Ajaxs
function loadDoc(url, cFunction) {
  var xhttp;
  xhttp=new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cFunction(this);
    }
  };
  xhttp.open("GET", url, true);
  xhttp.send();
}
function loadcFunction(xhttp) {
  //document.body("demo").innerHTML = xhttp.responseText;
  var dom = toDOM(xhttp.responseText);
  document.body = dom;
}

function reloadDoc() {
    setTimeout(
        function(){ 
            console.log('> calling doc'); 
            loadDoc('domState.json', loadcFunction);
            // reloadDoc();
        }, 3000);
}