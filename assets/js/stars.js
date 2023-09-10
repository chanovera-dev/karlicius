let star1 = document.querySelectorAll('.star-1');
let star2 = document.querySelectorAll('.star-2');


star2.addEventListener('mouseover', () => {
    star1.classList.add('filled');
});

star2.addEventListener('mouseout', () => {
    star1.classList.remove('filled');
});