import {
  registerUser,
  getUser,
  getUserToUpdate,
  deleteUserBO,
  getAllUsersBO,
  getUserFront,
  deleteUserFront,
  getUserFrontToUpdate,
  getAllUserFront,
} from "../services/user.js";

/*
We use this method when you click on close icon in some view of 
Admin User BO
*/
function closeViewAdminBO() {
  $(".closeViewBO").click(function () {
    showPageUsersBO();
  });
}

function closeViewFront() {
  $(".closeViewFront").click(function () {
    showPageUsersFront();
  });
}

function cambiaracti(roles) {
  switch (roles) {
    case "1":
      $("#User-Raiz").attr("hidden", false);
      $("#User-Edit").attr("hidden", true);
      $("#User-Apro").attr("hidden", true);
      $("#User-Visua").attr("hidden", true);
      break;

    case "2":
      $("#User-Raiz").attr("hidden", true);
      $("#User-Edit").attr("hidden", false);
      $("#User-Apro").attr("hidden", true);
      $("#User-Visua").attr("hidden", true);
      break;

    case "3":
      $("#User-Raiz").attr("hidden", true);
      $("#User-Edit").attr("hidden", true);
      $("#User-Apro").attr("hidden", false);
      $("#User-Visua").attr("hidden", true);
      break;
    case "4":
      $("#User-Raiz").attr("hidden", true);
      $("#User-Edit").attr("hidden", true);
      $("#User-Apro").attr("hidden", true);
      $("#User-Visua").attr("hidden", false);
      break;
  }
}

function changeImagesRolPermissions() {
  $(".button-rol").click(function () {
    let idButton = $(this).attr("id_button");
    console.log(idButton);
    cambiaracti(idButton);
  });
}

/*function showFormEditUserBO() {
  $(".edit-user-icon").click(function () {
    $("#editar").replaceWith();
    $("#cambio").load("Editusers.php", function () {
      alert("iojpojpoj");
      changeActiveRolGreenButton();
      closeViewAdminBO();
      changeImagesRolPermissions();
    });
  });
}*/

function changeActiveRolGreenButton() {
  let buttonsRol = $(".btn-rol-edit");
  $(".btn-rol-all-edit").click(function () {
    buttonsRol.removeClass("btn-rol-select-edit");
    $(this).addClass("btn-rol-edit");
    buttonsRol.removeClass("btn-rol-edit");
    $(this).addClass("btn-rol-select-edit");
  });
}

function createClickButtonRegisterUser() {
  $(".register-user-button").click(function () {
    let rol = $(".btn-rol-select").attr("id_rol");
    let email = $("#email-user-bo").val();
    let username = $("#name-user-bo").val();
    let password = $("#password-user-bo").val();

    registerUser(username, email, password, rol);
  });
}

function showUserBO() {
  $(".view-user-icon").click(function () {
    let id = $(this).parent().attr("_id");
    getUser(id);
  });
}

function showUserToUpdate() {
  $(".edit-user-icon").click(function () {
    let id = $(this).parent().attr("_id");
    getUserToUpdate(id);
  });
}

function showUserFrontToUpdate() {
  $(".edit-user-front").click(function () {
    let id = $(this).parent().attr("_id");
    getUserFrontToUpdate(id);
  });
}

function deleteUserUI(id) {
  $(".modal-delete-button-confirm").click(function () {
    deleteUserBO(id);
  });
}

function deleteUserFrontUI(id) {
  $(".modal-delete-front-confirm").click(function () {
    deleteUserFront(id);
  });
}

function showModalDeleteUserBO() {
  $(".delete-userbo-icon").click(function () {
    let id = $(this).parent().attr("_id");
    $(".modal-delete-user").modal("show");
    deleteUserUI(id);
  });
}

function showModalDeleteUserFront() {
  $(".delete-user-front-icon").click(function () {
    let id = $(this).parent().attr("_id");
    $(".modal-delete-user-front").modal("show");
    deleteUserFrontUI(id);
  });
}

function showDescriptions() {
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
}

function showPageUsersBO() {
  $("#segunda").replaceWith();
  $("#cambio").load("Adm-users-BO.php", function () {
    showUserBO();
    showFormCreateUser();
    showUserToUpdate();
    showDescriptions();
    getAllUsersBO();
  });
}

function showFormCreateUser() {
  $("#btnAlta").click(function () {
    $("#general").replaceWith();
    $("#cambio").load("Alta.php", function () {
      createClickButtonRegisterUser();
      changeActiveBlackButton();
      changeImagesRolPermissions();
      closeViewAdminBO();
    });
  });
}

function changeActiveBlackButton() {
  let buttonsRolRegister = $(".bt-rol-register");
  $(".btn-rol-all").click(function () {
    buttonsRolRegister.removeClass("btn-rol-select");
    $(this).addClass("btn-rol");
    buttonsRolRegister.removeClass("btn-rol");
    $(this).addClass("btn-rol-select");
  });
}

function changeNameRol(id) {
  let rol = "";
  switch (id) {
    case 1:
      rol = "Administrador";
      break;
    case 2:
      rol = "Aprobador";
      break;
    case 3:
      rol = "Editor";
      break;
    case 4:
      rol = "Visualizador";
      break;

    default:
      break;
  }
  return rol;
}

function changeAdminContent(rel) {
  switch (rel) {
    case "Admin-home-BO":
      $("#Admin-home-BO").replaceWith();
      $("#cambio").load("admin-home.php");
      break;

    default:
      break;
  }
}

function showUserFront() {
  $(".show-user-front-icon").click(function () {
    let id = $(this).parent().attr("_id");
    getUserFront(id);
  });
}

function showPageUsersFront() {
  $("#Admin-users-Front").replaceWith();
  $("#cambio").load("Admin-users-front.php", function () {
    showUserFront();
    showModalDeleteUserFront();
    showUserFrontToUpdate();
    getAllUserFront();
  });
}

function getNameCountry(id) {
  let countryName = "";
  let countryImage = "";
  switch (id) {
    case 1:
      countryName = "EUA";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/usa.svg";
      break;
    case 2:
      countryName = "Argentina";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/argentina.svg";
      break;
    case 3:
      countryName = "Brasil";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/brazil.svg";
      break;
    case 4:
      countryName = "Chile";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/chile.svg";
      break;
    case 5:
      countryName = "Colombia";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/colombia.svg";
      break;
    case 6:
      countryName = "Costa Rica";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/costa-rica.svg";
      break;
    case 7:
      countryName = "Ecuador";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/ecuador.svg";
      break;
    case 8:
      countryName = "El Salvador";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/el-salvador.svg";
      break;
    case 9:
      countryName = "Guatemala";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/guatemala.svg";
      break;
    case 10:
      countryName = "Honduras";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/honduras.svg";
      break;
    case 11:
      countryName = "Nicaragua";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/nicaragua.svg";
      break;

    case 12:
      countryName = "Panamá";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/panama.svg";
      break;

    case 13:
      countryName = "Paraguay";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/paraguay.svg";
      break;
    case 14:
      countryName = "Perú";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/peru.svg";
      break;
    case 15:
      countryName = "Puerto Rico";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/puerto-rico.svg";
      break;
    case 16:
      countryName = "República Dominicana";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/dominican-republic.svg";
      break;
    case 17:
      countryName = "Paraguay";
      countryImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/paises/paraguay.svg";
      break;
    default:
      countryName = "";
      countryImage = "";
      break;
  }

  let country = {
    countryName: countryName,
    countryImage: countryImage,
  };

  return country;
}

function getNameGender(g) {
  let genderName = "";
  let genderImage = "";

  switch (g) {
    case "M":
      genderName = "Masculino";
      genderImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/datos-adicionales/masculino-activo.svg";
      break;
    case "F":
      genderName = "Fémenino";
      genderImage =
        "http://www.claronetworks.openofficedospuntocero.info/images/datos-adicionales/femenino-activo.svg";
      break;
    default:
      genderName = "";
      genderImage = "";
      break;
  }

  let gender = {
    genderName: genderName,
    genderImage: genderImage,
  };

  return gender;
}

export {
  showPageUsersBO,
  showUserBO,
  showUserFront,
  showFormCreateUser,
  closeViewAdminBO,
  changeNameRol,
  changeActiveRolGreenButton,
  changeImagesRolPermissions,
  cambiaracti,
  deleteUserUI,
  showUserToUpdate,
  showModalDeleteUserBO,
  showPageUsersFront,
  closeViewFront,
  getNameCountry,
  getNameGender,
  showModalDeleteUserFront,
  showUserFrontToUpdate,
};
