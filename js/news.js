$(function(){
  $('#news').on('submit', function(e){
    e.preventDefault();

    data = {
      mail : $("input[name='mail']").val(),
    }

    console.log(data);

    $.ajax({
      method : "POST",
      url    : "php/news.php",
      data   : data,
      success : function(res){
        if(res == true){
          $('.newsMsg').html('Inscription réussie !');
        }else{
          $('.newsMsg').html('Inscription ratée');
        }
      }
    })
  })
})
