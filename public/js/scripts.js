$(document).ready(function(){
    $('#alert').hide();
});
    let $comment = document.getElementById("textarea1")
let timeout

//El evento lo puedes reemplazar con keyup, keypress y el tiempo a tu necesidad
$comment.addEventListener('keydown', () => {
  clearTimeout(timeout)
  timeout = setTimeout(() => {
    var traducir= String($comment.value);

  
    var url=$('#traducir').attr('action');
    var traducir=$('#textarea1').serialize();
   
    
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $.post("/traduciendo",traducir,function(result){
        document.getElementById ("disabled").value = result.traduccion;
        $('#alert').show();
      //  $('#alert').html('sugerencias :');
    }).fail(function(){
     //   $('#alert').show();
       // $('#alert').html('algo salio mal');
    });

  

    clearTimeout(timeout)
  },1000)
});
