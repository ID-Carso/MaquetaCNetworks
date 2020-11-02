$(document).ready(function () {
  let id = localStorage.getItem("id");

  //Renderizar programas
  let genres = JSON.parse(localStorage.getItem("genres"));
  let genreItem = "";
  for (const genre of genres) {
    genreItem += `
      <div class="sidebar-item" genre="${genre.title}">
        <p class="dropdown-p">${genre.title}</p>
      </div>
      `;
  }
  $("#genre-menu-content").append(`
    ${genreItem}
    <div class="sidebar-item">
      <img class="tache_button" src="images/mi-lista/cerrar-categorias.svg" alt="icono-cerrar">
    </div>
  `);
  //Filtrar programas
  $(".sidebar-item").click(function () {
    let option = $(this).attr("genre");
    filterPrograms(option, id);
  });
});

function filterPrograms(option, id) {
  let data = {
    function: "filterPrograms",
    id: id,
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
