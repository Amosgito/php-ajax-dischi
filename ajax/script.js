// var template = $('#template').html();
// var compiled = Handlebars.compile(template);
// var target = $('#append-disks');
// target.html("");

function getData() {

    
    $.ajax({
    
        url: 'db.php',
        method: "GET",

        success: function (data) {
            
            var dbdata = data['response'];
            printData(dbdata);
    
        },
        error: function (err) {
    
            console.log('err', err)
        }
    });
}

function printData(dbdata) {

    var source = $("#template").html();
    var compiled = Handlebars.compile(source);
    var target = $('#append-disks');

    target.html(' ');

    for (var i = 0; i < dbdata.length; i++) {

        var cd = dbdata[i];
        var htmlCd = compiled(cd);
        target.append(htmlCd);
    }

}



function init() {

    getData()
}

$(document).ready(init);