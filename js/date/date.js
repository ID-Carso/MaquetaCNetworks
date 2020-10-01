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
  let month = date.getUTCMonth() + idMonth;
  return month;
}

function getDays(month) {
  let date = new Date();
  return new Date(date.getUTCFullYear(), date.getUTCMonth() + month, 0).getUTCDate();
}

function getDay() {
  let date = new Date();
  return date.getUTCDate();
}

function getDayName(month, day) {
  let date = new Date();
  let currentDay = new Date(date.getUTCFullYear(), month - 1, day).getUTCDay();

  let days = ["DOM", "LUN", "MAR", "MIER", "JUE", "VIE", "SAB"];

  return days[currentDay];
}

function getYear() {
  let date = new Date();
  return date.getUTCFullYear();
}

export {
  getMonthAndYear,
  getDays,
  getDay,
  getDayName,
  getMonth,
  getYear
};