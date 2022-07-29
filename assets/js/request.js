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
            if (response) {
                cuteToast({
                    type: 'success',
                    message: "Salvo com sucesso!"
                });
            } else {
                cuteToast({
                    type: 'error',
                    message: "Não foi possível salvar!"
                });
            }
        });
    });

})(jQuery);