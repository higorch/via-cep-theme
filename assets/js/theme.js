(function ($) {

    $.displayIfNotEmpty = function (value, concatenation = '') {

        if (value.length === 0)
            return '';

        return value + concatenation;
    }

    $.isZip = function (zip) {
        return /^[0-9]{5}-[0-9]{3}$/.test(zip);
    }

    $('.zip-box .entry .group button').on('click', function (e) {

        e.preventDefault();

        var zip = $("#zip").val();

        if (zip.length === 0) {
            cuteToast({
                type: 'error',
                message: "Informe o CEP!"
            });
            return;
        }

        if (!$.isZip(zip)) {
            cuteToast({
                type: 'error',
                message: "CEP inválido!"
            });
            return;
        }

        $.get("https://viacep.com.br/ws/" + zip + "/json/", function (data) {

            if (data.erro) {
                cuteToast({
                    type: 'warning',
                    message: "Não foi possível consultar!"
                });
                return;
            }

            var address = $.displayIfNotEmpty(data.logradouro, ', ') + $.displayIfNotEmpty(data.bairro, ', ') + $.displayIfNotEmpty(data.localidade, ' - ') + $.displayIfNotEmpty(data.uf, ', ') + $.displayIfNotEmpty(data.cep);

            $('.zip-box .show-address').addClass('active');
            $('.zip-box .show-address p').text(address);

            cuteToast({
                type: 'success',
                message: "Consultado com sucesso!"
            });
        });

    });

    $('#zip').mask('00000-000');

})(jQuery);