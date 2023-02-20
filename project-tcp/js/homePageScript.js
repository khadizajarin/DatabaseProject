let  searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
     searchForm.classList.toggle('active');
     sellerProfile.classList.remove('active');
     navbar.classList.remove('active');
     cartItem.classList.remove('active');
}


let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () => {
    cartItem.classList.toggle('active');
    sellerProfile.classList.remove('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

let sellerProfile = document.querySelector('.seller-profile-container');

document.querySelector('#user-btn').onclick = () => {
    sellerProfile.classList.toggle('active');
    cartItem.classList.remove('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
    sellerProfile.classList.remove('active');
}


function displayImage(file){
    const img = document.querySelector(".js-image");
    img.src = URL.createObjectURL(file);
}


document.getElementById('add-to-homapage').addEventListener('click',function(){
    const profileImg = document.getElementById('profile-img');
    const img = profileImg.innerText;
    const cardImg = document.getElementById('card-img');
    cardImg.innerText = img;


})