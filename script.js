
{

let htbtn = document.getElementById('htbtn');


let htex = document.getElementById('htex');

htbtn.addEventListener('click', toggleText);


function toggleText() {

    htex.classList.toggle('shows');
}


}


{
let btnrel = document.getElementById('btnrel');

let reltext = document.getElementById('reltext');

btnrel.addEventListener('click', toggleText);


function toggleText() {

    reltext.classList.toggle('shows');
}
}


{
    let btnspec = document.getElementById('btnspec');
    
    let specjs = document.getElementById('specjs');
    
    btnspec.addEventListener('click', toggleText);
    
    
    function toggleText() {
    
        specjs.classList.toggle('shows');
    }
    }