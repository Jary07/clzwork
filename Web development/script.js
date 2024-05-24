
let naam=document.querySelector('#name');
let email=document.querySelector('#email');
let pass=document.querySelector('#pass');
let submit=document.querySelector('.btn')
let nameStar=document.querySelector('#name-star')
let emailStar=document.querySelector('#email-star')
let passStar=document.querySelector('#pass-star')
let togglePass=document.querySelector('#toggle-pass')


togglePass.addEventListener('change',function(){
    if(pass.type=="password"){
        pass.type="text"
    }
    else{
        pass.type="password";
    }
})



//4248