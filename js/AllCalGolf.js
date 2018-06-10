function moveSlide(n) {
  slideShow(slideIndex += n);
}

function slideShow(n) {
  var i;
  var slides = document.getElementsByClassName('mySlides');
  if (n > slides.length) {slideIndex = 1};
  if (n < 1) {slideIndex = slides.length};
  
  console.log(first);
  $(first).show();

  console.log(slides);
}


$(document).ready(function(){
  var slideIndex = 1;
  slideShow(1);
  $('#dropdown-btn').click(function(){
    $('.dropdown-content').toggle();
  });

});
