<?php



require_once 'Guns.php';
require_once 'GunList.php';
require_once 'GunsStore.php';
require_once 'GunsStoreMain.php';

$guns = new GunsStore([
    new GunList(new Guns('AK47', 'Assult Rifle', 'BOF030'),4200),
    new GunList(new Guns('VSP-10', 'Rifle', 'BRH012'), 7500),
    new GunList(new Guns("GLOCK", 'Hand Gun', 'BSE066'), 170)
]);


$gunsStore = new GunsStoreMain($guns);
$gunsStore->main();