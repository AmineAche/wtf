const items = document.querySelectorAll(".question a");
 
function defile(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}
 
items.forEach(item => item.addEventListener('click', defile)); 
