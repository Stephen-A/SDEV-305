document.getElementById("guestbook-form").onsubmit = validate;

/**
 * checks if form has proper values input into the First Name and Last Name inputs
 * @returns {boolean} True if values in fname and lname are valid
 *                    False if values in fname and lname are invalid
 */
function validate() {
    clearErrors();
    let valid = true;

    // Validate First Name
    let first = document.getElementById("fname").value;
    if (first === "") {
        document.getElementById("err-fname").style.display = "block";
        valid = false;
    }
    // Validate Last Name
    let last = document.getElementById("lname").value;
    if (last === "") {
        document.getElementById("err-lname").style.display = "block";
        valid = false;
    }
    // Validate Email Address
    let email = document.getElementById("email").value;
    let mailingList = document.getElementById("mailingList");
    if (mailingList.checked && email === "") {
        document.getElementById("err-email").style.display = "block";
        valid = false;
    }
    // Validate Linkedin
    let link = document.getElementById("linkedin").value;
    if (!link.startsWith("https://linkedin.com/in/") && link !== "") {
        document.getElementById("err-linkedin").style.display = "block";
        valid = false;
    }
    // Validate How Did We Meet?
    let option = document.getElementById("inlineFormCustomSelect");
    if (option.value === "0") {
        document.getElementById("err-choose").style.display = "block";
        valid = false;
    }
    return valid;
}

/**
 * This function checks if the "Please add me to your mailing list!" checkbox is checked.
 * If it is, then display error saying email address must be entered
 * If it is not, then error does not appear
 */
function validateCheckbox() {
    let mailingList = document.getElementById("mailingList");
    if (mailingList.checked === true) {
        document.getElementById("emailFormat").style.display = "block";
    } else {
        document.getElementById("emailFormat").style.display = "none";
    }
}

function validateOtherMain() {
    let other = document.getElementById("inlineFormCustomSelect");
    if (other.value === "Other") {
        document.getElementById("otherMain").style.display = "block";
    } else {
        document.getElementById("otherMain").style.display = "none";
        document.getElementById("err-choose").style.display = "none";
    }
}

/**
 * clears errors if input is correct
 */
function clearErrors() {
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }
}
