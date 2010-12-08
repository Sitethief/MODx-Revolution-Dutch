<?php
/**
 * Test-related Dutch Lexicon Topic for Revolution setup.
 *
 * @package setup
 * @subpackage lexicon
 * @author Bert Oost, <bertoost85@gmail.com>
 */
$_lang['test_config_file'] = 'Controleer of <span class="mono">[[+file]]</span> bestaat en schrijfbaar is: ';
$_lang['test_config_file_nw'] = 'Voor nieuwe Linux/Unix installaties, maak een nieuw leeg bestand genaamd <span class="mono">[[+file]].inc.php</span> in de MODx core <span class="mono">config/</span> map met schrijfrechten voor het PHP proces.';
$_lang['test_db_check'] = 'Maak verbinding met de database: ';
$_lang['test_db_check_conn'] = 'Controleer de database verbinding en probeer het nog eens.';
$_lang['test_db_failed'] = 'Database verbinding mislukt!';
$_lang['test_db_setup_create'] = 'Installatie probeert de database te maken.';
$_lang['test_dependencies'] = 'Controleert PHP voor de zlib afhankelijkheid: ';
$_lang['test_dependencies_fail_zlib'] = 'Jouw PHP installatie heeft geen "zlib" extensie geïnstalleerd. Deze extentie is nodig voor de werking van MODx. Activeer deze en ga dan verder.';
$_lang['test_directory_exists'] = 'Controleer of <span class="mono">[[+dir]]</span> map bestaat: ';
$_lang['test_directory_writable'] = 'Controleer of <span class="mono">[[+dir]]</span> map schrijfbaar is: ';
$_lang['test_memory_limit'] = 'Controleer of de memory_limit is ingestelt op 24M: ';
$_lang['test_memory_limit_fail'] = 'MODx heeft jouw memory_limit instelling gevonden en staat op [[+memory]], lager dan de aanbevolen of 24M. MODx probeert de memory_limit in te stellen op 24M, maar was onsuccesvol. Stel de memory_limit in, in jouw php.ini bestand minimaal in op 24M of hoger voordat je verder gaat. Wanneer je nog steeds problemen ondervindt (zoals wit scherm tijdens het installeren), stel hem dan in op 32M, 64M of hoger.';
$_lang['test_memory_limit_success'] = 'OKE! Ingesteld op [[+memory]]';
$_lang['test_mysql_version_5051'] = 'MODx heeft problemen met jouw MySQL versie ([[+version]]), vanwege de vele fouten gerelateerd aan de PDO driver in deze versie. Upgrade MySQL om deze problemen te verhelpen. Ook wanneer je niet kiest voor MODx, is het aanbevolen dat je upgrade naar een nieuwere versie voor de veiligheid en stabiliteit van jouw website.';
$_lang['test_mysql_version_client_nf'] = 'Kon de MySQL versie niet detecteren!';
$_lang['test_mysql_version_client_nf_msg'] = 'MODx kon jouw MySQL client versie niet detecteren via mysql_get_client_info(). Controleer zelf of jouw MySQL client versie minimaal 4.1.20 is voordat je doorgaat.';
$_lang['test_mysql_version_client_old'] = 'MODx ondervindt wellicht problemen omdat je een hele oude MySQL versie gebruikt ([[+version]])';
$_lang['test_mysql_version_client_old_msg'] = 'MODx zal de installatie toestaan om deze MySQL versie te gebruiken, maar we kunnen niet garanderen dat alle functionaliteit beschikbaar is of naar behoren werkt zolang je oudere versies gebruikt van de MySQL client libraries.';
$_lang['test_mysql_version_client_start'] = 'Controleert MySQL client version:';
$_lang['test_mysql_version_fail'] = 'Je draait MySQL versie [[+version]], en MODx Revolution eist MySQL 4.1.20 of hoger. Upgrade MySQL naar minimaal versie 4.1.20.';
$_lang['test_mysql_version_server_nf'] = 'Kan jouw MySQL server versie niet detecteren!';
$_lang['test_mysql_version_server_nf_msg'] = 'MODx kan jouw MySQL server versie niet detecteren via mysql_get_client_info(). Controleer handmatig dat jouw MySQL versie minimaal 4.1.20 is voordat je doorgaat.';
$_lang['test_mysql_version_server_start'] = 'Controleert jouw MySQL server versie:';
$_lang['test_mysql_version_success'] = 'OKE! Draait op: [[+version]]';
$_lang['test_php_version_fail'] = 'Je draait PHP versie [[+version]] en MODx Revolution eist PHP 5.1.1 of hoger. Upgrade jouw PHP versie minimaal versie 5.1.1. MODx beveelt een upgrade naar minimaal 5.3.2+.';
$_lang['test_php_version_516'] = 'MODx heeft complicaties met jouw PHP versie ([[+version]]), vanwege de vele fouten gerelateerd aan de PDO drivers in deze versie. Upgrade jouw PHP versie naar 5.3.0 of hoger, waar deze problemen in opgelost zijn. MODx beveelt een upgrade naar minimaal 5.3.2+. Zelfs als je niet kiest voor MODx, is het aanbevolen een upgrade te doen voor de veiligheid en stabiliteit van jouw website.';
$_lang['test_php_version_520'] = 'MODx heeft complicaties met jouw PHP versie ([[+version]]), vanwege de vele fouten gerelateerd aan de PDO drivers in deze versie. Upgrade jouw PHP versie naar 5.3.0 of hoger, waar deze problemen in opgelost zijn. MODx beveelt een upgrade naar minimaal 5.3.2+. Zelfs als je niet kiest voor MODx, is het aanbevolen een upgrade te doen voor de veiligheid en stabiliteit van jouw website.';
$_lang['test_php_version_start'] = 'Controleert PHP versie:';
$_lang['test_php_version_success'] = 'OKE! Draait op: [[+version]]';
$_lang['test_sessions_start'] = 'Controleren of sessies goed geconfigureerd zijn:';
$_lang['test_simplexml'] = 'Controleren op SimpleXML:';
$_lang['test_simplexml_nf'] = 'Kan SimpleXML niet vinden!';
$_lang['test_simplexml_nf_msg'] = 'MODx kan SimpleXML niet vinden op jouw PHP omgeving. De Pakket Management en andere functionaliteiten zullen niet werken als dit niet geïnstalleerd is. Je kunt doorgaan met de installatie maar MODx beveelt aan SimpleXML in te schakelen voor geavanceerde mogelijkheden en functionaliteiten.';
$_lang['test_table_prefix'] = 'Controleren tabel prefix `[[+prefix]]`: ';
$_lang['test_table_prefix_inuse'] = 'De tabel prefix is reeds ingebruik in deze database!';
$_lang['test_table_prefix_inuse_desc'] = 'De installatie kan de database niet installeren, vanwege al reeds bestaande tabellen met de gespecificeerde prefix. Kies een andere tabel prefix en start de installatie opnieuw.';
$_lang['test_table_prefix_nf'] = 'Tabel prefix bestaat nog niet in deze database!';
$_lang['test_table_prefix_nf_desc'] = 'De installatie kan de database niet installeren, aangezien het geen tabellen met deze prefix bevat om te upgraden. Kies een bestaande tabel prefix en start de installatie opnieuw.';
$_lang['test_zip_memory_limit'] = 'Controleer of de memory_limit is ingesteld op minimaal 24M voor zip extenties: ';
$_lang['test_zip_memory_limit_fail'] = 'MODx heeft jouw memory_limit instelling gevonden maar is lager dan de aanbevolen 24M. MODx probeert deze in te stellen naar 24M, maar dat was onsuccesvol. Stel de memory_limit op 24M of hoger in, in jouw php.ini bestand voordat je doorgaat, zodat de zip extenties naar behoren zullen werken.';