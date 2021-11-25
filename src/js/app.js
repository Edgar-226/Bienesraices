document.addEventListener('DOMContentLoaded', function() {
    
    eventListener();

    darkMode();
});

function darkMode(){

    const prefiereDarkmode = window.matchMedia('(prefers-color-scheme: dark)');

    //console.log(prefiereDarkmode.matches);
    if(prefiereDarkmode.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkmode.addEventListener('change',function(){
        if(prefiereDarkmode.matches){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click',function(){
        document.body.classList.toggle('dark-mode');
    })
}

function eventListener(){
   const mobileMenu = document.querySelector('.mobile-menu');

   mobileMenu.addEventListener('click', navegacioResponsive);
}


function navegacioResponsive(){
    //console.log('Desde navegacion responsive')

    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar')

    // if(navegacion.classList.contains('mostrar')){
    //     navegacion.classList.remove('mostrar');
    // }else{
    //     navegacion.classList.add('mostrar')
    // }
}