<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Egy új Nest :name néven sikeresen létrehozva.',
        'deleted' => 'A kért Nest sikeresen törölve a panelből.',
        'updated' => 'A Nest konfigurációjának beállításai sikeresen frissítve.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Sikeresen importálta ezt az Egget és a hozzá tartozó változókat.',
            'updated_via_import' => 'Ezt a Tojást a mellékelt file által frissítettük.',
            'deleted' => 'Sikeresen törölve a kért Egg a panelből.',
            'updated' => 'Az Egg configurációja sikeresen frissítve.',
            'script_updated' => 'Az Egg telepítő szkript frissítve és a szerver telepítésekor lefut.',
            'egg_created' => 'Az új Egg sikeresen létrehozva. Az új Egg alkalmazásához újra kell indítania a futó daemonokat.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'A változó ":variable" törölve lett, és az újjáépítés után már nem lesz elérhető a szerverek számára.',
            'variable_updated' => 'A változó ":variable" frissítve lett. A változások alkalmazásához minden szervert újra kell építeni ezzel a változóval.',
            'variable_created' => 'Új változó sikeresen létrehozva és hozzárendelve ehhez az Egg-hez.',
        ],
    ],
];
