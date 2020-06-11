function getGeneralSchedule() {
  let data = {
    function: "getGeneralSchedule",
  };

  $.ajax({
    type: "GET",
    data: data,
    url: "./adapters/generalSchedule.php",
    success: function (result) {
      console.log(result);
    },
  });
}
