// JavaScript Document
/*jslint browser:true*/
"use strict";

// Access the filename we want

var test = location.href;

var resultsArray = test.split('/');

var numberOfParts = resultsArray.length;

var piece1 = resultsArray[numberOfParts - 1];

var questionSplit = piece1.split('?');

var piece2 = questionSplit[0];

var hashSplit = piece2.split('#');

var pieceIwant = hashSplit[0];


var url1 = "agent1.php"

// Query selection
var listItems = document.querySelectorAll("ul#primaryNav li a");
console.log(listItems);

for(var i = 0; i < listItems.length; i++) {
    var myPage = listItems[i].getAttribute("href");
    console.log(myPage);

    if(pieceIwant === myPage) {
        listItems[i].parentElement.classList.add("current-menu-item");
        listItems[i].parentNode.parentNode.parentNode.classList.add("parent");
    } else {
        listItems[i].parentElement.className = "";
    }
};