import { registerUser, getUser } from "../services/user.js";

/*
We use this method when you click on close icon in some view of 
Admin User BO
*/
function closeViewAdminBO() {
  $(".closeViewBO").click(function () {
    showPageUsersBO();
  });
}

function showFormEditUserBO() {
  $(".edit-user-icon").click(function () {
    $("#editar").replaceWith();
    $("#cambio").load("Editusers.php", function () {
      closeViewAdminBO();
    });
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

function showPageUsersBO() {
  $("#segunda").replaceWith();
  $("#cambio").load("Adm-users-BO.php", function () {
    showUserBO();
    showFormCreateUser();
    showFormEditUserBO();
  });
}

function showFormCreateUser() {
  $("#btnAlta").click(function () {
    $("#general").replaceWith();
    $("#cambio").load("Alta.php", function () {
      createClickButtonRegisterUser();
    });
  });
}

export { showPageUsersBO, showUserBO, showFormCreateUser, closeViewAdminBO };
