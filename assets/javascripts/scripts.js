
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyBiKGTzXbb8iQYjnMHWADrI5jWwV3GNGgM",
    authDomain: "bloodtrackr-f9885.firebaseapp.com",
    projectId: "bloodtrackr-f9885",
    storageBucket: "bloodtrackr-f9885.appspot.com",
    messagingSenderId: "105061810841",
    appId: "1:105061810841:web:4a1d15cbdf7036e2f56e08"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth();

  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var confirmpassword = document.getElementById("confirmpassword");
  var address = document.getElementById("address");
  var bloodtype = document.getElementById("bloodtype");

  window.signup = function(e) {
    e.preventDefault();
    var obj = {
        name:name.value,
        email:email.value,
        password:password.value,
        confirmpassword:confirmpassword.value,
        address:address.value,
        bloodtype:bloodtype.value
    }
    createUserWithEmailAndPassword(auth, obj.email, obj.password)
    .then(function(success){
        alert("Signup SUccessfully")
    })
    .catch(function(err){
        alert("error" + err)
    })
    console.log(obj)
  };

/*  
let signupBtn = document.getElementById("signupBtn");
let signinBtn = document.getElementById("signinBtn");
let nameField = document.getElementById("nameField");
let confirmField = document.getElementById("confirmField");
let addressField = document.getElementById("addressField");
let bloodField = document.getElementById("bloodField");
let signinForm = document.getElementById("signinForm");
let title = document.getElementById("title");

signinBtn.onclick = function(){
    nameField.style.maxHeight = "0";
    confirmField.style.maxHeight = "0";
    addressField.style.maxHeight = "0";
    bloodField.style.maxHeight = "0";

    title.innerHTML = "Sign In";
    signupBtn.classList.add("disable");
    signinBtn.classList.remove("disable");
}

signupBtn.onclick = function(){
    nameField.style.maxHeight = "60px";
    confirmField.style.maxHeight = "60px";
    addressField.style.maxHeight = "60px";
    bloodField.style.maxHeight = "60px";
    title.innerHTML = "Sign Up";
    signupBtn.classList.remove("disable");
    signinBtn.classList.add("disable");
}


submitSignup.addEventListener('click', (e) => {

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;
    var email = document.getElementById('email').value;
    var email = document.getElementById('email').value;

    createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
            // Signed up 
            const user = userCredential.user;
            // ...
        })
        .catch((error) => {
            const errorCode = error.code;
            const errorMessage = error.message;
            // ..
        });
})


document.addEventListener('DOMContentLoaded', function() {
    const btnRegister = document.querySelector('.btn-signup .btn-register');
    const successMes = document.querySelector('.success-message');
    const formBox = document.querySelector('.form-box');
    const btnDismiss = document.querySelector('.success-message .btn-dismiss .btn-exit');

    if (btnRegister && successMes && formBox) {
        btnRegister.addEventListener('click', function() {
            // Hide the form
            formBox.classList.add('hide');
            // Toggle the hide class to show the success message
            successMes.classList.toggle('hide');
        });

        btnDismiss.addEventListener('click', function() {
            // Hide the success message
            successMes.classList.remove('hide');
            // Show the signup form
            formBox.classList.add('hide');
        });
        
    } else {
        console.error('Button, success message, form, or dismiss button not found.');
    }
});

const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });*/

   
