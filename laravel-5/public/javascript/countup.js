/**
 * Created by Bram on 20/05/2015.
 */
function countup(element,start) {
    // Fetch the display element
    var el = document.getElementById(element);
    // Set the timer
    var interval = setInterval(function() {
        var d2 = new Date();
        var d1 = new Date(start);
        var delta = Math.round((d2-d1)/1000);
        var hours = Math.floor(delta / 3600) % 24;
        delta -= hours * 3600;

        // calculate (and subtract) whole minutes
        var minutes = Math.floor(delta / 60) % 60;
        delta -= minutes * 60;

        // what's left is seconds
        var seconds = delta % 60;
        el.innerHTML = hours + 'h ' + minutes + 'm ' + seconds + 's';

    }, 1000);
}

var rows = $("#tbody").children().length;
for(var i=0; i<rows; i++){
    countup('timeDiff'+i, document.getElementById('startTime'+i).innerHTML);
}