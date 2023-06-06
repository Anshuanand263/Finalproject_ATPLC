const popupBtn = document.querySelectorAll('#foodcard .card');
const closeBtn = document.querySelector('.close-btn');
const closeBtn1 = document.querySelector('.close-btn1');
const closeBtn2 = document.querySelector('.close-btn2');

function popUpf(e) {
    const foodcard = document.querySelector('.foodcard-popup');
    const title = document.querySelector('.foodcard-popup .title');
    const img = document.querySelector('.foodcard-popup img');

    foodcard.style = 'display:flex';

    const src = e.target.parentElement.children[0].src;
    const text = e.target.parentElement.children[1].innerText;

    title.innerText = text;
    img.src = src
    const footer = document.querySelector('.footer');
    footer.style = 'display:none'
}

function close(e) {
    e.target.parentElement.style = "display:none"
    const footer = document.querySelector('.footer');
    footer.style = 'display:block'
}

popupBtn.forEach(function (btn) {
    btn.addEventListener('click', popUpf)
})

closeBtn.addEventListener('click', close)
closeBtn1.addEventListener('click', close)
closeBtn2.addEventListener('click', close2)
function close2(e) {
    e.target.parentElement.parentElement.style = "display:none"
}

function popupcart(e) {

    let p = e.target.parentElement.innerHTML;

    console.log(p)

    const choice = document.createElement('h3');

    const show0 = document.querySelector('.popup-cart  ');
    const show = document.querySelector('.popup-cart div  ');

    choice.innerHTML = p;


    choice.children[1].style = 'display:none'

    show.appendChild(choice)

    show0.style = 'display:flex';
    window.scrollTo(0, 0);
}
const addcart = document.querySelectorAll('.addcart')
addcart.forEach(function (btn) {
    btn.addEventListener('click', popupcart)
})

function cnfrm() {
    alert(" your order is placed,delivery on time")
}
