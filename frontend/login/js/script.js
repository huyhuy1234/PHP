$('form').submit(function(event){

    $('label.error').remove();
    var isError = false;

    const username = $('#username').val();
    if(!username){
      isError = true;
      $('#username').after('<label class="error">Vui lòng nhập username</label>');
    }

    const password = $('#password').val();
    if(!password){
      isError = true;
      $('#password').after('<label class="error">Vui lòng nhập mật khẩu</label>');
    }
    if(isError){
      return false;
    }


    return true;
});