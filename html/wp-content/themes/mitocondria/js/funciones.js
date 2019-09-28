const navAnclas = document.getElementsByClassName('a-nav');
for (var i = 0, len = navAnclas.length; i < len; i++) {
    navAnclas[i].addEventListener("click", function(){
        scrollToDiv(this.dataset.href);
    });
}
//Boton Menu Mobile
const btnMenu = document.getElementById('btn-menu');
const navHead = document.getElementById('navHead');

if(btnMenu){
  btnMenu.addEventListener("click", function(){
    if(btnMenu.classList.contains('open')){
      btnMenu.classList.remove('open');
      btnMenu.classList.add('close');
      navHead.classList.remove('visible');
    }else{
      btnMenu.classList.remove('close');
      btnMenu.classList.add('open');
      navHead.classList.add('visible');
    }
  });
}

const carrusel4 = document.getElementsByClassName('carrusel-1');
if(carrusel4){
[].forEach.call(document.querySelectorAll('.carrusel-1'), function (el) {
var slider = tns({
    container: el,
    items: 1,
    controls: false,
    nav: true,
    navPosition: 'bottom',
    gutter: 0,
    preventScrollOnTouch: "force"
    });
});
}
/*--WOW--*/
  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      mobile: false,
      callback: function(box) {
        if(box.classList.contains("cifras")){
          iniciarCount();
        }
      }
    }
  );
  wow.init();

  function scrollToSmoothly(pos, time){
    time = 1;
         if(isNaN(pos)){
          throw "Error";
         }
         if(pos<0){
         throw "Error";
         }
        var currentPos = window.scrollY||window.screenTop;
        if(currentPos<pos){
        if(time){
            var x;
          var i = currentPos;
          x = setInterval(function(){
             window.scrollTo(0, i);
             i += 20;
             if(i>=pos){
              clearInterval(x);
             }
         }, time);
        } else {
        var t = 10;
           for(let i = currentPos; i <= pos; i+=10){
           t+=10;
            setTimeout(function(){
              window.scrollTo(0, i);
            }, t/2);
          }
          }
        } else {
        time = time || 2;
           var i = currentPos;
           var x;
          x = setInterval(function(){
             window.scrollTo(0, i);
             i -= 10;
             if(i<=pos){
              clearInterval(x);
             }
         }, time);
          }
    }
    function scrollToDiv(e){
      var elem = document.getElementById(e);
      scrollToSmoothly(elem.offsetTop - 20);
    }