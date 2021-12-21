  var slideIndexA = 1;
showSlidesA(slideIndexA);

// Next/previous controls
function plusSlidesA(n) {
  showSlidesA(slideIndexA += n);
}

// Thumbnail image controls
function currentSlideA(n) {
  showSlidesA(slideIndexA = n);
}

function showSlidesA(n) {
  var i;
  var slidesA = document.getElementsByClassName("mySlidesA");
  var dotsA = document.getElementsByClassName("demoA");
  var captionText = document.getElementById("captionA");
  if (n > slidesA.length) {slideIndexA = 1}
  if (n < 1) {slideIndexA = slidesA.length}
  for (i = 0; i < slidesA.length; i++) {
    slidesA[i].style.display = "none";
  }
  for (i = 0; i < dotsA.length; i++) {
    dotsA[i].className = dotsA[i].className.replace(" active", "");
  }
  slidesA[slideIndexA-1].style.display = "block";
  dotsA[slideIndexA-1].className += " active";
  captionText.innerHTML = dotsA[slideIndexA-1].alt;
}
        
// PAra la habitación Londres

  var slideIndexL = 1;
showSlidesL(slideIndexL);

// Next/previous controls
function plusSlidesL(n) {
  showSlidesL(slideIndexL += n);
}

// Thumbnail image controls
function currentSlideL(n) {
  showSlidesL(slideIndexL = n);
}

function showSlidesL(n) {
  var i;
  var slidesL = document.getElementsByClassName("mySlidesL");
  var dotsL = document.getElementsByClassName("demoL");
  var captionText = document.getElementById("captionL");
  if (n > slidesL.length) {slideIndexL = 1}
  if (n < 1) {slideIndexL = slidesL.length}
  for (i = 0; i < slidesL.length; i++) {
    slidesL[i].style.display = "none";
  }
  for (i = 0; i < dotsL.length; i++) {
    dotsL[i].className = dotsL[i].className.replace(" active", "");
  }
  slidesL[slideIndexL-1].style.display = "block";
  dotsL[slideIndexL-1].className += " active";
  captionText.innerHTML = dotsL[slideIndexL-1].alt;
}
