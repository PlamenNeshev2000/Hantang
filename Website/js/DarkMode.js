function DarkMode() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}

function HighContrast (){
document.getElementById("contrast").style.filter = "brightness(200%)";
  document.getElementById("contrast").style.filter = "contrast(200%)";
}

function NormalContrast (){
document.getElementById("contrast").style.filter = "brightness(100%)";
  document.getElementById("contrast").style.filter = "contrast(100%)";
}

