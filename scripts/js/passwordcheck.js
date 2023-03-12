function validate_password() {

    var pass = document.querySelector("#unewpassw").value;
    var confirm_pass = document.querySelector("#uconfirm_newpassw").value;
    if (pass != confirm_pass) {
        document.querySelector(".passcheck").style.color = 'red';
        document.querySelector(".passcheck").innerHTML = '☒ Use the same password';
    } else {
        document.querySelector(".passcheck").style.color = 'green';
        document.querySelector(".passcheck").innerHTML = '🗹 Passwords Match';
    }
    if ((pass == "" || pass == null) && (confirm_pass == "" || confirm_pass == null)) {
        document.querySelector(".passcheck").classList.add("hidePasscheck")
        document.querySelector(".passcheck").classList.remove("showPasscheck")
    } else {
        document.querySelector(".passcheck").classList.add("showPasscheck")
        document.querySelector(".passcheck").classList.remove("hidePasscheck")
    }
    window.requestAnimationFrame(validate_password)
}

window.requestAnimationFrame(validate_password)