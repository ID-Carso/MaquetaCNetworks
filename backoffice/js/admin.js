
 function cambiaracti($roles){
   switch($roles){
     case 1:
      $("#User-Raiz").attr("hidden",false);
      $("#User-Edit").attr("hidden",true);
      $("#User-Apro").attr("hidden",true);
      $("#User-Visua").attr("hidden",true);
      
       break;
       case 2:
        $("#User-Raiz").attr("hidden",true);
        $("#User-Edit").attr("hidden",false);
        $("#User-Apro").attr("hidden",true);
        $("#User-Visua").attr("hidden",true);
       break;
       case 3:
        $("#User-Raiz").attr("hidden",true);
        $("#User-Edit").attr("hidden",true);
        $("#User-Apro").attr("hidden",false);
        $("#User-Visua").attr("hidden",true);
       break;
       case 4:
        $("#User-Raiz").attr("hidden",true);
        $("#User-Edit").attr("hidden",true);
        $("#User-Apro").attr("hidden",true);
        $("#User-Visua").attr("hidden",false);
       break;

   }
 }
function muestra1(){
  $("#Admin-home-BO").replaceWith();
      $("#cambio").load('admin-home.php');
}
function muestra2(){
  $("#segunda").replaceWith();
      $("#cambio").load('Adm-users-BO.php');
}
function muestra3(){
  $("#Admin-users-Front").replaceWith();
      $("#cambio").load('Admin-users-front.php');
}
function muestraAlta(){
  $("#general").replaceWith();
      $("#cambio").load('Alta.php');
}
function verusuarios(){
  $("#usuarios").replaceWith();
      $("#cambio").load('VisualUser.php');
}
function editarusuarios(){
  $("#editar").replaceWith();
      $("#cambio").load('Editusers.php');
}
function verfront(){
  $("#visual-front").replaceWith();
      $("#cambio").load('Visual-front.php');
}
function editfront(){
  $("#edit-front").replaceWith();
      $("#cambio").load('Edit-front.php');
}
function abrirModal(){
  $("#myModal").modal('show');
}
function abrirBorrar(){
  $("#abrirBorrar").modal('show');

}
function AbrirNav(){
  $("#navall").load("#Admin-BO.php");
}
function verhisto(){
  $(".descri-overlay").show();

}
function abrirlisto(){
  $("#abrirlisto").modal('show');

}

$(document).ready(function(){
  
  
  $(".buttonall").click(function(){
    $("button[id=btn-nav]").removeClass("btn-nav-select");
    $(this).addClass("btn-nav");
    $("button[id=btn-nav]").removeClass("btn-nav");
    $(this).addClass("btn-nav-select");
  
});
$(".btn-rol-all").click(function(){
  $("button[id=btn-rol]").removeClass("btn-rol-select");
  $(this).addClass("btn-rol");
  $("button[id=btn-rol]").removeClass("btn-rol");
  $(this).addClass("btn-rol-select");

});  
$(".btn-rol-all-edit").click(function(){
  $("button[id=btn-rol]").removeClass("btn-rol-select-edit");
  $(this).addClass("btn-rol-edit");
  $("button[id=btn-rol]").removeClass("btn-rol-edit");
  $(this).addClass("btn-rol-select-edit");

});  

$(".histo").hover(function(){ 
  $('.histori').css('display', 'block'); 
},function(){
  $(".histori").css('display', 'none');
  })
      $(".editar").hover(function(){ 
        $('.edit').css('display', 'block'); 
      },function(){
        $(".edit").css('display', 'none');
  })
  $(".notify").hover(function(){ 
    $('.noti').css('display', 'block'); 
  },function(){
    $(".noti").css('display', 'none');
  })
  $(".ver").hover(function(){ 
    $('.veri').css('display', 'block'); 
  },function(){
    $(".veri").css('display', 'none');
    })
        $(".edi").hover(function(){ 
          $('.edita').css('display', 'block'); 
        },function(){
          $(".edita").css('display', 'none');
    })
    $(".borrar").hover(function(){ 
      $('.borra').css('display', 'block'); 
    },function(){
      $(".borra").css('display', 'none');
    })
     

}); 
   


