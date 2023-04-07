let prevBtn = document.querySelector('.carousel-control-prev');
prevBtn.addEventListener('click', function() {
  $('.carousel').carousel('prev');
});

let nextBtn = document.querySelector('.carousel-control-next');
nextBtn.addEventListener('click', function() {
  $('.carousel').carousel('next');
});
