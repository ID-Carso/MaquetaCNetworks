function getMetaKeys() {
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "../../adapters/section.php",
    success: function(result) {
      console.log(result);
    }
  });
}

export { getMetaKeys };
