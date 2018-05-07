// Print reverse

function printReverse(arr) {
    for (var i = arr.length - 1; i >= 0; i--) {
        console.log(arr[i]);
    }
}

// isUniform

function isUniform(arr) {
    var firstItem = arr[0];
    for (var i = 1; i < arr.length; i++) {
        if (firstItem !== arr[i]) {
            return false
        }
    }
    return true;
}