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

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'active_url' => 'El campo :attribute no es una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute sólo puede contener letras.',
    'alpha_dash' => 'El campo :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'El campo :attribute may only contain letters and numbers.',
    'array' => 'El campo :attribute must be an array.',
    'before' => 'El campo :attribute must be a date before :date.',
    'before_or_equal' => 'El campo :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'El campo :attribute debe estar entre :min y :max.',
        'file' => 'El campo :attribute debe ser de entre :min y :max kilobytes.',
        'string' => 'El campo :attribute debe ser de entre :min y :max caracteres.',
        'array' => 'El campo :attribute must have between :min and :max items.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'El campo :attribute no está confirmado.',
    'date' => 'El dato :attribute no es una fecha válida.',
    'date_equals' => 'El campo :attribute must be a date equal to :date.',
    'date_format' => 'El campo :attribute does not match the format :format.',
    'different' => 'El campo :attribute and :other must be different.',
    'digits' => 'El campo :attribute must be :digits digits.',
    'digits_between' => 'El campo :attribute must be between :min and :max digits.',
    'dimensions' => 'El campo :attribute has invalid image dimensions.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El campo :attribute debe ser un email válido.',
    'ends_with' => 'El campo :attribute must end with one of the following: :values',
    'exists' => 'El campo :attribute seleccionado no es válido.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'file' => 'El campo :attribute debe ser mayor a :value kilobytes.',
        'string' => 'El campo :attribute debe ser mayor a :value characters.',
        'array' => 'El campo :attribute debe tener mas que :value items.',
    ],
    'gte' => [
        'numeric' => 'El campo :attribute must be greater than or equal :value.',
        'file' => 'El campo :attribute must be greater than or equal :value kilobytes.',
        'string' => 'El campo :attribute must be greater than or equal :value characters.',
        'array' => 'El campo :attribute must have :value items or more.',
    ],
    'image' => 'La :attribute cargada no tiene el formato indicado.',
    'in' => 'El selected :attribute is invalid.',
    'in_array' => 'El campo :attribute field does not exist in :other.',
    'integer' => 'El campo :attribute must be an integer.',
    'ip' => 'El campo :attribute must be a valid IP address.',
    'ipv4' => 'El campo :attribute must be a valid IPv4 address.',
    'ipv6' => 'El campo :attribute must be a valid IPv6 address.',
    'json' => 'El campo :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'El campo :attribute must be less than :value.',
        'file' => 'El campo :attribute must be less than :value kilobytes.',
        'string' => 'El campo :attribute must be less than :value characters.',
        'array' => 'El campo :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'El campo :attribute must be less than or equal :value.',
        'file' => 'El campo :attribute must be less than or equal :value kilobytes.',
        'string' => 'El campo :attribute must be less than or equal :value characters.',
        'array' => 'El campo :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'El campo :attribute no puede ser mayor a :max.',
        'file' => 'El campo :attribute no puede ser mayor a :max kilobytes.',
        'string' => 'El campo :attribute no puede ser mayor a :max caractéres.',
        'array' => 'El campo :attribute may not have more than :max items.',
    ],
    'mimes' => 'El campo :attribute must be a file of type: :values.',
    'mimetypes' => 'El campo :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'El campo :attribute debe ser por lo menos :min.',
        'file' => 'El campo :attribute debe ser por lo menos :min kilobytes.',
        'string' =>  'El campo :attribute debe tener por lo menos :min caracteres.',
        'array' => 'El campo :attribute debe tener al menos :min items.',
    ],
    'not_in' => 'El selected :attribute is invalid.',
    'not_regex' => 'El campo :attribute format is invalid.',
    'numeric' => 'El campo :attribute debe ser un numero.',
    'present' => 'El campo :attribute must be present.',
    'regex' => 'El campo :attribute format is invalid.',
    'required' => 'El campo :attribute es requerido.',
    'required_if' => 'El campo :attribute is required when :other is :value.',
    'required_unless' => 'El campo :attribute is required unless :other is in :values.',
    'required_with' => 'El campo :attribute is required when :values is present.',
    'required_with_all' => 'El campo :attribute is required when :values are present.',
    'required_without' => 'El campo :attribute is required when :values is not present.',
    'required_without_all' => 'El campo :attribute is required when none of :values are present.',
    'same' => 'El campo :attribute and :other must match.',
    'size' => [
        'numeric' => 'El campo :attribute must be :size.',
        'file' => 'El campo :attribute must be :size kilobytes.',
        'string' => 'El campo :attribute must be :size characters.',
        'array' => 'El campo :attribute must contain :size items.',
    ],
    'starts_with' => 'El campo :attribute must start with one of the following: :values',
    'string' => 'El campo :attribute debe ser un string.',
    'timezone' => 'El campo :attribute must be a valid zone.',
    'unique' => 'El campo :attribute ya está siendo utilizado.',
    'uploaded' => 'El campo :attribute no se pudo cargar.',
    'url' => 'El formato :attribute no es válido.',
    'uuid' => 'El campo :attribute must be a valid UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [

      // USER

      'title' => 'titulo',
      'phone' => 'numero telefónico',
      'first_name' => 'nombre',
      'last_name' => 'apellido',
      'password' => 'contraseña',
      'avatar' => 'imagen',
      'address' => 'dirección',
      'date_of_birth' => 'fecha de nacimiento',

      // ADDRESS

      'city' => 'ciudad',
      'province' => 'provincia',
      'zip_code' => 'código postal',
      'apartment' => 'departamento',

      // CATEGORIES

      'name' => 'nombre',

      // LISTS

      'price' => 'precio',
      'total_price' => 'precio total',

      // MARKETS no tiene

      // PRODUCTS

      'suggested_price' => 'precio sugerido',
      'brand' => 'marca',
      'description' => 'descripción',
      'net_weight' => 'peso neto',

      // STOCKS

      'list_price' => 'precio de lista',
      'quantity' => 'cantidad',


    ],

];
