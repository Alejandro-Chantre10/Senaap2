document.addEventListener("DOMContentLoaded", function() {
    let formulario = document.querySelector("form");

    var calendarEl = document.getElementById("agenda");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        locale: "es",
        displayEventTime: false,

        headerToolbar: {
            left: "prev, next, today",
            center: "title",
            right: "dayGridMonth, timeGridWeek, listWeek",
        },

        events: "http://127.0.0.1:8000/evento/mostrar", //Mirar datos del calendario

        dateClick: function(info) {
            formulario.reset();

            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;

            $("#evento").modal("show");
        },

        eventClick: function(info) {
            var evento = info.event;
            console.log(evento);

            axios
                .post("http://127.0.0.1:8000/evento/editar/" + info.event.id) //Editar datos del calendario
                .then((respuesta) => {

                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;
                    formulario.descripcion.value = respuesta.data.descripcion;
                    formulario.start.value = respuesta.data.start;
                    formulario.end.value = respuesta.data.end;
                    // formulario.id_aprendiz.value = respuesta.id_aprendiz;
                    // formulario.id_medico.value = respuesta.id_medico;


                    $("#evento").modal("show");
                })
                .catch((error) => {
                    if (error.response) {
                        console.log(error.response.data);
                    }
                });
        },
    });

    calendar.render();

    document.getElementById("guardar").addEventListener("click", function() {
        enviarDatos("http://127.0.0.1:8000/evento/agregar"); //Agregar datos del calendario
    });

    document.getElementById("eliminar").addEventListener("click", function() {
        enviarDatos("http://127.0.0.1:8000/evento/borrar/" + formulario.id.value); //Borrar datos del calendario
    });

    document.getElementById("actualizar").addEventListener("click", function() {
        enviarDatos("http://127.0.0.1:8000/evento/actualizar/" + formulario.id.value); //Actualizar datos del calendario
    });

    function enviarDatos(url) {
        const datos = new FormData(formulario);

        console.log(datos);
        console.log(formulario.title.value);

        // const nuevaURL = baseURL + url;
        axios
            .post(url, datos)
            .then((respuesta) => {
                calendar.refetchEvents();
                $("#evento").modal("hide");
            })
            .catch((error) => {
                if (error.response) {
                    console.log(error.response.data);
                }
            });
    }

});