//mostrar las acciones de los roles
$(".histo").hover(
  function () {
    $(".histori").css("display", "block");
  },
  function () {
    $(".histori").css("display", "none");
  }
);
$(".editar").hover(
  function () {
    $(".edit").css("display", "block");
  },
  function () {
    $(".edit").css("display", "none");
  }
);
$(".notify").hover(
  function () {
    $(".noti").css("display", "block");
  },
  function () {
    $(".noti").css("display", "none");
  }
);
$(".ver").hover(
  function () {
    $(".veri").css("display", "block");
  },
  function () {
    $(".veri").css("display", "none");
  }
);
$(".edi").hover(
  function () {
    $(".edita").css("display", "block");
  },
  function () {
    $(".edita").css("display", "none");
  }
);
$(".borrar").hover(
  function () {
    $(".borra").css("display", "block");
  },
  function () {
    $(".borra").css("display", "none");
  }
);
$(".ver").hover(
  function () {
    $(".veri1").css("display", "block");
  },
  function () {
    $(".veri1").css("display", "none");
  }
);
$(".edi").hover(
  function () {
    $(".edita1").css("display", "block");
  },
  function () {
    $(".edita1").css("display", "none");
  }
);
$(".borrar").hover(
  function () {
    $(".borra1").css("display", "block");
  },
  function () {
    $(".borra1").css("display", "none");
  }
); //fin
//fin
//Remplazar vistas

function muestra1() {
  $("#Admin-home-BO").replaceWith();
  $("#cambio").load("admin-home.php");
}

function muestra3() {
  $("#Admin-users-Front").replaceWith();
  $("#cambio").load("Admin-users-front.php");
}

function verusuarios() {
  $("#usuarios").replaceWith();
  $("#cambio").load("VisualUser.php");
}
function editarusuarios() {}
function verfront() {
  $("#visual-front").replaceWith();
  $("#cambio").load("Visual-front.php");
}
function editfront() {
  $("#edit-front").replaceWith();
  $("#cambio").load("Edit-front.php");
}
function cerrarequis() {
  $("#segunda").replaceWith();
  $("#cambio").load("Adm-users-BO.php");
}
function Verarchi() {
  $("#carga").replaceWith();
  $("#rempla").load("Cargar.php");
}
//fin
//modales
function abrirModal() {
  $("#myModal").modal();
}
function Mostrarsave() {
  $("#abrirsave").modal("show");
}
function abrirBorrar() {
  $("#abrirBorrar").modal("show");
}
function abrirlisto() {
  $("#abrirListo").modal("show");
}
//fin
function AbrirNav() {
  $("#navall").load("#Admin-BO.php");
}
function verhisto() {
  $(".descri-overlay").show();
}

$(document).ready(function () {
  //resaltar boton de localidad-actual
  $(".buttonall").click(function () {
    $("button[id=btn-nav]").removeClass("btn-nav-select");
    $(this).addClass("btn-nav");
    $("button[id=btn-nav]").removeClass("btn-nav");
    $(this).addClass("btn-nav-select");
  });
  $(".btn-rol-all").click(function () {
    $("button[id=btn-rol]").removeClass("btn-rol-select");
    $(this).addClass("btn-rol");
    $("button[id=btn-rol]").removeClass("btn-rol");
    $(this).addClass("btn-rol-select");
  });

  //fin
  //descripción de acciones

  //seleccion de día,mes,año,bandera
  $(".option").click(function () {
    var value = $(this).attr("value");
    var select = $(this).attr("id-select");
    var img = $(this).attr("img");
    $("#" + select + " > p")
      .val(img)
      .text(value);
  });

  $(".Dias").click(function () {
    var value = $(this).attr("value");
    var select = $(this).attr("id-select");

    $("#" + select + " > p").text(value);
  });
  $(".Meses").click(function () {
    var value = $(this).attr("value");
    var select = $(this).attr("id-select");

    $("#" + select + " > p").text(value);
  });
  $(".Años").click(function () {
    var value = $(this).attr("value");
    var select = $(this).attr("id-select");

    $("#" + select + " > p").text(value);
  });
  //fin
  //switch entre h-m
  $("#mujer").click(function () {
    if ($('input[id="mujer"]').is(":checked")) {
      $("#women").attr(
        "src",
        "../images/datos-adicionales/femenino-activo.svg"
      );
      $("#men").attr(
        "src",
        "../images/datos-adicionales/masculino-inactivo.svg"
      );
    }
  });

  $("#hombre").click(function () {
    if ($('input[id="hombre"]').is(":checked")) {
      $("#women").attr(
        "src",
        "../images/datos-adicionales/femenino-inactivo.svg"
      );
      $("#men").attr("src", "../images/datos-adicionales/masculino-activo.svg");
    }
  });
  //fin

  //slider, c/flecha
  $(".slider li").hide();
  $(".slider li:first").show();
  //para agregar una nueva fila
  $("#agregar").click(function () {
    agregar();
  });
});

function agregar() {
  var fila =
    ' <div class="contenedor-fila"><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div><div class="contenedor-columna"></div></div> ';
  $("#tb1").append(fila);
}
