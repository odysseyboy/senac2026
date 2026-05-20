//aqui crio meus scripts
function subirtela(){
    //window.scrollTo(0,0);
    window.scrollTo({
        top:0,
        left:0,
        behavior:'smooth',
    });
}
function decidirBotaoScroll(){
    if(window.scrollY === 0){
        //oculta o botao
        document.querySelector('.scrollbutton').style.display = 'none';
    }
    else{
        //mosta o bottao
        document.querySelector('.scrollbutton').style.display = 'block';
    }
}
//setInterval(decidirBotaoScroll, 1000); problema consumo de processamento solução abaixo
window.addEventListener('scroll', decidirBotaoScroll);

const slides = document.querySelector('.slides');
const imagens = document.querySelectorAll('.slides img');

let index = 0;

function mostrarSlide() {
  slides.style.transform = `translateX(${-index * -90}%)`;
}


setInterval(() => {
  index = (index + 1) % imagens.length;
  mostrarSlide();
}, 3000)
