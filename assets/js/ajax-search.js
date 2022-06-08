jQuery(function ($) {
    $('.navigation-list__search-items input[name="s"]').on('keyup', function () {
        let search = $('.navigation-list__search-items input[name="s"]').val();
        if (search.length < 4) {
            return false;
        }
        let data = {
            s:search,
            action: 'search_ajax',
            nonce : navigation-list__search-items.nonce

        };
        $.ajax({
            url: navigation-list__search-items.url,
            data :data,
            type:'POST',
            dataType:'json',
            beforeSend:function(xhr){
            },
            success:function(data){
                $('.navigation-list__search-items .search-result').html(data.out);
                var heightResilt = $('.navigation-list__search-items .search-result').height();
                $('.navigation-list__search-items').css('height', heightResilt);
                //.log($('.search_form .search-result').height());
            }
        });

    });
});