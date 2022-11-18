const toggle = document.getElementById('darkmode');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = 'white';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'white';
        body.style.transition = '2s';
    }

})

var nama = prompt("Enter Your Name : ");
console.log(nama);

alert('Hi, ' + nama + " Welcome to Taurinesia Villa  ♡♡♡");