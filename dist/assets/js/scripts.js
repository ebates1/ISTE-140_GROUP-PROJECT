const reg_name = /^([a-zA-Z \-.\'.\_]+)$/;
const reg_comment = /[a-zA-Z0-9@=\-'"]+/;
const reg_email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const reg_phone = /^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$/;

function validateForm() {
    const fieldCheck = [];
    fieldCheck.push(validate('commentArea', 'comment', 10, 255));
    fieldCheck.push(validate('fname', 'name', 1, 25));
    fieldCheck.push(validate('lname', 'name', 1, 25));
    fieldCheck.push(validate('phone', 'phone', 8, 15));
    fieldCheck.push(validate('email', 'email', 3, 30));

    return (!fieldCheck.includes(false));
}

function validate(id, type, minLength, maxLength) {
    const element = document.getElementById(id);
    const value = element.value;

    if (value.length < minLength || value.length > maxLength) {
        sendError(id, "form-error", `Invalid length! ${minLength} to ${maxLength} characters only!`);
        return false;
    }

    switch (type) {
        case 'name':
            if (!reg_name.test(value)) {
                sendError(id, "form-error", "Invalid character not allowed...");
                return false;
            }
            break;
        case 'comment':
            if (!reg_comment.test(value)) {
                sendError(id, "form-error", "Invalid character not allowed...");
                return false;
            }
            break;
            case 'phone':
                if (!reg_phone.test(value)) {
                    sendError(id, "form-error", "Invalid character not allowed...");
                    return false;
                }
            break;

            case 'email':
                if (!reg_email.test(value)) {
                    sendError(id, "form-error", "Invalid character not allowed...");
                    return false;
                }
            break;
        default:
            return false;
    }
    sendGood(id, 'good', "Looks good!");
    return true;
}

function sendGood(id, className, message) {
    let element = document.querySelector("label[for='" + id + "']");
    element.innerHTML = `<p class="good">${message}</p>`; 
}

function sendError(id, className, message) {
    let element = document.querySelector("label[for='" + id + "']");
    element.innerHTML = `<p class="bad">${message}</p>`; 
}

(function() {
    document.getElementById('fname').addEventListener('keyup', function (e) {
        validate('fname', 'name', 1, 25);
    });

    document.getElementById('lname').addEventListener('keyup', function(e) {
        validate('lname', 'name', 1, 25)
    });

    document.getElementById('commentArea').addEventListener('keyup', function (e) {
        validate('commentArea', 'comment', 10, 255)
    });
})();
