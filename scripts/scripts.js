$( document ).ready(function() {
    $(".menu").click(function() {
        $(".menu").toggleClass("active");
        $(".navbar-menu").toggleClass("active");
    });

    $("#registerForm").submit(function(e) {
        var submitButton = document.getElementById("submit");
        var phone = encodeURIComponent(document.getElementById("phone").value);
        var ePhone = encodeURIComponent(document.getElementById("ePhone").value);
        
        if (isValidPhone(phone)) {
            if (ePhone == "" || isValidPhone(ePhone)) {
                e.preventDefault();
                postRegistrant();

                alert("Thank you for submitting your registration. We look forward to seeing you soon!")
                submitButton.value = "Form Sent!"
                submitButton.style.cursor = "default";
                submitButton.style.backgroundColor = "#df0d0d";
                submitButton.style.color = "white";
                submitButton.onclick = function() {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    });

    $("#contactForm").submit(function(e) {
        var submitButton = document.getElementById("submit");

        e.preventDefault();
        sendEmail();

        alert("Thank you for submitting your email. We will get back to you within 3 business days!")
        submitButton.value = "Email Sent!"
        submitButton.style.cursor = "default";
        submitButton.style.backgroundColor = "#df0d0d";
        submitButton.style.color = "white";
        submitButton.onclick = function() {
            return false;
        }
    });
});

function postRegistrant() {
    var form = document.getElementById("registerForm");
    var name = encodeURIComponent(document.getElementById("fullName").value);
    var age = encodeURIComponent(document.getElementById("age").value);
    var role = encodeURIComponent(document.getElementById("role").value);
    var email = encodeURIComponent(document.getElementById("email").value);
    var phone = encodeURIComponent(document.getElementById("phone").value);
    var eName = encodeURIComponent(document.getElementById("eName").value);
    var ePhone = encodeURIComponent(document.getElementById("ePhone").value);
    var gender = encodeURIComponent(document.getElementById("gender").value);
    var shirt = encodeURIComponent(document.getElementById("shirt").value);
    var satEvent = encodeURIComponent(document.getElementById("satEvent").value);
    var sunEvent = encodeURIComponent(document.getElementById("sunEvent").value);
    var specialComments = encodeURIComponent(document.getElementById("specialComments").value);
    var data = "name=" + name + "&age=" + age + "&role=" + role + "&email=" + email + "&phone="
                + phone + "&eName=" + eName + "&ePhone=" + ePhone + "&gender=" + gender + "&shirt="
                + shirt + "&satEvent=" + satEvent + "&sunEvent=" + sunEvent + "&specialComments="
                + specialComments;
    
    var xhr = new XMLHttpRequest();	
    xhr.open("POST", "http://pccprojects.webhostingforstudents.com/cas222/postUser.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    xhr.onload = function() {
        console.log(this.responseText);
    };
    
    xhr.send(data);
    form.reset();
}

function sendEmail() {
    var form = document.getElementById("contactForm");
    var name = encodeURIComponent(document.getElementById("fullName").value);
    var email = encodeURIComponent(document.getElementById("email").value);
    var role = encodeURIComponent(document.getElementById("role").value);
    var subject = encodeURIComponent(document.getElementById("subject").value);
    var contactMessage = encodeURIComponent(document.getElementById("contactMessage").value);
    var data = "name=" + name + "&email=" + email + "&role=" + role + "&subject=" + subject
                + "&contactMessage=" + contactMessage;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://pccprojects.webhostingforstudents.com/cas222/contactForm.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        console.log(this.responseText);
    };
    
    xhr.send(data);
    form.reset();
}

function isValidPhone(number) {
    var check = /^\d{10}$/;
    
    if (number.match(check)) {
        return true;
    } else {
        alert("Please enter a valid phone number and emergency phone number (e.g. 1234567890, no dashes or spaces).");
        return false;
    }
}