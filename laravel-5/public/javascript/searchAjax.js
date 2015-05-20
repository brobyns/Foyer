/**
 * Created by Bram on 20/05/2015.
 */
$('#searchform').submit(function(event){
    event.preventDefault();
    ajaxSearch();
});

$('#search').click(function(){
    ajaxSearch();
});

function ajaxSearch(){
    $.ajax({
        url: 'users/filter',
        type: "POST",
        data: {'filteropt':$('#filteropt').val(),'queryString':$('#filterinput').val(),'_token': $('input[name=_token]').val()},
        success: function(response){
            $('#table').html(response);
            $("#myTable").tablesorter({
                dateFormat : "uk" // default date format
            });
        }
    });
}