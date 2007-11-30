<?php
$lang = array(
"DBError" => "Il database da te configurato non � stato trovato. Ricorda che deve esistere prima di installare o aggiornare WackoWiki!",
"TestSql" => "Prova i parametri di connessione database ...",
"Testing Configuration" => "Test della configurazione",
"Looking for database..." => "Ricerca del database...",
"pages alter" => "La tabella delle pagine � stata leggermente modificata...",
"0.1.1" => "Per inviare una nota d'odio agli sviluppatori di WackoWiki...",
"useralter" => " La tabella degli utenti � stata leggermente modificata...",
"NextStep" => "Nel passo successivo, l'installatore tenter� di scrivere il nuovo file di configurazione,",
"MakeWrite" => "Verifica che il server del web abbia accesso alla scrittura sul file, o che tu possa editarlo manualmente",
"ForDetailsSee" => "Ancora una volta, consulta <a href=\"http://wackowiki.de/WackoDocEnglish/Installation\" target=\"_blank\">WackoWiki:WackoDocEnglish/Installation</a> per i dettagli",
"Continue" => "Continua",
"Installing Stuff" => "Installazione degli oggetti",
"Creating table..." => "Creazione di %1 tabella/e...",
"Already exists?" => "Esiste gi�?",
"to" => "a",
"Adding some pages..." => "Aggiunta di pagina...",
"Hmm!" => "Hmm!",
"Claiming all your base..." => "Per richiedere tutte le tue basi...",
"And table..." => "E %1 tabella (attendi!)...",
"writtenAt" => "scritto a",
"dontchange" => "non modificare manualmente la Wakka_version!",
"writing" => "<strong>Scrittura della configurazione</strong><br />\n",
"writing2" => "Scrittura del file di configurazione",
"ready" => "<p>� tutto! Adesso puoi",
"return" => "Ritorna al tuo sito WackoWiki",
"SecurityRisk" => "Infine, ti consigliamo di escludere l'opzione di scrittura su <tt>wakka.config.php</tt>ora che � stata scritta. Lasciare il file aperto alla scrittura � un rischio per la tua sicurezza!",
"warning" => "<span class=\"failed\">ATTENZIONE:</span> Il file di configurazione",
"GivePrivileges" => "non si � potuto scrivere. Si dovr� rendere temporaneamente accessibile alla scrittura il tuo server e la tua directory WackoWiki, o un file vuoto col nome di <tt>wakka.config.php</tt> (<tt>touch wakka.config.php ; chmod 666 wakka.config.php</tt>; don't forget to remove write access again later, ie <tt>chmod 644 wakka.config.php</tt>). Se, per qualche motivo, non puoi farlo, dovrai copiare il testo in basso in un nuovo file e salvarlo/immetterlo come <tt>wakka.config.php</tt> nella directory WackoWiki. Ci� fatto, il tuo sito WackoWiki � pronto per funzionare. Altrimenti, visita  <a href=\"http://wackowiki.de/WackoDocEnglish/Installation\">WackoWiki:WackoDocEnglish/Installation</a>",
"try again" => "Riprova",
"title" => "Installazione di WackoWiki",
"failed" => "NON RIUSCITA",
"note" => "NOTA: Questo installatore  tenter� di scrivere i dati di configurazione nel file <tt>wakka.config.php</tt>, presente nella tua directory WackoWiki. Per gestire al meglio questa operazione, devi assicurarti che il server del tuo sito sia accessibile alla scrittura per questo file! Se non puoi farlo, dovrai editare il file manualmente (l'installatore ti dir� come farlo).<br /><br />Vedi <a href=\"http://wackowiki.de/WackoDocEnglish/Installation\" target=\"_blank\">WackoWiki:WackoDocEnglish/Installation</a> per i dettagli.",
"dbConf" => "Configurazione del database",
#"mysqlHostDesc" => "L'host su cui gira il tuo server MySQL funziona. Di solito \"localhost\" (p.e., la stessa macchina del tuo sito WackoWiki � attiva).",
#"mysqlHost" => "Host MySQL",
#"dbDesc" => "Il database MySQL utilizzer� WackoWiki. Il database deve gi� esistere, prima di continuare!",
#"db" => "Database MySQL",
#"mysqlPasswDesc" => "Nome e password dell'utente MySQL sono utizzati per connettersi  al tuo database.",
#"mysqlUser" => "Nome utente MySQL",
#"mysqlPassw" => "Password MySQL",
#"prefixDesc" => "Prefisso di tutte le tabelle usate da WackoWiki. Questo ti permette di disporre di pi� installazioni WackoWiki che utilizzano lo stesso database MySQL configurandolo all'impiego dei diversi prefissi di tabella.",
"dbDriverDesc" => "The database driver you want to use.  You must choose a legacy driver if you do not have PHP5.1 (or greater) and <a href=\"http://de2.php.net/pdo\" target=\"_blank\">PDO</a> installed.",
"dbDriver" => "Database Driver",
"dbPortDesc" => "The port number your database server is accessable through, leave it blank to use the default port number.",
"dbPort" => "Database Port",
"dbHostDesc" => "The host your database server is running on. Usually \"localhost\" (ie, the same machine your WackoWiki site is on).",
"dbHost" => "Database host",
"dbDesc" => "The database WackoWiki should use. This database needs to exist already once you continue!",
"db" => "Database name",
"dbPasswDesc" => "Name and password of the user used to connect to your database.",
"dbUser" => "User name",
"dbPassw" => "Password",
"noDbDriverSelected" => "No database driver has been selected, please pick one from the list.",
"NoDbDriverDetected" => "No database driver has been detected, please enable either the mysql, mysqli or pdo extension in your php.ini file.",
"prefixDesc" => "Prefix of all tables used by WackoWiki. This allows you to run multiple WackoWiki installations using the same database by configuring them to use different table prefixes.",
"prefix" => "Prefisso di tabella",
"SiteConf" => "Configurazione di sito WackoWiki",
"nameDesc" => "Il nome del tuo sito WackoWiki. � di norma un NomeWiki e somiglia a QualcosaComeQuesto.",
"name" => "Tuo nome WackoWiki",
"homeDesc" => "La tua homepage WackoWiki. Deve essere un NomeWiki.",
"home" => "Homepage",
"metaDesc" => "META ParoleChiavi/Descrizione che vanno inserite come headers in HTML.",
"meta1" => "Meta-paroleChiavi",
"meta2" => "Meta-descrizione",
"UrlConf" => "Configurazione dell'URL WackoWiki",
"baseDesc" => "La tua URL di base per il sito WackoWiki. I nomi di pagina sono stati aggiunti, ora sar� incluso l'oggetto-parametro \"?page=\" se la modalit� di riscrittura di URL non funziona sul tuo server.",
"base" => "URL di base",
"rewriteDesc" => "La modalit� Rewrite sar� attivata se si sta usando WackoWiki per la  riscrittura d'URL.",
"rewrite" => "Modalit� Rewrite",
"enabled" => "Attivato",
"installed" => "Il tuo WackoWiki installato si autodefinisce come ",
"toUpgrade" => "Stai per <strong>aggiornare</strong> WackoWiki ",
"review" => "Verifica i tuoi parametri di configurazione in basso.",
"fresh" => "Poich&eacute; non esiste configurazione WackoWiki, si tratta probabilmente di una nuova installazione WackoWiki. Stai per installare WackoWiki ",
"pleaseConfigure" => "Configura il tuo sito WackoWiki come di seguito.",
"langConf" => "Configurazione della lingua",
"langDesc" => "Scegli una lingua per il processo d'installazione: la stessa sar� installata come lingua di default nel tuo WackoWiki.",
"lang" => "Scegli una lingua",
"VeryBad" => "Molto male. Chiamate subito gli sviluppatori! Possibile una perdita di dati.",
"Moving data to revisions table..." => "Trasferimento di dati alla tabella di revisione...",
"AdminConf" => "Configurazione dell'account di gestione",
"adminDesc" => "Immetti username dell'amministratore (dovr� essere un WikiName).",
"admin" => "Nome dell'amministratore",
"passwDesc" => "Scegli una password per amministratore (almeno 6 caratteri)",
"password" => "Immetti password",
"password2" => "Ripeti password",
"mailDesc" => "Email dell'amministratore.",
"mail" => "Email",
"adding pages" => "Aggiungi alcune pagine...",
"incorrect wikiname" => "Devi immettere un WikiName valido per il nome dell'amministratore!",
"incorrect email" => "Devi immettere un indirizzo email valido!",
"passwords don't match" => "Le password non coincidono, reimmetti password.",
"password too short" => "Password troppo corta, reimmetti un'altra.",
"adding admin" => "Aggiunge utente-amministratore...",
"Doubles" => "Se utilizzi <a href=\"http://wackowiki.de/WackoDocEnglish/CleanupScript\" target=\"_blank\">WackoWiki:WackoDocEnglish/CleanupScript</a>, renderai pi� veloce il tuo Wacko.",
"newinstall" => "Poich� si tratta di una nuova installazione, l'installatore ha ipotizzato i valori corretti. Modificali solo se sai quello che stai facendo!",
"multilangDesc" => "Multilanguage mode allows to have pages with different language settings within single installation. If this mode is enabled, installer will create initial pages for all languages available in distribution.",
"multilang" => "Multilanguage mode",
"PleaseBackup" => "Please, backup your database, config file and all changed files (themes may be) before starting upgrade process. This can save you from big headache.",
"apply rights" => "Trying to set write access for folder ",
"apply rights yourself" => "Please, set access rights to 0777 for folder ",
"RewriteModeAlert" => "ATTENTION!\nYour base URL & rewrite-mode settings looks suspicious. Usually there is no ? mark in base URL if rewrite-mode is set - but in your case there is one.\n\nTo continue with these settings click OK.\nTo get back to form & change settings click CANCEL.\n\nIf you are about to proceed with these settings, please note that they COULD cause malfunction of product.",
"adding logo image..." => "Adding logo image...",
);
?>