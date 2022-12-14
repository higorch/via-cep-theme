(function ($) {

    $('.zip-box .show-address .head a').on('click', function (e) {

        e.preventDefault();

        var address = $.displayIfNotEmpty(ADDRESS_DETAILS.logradouro, ', ') + $.displayIfNotEmpty(ADDRESS_DETAILS.bairro, ', ') + $.displayIfNotEmpty(ADDRESS_DETAILS.complemento, ', ') + $.displayIfNotEmpty(ADDRESS_DETAILS.localidade, ' - ') + $.displayIfNotEmpty(ADDRESS_DETAILS.uf, ', ') + $.displayIfNotEmpty(ADDRESS_DETAILS.cep);

        var data = {
            'action': 'add_address_action',
            'address': address,
            'address_details': ADDRESS_DETAILS
        };

        $.post(request_vct.ajax_url, data, function (response) {
            if (response == 0) {
                cuteToast({
                    type: 'error',
                    message: "Não foi possível salvar!"
                });
            } else {
                cuteToast({
                    type: 'success',
                    message: "Salvo com sucesso!"
                });

                $('#zip').val('');
                $('.zip-box .show-address').removeClass('active');

                ADDRESS_DETAILS = '';

                $('.addresses-box').html(response);
            }
        });
    });

})(jQuery);