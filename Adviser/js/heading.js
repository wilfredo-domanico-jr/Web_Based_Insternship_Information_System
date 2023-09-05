$(document).ready(function(){
  $(".heading-stream").click(function(){
          $(".card-body-class").show();
          $(".card-body-classroom").hide();
          $(".card-body-document").hide();
          $(".card-body-announcement").hide();
          $(".heading-stream").css("border-bottom", "5px solid var(--header-title-font)");
          $(".heading-document").css("border-bottom", "none");
          $(".heading-class").css("border-bottom", "none");
          $(".heading-announcement").css("border-bottom", "none");
  });
});

 
$(document).ready(function(){
  $(".heading-document").click(function(){
          $(".card-body-class").hide();
          $(".card-body-classroom").hide();
          $(".card-body-document").show();
          $(".card-body-announcement").hide();
          $(".heading-document").css("border-bottom", "5px solid var(--header-title-font)");
          $(".heading-stream").css("border-bottom", "none");
          $(".heading-class").css("border-bottom", "none");
          $(".heading-announcement").css("border-bottom", "none");
  });
});

$(document).ready(function(){
  $(".heading-class").click(function(){
          $(".card-body-class").hide();
          $(".card-body-classroom").show();
          $(".card-body-document").hide();
          $(".card-body-announcement").hide();
          $(".heading-class").css("border-bottom", "5px solid var(--header-title-font)");   
          $(".heading-document").css("border-bottom", "none");
          $(".heading-stream").css("border-bottom", "none");
          $(".heading-announcement").css("border-bottom", "none");

  });
});


$(document).ready(function(){
  $(".heading-announcement").click(function(){
          $(".card-body-class").hide();
          $(".card-body-classroom").hide();
          $(".card-body-document").hide();
          $(".card-body-announcement").show();
          $(".heading-class").css("border-bottom", "none");   
          $(".heading-document").css("border-bottom", "none");
          $(".heading-stream").css("border-bottom", "none");
          $(".heading-announcement").css("border-bottom", "5px solid var(--header-title-font)");  

  });
});

$(document).ready(function(){
  $(".heading-stream-2").click(function(){
          $(".card-body-class").show();
          $(".card-body-classroom").hide();
          $(".card-body-document").hide();
          $(".card-body-announcement").hide();
          $(".heading-class").css("border-bottom", "none");   
          $(".heading-document").css("border-bottom", "none");
          $(".heading-stream").css("border-bottom", "none");
          $(".heading-stream-2").css("border-bottom", "5px solid var(--header-title-font)");
          $(".heading-announcement").css("border-bottom", "none");  

  });
});


$(document).ready(function(){
  $("#show-edit").click(function(){
          $(".profile-card-content").hide();
          $(".edit-card-content").show();
  });
});

$(document).ready(function(){
  $("#cancel-edit").click(function(){
          $(".profile-card-content").show();
          $(".edit-card-content").hide();
  });
});


// $(document).ready(function() {
//   $('#datatablesSimple').DataTable( {
//       dom: 'Bfrtip',
//       buttons: [
//           'copy', 'csv', 'excel', 'pdf', 'print'
//       ]
//   } );
// } );

let table = new DataTable('#datatablesSimple');





// PROGRESS BAR



//   $(document).ready(function(){
//     $("#hide").click(function(){
//       $("p").hide();
//     });
//     $("#show").click(function(){
//       $("p").show();
//     });
//   });



const printBtn = document.getElementById("print");

printBtn.addEventListener('click',function(){

  print();

})