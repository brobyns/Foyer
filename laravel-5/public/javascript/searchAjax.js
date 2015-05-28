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

$('.filter').change(function(){
    if($('#filterinput').val() != ''){
        ajaxSearch();
    }else{
        var sex = $('input[name=sex]:checked').map(function(){
            return this.value;
        }).get();
        $.ajax({
            url: "users/filter",
            type: "POST",
            data: {'sex':sex,'_token': $('input[name=_token]').val()},
            success: function(response){
                $('#table').html(response);
                $("#myTable").tablesorter({
                    dateFormat : "uk" // default date format
                });
            }
        });
    }
});

function ajaxSearch(){
    var sex = $('input[name=sex]:checked').map(function(){
        return this.value;
    }).get();
    $.ajax({
        url: "users/filter",
        type: "POST",
        data: {'filteropt':$('#filteropt').val(),'queryString':$('#filterinput').val(),'sex':sex,'_token': $('input[name=_token]').val()},
        success: function(response){
            $('#table').html(response);
            $("#myTable").tablesorter({
                dateFormat : "uk" // default date format
            });
        }
    });
}