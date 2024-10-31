let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let header = document.querySelector('.header-3');
let scrollTop = document.querySelector('.scroll-top');


menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});


window.onscroll = () =>{

    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 250){
        header.classList.add('active');
    }else{
        header.classList.remove('active');
    }

    if(window.scrollY > 200){
        scrollTop.style.display = 'initial';
    }else{
        scrollTop.style.display = 'initial';
    }

}

var swiper = new Swiper(".home-slider", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    loop:true,
});



setInterval(function(){
    countDown();
},1000);



var timeLeft = 600;
var elem = document.getElementById('Timer');

var timerId = setInterval(countdown, 1000);

function countdown() {
  if (timeLeft == 0) {
    clearTimeout(timerId);
    doSomething();
  } else {
    elem.innerHTML = timeLeft + ' seconds remaining';
    timeLeft--;
  }
}

function searchBtn() {	
    var searchOutPut = $("#searchBar").val();
        var Msaiful = $("#searchArea1").text().replace(searchOutPut, "<strong><u>"+ searchOutPut +"</u></strong>");
            $("#searchArea1").html(Msaiful)
}