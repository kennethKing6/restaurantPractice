window.onload = function(){
    initializePage();
   setTimeout(wasEmailSent,2000);
}







function initializePage(){
    showSlides();

}










var slideIndex = 0;

function showSlides() {

  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}


function wasEmailSent(){
    var confirmationEmailTag = document.getElementById("emailContact");

    if(confirmationEmailTag.style.display == "block"){
      setTimeout(function() {
          confirmationEmailTag.style.display = "none";
      }, 2300);
    } 
    
}