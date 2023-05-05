//variables del menu
const boton = document.querySelector('#btn-menu');
const menu = document.querySelector('#menu');
const menuitems = document.querySelectorAll("#menu-item");

//variables del slide
const slideprev = document.querySelector('#prev');
const slidenext = document.querySelector('#next');

//variables del los tabs
const tabs = document.querySelectorAll("#tab");
const contents = document.querySelectorAll("#tab-content");


//codigo del menu
boton.addEventListener('click', () => {
    menu.classList.toggle("hidden");
    boton.classList.toggle("bg-gray-300");
    boton.classList.toggle("text-gray-900");
});

//codigo de las opciones del menu
menuitems.forEach((menuitem, index) => {
    menuitem.addEventListener("click", () => {
        //console.log("esta aqui")
        menuitems.forEach((menuitem) => menuitem.classList.remove("border-b-2"));
        menuitem.classList.add("border-b-2");

    });
});

//codigo del slide
if (!(slideprev === null)) {

    console.log("esta el slide aqui");
    let slideIndex = 1;
    let contadorSlide = 0;

    showSlides(slideIndex);

    slideprev.addEventListener('click', () => {
        showSlides(slideIndex -= 1);
    });

    slidenext.addEventListener('click', () => {
        showSlides(slideIndex += 1);
    });


    function showSlides(n) {
        let i;
        let slides = [...document.querySelectorAll("#mySlides")];
        let dots = document.querySelectorAll("#dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.add('hidden');
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" bg-gray-800", "");
        }
        slides[slideIndex - 1].classList.remove("hidden");
        dots[slideIndex - 1].className += " bg-gray-800";
        contadorSlide = 0;
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function autoSlide() {
        const actual = Number(document.querySelector('.bg-gray-800').dataset.id);
        n = actual + 1;
        currentSlide(n);
    }

    setInterval(contAutoSlide, 1000);

    function contAutoSlide() {
        if (contadorSlide == 6) {
            contadorSlide = 0;
            autoSlide();
        }
        contadorSlide += 1;
    }
}

//codigo de los tabs (pestañas)
if (!(tabs === null)) {
    tabs.forEach((tab, index) => {
        tab.addEventListener("click", () => {
            //remover las clases activas

            tabs.forEach((tab) => tab.classList.remove("text-gray-200"));
            tabs.forEach((tab) => tab.classList.remove("bg-red-700"));

            tab.classList.add("text-gray-200");
            tab.classList.add("bg-red-700");

            //mostrar los contenedores
            contents.forEach((content) => content.classList.add("hidden"))
            contents[index].classList.remove("hidden");
            //console.log(index);
        });
    });
}


/** funcion para mostrar el programa actual */
setTimeout(actualizarEnVivo, 3000);




function actualizarEnVivo() {
    //obtenemos la hora actual
    let horaActual = new Date();
    let horaData = Number(horaActual.getHours()) + Number("0." + horaActual.getMinutes());

    //elementos de la lista
    let listaProgra = document.querySelectorAll(".item__list");
    let listaHoras = []

    //obteniendo las horas de programacion
    for (let index = 0; index < listaProgra.length; index++) {
        listaHoras.push(listaProgra[index].firstElementChild.innerHTML);
    }

    //comparamos en la hora y minuto actual con el rango de las horas de programacion
    for (let index = 0; index < listaHoras.length - 1; index++) {

        hactual = String(horaActual.getHours() + ":" + horaActual.getMinutes());
        hinicio = String(listaHoras[index]);
        hfin = String(listaHoras[index + 1]);
        console.log(hactual+" "+hinicio+" "+hfin);
      
        if(devolerEstado(hactual, hinicio, hfin)){
            const p = document.createElement("p");
            const cls = ["block","border-t-4","border-red-300/50", "p-4", "w-24"];
            p.classList.add(...cls);
            p.textContent += "En vivo";
            listaProgra[index].appendChild(p);
            console.log(listaProgra[index]);
            console.log("bien");
            break;
        }else{
            console.log("error");
        }
        
    }
    //revistabuenosdias@ctvbolivia.com
}

function devolerEstado(valor, inicio, fin) {
    hactual = Number(valor.slice(0, 2) + valor.slice(-2));
    hinicio = Number(inicio.slice(0, 2) + inicio.slice(-2));
    hfin = Number(fin.slice(0, 2) + fin.slice(-2));
    console.log(hactual + " - " + hinicio+ " " + hfin)
    return hactual >= hinicio && hactual <= hfin;
}

//console.log(listaData);

/*
3 adaptadores display port a hdmi hembra
3 adaptadores vga hembra a hdmi macho*/

/**----codigo para las fechas de las noticias-----**/
setTimeout(ajustarFecha, 300);
function ajustarFecha() {
    let fecha = String(document.querySelector('.fecha_noticia').innerHTML);
    //0000-00-00
    let meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"]
    let age = Number(fecha.slice(0, 4));
    let mes = Number(fecha.slice(5, 7));
    let dia = Number(fecha.slice(8));
    //console.log(dia + " g " + mes + " g " + age);
    let formatoFecha = dia + " de " + meses[mes - 1] + " " + age;
    document.querySelector(".fecha_noticia").innerHTML = formatoFecha;
};