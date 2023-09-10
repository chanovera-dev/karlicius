// Obtén todos los elementos con la clase 'star-1' y 'star-2'
let star1 = document.getElementsByClassName('star-1');
let star2 = document.getElementsByClassName('star-2');

// Agrega eventos a 'star2' (teniendo en cuenta que es una colección)
for (let i = 0; i < star2.length; i++) {
    star2[i].addEventListener('mouseover', () => {
        // Itera sobre los elementos de 'star1' y agrega la clase 'filled' a cada uno
        for (let j = 0; j < star1.length; j++) {
            star1[j].classList.add('filled');
        }
    });

    
}
