// movieDB

let movies = [
    {
        name: "Terminator",
        rating: "4.5 stars",
        watched: true
    },
    {
        name: "Terminator 2",
        rating: "5 stars",
        watched: false
    },
    {
        name: "Terminator 3",
        rating: "4 stars",
        watched: true
    },
];

movies.forEach(function (element) {
    console.log(buildString(element));
});

function buildString(element) {
    let result = 'You have ';
    if (element.watched) {
        result += 'watched ';
    } else {
        result += 'not seen ';
    }
    result += '"' + element.name + '" - ';
    result += element.rating;
    return result;
}