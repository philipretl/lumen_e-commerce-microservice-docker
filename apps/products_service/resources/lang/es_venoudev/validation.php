<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => '[ERR_AFTER_DATE] # [:attribute] # El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute solo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num'            => 'El campo :attribute solo puede contener letras y números.',
    'array'                => '[ERR_ARRAY] # [:attribute] # El campo :attribute debe ser un array.',
    'before'               => '[ERR_BEFORE_DATE] # [:attribute] # El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => '[ERR_BEFORE_EQUAL_DATE] # [:attribute] # El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => '[ERR_BETWEEN_NUMERIC] # [:attribute] # El campo :attribute debe ser un valor entre :min y :max.',
        'file'    => '[ERR_BETWEEN_FILE] # [:attribute] # El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => '[ERR_BETWEEN_STRING] # [:attribute] # El campo :attribute debe contener entre :min y :max caracteres.',
        'array'   => '[ERR_BETWEEN_ARRAY] # [:attribute] # El campo :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => '[ERR_CONFIRMED] # [:attribute] # El campo confirmación de :attribute no coincide.',
    'date'                 => '[ERR_DATE] # [:attribute] # El campo :attribute no corresponde con una fecha válida.',
    'date_equals'          => '[ERR_DATE_EQUALS] # [:attribute] # El campo :attribute debe ser una fecha igual a :date.',
    'date_format'          => '[ERR_DATE_FORMAT] # [:attribute] # El campo :attribute no corresponde con el formato de fecha :format.',
    'different'            => '[ERR_DATE_DIFFERENT] # [:attribute] # Los campos :attribute y :other deben ser diferentes.',
    'digits'               => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones de imagen inválidas.',
    'distinct'             => '[ERR_DISTINCT] # [:attribute] # El campo :attribute tiene un valor duplicado.',
    'email'                => '[ERR_EMAIL] # [:attribute] # El campo :attribute debe ser una dirección de correo válida.',
    'ends_with'            => 'El campo :attribute debe finalizar con alguno de los siguientes valores: :values',
    'exists'               => '[ERR_EXISTS] # [:attribute] # El campo :attribute seleccionado no existe.',
    'file'                 => '[ERR_FILE] # [:attribute] # El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute debe tener un valor.',
    'gt'                   => [
        'numeric' => '[ERR_GREATER_THAN_NUMERIC] # [:attribute] # El campo :attribute debe ser mayor a :value.',
        'file'    => '[ERR_GREATER_THAN_FILE] # [:attribute] # El archivo :attribute debe pesar más de :value kilobytes.',
        'string'  => '[ERR_GREATER_THAN_STRING] # [:attribute] # El campo :attribute debe contener más de :value caracteres.',
        'array'   => '[ERR_GREATER_THAN_ARRAY] # [:attribute] # El campo :attribute debe contener más de :value elementos.',
    ],
    'gte'                  => [
        'numeric' => 'El campo :attribute debe ser mayor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o más kilobytes.',
        'string'  => 'El campo :attribute debe contener :value o más caracteres.',
        'array'   => 'El campo :attribute debe contener :value o más elementos.',
    ],
    'image'                => '[ERR_IMAGE] # [:attribute] # El campo :attribute debe ser una imagen.',
    'in'                   => '[ERR_IN] # [:attribute] # El campo :attribute es inválido.',
    'in_array'             => '[ERR_IN_ARRAY] # [:attribute] # El campo :attribute no existe en :other.',
    'integer'              => '[ERR_INTEGER] # [:attribute] # El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4'                 => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6'                 => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'lt'                   => [
        'numeric' => 'El campo :attribute debe ser menor a :value.',
        'file'    => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'string'  => 'El campo :attribute debe contener menos de :value caracteres.',
        'array'   => 'El campo :attribute debe contener menos de :value elementos.',
    ],
    'lte'                  => [
        'numeric' => 'El campo :attribute debe ser menor o igual a :value.',
        'file'    => 'El archivo :attribute debe pesar :value o menos kilobytes.',
        'string'  => 'El campo :attribute debe contener :value o menos caracteres.',
        'array'   => 'El campo :attribute debe contener :value o menos elementos.',
    ],
    'max'                  => [
        'numeric' => '[ERR_MAX_NUMERIC] # [:attribute] # El campo :attribute no debe ser mayor a :max.',
        'file'    => '[ERR_MAX_FILE] # [:attribute] # El archivo :attribute no debe pesar más de :max kilobytes.',
        'string'  => '[ERR_MAX_STRING] # [:attribute] # El campo :attribute no debe contener más de :max caracteres.',
        'array'   => '[ERR_MAX_ARRAY] # [:attribute] # El campo :attribute no debe contener más de :max elementos.',
    ],
    'mimes'                => '[ERR_MIMES] # [:attribute] # El campo :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => '[ERR_MIMES_TYPES] # [:attribute] # El campo :attribute debe ser un archivo de tipo: :values.',
    'min'                  => [
        'numeric' => '[ERR_MIN_NUMERIC] # [:attribute] # El campo :attribute debe ser al menos :min.',
        'file'    => '[ERR_MIN_FILE] # [:attribute] # El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => '[ERR_MIN_STRING] # [:attribute] # El campo :attribute debe contener al menos :min caracteres.',
        'array'   => '[ERR_MIN_ARRAY] # [:attribute] # El campo :attribute debe contener al menos :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es inválido.',
    'not_regex'            => 'El formato del campo :attribute es inválido.',
    'numeric'              => '[ERR_NUMERIC] # [:attribute] # El campo :attribute debe ser un número.',
    'password'             => '[ERR_PASSWORD] # [:attribute] # La contraseña es incorrecta.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato del campo :attribute es inválido.',
    'required'             => '[ERR_REQUIRED] # [:attribute] # El campo :attribute es obligatorio.',
    'required_if'          => '[ERR_REQUIRED_IF] # [:attribute] # El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => '[ERR_REQUIRED_WITH] # [:attribute] # El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => '[ERR_REQUIRED_WITH_ALL] # [:attribute] # El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without'     => '[ERR_REQUIRED_WITHOUT] # [:attribute] # El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => '[ERR_REQUIRED_WITHOUT_ALL] # [:attribute] # El campo :attribute es obligatorio cuando ninguno de los campos :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'starts_with'          => 'El campo :attribute debe comenzar con uno de los siguientes valores: :values',
    'string'               => '[ERR_STRING] # [:attribute] # El campo :attribute debe ser una cadena de caracteres.',
    'timezone'             => 'El campo :attribute debe ser una zona horaria válida.',
    'unique'               => '[ERR_UNIQUE] # [:attribute] # El valor del campo :attribute ya está en uso.',
    'uploaded'             => 'El campo :attribute no se pudo subir.',
    'url'                  => 'El formato del campo :attribute es inválido.',
    'uuid'                 => 'El campo :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
