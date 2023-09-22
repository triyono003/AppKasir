const menuToggle = document.querySelector('.burger-menu input');
const sidebar = document.querySelector('.sidebar');

menuToggle.addEventListener("click", function(){
  sidebar.classList.toggle('slide');
});

const stok = document.querySelector('.stok');
stok.addEventListener('click',function(){
  window.location.href='stok.html';
});
