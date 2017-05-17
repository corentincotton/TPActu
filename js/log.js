$(function(){

  // When sign up form is submit
  $('#signUpForm').on('submit', function(e){
    e.preventDefault();

    data = {
      lastname  : $("input[name='lastname']").val(),
      firstname : $("input[name='firstname']").val(),
      pseudo    : $("input[name='pseudoUp']").val(),
      password  : $("input[name='passwordUp']").val(),
    }

    console.log(data);

    $.ajax({
      method  : "POST",
      url     : "php/signUp.php",
      data    : data,
      success : function(res){
        if(res == 1){
          $('.signUpMsg').html('Inscription réussie !');
        }else if(res == 2){
          $('.signUpMsg').html('Inscription ratée, réessayez');
        }else{
          $('.signUpMsg').html('Tout les champs doivent être rempli');
        }
      }
    })
  })

  // When sign in form is submit
  $('#signInForm').on('submit', function(e){
    e.preventDefault();

    data = {
      pseudo   : $("input[name='pseudoIn']").val(),
      password : $("input[name='passwordIn']").val(),
    }

    console.log(data);

    $.ajax({
      method  : "POST",
      url     : "php/signIn.php",
      data    : data,
      success : function(res){
        if(res == 1){
          $('.signInMsg').html('Connexion réussie');
          window.location.href = "actu.php";
        }else if(res == 2){
          $('.signInMsg').html('Connexion échouée, réessayez');
        }else if(res == 3){
          $('.signInMsg').html('Mauvaise informations');
        }else{
          $('.signInMsg').html('Tout les champs doivent être rempli');
        }
      }
    })
  })
})
