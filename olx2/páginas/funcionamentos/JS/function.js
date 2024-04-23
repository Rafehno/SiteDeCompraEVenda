const mudador = document.querySelector('.bnt');

mudador.addEventListener('click', function(){
    document.body.classList.toggle('dark-mode');
    if (document.body.classList.contains('dark-mode')){
        this.textContent = '🌓';    
    } else {
        this.textContet = '🌗';
    }
    console.log(document.body.className);
});

const modal = document.getElementById('JanelaModal');



const log = true;
const login = document.getElementById('logar');
const cadastro = document.getElementById('cadastro');
const notific = document.getElementById('notific');
const user = document.getElementById('user');

if (log == false) {
    login.classList.add('A');
    cadastro.classList.add('A');
    notific.classList.remove('A');
    user.classList.remove('A');
} if (log == true) {
    notific.classList.add('A');
    user.classList.add('A');
    login.classList.remove('A');
    cadastro.classList.remove('A');
    notific.addEventListener('click', function(){
        modal.classList.toggle('A');
    });
}


