<?php

return [
    'sign_in' => 'Belépés',
    'go_to_login' => 'Irány a Belépéshez',
    'failed' => 'Nem található a megadott adatoknak mgefelelő fiók.',

    'forgot_password' => [
        'label' => 'Elfelejtetted a jelszavad?',
        'label_help' => 'Írd be a fiókod email címét hogy megkapd a jelszavad visszaállításával kapcsolatos instrukciókat.',
        'button' => 'Fiók Visszaszerzése',
    ],

    'reset_password' => [
        'button' => 'Visszaállítás és Belépés',
    ],

    'two_factor' => [
        'label' => '2-Faktor kulcs',
        'label_help' => 'További azonosításra van szükség a folytatás érdekében. Kérlek írd be a készüléked által generált kódot hogy véglegesítsd a belépést.',
        'checkpoint_failed' => 'A 2-Faktoros megerősítő kód érvénytelen.',
    ],

    'throttle' => 'Túl sok belépési kísérle. Kérlek próbáld meg :seconds másodperc múlva.',
    'password_requirements' => 'A jelszónak legalább 8 karakter hosszúnak kell lennie és egyedinek.',
    '2fa_must_be_enabled' => 'A rendszergazda előírta, hogy a panel használatához engedélyezni kell a 2-Faktoros hitelesítést a fiókjában.',
];
