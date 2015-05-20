$('#timeform').submit(function(event){
    event.preventDefault();
    $.ajax({
        url: 'participations/time',
        type: "POST",
        data: {'userid':$('#userid').val(),'_token': $('input[name=_token]').val()},
        success: function(response){
            $('#message').html(response);
        }
    });
    $('#userid').val('');
});