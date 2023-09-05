$(document).ready(function(){
  $(".heading-stream").click(function(){
          $(".card-body-class").show();
          $(".card-body-classroom").hide();
          $(".card-body-document").hide();
          $(".card-body-announcement").hide();
          $(".heading-stream").css("border-bottom", "5px solid #0091eA");
          // $(".this").addClass("add-border-bottom");
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
          $(".heading-document").css("border-bottom", "5px solid #0091eA");
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
          $(".heading-class").css("border-bottom", "5px solid #0091eA");   
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
          $(".heading-announcement").css("border-bottom", "5px solid #0091eA");  

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
          $(".heading-stream-2").css("border-bottom", "5px solid #0091eA");
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

// TABLES
//CHANGE TEXT
$(document).ready(function(){
  $("#view-filter").on('change',function(){
      var data = $(this).children("option:selected").text();
      $('#acess-level').text(data);  
  });

});


//CHANGE TABLE CONTENT


//PRINT

let table = new DataTable('#datatablesSimple');





const printBtn = document.getElementById("print");

printBtn.addEventListener('click',function(){

  print();

})
