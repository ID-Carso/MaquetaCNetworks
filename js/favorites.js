$(document).ready(function () {
  let id = localStorage.getItem("id");
  getFavorites(id);
});

function getFavorites(id) {
  let data = {
    function: "getFavorites",
    id: id,
  };

  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/user.php",
    success: function (result) {
      console.log(result);
      //Filtrar favoritos
      $(".sidebar-item").click(function () {
        let option = $(this).attr("genre");
        filterPrograms(option);
      });
    },
  });
}

function filterPrograms(option) {
  let data = {
    function: "filterPrograms",
    option: option,
  };

  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/user.php",
    success: function (result) {
      console.log(result);
    },
  });
}
