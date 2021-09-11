"use strict";

document.addEventListener("DOMContentLoaded", () => {

    // Arreglo que mantiene todas las peliculas cargadas en el sitio. Inicialmente tiene 3 películas precargadas.
    let peliculas = [
        {
            "pelicula": "Godzilla vs Kong",
            "categoria": "2D",
            "horario": {
                "dia": new Date("2021-5-31").toLocaleDateString(),
                "hora": "23:00"
            },
            "promocion": {
                "descuento": 15,
                "tarjeta": "Santander"
            }
        },
        {
            "pelicula": "Mortal Kombat",
            "categoria": "3D",
            "horario": {
                "dia": new Date("2021-5-30").toLocaleDateString(),
                "hora": "21:30"
            },
            "promocion": {
                "descuento": 40,
                "tarjeta": "Banco Nación"
            }
        },
        {
            "pelicula": "Nomadland",
            "categoria": "2D",
            "horario": {
                "dia": new Date("2021-5-29").toLocaleDateString(),
                "hora": "22:30"
            },
            "promocion": {
                "descuento": 15,
                "tarjeta": "BBVA"
            }
        }
    ];

    //Variables que permiten acceder al DOM.
    let tbodyHorarios = document.querySelector("#tabla-horarios-body");
    let btnVaciar = document.querySelector('#btn-vaciar');
    let btnCargaMultiple = document.querySelector('#btn-carga-multiple');
    let formAdministracion = document.querySelector("#form-administracion");

    //LLama a la funcion tabla inicial
    cargarTablaInicial(peliculas, tbodyHorarios);


    //Suscripcion a los eventos clicks de cada uno de los botones
    btnVaciar.addEventListener('click', () => {
        //Vacio el arreglo para sincronizarlo con la tabla
        peliculas = [];
        tbodyHorarios.innerHTML = '';
    });

    btnCargaMultiple.addEventListener('click', () => {
        //Peliculas extra que se van a cargar con el boton de carga multiple (x3)
        let peliculasExtra = [
            {
                "pelicula": "Pequeños secretos",
                "categoria": "2D",
                "horario": {
                    "dia": new Date("2021-06-02").toLocaleDateString(),
                    "hora": "17:00"
                },
                "promocion": {
                    "descuento": 10,
                    "tarjeta": "BBVA"
                }
            },
            {
                "pelicula": "Tom y Jerry",
                "categoria": "3D",
                "horario": {
                    "dia": new Date("2021-06-03").toLocaleDateString(),
                    "hora": "18:00"
                },
                "promocion": {
                    "descuento": 35,
                    "tarjeta": "Banco Nación"
                }
            },
            {
                "pelicula": "Tiburón blanco",
                "categoria": "3D",
                "horario": {
                    "dia": new Date("2021-06-10").toLocaleDateString(),
                    "hora": "23:30"
                },
                "promocion": {
                    "descuento": 10,
                    "tarjeta": "Santander"
                }
            }

        ];

        for (let i = 0; i < peliculasExtra.length; i++) {
            cargarElementoTabla(peliculasExtra[i], tbodyHorarios);
            //Mantengo sincronizado el arreglo original con los datos de la tabla
            peliculas.push(peliculasExtra[i]);
        }
    });

    formAdministracion.addEventListener('submit', (event) => {
        let formData = new FormData(formAdministracion);
        let inputPelicula = formData.get('pelicula');
        let inputCategoria = formData.get('categoria');
        let inputDia = formData.get('dia');
        let inputHora = formData.get('horario');
        let inputDescuento = formData.get('descuento');
        let inputTarjeta = formData.get('tarjeta');
        let nuevaPelicula = {
            "pelicula": inputPelicula,
            "categoria": inputCategoria,
            "horario": {
                "dia": new Date(inputDia).toLocaleDateString(),
                "hora": inputHora
            },
            "promocion": {
                "descuento": inputDescuento,
                "tarjeta": inputTarjeta
            }
        }
        //Carga el objeto de nuevaPelicula a la tabla
        cargarElementoTabla(nuevaPelicula, tbodyHorarios);
        //Para sincronizar con el arreglo peliculas
        peliculas.push(nuevaPelicula);

        event.preventDefault();
    });

});


//Funcion para cargar la tabla con las 3 peliculas iniciales.
function cargarTablaInicial(peliculas, tablaHorarios) {
    //Recorro el arreglo peliculas y lo muestro en el DOM
    for (let i = 0; i < peliculas.length; i++) {
        cargarElementoTabla(peliculas[i], tablaHorarios);
    }
}

//Funcion que carga un objeto JSON pelicula pasado por parámetro a la tabla de horarios
function cargarElementoTabla(pelicula, tablaHorarios) {
    let fila = document.createElement('tr');
    let fechaHora = `${pelicula.horario.dia} - ${pelicula.horario.hora}`;
    let promocion = `${pelicula.promocion.descuento}% - ${pelicula.promocion.tarjeta}`;
    if (pelicula.promocion.descuento > 20)
        fila.classList.add('fila-resaltada');
    fila.innerHTML = `<td> ${pelicula.pelicula} </td>
                          <td> ${pelicula.categoria} </td>
                          <td> ${fechaHora}</td>
                          <td> ${promocion}</td>`
    //Inserta una fila en el body de la tabla
    tablaHorarios.appendChild(fila);
}

