$(function () {
    $.validator.setDefaults({
        submitHandler: function () {
            alert("Form successful submitted!");
        }
    });
    $('#quickForm').validate({
        rules: {
            name: {
                required: true,
            },
            type: {
                required: true,
            },
            cep: {
                required: true,
            },
            street: {
                required: true,
            },
            neighborhood: {
                required: true,
            },
            city: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "Por favor digite um nome válido",
            },
            type: {
                required: "Por favor selecione o tipo do imóvel",
            },
            cep: {
                required: "Por favor insira o cep do imóvel",
            },
            street: {
                required: "Esse campo é obrigatório e só será preenchido quando o cep do imóvel for informado",
            },
            neighborhood: {
                required: "Esse campo é obrigatório e só será preenchido quando o cep do imóvel for informado",
            },
            city: {
                required: "Esse campo é obrigatório e só será preenchido quando o cep do imóvel for informado",
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});