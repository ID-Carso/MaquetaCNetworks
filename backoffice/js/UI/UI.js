import { registerUser, getUser, getUserToUpdate } from "../services/user.js";

/*
We use this method when you click on close icon in some view of 
Admin User BO
*/
function closeViewAdminBO() {
  $(".closeViewBO").click(function () {
    showPageUsersBO();
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
    console.log("pojpoj");
    let rol = $(".btn-rol-select").attr("id_rol");
    let email = $("#email-user-bo").val();
    let username = $("#name-user-bo").val();
    let password = $("#password-user-bo").val();
    console.log(rol, email, username, password);
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

export {
  showPageUsersBO,
  showUserBO,
  showFormCreateUser,
  closeViewAdminBO,
  changeNameRol,
  changeActiveRolGreenButton,
  changeImagesRolPermissions,
  cambiaracti,
};
