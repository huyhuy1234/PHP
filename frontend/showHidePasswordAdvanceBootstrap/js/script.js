const btnEl = document.querySelector('button.showhide');
btnEl.onclick = function(){
    const inputEl = document.querySelector('[name=password');
    const typeE = inputEl.type; 
    if (typeE == 'password') {
        inputEl.type = 'text';
        this.innerHTML = '<i class="fas fa-eye-slash"></i>'
    } else {
        inputEl.type = 'password';
        this.innerHTML = '<i class="fas fa-eye"></i>'
    }




}
