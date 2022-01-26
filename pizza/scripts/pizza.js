document.getElementById("pizza-form").onsubmit = validate;

function validate() {

    clearErrors();
    // Flag variable to track if form is valid
    let valid = true;

    // Validate first name
    let first = document.getElementById("fname").value;
    if(first === "") {
        document.getElementById("err-fname").style.display = "block";
        valid = false;
    }

    // Validate last name
    let last = document.getElementById("lname").value;
    if(last === "") {
        document.getElementById("err-lname").style.display = "block";
        valid = false;
    }

    // Validate method: pickup or delivery
    let methodButtons = document.getElementsByName("method");
    let methodIsChecked = false;
    for (let i = 0; i < methodButtons.length; i++) {
        if(methodButtons[i].checked) {
            methodIsChecked = true;
        }
    }
    if(!methodIsChecked) {
        document.getElementById("err-method").style.display = "block";
        valid = false;
    }

    // Validate toppings -- TRY THIS ON YOUR OWN
    // This can also be done with a boolean statement.
    // Having a counter variable allows us to create further validation if necessary.
    let toppings = document.getElementsByName("toppings[]");
    let toppingsChecked = 0;
    for (let i = 0; i < toppings.length; i++) {
        if(toppings[i].checked) {
            toppingsChecked++;
        }
    }
    if(toppingsChecked < 1) {
        document.getElementById("err-toppings").style.display = "blocK";
        valid = false;
    }

    if(!toppingsChecked){
        document.getElementById("err-toppings").style.display = "block";
        valid = false;
    }

    // Validate size
    let size = document.getElementById("size").value;
    if(size === "none") {
        document.getElementById("err-size").style.display = "block";
        valid = false;
    }

    // If discount box is checked, require email address
    let email = document.getElementById("email").value;
    let discount = document.getElementById("discount");
    if(discount.checked && email === ""){
        document.getElementById("err-email").style.display = "block";
        valid = false;
    }

    // Return false if any errors were found
    return valid;
}

// Clear all error messages
function clearErrors() {
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }
}