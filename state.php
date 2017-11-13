<?php
if (!isset($_GET['g'])) {
    die(json_encode(array('success' => false, 'msg' => 'err no "g" given')));
}
session_start();
 if (isset($_GET['s'])) {
    $_SESSION['magiccard_' . $_GET['g']] = $_GET['s'];
    die(json_encode(array('success' => true, 'msg' => 'state updated')));
 } else {
     $r = isset($_SESSION['magiccard_' . $_GET['g']]) ?
        $_SESSION['magiccard_' . $_GET['g']] :
        json_encode(array('success' => false, 'msg' => 'No game data'));
     die($r);
 }
/*
return '{
	"nodeType": 1,
	"tagName": "body",
	"attributes": [],
	"childNodes": [{
			"nodeType": 3,
			"nodeName": "#text",
			"nodeValue": "\n",
			"childNodes": []
		}, {
			"nodeType": 1,
			"tagName": "section",
			"attributes": [],
			"childNodes": [{
					"nodeType": 1,
					"tagName": "h2",
					"attributes": [],
					"childNodes": [{
							"nodeType": 3,
							"nodeName": "#text",
							"nodeValue": "board",
							"childNodes": []
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c1"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/po2/63.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c2"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/po2/79.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c3"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/po2/79.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c4"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/po2/79.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c5"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/po2/72.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}
			]
		}, {
			"nodeType": 1,
			"tagName": "section",
			"attributes": [],
			"childNodes": [{
					"nodeType": 1,
					"tagName": "h2",
					"attributes": [],
					"childNodes": [{
							"nodeType": 3,
							"nodeName": "#text",
							"nodeValue": "hand",
							"childNodes": []
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c6"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/po2/79.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c7"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/po2/79.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c8"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/po2/79.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c9"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/po2/79.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}, {
					"nodeType": 1,
					"tagName": "div",
					"attributes": [["id", "c10"], ["class", "cardBlock"], ["ondrop", "drop(event)"], ["ondragover", "allowDrop(event)"], ["ondragstart", "dragStart(event)"], ["ondrag", "dragging(event)"], ["draggable", "true"]],
					"childNodes": [{
							"nodeType": 1,
							"tagName": "img",
							"attributes": [["class", "cardPic"], ["src", "http://magiccards.info/scans/en/c16/78.jpg"]],
							"childNodes": []
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "tBtn"], ["onclick", "javascript:tCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "T:",
									"childNodes": []
								}
							]
						}, {
							"nodeType": 1,
							"tagName": "a",
							"attributes": [["class", "qBtn"], ["onclick", "javascript:qCard(this.parentElement);"]],
							"childNodes": [{
									"nodeType": 3,
									"nodeName": "#text",
									"nodeValue": "Q:",
									"childNodes": []
								}
							]
						}
					]
				}
			]
		}, {
			"nodeType": 3,
			"nodeName": "#text",
			"nodeValue": "\n\t\n\t",
			"childNodes": []
		}, {
			"nodeType": 1,
			"tagName": "footer",
			"attributes": [],
			"childNodes": [{
					"nodeType": 3,
					"nodeName": "#text",
					"nodeValue": "\n",
					"childNodes": []
				}, {
					"nodeType": 1,
					"tagName": "script",
					"attributes": [],
					"childNodes": [{
							"nodeType": 3,
							"nodeName": "#text",
							"nodeValue": "\n\tfunction tCard(_b) {\n\t\tpic = _b.getElementsByClassName('cardPic')[0];\n\t\tpic.classList.add('tapped');\n\t}\n\tfunction qCard(_b) {\n\t\tpic = _b.getElementsByClassName('cardPic')[0];\n\t\tpic.classList.remove('tapped');\n\t}\n    \n    \n    function dragStart(event) {\n    console.warn(event);\n    console.warn('currentTarget', event.currentTarget);\n    event.dataTransfer.setData(\"Text\", event.currentTarget.id);\n}\n\nfunction dragging(event) {\n    console.log('Dragging');\n}\n\nfunction allowDrop(event) {\n    event.preventDefault();\n}\n\nfunction drop(event) {\n    event.preventDefault();\n    var data = event.dataTransfer.getData(\"Text\");\n    var target = event.target;\n    console.warn('drop : event', event);\n    while (target.className.indexOf('cardBlock') == -1) { \n        // Cette boucle permet de remonter jusqu'à la zone de drop parente\n        target = target.parentNode;\n    }\n    \n    console.warn(target);\n    target.parentNode.insertBefore(document.getElementById(data), target);\n}\n",
							"childNodes": []
						}
					]
				}, {
					"nodeType": 3,
					"nodeName": "#text",
					"nodeValue": "\n\t",
					"childNodes": []
				}
			]
		}, {
			"nodeType": 3,
			"nodeName": "#text",
			"nodeValue": "\n",
			"childNodes": []
		}
	]
}';*/