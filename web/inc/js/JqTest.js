$(function() {
    var listeNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    var li = "";
    var aff = "";
    $.each(listeNum, function(index, value) {
        if (value % 2) {
            color = 'bleu';
        } else {
            color = 'rouge';
        }
        li += '<li class=' + color + '>' + value + '</li>';
    })
    $('#numero').html(li);
    $('li').on('click', function() {
        aff = "";
        var multipl = $(this).text();
        $.each(listeNum, function(index, value) {
            var result = value * multipl;
            if (multipl % 2) {
                color = 'bleu';
            } else {
                color = 'rouge';
            }
            aff += '<tr class=' + color + '> <td>' + multipl + ' x ' + value + ' = ' + result + '</td> </tr>';
        })
        $('#afficher').html(aff);
    });
});