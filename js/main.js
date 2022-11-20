const carrusel = document.querySelector(".items");

let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
let intervalo = null;
let step = 1;
const start = () => {
  intervalo = setInterval(function () {
    carrusel.scrollLeft = carrusel.scrollLeft + step;
    if (carrusel.scrollLeft === maxScrollLeft) {
      step = step * -1;
    } else if (carrusel.scrollLeft === 0) {
      step = step * -1;
    }
  }, 30);/* los milisegundos*/
};

const stop = () => {
  clearInterval(intervalo);
};

carrusel.addEventListener("mouseover", () => {/*ALTO DEL CARRUSEL*/
  stop();
});

carrusel.addEventListener("mouseout", () => { /*INICIO DEL CARRUSEL*/
  start();
});

start();