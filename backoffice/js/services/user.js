import {
  closeViewAdminBO,
  changeNameRol,
  changeActiveRolGreenButton,
  changeImagesRolPermissions,
  cambiaracti,
  showUserBO,
  showUserToUpdate,
  deleteUserUI,
  showModalDeleteUserBO,
} from "../UI/UI.js";
function validateTokenPassword(tokenPassword) {
  $.ajax({
    type: "GET",
    data: tokenPassword,
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_verify",
    success: function (result) {
      console.log("succes", result);
      if (result.data) {
        let user_id = $("#user_id");
        let session = localStorage.setItem("session", 1);
        let id = localStorage.setItem("id", result.data.id);
        let name = localStorage.setItem("name", result.data.name);
        user_id.attr("value", result.data.user_id);
        location.href =
          "http://www.claronetworks.openofficedospuntocero.info/form-password.php";
      }
    },
  });
}

function sendUserEmail(inputEmail) {
  let email = inputEmail.val();

  let emailUser = {
    email: email,
  };

  $.ajax({
    type: "POST",
    data: emailUser,
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_send",
    success: function (result) {
      console.log("succes", result);
      if (result.data) {
        location.href =
          "http://www.claronetworks.openofficedospuntocero.info/email-sent.php";
      }
    },
  });
}

function sendNewPassword(inputPassword, secondInputPassword) {
  let newPassowrd = inputPassword.val();
  let confirmedNewPassowrd = secondInputPassword.val();
  let user_id = $("#user_id").val();
  let url = location.href;
  let arrayUrl = url.split("?");
  let token = arrayUrl[1];

  let info_user = {
    token: token,
    password: newPassowrd,
    confirm: confirmedNewPassowrd,
  };

  $.ajax({
    type: "POST",
    data: info_user,
    url:
      "http://www.claronetworks.openofficedospuntocero.info/Claro_Networks_API/public/user/reset_password",
    success: function (result) {
      console.log("succes", result);
      if (result.code == 200) {
        console.log("succes", result);
        location.href =
          "http://www.claronetworks.openofficedospuntocero.info/success-password.php";
      }
    },
  });
}

function signIn(email, password) {
  let dataUser = {
    function: "signIn",
    email: email,
    password: password,
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "./adapters/user.php",
    success: function (result) {
      console.log(result);
      let json = JSON.parse(result);
      if (json.code == 200) {
        location.href = "Admin-BO.php";
      } else {
        $(".data-incorrect")
          .text(
            "Tu correo o contraseña no coinciden. Por favor, verifica de nuevo"
          )
          .addClass("invalid-email");
      }
    },
  });
}

function signOut() {
  let dataUser = {
    function: "signOut",
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "./adapters/user.php",
    success: function (result) {
      console.log(result);
      if (result == 200) {
        location.href = "login.php";
      }
    },
  });
}

function registerUser(name, email, password, rol) {
  let user = {
    function: "registerUser",
    name: name,
    email: email,
    password: password,
    rol: rol,
  };

  $.ajax({
    type: "POST",
    data: user,
    url: "./adapters/user.php",
    success: function (result) {
      console.log(result);
      let json = JSON.parse(result);
      if (json.code == 200) {
        $(".modal-register-username").text(json.data.name);
        let modalPrivileges = "";
        switch (json.data.rol_id) {
          case "1":
            //ROOT
            modalPrivileges = `
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
              <div class="d-flex align-items-center col-6">
                <img src="./images/ojo-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Visualizar cambios</span>
              </div>
              <div class="d-flex align-items-center col-6">
                <img src="./images/edit-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Editar</span>
              </div>
            </div>
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
              <div class="d-flex align-items-center col-6">
                <img src="./images/recha-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Recahzar cambios</span>
              </div>
              <div class="d-flex align-items-center col-6">
                <img src="./images/admi-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Administrar usuario</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between pb-3 no-gutters">
              <div class="d-flex align-items-center col-6">
                <img src="./images/apro-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Aprobar cambios</span>
              </div>
              <div class="d-flex align-items-center col-6">
                <img src="./images/coment-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Hacer comentarios</span>
              </div>
            </div>
            `;
            break;
          case "2":
            //APROBADOR
            modalPrivileges = `
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/ojo-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Visualizar cambios</span>
            </div>
            <div class="d-flex align-items-center col-6">
              <img src="./images/edit-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Editar</span>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between pb-3 no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/apro-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Aprobar cambios</span>
            </div>
            <div class="d-flex align-items-center col-6">
              <img src="./images/coment-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Hacer comentarios</span>
            </div>
          </div>
          <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/recha-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Recahzar cambios</span>
            </div>
          </div>
              `;
            break;
          case "3":
            //EDITOR
            modalPrivileges = `
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/ojo-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Visualizar cambios</span>
            </div>
            <div class="d-flex align-items-center col-6">
              <img src="./images/edit-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Editar</span>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between pb-3 no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/coment-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Hacer comentarios</span>
            </div>
          </div>
              `;
            break;
          case "4":
            //VISUALIZADOR
            modalPrivileges = `
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
              <div class="d-flex align-items-center col-6">
                <img src="./images/ojo-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Visualizar cambios</span>
              </div>
            </div>
              `;
            break;
          default:
            break;
        }
        $(".modal-privileges-container").html(modalPrivileges);
        $(".modal-newuser-bo").modal("show");
      }
    },
  });
}

/* GET ALL USERS BACKOFFICE */
function getAllUsersBO() {
  let dataUser = {
    function: "getAllUsersBO",
  };

  $.ajax({
    type: "POST",
    data: dataUser,
    url: "./adapters/user.php",
    success: function (result) {
      let json = JSON.parse(result);
      if (json.code == 200) {
        let userBO = "";
        localStorage.setItem("usersBO", JSON.stringify(json.data));
        let users = JSON.parse(localStorage.getItem("usersBO"));

        users.forEach((user) => {
          let rol = changeNameRol(user.rol_id);

          userBO += `
          <div class="pd-5">${user.name}</div>
          <div class="pd-10">${rol}</div>
          <div class='justify-content-center' _id="${user.id}">
            <!--Acciones-->
            <input type='image' src='./images/ver-acti.svg' class='ml-3 btn-focus view-user-icon images' id='visual'></input>
            <input type='image' src='./images/edit-ac.svg' class='ml-3 btn-focus images edit-user-icon'></input>
            <input type='image' src='./images/eliminar-acti.svg' class='ml-3 btn-focus images delete-userbo-icon'></input>
          </div>
          `;
        });
        $(".users-backoffice-table").html(`          
        <header>
        <div class="text-title ">Usuario</div>
        </header>
        <section>
          <div class="text-title ">Rol</div>
        </section>
        <aside>
          <div class="text-title ">Acciones</div>
        </aside>
        ${userBO}
        `);

        showModalDeleteUserBO();
        showUserBO();
        showUserToUpdate();
      }
    },
  });
}

function getUser(id) {
  let data = {
    function: "getUser",
    id: id,
  };

  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/user.php",
    success: function (result) {
      let json = JSON.parse(result);
      console.log(json);
      if (json.code == 200) {
        $("#cambio").load("VisualUser.php", function () {
          $(".show-username").text(json.data.name);
          $(".show-email").text(json.data.email);
          let rol = changeNameRol(json.data.rol.id);
          $(".show-rol").text(rol);
          closeViewAdminBO();
        });
      }
    },
  });
}
function getAllUserFront() {
  let data = {
    function: "getAllUsersFront",
  };

  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/user.php",
    success: function (result) {},
  });
}

function updateDataUser(id, name, email, password, repassword, rolId) {
  let dataUser = {
    function: "updateDataUser",
    id_admin_user: id,
    name: name,
    email: email,
    password: password,
    password_confirm: repassword,
    rol_id: rolId,
  };
  $.ajax({
    type: "POST",
    data: dataUser,
    url: "./adapters/user.php",
    success: function (result) {
      let json = JSON.parse(result);
      if (json.code == 200) {
        $(".modal-edit-username").text(json.data.name);
        let modalPrivileges = "";
        console.log(typeof json.data.rol_id);
        switch (json.data.rol_id) {
          case 1:
            //ROOT
            modalPrivileges = `
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
              <div class="d-flex align-items-center col-6">
                <img src="./images/ojo-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Visualizar cambios</span>
              </div>
              <div class="d-flex align-items-center col-6">
                <img src="./images/edit-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Editar</span>
              </div>
            </div>
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
              <div class="d-flex align-items-center col-6">
                <img src="./images/recha-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Recahzar cambios</span>
              </div>
              <div class="d-flex align-items-center col-6">
                <img src="./images/admi-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Administrar usuario</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between pb-3 no-gutters">
              <div class="d-flex align-items-center col-6">
                <img src="./images/apro-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Aprobar cambios</span>
              </div>
              <div class="d-flex align-items-center col-6">
                <img src="./images/coment-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Hacer comentarios</span>
              </div>
            </div>
            `;
            break;
          case 2:
            //APROBADOR
            modalPrivileges = `
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/ojo-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Visualizar cambios</span>
            </div>
            <div class="d-flex align-items-center col-6">
              <img src="./images/edit-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Editar</span>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between pb-3 no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/apro-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Aprobar cambios</span>
            </div>
            <div class="d-flex align-items-center col-6">
              <img src="./images/coment-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Hacer comentarios</span>
            </div>
          </div>
          <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/recha-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Recahzar cambios</span>
            </div>
          </div>
              `;
            break;
          case 3:
            //EDITOR
            modalPrivileges = `
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/ojo-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Visualizar cambios</span>
            </div>
            <div class="d-flex align-items-center col-6">
              <img src="./images/edit-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Editar</span>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between pb-3 no-gutters">
            <div class="d-flex align-items-center col-6">
              <img src="./images/coment-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Hacer comentarios</span>
            </div>
          </div>
              `;
            break;
          case 4:
            //VISUALIZADOR
            modalPrivileges = `
            <div class="d-flex align-items-center pb-3 justify-content-between no-gutters">
              <div class="d-flex align-items-center col-6">
                <img src="./images/ojo-naranja.svg" alt="" class="modal-privilege-icon pl-3 mr-3"><span class="modal-register-text">Visualizar cambios</span>
              </div>
            </div>
              `;
            break;
          default:
            break;
        }
        $(".modal-edit-privileges-container").html(modalPrivileges);
        $(".modal-edit-user").modal("show");
      }
    },
  });
}

function getUserToUpdate(id) {
  console.log(id);
  let data = {
    function: "getUserToUpdate",
    id: id,
  };
  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/user.php",
    success: function (result) {
      console.log(result);
      let json = JSON.parse(result);
      if (json.code == 200) {
        $("#editar").replaceWith();
        $("#cambio").load("Editusers.php", function () {
          $("#edit-input-username").val(json.data.name);
          $("#edit-input-email").val(json.data.email);
          switch (json.data.rol.id) {
            case 1:
              $("#button-root").addClass("btn-rol-select-edit");
              cambiaracti("1");
              break;
            case 2:
              $("#button-aprobador").addClass("btn-rol-select-edit");
              cambiaracti("3");
              break;
            case 3:
              $("#button-editor").addClass("btn-rol-select-edit");
              cambiaracti("2");
              break;
            case 4:
              $("#button-visualizador").addClass("btn-rol-select-edit");
              cambiaracti("4");
              break;
            default:
              break;
          }

          /* GET THE VALUES OF THE FORM TO UPDATE A BACKOFFICE USER */
          $(".save-button-edit").click(function () {
            let name = $("#edit-input-username").val();
            let email = $("#edit-input-email").val();
            let password = $("#edit-input-password").val();
            let repassword = $("#edit-input-repassword").val();
            let rolId = $(".btn-rol-select-edit").attr("id_rol");
            updateDataUser(
              json.data.id,
              name,
              email,
              password,
              repassword,
              rolId
            );
          });

          changeActiveRolGreenButton();
          closeViewAdminBO();
          changeImagesRolPermissions();
        });
      }
    },
  });
}

function deleteUserBO(id) {
  let data = {
    function: "deleteUserBO",
    id_admin_user: id,
  };

  $.ajax({
    type: "POST",
    data: data,
    url: "./adapters/user.php",
    success: function (result) {
      let json = JSON.parse(result);
      if (json.code == 200) {
        localStorage.setItem("usersBO", JSON.stringify(json.data));
        let users = JSON.parse(localStorage.getItem("usersBO"));
        let userBO = "";
        console.log(users);
        users.forEach((user) => {
          let rol = changeNameRol(user.rol_id);

          userBO += `
          <div class="pd-5">${user.name}</div>
          <div class="pd-10">${rol}</div>
          <div class='justify-content-center' _id="${user.id}">
            <!--Acciones-->
            <input type='image' src='./images/ver-acti.svg' class='ml-3 btn-focus view-user-icon images' id='visual'></input>
            <input type='image' src='./images/edit-ac.svg' class='ml-3 btn-focus images edit-user-icon'></input>
            <input type='image' src='./images/eliminar-acti.svg' class='ml-3 btn-focus images delete-userbo-icon'></input>
          </div>
          `;
        });
        $(".users-backoffice-table").html(`          
        <header>
        <div class="text-title ">Usuario</div>
        </header>
        <section>
          <div class="text-title ">Rol</div>
        </section>
        <aside>
          <div class="text-title ">Acciones</div>
        </aside>
        ${userBO}
        `);
        $(".modal-delete-user").modal("hide");
        showModalDeleteUserBO();
        showUserBO();
        showUserToUpdate();
      }
    },
  });
}

export {
  sendUserEmail,
  validateTokenPassword,
  sendNewPassword,
  signIn,
  signOut,
  updateDataUser,
  registerUser,
  getAllUsersBO,
  getUser,
  getAllUserFront,
  getUserToUpdate,
  deleteUserBO,
};
