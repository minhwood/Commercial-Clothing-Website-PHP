var slideIndex = 0;

function carousel() {
  var i;
  var x = document.getElementsByClassName("slides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); // Change image every 2 seconds
}


function openCloseAccountDialogBox() {
    var style = document.querySelector('.account-div').style;
    if (style.visibility =="hidden") style.visibility = "visible";
    else style.visibility = "hidden";
}


function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

function openSearchDialog(){
  $(".search-area").css("display","block");
}

function closeSearchDialog(){
  $(".search-area").css("display","none");
}


$(window).resize(function(){
  if ($(window).width() >= 768) {
    $(".description-box-in").css("padding-top","20%")
    $(".description-box-in").css("height","100%")
  }
  else {
    $(".description-box-in").css("padding-top","40px")
    $(".description-box-in").css("height","300px")
  }
})
