function getMetaKeys() {
  let data = {
    function: "getMetakeys"
  };
  $.ajax({
    type: "POST",
    data: data,
    url: "../../adapters/section.php",
    success: function(result) {
      console.log(result);
      let json = JSON.parse(result);
    }
  });
}

export { getMetaKeys };
