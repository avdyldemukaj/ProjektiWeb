var swiper = new Swiper('.mySwiper', {
  effect: 'coverflow',
  grabCursor: true,
  slideToClickedSlide: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    scale: 1,
    depth: 100,
    modifier: 2,
    slideShadows: false,
  },
  loop: true,
});

let count = 1;
document.getElementById("radio1").checked = true;

setInterval( function(){
  nextImage();
}, 2000)

function nextImage(){
    count++;
    if(count>4){
        count = 1;
    }

    document.getElementById("radio"+count).checked = true;

}

