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

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは、有効なURLではありません。',
    'after' => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal' => ':attributeには、:date以降の日付を指定してください。',
    'alpha' => ':attributeには、アルファベッドのみ使用できます。',
    'alpha_dash' => ':attributeには、英数字、ハイフン、アンダースコアのみ使用できます。',
    'alpha_num' => ':attributeには、英数字のみ使用できます。',
    'array' => ':attributeには、配列を指定してください。',
    'ascii' => ':attributeには、半角の英数字と記号のみ使用できます。',
    'before' => ':attributeには、:dateより前の日付を指定してください。',
    'before_or_equal' => ':attributeには、:date以前の日付を指定してください。',
    'between' => [
        'array' => ':attributeの項目は、:min個から:max個にしてください。',
        'file' => ':attributeには、:min KBから:max KBまでのサイズのファイルを指定してください。',
        'numeric' => ':attributeには、:minから:maxまでの数字を指定してください。',
        'string' => ':attributeは、:min文字から:max文字にしてください。',
    ],
    'boolean' => ':attributeには、trueかfalseを指定してください。',
    'can' => ':attributeには、許可されていない値が含まれています。',
    'confirmed' => ':attributeと確認用の値が一致しません。',
    'contains' => ':attributeには、必要な値が含まれていません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは、正しい日付ではありません。',
    'date_equals' => ':attributeは:dateと同じ日付を指定してください。',
    'date_format' => ':attributeの形式は、:formatと合いません。',
    'decimal' => ':attributeは、小数点以下:decimal桁の数字を指定してください。',
    'declined' => ':attributeを拒否してください。',
    'declined_if' => ':otherが:valueの場合、:attributeを拒否してください。',
    'different' => ':attributeと:otherには、異なった内容を指定してください。',
    'digits' => ':attributeは、:digits桁の数字を指定してください。',
    'digits_between' => ':attributeは、:min桁から:max桁の数字を指定してください。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeには、異なった値を指定してください。',
    'doesnt_end_with' => ':attributeは、次のいずれかで終わってはいけません: :values',
    'doesnt_start_with' => ':attributeは、次のいずれかで始まってはいけません: :values',
    'email' => ':attributeには、有効なメールアドレスを指定してください。',
    'ends_with' => ':attributeは、次のいずれかで終わる必要があります: :values',
    'enum' => '選択された:attributeは、無効です。',
    'exists' => '選択された:attributeは、無効です。',
    'extensions' => ':attributeには、次のいずれかの拡張子を指定してください: :values',
    'file' => ':attributeには、ファイルを指定してください。',
    'filled' => ':attributeには、値を指定してください。',
    'gt' => [
        'array' => ':attributeの項目数は、:value個より多くなければなりません。',
        'file' => ':attributeには、:valueキロバイトより大きいファイルを指定してください。',
        'numeric' => ':attributeには、:valueより大きい値を指定してください。',
        'string' => ':attributeは、:value文字より長くなければなりません。',
    ],
    'gte' => [
        'array' => ':attributeの項目数は、:value個以上でなければなりません。',
        'file' => ':attributeには、:value KB以上のファイルを指定してください。',
        'numeric' => ':attributeには、:value以上の値を指定してください。',
        'string' => ':attributeは、:value文字以上でなければなりません。',
    ],
    'hex_color' => ':attributeには、有効な16進数カラーコードを指定してください。',
    'image' => ':attributeには、画像を指定してください。',
    'in' => '選択された:attributeは、無効です。',
    'in_array' => ':attributeが:otherに存在しません。',
    'integer' => ':attributeには、整数を指定してください。',
    'ip' => ':attributeには、有効なIPアドレスを指定してください。',
    'ipv4' => ':attributeには、有効なIPv4アドレスを指定してください。',
    'ipv6' => ':attributeには、有効なIPv6アドレスを指定してください。',
    'json' => ':attributeには、有効なJSON文字列を指定してください。',
    'list' => ':attributeは、リストでなければなりません。',
    'lowercase' => ':attributeは、小文字でなければなりません。',
    'lt' => [
        'array' => ':attributeの項目数は、:value個より少なくなければなりません。',
        'file' => ':attributeには、:valueキロバイトより小さいファイルを指定してください。',
        'numeric' => ':attributeには、:valueより小さい値を指定してください。',
        'string' => ':attributeは、:value文字より短くなければなりません。',
    ],
    'lte' => [
        'array' => ':attributeの項目数は、:value個以下でなければなりません。',
        'file' => ':attributeには、:value KB以下のファイルを指定してください。',
        'numeric' => ':attributeには、:value以下の値を指定してください。',
        'string' => ':attributeは、:value文字以下でなければなりません。',
    ],
    'mac_address' => ':attributeには、有効なMACアドレスを指定してください。',
    'max' => [
        'array' => ':attributeの項目数は、:max個以下でなければなりません。',
        'file' => ':attributeには、:max KB以下のファイルを指定してください。',
        'numeric' => ':attributeには、:max以下の数字を指定してください。',
        'string' => ':attributeは、:max文字以下でなければなりません。',
    ],
    'max_digits' => ':attributeは、:max桁以下の数字でなければなりません。',
    'mimes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'mimetypes' => ':attributeには、:valuesタイプのファイルを指定してください。',
    'min' => [
        'array' => ':attributeの項目数は、:min個以上でなければなりません。',
        'file' => ':attributeには、:min KB以上のファイルを指定してください。',
        'numeric' => ':attributeには、:min以上の数字を指定してください。',
        'string' => ':attributeは、:min文字以上でなければなりません。',
    ],
    'min_digits' => ':attributeは、:min桁以上の数字でなければなりません。',
    'missing' => ':attributeは、存在してはいけません。',
    'missing_if' => ':otherが:valueの場合、:attributeは存在してはいけません。',
    'missing_unless' => ':otherが:valueでない限り、:attributeは存在してはいけません。',
    'missing_with' => ':valuesが存在する場合、:attributeは存在してはいけません。',
    'missing_with_all' => ':valuesが存在する場合、:attributeは存在してはいけません。',
    'multiple_of' => ':attributeは、:valueの倍数でなければなりません。',
    'not_in' => '選択された:attributeは、無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeには、数字を指定してください。',
    'password' => [
        'letters' => ':attributeには、少なくとも1つの文字を含める必要があります。',
        'mixed' => ':attributeには、少なくとも大文字と小文字を1つずつ含める必要があります。',
        'numbers' => ':attributeには、少なくとも1つの数字を含める必要があります。',
        'symbols' => ':attributeには、少なくとも1つの記号を含める必要があります。',
        'uncompromised' => '指定された:attributeは、データ漏洩の可能性があります。別の:attributeを選択してください。',
    ],
    'present' => ':attributeが存在している必要があります。',
    'present_if' => ':otherが:valueの場合、:attributeが存在している必要があります。',
    'present_unless' => ':otherが:valueでない限り、:attributeが存在している必要があります。',
    'present_with' => ':valuesが存在する場合、:attributeも存在している必要があります。',
    'present_with_all' => ':valuesが存在する場合、:attributeも存在している必要があります。',
    'prohibited' => ':attributeは、入力禁止です。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは入力禁止です。',
    'prohibited_unless' => ':otherが:valuesでない限り、:attributeは入力禁止です。',
    'prohibits' => ':attributeは、:otherの入力を禁止しています。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeは、必須です。',
    'required_array_keys' => ':attributeには、:valuesのエントリーが含まれている必要があります。',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_if_accepted' => ':otherが承認された場合、:attributeは必須です。',
    'required_if_declined' => ':otherが拒否された場合、:attributeは必須です。',
    'required_unless' => ':otherが:valuesでない限り、:attributeは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeは必須です。',
    'required_with_all' => ':valuesが存在する場合、:attributeは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeは必須です。',
    'required_without_all' => ':valuesが存在しない場合、:attributeは必須です。',
    'same' => ':attributeと:otherが一致しません。',
    'size' => [
        'array' => ':attributeの項目数は、:size個にしてください。',
        'file' => ':attributeには、:sizeキロバイトのファイルを指定してください。',
        'numeric' => ':attributeには、:sizeを指定してください。',
        'string' => ':attributeは、:size文字にしてください。',
    ],
    'starts_with' => ':attributeは、次のいずれかで始まる必要があります: :values',
    'string' => ':attributeには、文字を指定してください。',
    'timezone' => ':attributeには、有効なタイムゾーンを指定してください。',
    'unique' => '指定の:attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'uppercase' => ':attributeは、大文字でなければなりません。',
    'url' => ':attributeには、有効なURLを指定してください。',
    'ulid' => ':attributeには、有効なULIDを指定してください。',
    'uuid' => ':attributeには、有効なUUIDを指定してください。',

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

    'attributes' => [],

];
