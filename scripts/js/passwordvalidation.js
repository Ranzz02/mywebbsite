var myInput = document.querySelector("#unewpassw")
var myInput2 = document.querySelector("#uconfirm_newpassw")
var letter = document.querySelector("#letter")
var captial = document.querySelector("#capital")
var number = document.querySelector("#number")
var length = document.querySelector("#length")
const minPasswLength = 8

var lowercaseCheck = false
var uppercaseCheck = false
var numberCheck = false
var lengthCheck = false

//When ever player click on password fiel, show message box
myInput.addEventListener("focus", function () {
    document.querySelector("#message").style.display = "block"
})

//When ever player click on password fiel, show message box
myInput2.addEventListener("focus", function () {
    document.querySelector("#message").style.display = "block"
})

//When even player click outside password field, hide the message box
myInput.addEventListener("blur", function () {
    document.querySelector("#message").style.display = "none"
    
})

//When even player click outside password field, hide the message box
myInput2.addEventListener("blur", function () {
    document.querySelector("#message").style.display = "none"
    
})

//Validate password 
myInput.addEventListener("keyup", function () {

    var lowerCaseLetters = /[a-z]/g
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid")
        letter.classList.add("valid")
        lowercaseCheck = true
    } else {
        letter.classList.remove("valid")
        letter.classList.add("invalid")
        lowercaseCheck = false
    }

    //Validate inside password field capital letter
    var upperCaseLetters = /[A-Z]/g
    if (myInput.value.match(upperCaseLetters)) {
        captial.classList.remove("invalid")
        captial.classList.add("valid")
        uppercaseCheck = true
    } else {
        captial.classList.remove("valid")
        captial.classList.add("invalid")
        uppercaseCheck = false
    }


    //Validate inside password field number
    var numbers = /[0-9]/g
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid")
        number.classList.add("valid")
        numberCheck = true
    } else {
        number.classList.remove("valid")
        number.classList.add("invalid")
        numberCheck = false
    }

    //Validate inside password field length
    if (myInput.value.length >= minPasswLength) {
        length.classList.remove("invalid")
        length.classList.add("valid")
        lengthCheck = true
    } else {
        length.classList.remove("valid")
        length.classList.add("invalid")
        lengthCheck = false
    }
})

//Validate password
myInput2.addEventListener("keyup", function () {

    var lowerCaseLetters = /[a-z]/g
    if (myInput2.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid")
        letter.classList.add("valid")
        lowercaseCheck = true
    } else {
        letter.classList.remove("valid")
        letter.classList.add("invalid")
        lowercaseCheck = false
    }

    //Validate inside password field capital letter
    var upperCaseLetters = /[A-Z]/g
    if (myInput2.value.match(upperCaseLetters)) {
        captial.classList.remove("invalid")
        captial.classList.add("valid")
        uppercaseCheck = true
    } else {
        captial.classList.remove("valid")
        captial.classList.add("invalid")
        uppercaseCheck = false
    }


    //Validate inside password field number
    var numbers = /[0-9]/g
    if (myInput2.value.match(numbers)) {
        number.classList.remove("invalid")
        number.classList.add("valid")
        numberCheck = true
    } else {
        number.classList.remove("valid")
        number.classList.add("invalid")
        numberCheck = false
    }

    //Validate inside password field length
    if (myInput2.value.length >= minPasswLength) {
        length.classList.remove("invalid")
        length.classList.add("valid")
        lengthCheck = true
    } else {
        length.classList.remove("valid")
        length.classList.add("invalid")
        lengthCheck = false
    }
})