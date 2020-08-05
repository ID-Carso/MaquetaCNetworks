$(document).ready(function () {
  let date = new Date();
  let day = date.getDate();
  let month = date.getMonth() + 1;
  let year = date.getFullYear();
  let hour = date.getHours();
  let minutes = date.getMinutes();
  let seconds = date.getSeconds();

  //Si el número de día es menor a 10, le agregamos un cero para tener el formato DD
  if (day < 10) {
    day = "0" + date.getDate();
  }
  //Si el número del mes es menor a 10, le agregamos un cero para tener el formato MM
  if (month < 10) {
    month = "0" + (date.getMonth() + 1);
  }

  //Fecha actual en formato YYYY-MM-DD
  let currentDate = `${year}-${month}-${day}`;
  //Hora actual en HH:MM
  let currentTime = `${hour}:${minutes}`;
  //Traer programas del día actual en GTM
  let data = {
    date: currentDate,
    function: "getProgramsGMT",
  };
  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/program.php",
    success: function (result) {
      let json = JSON.parse(result);
      //Contenedor para insertar todos los programas
      let claroCotentProgramacionGeneralEdit = $(".claro-content-edit");
      //Programación de los diferentes landings
      let programingCanalClaro = json.data[0].programing[0].programs;
      let programingConcertChannel = json.data[1].programing[0].programs;
      let programingClaroCinema = json.data[2].programing[0].programs;
      let programCanalClaroEdit = "";
      programingCanalClaro.forEach((program, index) => {
        programCanalClaroEdit += `
        <div class="p-3 border-t border-r border-l border-b position-relative mb-3">
        <img src="./images/General/pencil.svg" alt="" class="pencil edit-program-pencil" chapter_id="${program.chapter_id}">
        <div class="schedule-container col-12 p-5 mx-auto mt-0">
            <p class="schedule-title  a-text-plus a-text-black-brown-two">
                ${program.chapter_title}
            </p>
            <div class="schedule-item-body">
                <div class="schedule-poster">
                    <div class="poster">
                        <div class="thumbnail-edit" _id="${program.chapter_id}">
                            <img src="${program.image}" alt="">
                        </div>
                    </div>
                </div>
                <div class="schedule-details">
                    <div class="schedule-details-header">
                        <div>
                            <p class="schedule a-text-black-brown-two">
                                ${program.time} hrs.
                            </p>
                            <p class="rating">
                                Clasificación: A
                            </p>
                        </div>
                        <div>
                            <button title="Agregar a mi lista" class="button-none add-favorites programing-button" type="button" _id="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="44" viewBox="0 0 48 44">
                                    <path class="heart-gray" fill="none" fill-rule=" evenodd" stroke="#7A7777" stroke-width="3" d="M33.709 2c-2.54 0-4.866.82-6.914 2.438-1.033.817-1.97 1.816-2.795 2.983-.825-1.166-1.762-2.166-2.795-2.983C19.157 2.821 16.83 2 14.29 2c-3.397 0-6.523 1.39-8.8 3.915C3.24 8.409 2 11.818 2 15.512c0 3.802 1.387 7.283 4.364 10.954 2.663 3.284 6.491 6.617 10.924 10.477 1.514 1.318 2.886 2.198 4.667 3.79C22.426 41.152 23.374 42 24 42c.626 0 1.574-.847 2.044-1.267 1.782-1.592 3.155-2.472 4.669-3.791 4.432-3.86 8.26-7.192 10.923-10.477C44.614 22.795 46 19.315 46 15.511c0-3.693-1.24-7.102-3.49-9.596C40.231 3.39 37.105 2 33.708 2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div>
                        <span class="schedule-description s1" id="synopsis-edi">${program.sinopsis}</span>
                        <span class="text-normal cursor-pointer a-text-bold-tealblue"> Ver más...</span>
                    </div>
                </div>
            </div>
        </div>
    </div> 
        `;
      });

      //Insertamos todos los programas
      claroCotentProgramacionGeneralEdit.html(programCanalClaroEdit);

      //Checamos la longitud de la sinospsis para poner el ver más
      let keyValue = $(".s1").text();

      if (keyValue.length > 150) {
        console.log("200");
        let text = keyValue.substr(0, 150) + "...";
        $(".s1").text(text);
      } else {
        $(".s1").text(keyValue);
      }
    },
  });
});
