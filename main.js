$(document).ready(function(){

  // Registration Ajax
    $('#loginPanel form').submit(function(e){
        $('#regFormError').remove();
        $('.redRegBorader').removeClass('redRegBorader');
        e.preventDefault();
        $.post(
            $(this).attr('action'),
            $(this).serialize(),
            function( data ) {
                var returnDate =  $.parseJSON( data );
                $.each( returnDate, function( index, value ) {
                    if( index == 'error' ) {
                        $('#loginPanel').prepend('<div id="regFormError"></div>');
                        $.each( value, function( indexChild, valueChild ) {
                            $('#regFormError').append('<p style="color: red;">' + returnDate[index][indexChild]['return_message'] + '</p>');
                            $('.regFormInput input[name=' + returnDate[index][indexChild]['hightlight_elm'] + ']').addClass('redRegBorader');
                            if( returnDate[index][indexChild]['code'] == 'passwords_do_not_match' ) {
                                $('.regFormInput input[name=password]').addClass('redRegBorader');
                            }
                        });
                    } else {
                        window.location.href = returnDate[index]['redirect'];
                    }
                });
            }
        );
    });
  
});
