function getMonthAndYear(month) {
  let date = new Date();
  let year = date.getFullYear();
  let months = [
    "ENERO",
    "FEBRERO",
    "MARZO",
    "ABRIL",
    "MAYO",
    "JUNIO",
    "JULIO",
    "AGOSTO",
    "SEPTIEMBRE",
    "OCTUBRE",
    "NOVIEMBRE",
    "DICIEMBRE"
  ];

  return `${months[month]} ${year}`;
}

function getMonth(idMonth) {
  let date = new Date();
  let month = date.getMonth() + idMonth;
  return month;
}

function getDays(month) {
  let date = new Date();
  return new Date(date.getFullYear(), date.getMonth() + month, 0).getDate();
}

function getDay() {
  let date = new Date();
  return date.getDate();
}

function getDayName(month, day) {
  let date = new Date();
  let currentDay = new Date(date.getFullYear(), month, day).getUTCDay();

  let days = ["DOM", "LUN", "MAR", "MIER", "JUE", "VIE", "SAB"];

  return days[currentDay];
}

function getYear() {
  let date = new Date();
  return date.getFullYear();
}

export { getMonthAndYear, getDays, getDay, getDayName, getMonth, getYear };
