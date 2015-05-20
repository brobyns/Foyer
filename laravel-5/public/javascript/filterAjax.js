/**
 * Created by Bram on 20/05/2015.
 */
$('.filter').change(function(){
    var years = $('input[name=year]:checked').map(function(){
        return this.value;
    }).get();
    var distances = $('input[name=distance]:checked').map(function(){
        return this.value;
    }).get();
    $.ajax({
        url: 'participations/filter',
        type: "POST",
        data: {'years':years,'distances':distances,'_token': $('input[name=_token]').val()},
        success: function(response){
            $('#table').html(response);
            $("#myTable").tablesorter({
                dateFormat : "uk" // default date format
            });
        }
    });
});