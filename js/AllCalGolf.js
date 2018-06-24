
// Adjust slideIndex when button is pressed
function moveSlide(n) {
  slideShow(slideIndex += n);
}
//Slide Show function
function slideShow(n) {
  //set var and count photos
  var slideIndex = 1;
  var i;
  var slides = document.getElementsByClassName('mySlides');
  //If the count is larger than the photo array, 'loop' to 1st
  if (n > slides.length) {slideIndex = 1};
  //Loop to the end, creating infinite wrap
  if (n < 1) {slideIndex = slides.length};
  //Set all slides invisible
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  //Make chosen slide visible
  slides[slideIndex-1].style.display = "block";
};

function dropDown() {
  $('#dropdown-btn').click(function(){
    console.log("CLICKED!");
    $('.dropdown-content').toggle();
  });
};


$(document).ready(function(){
  dropDown();
  //Begin slide count
  var slideIndex = 1;
  slideShow(1);

});
