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
    var years = $('input[name=year]:checked').map(function(){
        return this.value;
    }).get();
    var distances = $('input[name=distance]:checked').map(function(){
        return this.value;
    }).get();
    var pieces = window.location.pathname.split('/');
    var path = pieces[pieces.length-1] + '/filter';
    $.ajax({
        url: path,
        type: "POST",
        data: {'filteropt':$('#filteropt').val(),'queryString':$('#filterinput').val(),'years':years,'distances':distances,'_token': $('input[name=_token]').val()},
        success: function(response){
            $('#table').html(response);
            $("#myTable").tablesorter({
                dateFormat : "uk" // default date format
            });
        }
    });
}