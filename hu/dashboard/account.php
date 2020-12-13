<?php

return [
    'email' => [
        'title' => 'Email frissítése',
        'updated' => 'Az email címed sikeresen frissítve.',
    ],
    'password' => [
        'title' => 'Jelszó megváltoztatása',
        'requirements' => 'Az új jelszavadnak legalább 8 karakter hosszúnak kell lennie.',
        'updated' => 'A jelszavad sikeresen frissítve.',
    ],
    'two_factor' => [
        'button' => '2-Faktoros hitelesítés konfigurálása',
        'disabled' => 'A 2-Faktoros hitelesítő ki van kapcsolva a fiókodon. A bejelentkezéskor a továbbiakban nem lesz szükség token megadására.',
        'enabled' => 'A 2-Faktoros hitelesítő engedélyezve a fiókodon! Mostantól a bejelentkezéskor meg kell adnod az eszközöd által generált kódot.',
        'invalid' => 'A megadott token érvénytelen.',
        'setup' => [
            'title' => '2-Faktoros hitelesítés beállítása',
            'help' => 'Nem tudod szkennelni a kódot? Írd be az alábbi kódot az applikációdba:',
            'field' => 'Token megadása',
        ],
        'disable' => [
            'title' => '2-Faktoros hitelesítés kikapcsolása',
            'field' => 'Token megadása',
        ],
    ],
];
