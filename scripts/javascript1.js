function popupcart(e) {

    let p = e.target.parentElement.innerHTML;

    console.log(p)

    const choice = document.createElement('h3');

    const show0 = document.querySelector('.popup-cart  ');
    const show = document.querySelector('.popup-cart div  ');

    choice.innerHTML = p;


    choice.children[5].style = 'display:none'


    show.appendChild(choice)

    show0.style = 'display:flex';


}
const addcart = document.querySelectorAll('.addcart')
addcart.forEach(function (btn) {
    btn.addEventListener('click', popupcart)
})
const closeBtn2 = document.querySelector('.close-btn2');
function close2(e) {
    e.target.parentElement.parentElement.style = "display:none"
} closeBtn2.addEventListener('click', close2)