function hello() {

    //function that triggers an alert box
    alert("Welcome to my website");

}

function add() {
    document.write(5+6);
}

//function to change the background color
function changeColor(where, newColor) {
    if(where == "background") {
        document.body.style.backgroundColor = newColor;
    }
}