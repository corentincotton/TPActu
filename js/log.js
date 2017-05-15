$(function(){
  $('#signUpForm').on('submit', function(e){
    e.preventDefault();

    data = {
      lastname : $("input[name='lastname']").val(),
      firstname : $("input[name='firstname']").val(),
      pseudo : $("input[name='pseudoUp']").val(),
      password : $("input[name='passwordUp']").val(),
    }

    console.log(data);

    $.ajax({
      method : "POST",
      url : "php/signUp.php",
      data : data,
      success : function(res){
        if(res == true){
          $('.signUpMsg').html('Inscription réussie !');
        }else{
          $('.signUpMsg').html('Inscription ratée');
        }
      }
    })
  })
})
