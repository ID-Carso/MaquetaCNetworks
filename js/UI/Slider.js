import {
  getMonthAndYear,
  getDays,
  getDay,
  getDayName,
  getMonth
} from "../date/date.js";

export default class Slider {
  deleteSlider(container) {
    container.slick("unslick");
  }

  createDaysSlider(landing, containerSlider) {
    /*Programación general*/
    let date = new Date();
    $(".month").html(getMonthAndYear(date.getMonth()));

    /* Número de días del mes actual */
    let currentMonthDays = getDays(1);
    console.log(currentMonthDays);

    /* Mes Siguiente*/
    let nextMonth = getDays(2);

    /* Número de los días restantes del mes actual */
    let numberLastDays = getDays(1) - getDay();
    console.log(numberLastDays);

    /* Condición: si los días restantes del mes actual
      son menores a 15, mostramos los días del siguiente mes
    */

    var totalDaysSlider;

    if (numberLastDays <= 15) {
      /* Número de días por poner en el slider, considerando los días
        restantes del mes actual y los del siguiente mes
      */
      var daysSlider = "";
      var containerItemSlider = "";
      totalDaysSlider = getDays(2) + (getDays(1) - getDay());
      for (let i = getDay(); i <= getDays(1); i++) {
        if (i == getDay()) {
          daysSlider += `
            <li rel="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-item programing-item ${landing}-active">
              <div class="day">
                  <p class="day-text">${getDayName(1, i)}</p>
                  <p class="day-number">${i}</p>
              </div>
            </li>      
        `;
          containerItemSlider += `
        <div id="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-content"></div>
        `;
        } else {
          daysSlider += `
        <li rel="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-item programing-item">
          <div class="day">
              <p class="day-text">${getDayName(1, i)}</p>
              <p class="day-number">${i}</p>
          </div>
        </li>      
        `;
          containerItemSlider += `
        <div id="${landing}-${i}-${getMonth(
            0
          )}" class="${landing}-content"></div>
        `;
        }
      }

      for (let i = 1; i <= getDays(2); i++) {
        console.log(`${i} - ${getDayName(2, i)}`);
        daysSlider += `
      <li rel="${landing}-${i}-${getMonth(
          1
        )}" class="${landing}-item programing-item">
        <div class="day">
            <p class="day-text">${getDayName(2, i)}</p>
            <p class="day-number">${i}</p>
        </div>
      </li>      
  `;
        containerItemSlider += `
  <div id="${landing}-${i}-${getMonth(1)}" class="${landing}-content"></div>
  `;
      }

      console.log(containerItemSlider);

      let programmingContainerSlider = $("#pro-" + landing + "-slider");
      programmingContainerSlider.html(daysSlider);
      containerSlider.append(containerItemSlider);
    } else {
      totalDaysSlider = numberLastDays;
      for (let i = numberLastDays; i <= totalDaysSlider; i++) {
        console.log(i);
      }
    }

    $(".claro-item").click(function() {
      console.log(landing);
    });
    console.log();
  }
}
