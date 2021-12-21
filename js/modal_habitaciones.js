var slideIndex = 1;
// Open the Modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
    showSlides(slideIndex);
}
// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none"; 
}

function openModalL() {
  document.getElementById("myModalL").style.display = "block"; 
  showSlidesL(slideIndex);
}
// Close the Modal
function closeModalL() {
  document.getElementById("myModalL").style.display = "none";
}


function openModalN() {
  document.getElementById("myModalN").style.display = "block";  
  showSlidesN(slideIndex);
}
// Close the Modal
function closeModalN() {
  document.getElementById("myModalN").style.display = "none";
}


function openModalAs() {
    document.getElementById("myModalAs").style.display = "block";
    showSlidesAs(slideIndex);
}
// Close the Modal
function closeModalAs() {
  document.getElementById("myModalAs").style.display = "none";
}


function openModalAf() {
    document.getElementById("myModalAf").style.display = "block";
    showSlidesAf(slideIndex);
}
// Close the Modal
function closeModalAf() {
  document.getElementById("myModalAf").style.display = "none";
}


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function plusSlidesL(n) {
  showSlidesL(slideIndex += n);
}
function plusSlidesN(n) {
  showSlidesN(slideIndex += n);
}
function plusSlidesAs(n) {
  showSlidesAs(slideIndex += n);
}
function plusSlidesAf(n) {
  showSlidesAf(slideIndex += n);
}


// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function showSlidesL(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesL");
  var dots = document.getElementsByClassName("demoL");
  var captionText = document.getElementById("captionL");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
function showSlidesN(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesN");
  var dots = document.getElementsByClassName("demoN");
  var captionText = document.getElementById("captionN");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


function showSlidesAs(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesAs");
  var dots = document.getElementsByClassName("demoAs");
  var captionText = document.getElementById("captionAs");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


function showSlidesAf(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesAf");
  var dots = document.getElementsByClassName("demoAf");
  var captionText = document.getElementById("captionAf");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


