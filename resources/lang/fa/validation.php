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

    'accepted'             => ':attribute باید تایید شود.',
    'active_url'           => ':attribute یک لینک نامعتبر است.',
    'after'                => ':attribute از تاریخ :date گذشته است.',
    'after_or_equal'       => ':attribute از تاریخ :date گذشته است یا با آن برابر است.',
    'alpha'                => ':attribute باید تنها شامل حروف باشد.',
    'alpha_dash'           => ':attribute باید تنها شامل حروف، اعداد و خط فاصله باشد.',
    'alpha_num'            => ':attribute باید تنها شامل حروف و اعداد باشد.',
    'array'                => ':attribute باید یک آرایه باشد.',
    'before'               => ':attribute باید تاریخی قبل از تاریخ :date باشد.',
    'before_or_equal'      => ':attribute باید تاریخی قبل از تاریخ :date یا برابر با آن باشد.',
    'between'              => [
        'numeric' => ':attribute باید عددی بین :max و :min  باشد.',
        'file'    => ':attribute باید بین :max و :min کیلوبایت باشد.',
        'string'  => ':attribute باید بین :max و :min کاراکتر باشد.',
        'array'   => ':attribute باید بین :max  و :min آیتم باشد.',
    ],
    'boolean'              => 'فیلد :attribute باید درست یا نادرست باشد.',
    'confirmed'            => ':attribute تایید نمیشود.',
    'date'                 => 'تاریخ :attribute معتبر نیست.',
    'date_format'          => 'فرمت :attrinute با :format مطابق نیست.',
    'different'            => ':attribute و :other باید باهم متفاوت باشند.',
    'digits'               => ':attribute باید :digit رقم باشد.',
    'digits_between'       => ':attribute باید بین :max و :min رقم باشد.',
    'dimensions'           => 'ابعاد :attribute صحیح نیست.',
    'distinct'             => 'دو مقدار برای فیلد :attribute وارد شده است.',
    'email'                => ':attribute باید یک آدرس ایمیل معتبر باشد.',
    'exists'               => ':attribute انتخاب شده نامعتبر است.',
    'file'                 => ':attribute باید یک فایل باشد.',
    'filled'               => 'فیلد :attribute باید یک مقدار داشته باشد.',
    'image'                => ':attribute باید حتما تصویر باشد.',
    'in'                   => ':attribute انتخاب شده نامعتبر است.',
    'in_array'             => 'فیلد :attribute در :other وجود ندارد.',
    'integer'              => ':attribute باید عدد صحیح باشد.',
    'ip'                   => ':attribute باید یک آدرس آی پی معتبر باشد.',
    'ipv4'                 => ':attribute باید یک آدرس آی پی ورژن چهار معتبر باشد.',
    'ipv6'                 => ':attribute باید یک آدرس آی پی ورژن شش معتبر باشد.',
    'json'                 => 'فیلد  :attribute باید رشته ی JSON باشد.',
    'max'                  => [
        'numeric' => ':attribute باید بزرگتر از :max باشد.',
        'file'    => ':attribute باید بزرگتر از :max کیلوبایت باشد.',
        'string'  => ':attribute باید بزرگتر از :max کاراکتر باشد.',
        'array'   => ':attribute باید بزرگتر از :max آیتم باشد.',
    ],
    'mimes'                => ':attribute باید فایلی از نوع :values باشد.',
    'mimetypes'            => ':attribute باید فایلی از نوع :values باشد.',
    'min'                  => [
        'numeric' => ':attribute باید حداقل :min باشد.',
        'file'    => ':attribute باید حداقل :min کیلوبایت باشد.',
        'string'  => ':attribute باید حداقل :min کاراکتر باشد.',
        'array'   => ':attribute باید حداقل :min آیتم باشد.',
    ],
    'not_in'               => ':attribute انتخاب شده نامعتبر است.',
    'numeric'              => ':attribute باید یک عدد باشد.',
    'present'              => ':attribute باید آماده باشد.',
    'regex'                => 'فرمت :attribute صحیح نیست.',
    'required'             => 'فیلد :attribute مورد نیاز است.',
    'required_if'          => 'فیلد :attribute زمانی که :other برابر :values باشد، مورد نیاز است.',
    'required_unless'      => 'فیلد :attribute مگراینکه :other برابر :values باشد، مورد نیاز است.',
    'required_with'        => 'فیلد :attribute وقتی مورد نیاز است که :values آماده باشد.',
    'required_with_all'    => 'فیلد :attribute وقتی مورد نیاز است که :values آماده باشد.',
    'required_without'     => 'فیلد :attribute وقتی مورد نیاز است که :values آماده نباشد.',
    'required_without_all' => 'فیلد :attribute وقتی مورد نیاز است که هیچکدام از :values آماده نباشد.',
    'same'                 => ':attribute و :other باید مطابق هم باشند.',
    'size'                 => [
        'numeric' => ':attribute باید :size باشد.',
        'file'    => ':attribute باید :size کیلوبایت باشد.',
        'string'  => ':attribute باید :size کاراکتر باشد.',
        'array'   => ':attribute باید شامل :size آیتم باشد.',
    ],
    'string'               => ':attribute باید یک رشته باشد.',
    'timezone'             => ':attribute باید مقدار زمان معتبر را شامل شود.',
    'unique'               => ':attribute قبلا استفاده شده است.',
    'uploaded'             => 'آپلود :attribute ناموفق بود.',
    'url'                  => 'فرمت :attribute معتبر نیست.',

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

    'attributes' => [
        'name' => 'نام',
    ],

];
