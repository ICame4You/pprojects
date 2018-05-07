// Is even function

    function isEven(num) {
        return num % 2 === 0;
    }

// Factorial function

    function factorial(num) {
        var total = 1;
        for(var i = 2; i <= num; i++) {
            total *= i;
        }
        return total;
    }

// Kebab to snake function

function kebabToSnake(word) {
    var wordReplace = word.replace(/-/g, '_');
    return wordReplace;
}

