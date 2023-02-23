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

function changeColor1() {

    let color = document.getElementById('fcolor').value;
    document.body.style.backgroundColor = color;
}


//crud

function crud(){
    let fname = (document.form1.fname.value).trim();

    if (fname.length < 3) {
        alert("First name must have at least 3 characters ")
        return false;
    }
}

function fname(){
    let fname = (document.form1.fname.value).trim();

    if (fname.length < 3) {
        alert("First name must have at least 3 characters ")
        return false;
    }

}