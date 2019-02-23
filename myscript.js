$(document).ready(function() {
    var list;
    var tmpArr = [];
    var check = true;
    $('#search-btn').click(function() {
        query();
        $('td').remove();
    });

    $('#advance-search-btn').click(function() {
        $.ajax({
            type: "POST",
            url: "getData.php",
            dataType: "json",
            data: {
                'name' : $('#search-name').val(),
                'height' : $('#search-height').val(),
                'mass' : $('#search-mass').val(),
                'hair_color' : $('#search-hair').val(),
                'skin_color' : $('#search-hair').val(),
                'eye_color' : $('#search-hair').val(),
                'gender' : $('#search-gender').val(),
                'type' : 1
            }
        }).done(function(response) {
            list = response;
            console.log('YES ' + list.length);
            showData();
        });
        $('td').remove();
        
    });

    $('#advance-show-btn').click(function() {
        $('#simple-search').hide();
        $('#advanced-search').show();
    });

    $('#simple-show-btn').click(function() {
        $('#simple-search').show();
        $('#advanced-search').hide();
    });

    $('#search-input').keypress(function (e){
        if (e.which == 13){
            if($('#search-input').val() != ''){
                $('#search-btn').click();
            }
            else {
                $('td').remove();
                showData();
            }
        } 
    });

    function showData(){
        var html = '';
        var count = 1;
        list.forEach(element => {
            html += '<tr>';
            html += '<td>'+ count++ +'</td>';
            $.each(element, function(key, value) {
                html += '<td>' + value + '</td>';
            });
            html += '</tr>';
        })
        $('#body').append(html);
    }

    function query() {
        $.ajax({
            type: "POST",
            url: "getData.php",
            dataType: "json",
            data: {
                'name' : $('#search-input').val()
            }
        }).done(function(response) {
            list = response;
            showData();
        });
    }

    $.ajax({
        type: "POST",
        url: "getData.php",
        dataType: "json"
    }).done(function(response) {
        list = response;
        console.log('YES ' + list.length);
        $('#advanced-search').hide();
        showData();
    });
});