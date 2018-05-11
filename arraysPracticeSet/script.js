// Print reverse

function printReverse(arr) {
    for (let i = arr.length - 1; i >= 0; i--) {
        console.log(arr[i]);
    }
}
printReverse([1,2,3,4]);

// isUniform

function isUniform(arr) {
    let firstItem = arr[0];
    for (let i = 1; i < arr.length; i++) {
        if (firstItem !== arr[i]) {
            return false
        }
    }
    return true;
}
isUniform([1,1,1,2]);

// sumArray

function sumArray(arr) {
    let total = 0;
    arr.forEach(function (number) {
        total += number;
    });
    return total;
}

// max

function max (arr) {
    let maxNum = 0;
    arr.forEach(function(element) {
        if (typeof element === "number") {
            if (maxNum < element) {
                maxNum = element;
            }
        }
    });
    return maxNum;
}
