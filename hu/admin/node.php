<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'validation' => [
        'fqdn_not_resolvable' => 'A megadott FQDN vagy IP-cím nem oldódik fel érvényes IP-címre.',
        'fqdn_required_for_ssl' => 'Az SSL használatához ennél a csomópontnál egy teljesen minősített, nyilvános IP-címre megoldódó domain névre (FQDN) van szükség.',
    ],
    'notices' => [
        'allocations_added' => 'A kiosztások sikeresen hozzáadva ehhez a csomóponthoz.',
        'node_deleted' => 'Csomópont sikeresen törölve a panelből.',
        'location_required' => 'Lennie kell minimum egy, már konfigurált elhelyezkedésnek mielőtt hozzáadnál egy csomópontot a panelhez.',
        'node_created' => 'Sikeresen létrehozva egy új csomópont. Automatikusan konfigurálhatod ezt a daemon-t ha ellátogatsz a \'Konfiguráció\' fülre. <strong>A szerverek hozzáadása előtt ki kell osztanod legalább egy IP-címet és portot.</strong>',
        'node_updated' => 'A csomópont információi frissültek. Ha a daemon beállításait megváltoztattad, újra kell indítanod, hogy ezek a változtatások életbe lépjenek.',
        'unallocated_deleted' => '<code>:ip</code> összes kiosztatlan portja törölve lett.',
    ],
];
