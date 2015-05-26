$('#timeform').submit(function(event){
    event.preventDefault();
    var useridField = $('#userid');
    $.ajax({
        url: 'participations/time',
        type: "POST",
        data: {'userid':useridField.val(),'_token': $('input[name=_token]').val()},
        success: function(response){
            $('#arrivals'+response[0]).html(response[1]);
        }
    });
    useridField.val('');
});