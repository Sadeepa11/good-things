function banner(){

    const banner = document.getElementById("banner");
    const images = ["resources/posterimg.jpg", "resources/posterimg2.jpg", "resources/posterimg3.jpg"]; // Add your image URLs here
    let currentIndex = 0;

    function changeImage() {
        currentIndex = (currentIndex + 1) % images.length;
        banner.style.opacity = 0;
        setTimeout(() => {
            banner.src = images[currentIndex];
            banner.style.opacity = 1;
        }, 100);
    }

    // Change image every 5 seconds (adjust as needed)
    setInterval(changeImage, 5000);

    // Preload images for smoother transitions
    images.forEach((image) => {
        const img = new Image();
        img.src = image;
    });

}







function changeView() {

    var signUpBox = document.getElementById("signUpBox");
    var signInBox = document.getElementById("signInBox");

    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");

}
function signUp() {

    var fname = document.getElementById("f");
    var lname = document.getElementById("l");
    var email = document.getElementById("e");
    var password = document.getElementById("p");
    var mobile = document.getElementById("m");
    var gender = document.getElementById("g");


    var f = new FormData;
    f.append("f", fname.value);
    f.append("l", lname.value);
    f.append("e", email.value);
    f.append("p", password.value);
    f.append("m", mobile.value);
    f.append("g", gender.value);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function () {

        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {

                var signUpBox = document.getElementById("signUpBox");
                var signInBox = document.getElementById("signInBox");

                signUpBox.classList.toggle("d-none");
                signInBox.classList.toggle("d-none");


            } else {

                alert(t)

            }

        }
    }
    r.open("POST", "signUpProcess.php", true);
    r.send(f);
}
function signIn() {

    var email = document.getElementById("email2");
    var password = document.getElementById("password2");
    var rememberme = document.getElementById("rememberme");

    var f = new FormData();
    f.append("e", email.value);
    f.append("p", password.value);
    f.append("r", rememberme.checked);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "home.php";
            } else {
                alert(t);
            }

        }
    };

    r.open("POST", "signInProcess.php", true);
    r.send(f);

}




var bm;
function forgotPassword() {


    var m = document.getElementById("forgotPasswordModal");
    bm = new bootstrap.Modal(m);
    bm.show();


}

function showPassword() {



    var np = document.getElementById("np");
    var npb = document.getElementById("npb");

    if (np.type == "password") {

        np.type = "text";
        npb.innerHTML = "Hide";

    } else {
        np.type = "password";
        npb.innerHTML = "Show";
    }

}
function showPassword2() {



    var rnp = document.getElementById("rnp");
    var rnpb = document.getElementById("rnpb");

    if (rnp.type == "password") {

        rnp.type = "text";
        rnpb.innerHTML = "Hide";

    } else {
        rnp.type = "password";
        rnpb.innerHTML = "Show";
    }

}
function resetPassword() {

    alert("Reset your Password");
}
function changeImage() {
    var viwe = document.getElementById("viweImg");
    var file = document.getElementById("profileimage");

    file.onchange = function () {
        var img = this.files[0];
        var url = window.URL.createObjectURL(img);
        viwe.src = url;
    }
}; function changeProductImage() {

    var image = document.getElementById("imageuploader");

    image.onchange = function () {

        var file_count = image.files.length;

        if (file_count <= 3) {

            for (var x = 0; x < file_count; x++) {

                var file = this.files[x];
                var url = window.URL.createObjectURL(file);

                document.getElementById("i" + x).src = url;

            }

        } else {
            alert(file_count + " files. You are proceed to upload only 3 or less than 3 files.");
        }

    }

}
function addProduct() {
    alert("Success");
};
function updateProduct() {
    alert("Success");
};




var bm;
function admo() {


    var m = document.getElementById("Advanced");
    bm = new bootstrap.Modal(m);
    bm.show();


}
var bm;
function verify() {


    var m = document.getElementById("verify");
    bm = new bootstrap.Modal(m);
    bm.show();


}
function signout() {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {

                window.location.reload();

            }
        }
    }


    r.open("GET", "signoutProcess.php", true);
    r.send();
}