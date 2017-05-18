$(function(){
  $('#news').on('submit', function(e){
    e.preventDefault();

    data = {
      mail : $("input[name='mail']").val(),
    }

    $.ajax({
      method : "POST",
      url    : "php/news.php",
      data   : data,
      success : function(res){
        if(res == 1){
          $('.newsMsg').html('');
          $('.newsMsg').html('Inscription réussie !');
        }else if(res == 2){
          $('.newsMsg').html('');
          $('.newsMsg').html('Inscription ratée, réessayez');
        }else if(res == 3){
          $('.newsMsg').html('');
          $('.newsMsg').html('Vous êtes déjà inscrit');
        }else{
          $('.newsMsg').html('');
          $('.newsMsg').html('Veuillez renseigner votre adresse email');
        }
      }
    })
  })
})
