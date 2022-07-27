const btnEls = document.querySelectorAll("button");

for (const btnEl of btnEls) {
  btnEl.onclick = function () {

    const btnA = document.querySelector('.active');
    btnA.classList.remove('active');

    this.classList.add('active');
    
    const dataValue = this.getAttribute("data");
    
    const imgPaste = `img/${dataValue}.png`;
    
    const imgEl = document.querySelector('img');

    imgEl.src = imgPaste;


  };
}
