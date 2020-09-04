var template = $('#template').html();
var compiled = Handlebars.compile(template);
var target = $('#append-disks');
target.html("");

$.ajax({

    url: 'index.php',
    method: "GET",
    data : 'response',
    success: function (data) {

        var result = data['poster']

        console.log(result)

    },
    error: function (err) {

        console.log('err', err)
    }
});