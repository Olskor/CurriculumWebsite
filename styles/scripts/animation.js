var elements = document.getElementsByClassName("zoom");

function reveal() { //function that will make every object with a class "animated" appear at scroll with a css animation
  var reveals = document.querySelectorAll(".animated, .animated-left, .animated-right"); //objects array
  for (var i = 0; i < reveals.length; i++) {//loop all objects if they ar in sight add them a "active" class
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    }
  }
}

window.addEventListener("scroll", reveal); //waiting for the user to scroll

reveal();// execute a loop when the page load