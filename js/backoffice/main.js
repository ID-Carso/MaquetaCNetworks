$(document).ready(function () {
  let data = {};
  //Traer programas del día actual en GTM
  $.ajax({
    type: "GET",
    data: data,
    url: "https://jsonplaceholder.typicode.com",
    success: function (result) {
      console.log(result);
    },
  });
});
