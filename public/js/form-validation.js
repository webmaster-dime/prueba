$(function () {
  'use strict';

  $.validator.setDefaults({
    submitHandler: function () {
      alert("Registro éxito!");
    }
  });
  $(function () {
    // validate signup form on keyup and submit
    $("#signupForm").validate({
      rules: {
        name: {
          required: true,
        },
        razonSocial: {
          required: true,
        },
        tipo: {
          required: true,
        },
        rfc: {
          required: true,
          minlength: 7
        },
        contacto: {
          required: true,
          minlength: 2
        },
        password: {
          required: true,
          minlength: 5
        },
        confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#password"
        },
        email: {
          required: true,
          email: true
        },
        tel: {
          required: true,
          minlength: 10
        },
        tel2: {
          required: true,
          minlength: 10
        },
        topic: {
          required: "#newsletter:checked",
          minlength: 2
        },
        precio: {
          required: true,
          minlength: 1
        },
        medida: {
          required: true,
          minlength: 1
        },
        opcion: {
          required: true,
          minlength: 1
        },
        agree: "required"
      },
      messages: {
        name: {
          required: "Campo Necesario",
        },
        name: {
          required: "Por favor ingresa tu nombre",
        },
        razonSocial: {
          required: "Campo necesario",
        },
        tipo: {
          required: "Campo necesario",
        },
        rfc: {
          required: "Por favor ingresa tu RFC",
          minlength: "El campo debe tener al menos de 12 a 13 caracteres"
        },
        contacto: {
          required: "Campo necesario",
          minlength: "El campo debe tener al menos de 2 caracteres"
        },
        tel: {
          required: "Campo necesario",
          minlength: "El campo debe tener 10 caracteres"
        },
        tel2: {
          required: "Campo necesario",
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        email: {
          required: "email necesario"
        },
        precio: {
          required: "Campo necesario"
        },
        medida: {
          required: "Campo necesario"
        },
        opcion: {
          required: "Campo necesario"
        },
      },
      errorPlacement: function (label, element) {
        label.addClass('mt-1 tx-13 text-danger');
        label.insertAfter(element);
      },
      highlight: function (element, errorClass) {
        $(element).parent().addClass('validation-error')
        $(element).addClass('border-danger')
      }
    });
  });
});

/* +++++++++++++++++++++++++++++ Formulario Movimientos Bancarios +++++++++++++++++++++++++++++ */
$(function () {
  'use strict';

  $.validator.setDefaults({
    submitHandler: function () {
      alert("Registro éxito!");
    }
  });

  $(function () {
    // validate signup form on keyup and submit
    $("#movBank").validate({
      rules: {
        cuenta: {
          required: true
        },
        tipo: {
          required: true
        },
        cuentaContable: {
          required: true
        },
        concept: {
          required: true
        }
      },
      messages: {
        cuenta: {
          required: "Campo Necesario",
        },
        tipo: {
          required: "Campo Necesario",
        },
        cuentaContable: {
          required: "Campo Necesario",
        },
        concept: {
          required: "Campo Necesario",
        }

      },
      errorPlacement: function (label, element) {
        label.addClass('mt-1 tx-13 text-danger');
        label.insertAfter(element);
      },
      highlight: function (element, errorClass) {
        $(element).parent().addClass('validation-error')
        $(element).addClass('border-danger')
      }
    });
  });
});

/* +++++++++++++++++++++++++++++ Formulario Registro de presupuesto +++++++++++++++++++++++++++++ */
$(function () {
  'use strict';

  $.validator.setDefaults({
    submitHandler: function () {
      alert("Registro éxito!");
    }
  });

  $(function () {
    // validate signup form on keyup and submit
    $("#regPresupuesto").validate({
      rules: {
        cuenta: {
          required: true
        },
        tipo: {
          required: true
        },
        cuentaContable: {
          required: true
        },
        concept: {
          required: true
        }
      },
      messages: {
        cuenta: {
          required: "Campo Necesario",
        },
        tipo: {
          required: "Campo Necesario",
        },
        cuentaContable: {
          required: "Campo Necesario",
        },
        concept: {
          required: "Campo Necesario",
        }

      },
      errorPlacement: function (label, element) {
        label.addClass('mt-1 tx-13 text-danger');
        label.insertAfter(element);
      },
      highlight: function (element, errorClass) {
        $(element).parent().addClass('validation-error')
        $(element).addClass('border-danger')
      }
    });
  });
});