jquery(document).ready(function($){
    $("button").click(function(){
      $.ajax({url: "delete.php", success: function(result){
        $("#delete").html(result);
      }});
    });
  });