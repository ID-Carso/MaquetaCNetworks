$(document).ready(function () {
  let id = localStorage.getItem("id");
  $(".sidebar-item").click(function () {
    let option = $(this).attr("genre");
    filterPrograms(option, id);
  });
});

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
