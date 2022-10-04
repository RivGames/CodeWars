"use strict";

function isFlush(cards) {
    let result = [];
    for (let card of cards) {
        result.push(card[card.length - 1]);
    }
    let x = result[0];
    return result.every(element => element === x);
}

console.log(isFlush(["AD", "3S", "9S", "KS", "4S"]));
