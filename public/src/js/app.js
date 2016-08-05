$('#system-url').click(function () {
    $('#article-url').attr('readonly', $(this).prop('checked'));
    // console.log($('#article-title').val());
    if ($(this).prop('checked')) {
        $.ajax({
            method: 'POST',
            url: convertUrl,
            data: {title: $('#article-title').val(), _token: token}
        }).done(function(msg){
            $('#article-url').val(msg['title']);
            $('#article-url').setAttribute('value', msg['title']);
        });
    }
});