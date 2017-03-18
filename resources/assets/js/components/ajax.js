
var menu = {
    loginForm: function(){
        var url = $(this).attr('data-link');
        $.get(url, {}, function(response){
            if(response.success == 1){
                $('.popup.itemdetail .pop_inner div').html(response.data.html);

            }
        })


    },
    bind: function(){
        $('a.ajaxbtn').click(menu.loginForm);
    }
}

$(menu.bind);