document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          document.getElementById('navbar_top').classList.add('fixed-top');
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('navbar_top').classList.remove('fixed-top');
           // remove padding top from body
          document.body.style.paddingTop = '0';
        } 
    });
  }); 

  function book() {
    alert(" Thank you\n your reservation is booked");
  }
  function SubmitForm(){
    const regExp = /^([a-zA-Z0-9-_.]+)@([a-zA-Z0-9]+).([a-zA-Z]{2,10})(.[a-zA-Z]{2,8})?$/
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    password.style.border = "solid grey 1px";
    email.style.border = "solid grey 1px";
    var emailMsg = document.getElementById("emailMsg");
    var passwordMsg = document.getElementById("passwordMsg");
    passwordMsg.innerHTML = "";
    emailMsg.innerHTML = "";
    var ok = 1;
    if(password.value == ""){
        password.style.border = "solid red 1px";
        passwordMsg.innerHTML = "* please fill";
        ok = 0;
    }
    if(email.value == ""){
        email.style.border = "solid red 1px";
        emailMsg.innerHTML = "* please fill";
        ok = 0;
    }else if (!(regExp.test(email.value))) {
        email.style.border = "solid red 1px";
        emailMsg.innerHTML = "* Invalid Email";
        ok = 0;
    }    
    if(ok == 1){
        document.getElementById("theForm").submit();
    }else{
        return false;
    }
}