<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 * Hungarian Translation by TryHardDo & Poma123
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Megpróbálod törölni a szerver alapértelmezett kiosztását, de nincs megadva tartalék kiosztás.',
        'marked_as_failed' => 'Ezt a szervert egy korábbi sikertelen telepítés miatt megjelölték. A jelenlegi státusz nem módosítható ebben az állapotban.',
        'bad_variable' => 'Ellenőrzési hibba lépett fel :name változóban.',
        'daemon_exception' => 'Egy kivétel történt miközben kommunikálni próbáltunk a daemonnal, ami HTTP/:code válaszkódot eredményezett. Ez a kivétel naplózásra keült.',
        'default_allocation_not_found' => 'A kért alapértelmezett kiosztás nem található a megadott szerver kiosztásai között.',
    ],
    'alerts' => [
        'startup_changed' => 'A szerver indítási konfigurációi frissültek. Ha ennek a szervernek a Nest-jét vagy a Egg-ét megváltoztatta, akkor újratelepítés fog bekövetkezni most.',
        'server_deleted' => 'A szerver sikeresen törlésre került a rendszerből.',
        'server_created' => 'A szerver sikeresen létrehozva a penelben. Kérlek adj pár percet a daemonnak hogy befejezze a szerver telepítését.',
        'build_updated' => 'A szerver build paraméterei frissültek. Bizonyos változások életbe lépéséhez újraindítás szükséges.',
        'suspension_toggled' => 'A szerver felfüggesztési állapota megváltozott :status.',
        'rebuild_on_boot' => 'Ez a szerver Docker Container újraépítésre lett jelölve. Ez a következő szerverindításnál fog bekövetkezni.',
        'install_toggled' => 'A szerver telepítési állapota bekapcsolva.',
        'server_reinstalled' => 'Ez a szerver sorba került újratelepítésre ami most veszi kezdetét.',
        'details_updated' => 'A szerver részletei sikeresen frissültek.',
        'docker_image_updated' => 'Successfully changed the default Docker image to use for this server. A reboot is required to apply this change. Sikeresen megváltoztatta a szerverhez használt alapértelmezett Docker-képet. A változások életbe lépéséhez újraindítás szükséges.',
        'node_required' => 'Legalább egy, már konfigurált csomópontra van szükség hogy szervert hozhass létre a panelen belül.',
        'transfer_nodes_required' => 'Legalább kettő, már konfigurált csomópontra van szükséged hogy szervert helyezhess át.',
        'transfer_started' => 'A szerver áthelyezése elkezdődött.',
        'transfer_not_viable' => 'A kiválasztott csomópont nem alkalmas szerverek áthelyezésére',
    ],
];
