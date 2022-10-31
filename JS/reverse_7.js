"use strict"
let reverse;
reverse = function (array) {
    let result = [];
    let k = 0;
    for (let i = array.length - 1; i >= 0; i--) {
        result[k] = array[i];
        k++;
    }
    return result;
}
console.log(reverse(['12',3,2,5]));