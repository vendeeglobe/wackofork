<?php
$lang = array(
"DBError" => "Die von dir angegebene Datenbank wurde nicht gefunden. Bitte beachte, dass diese bereits vor der Installation/Aktualisierung von WackoWiki existieren muss!",
"TestSql" => "�berpr�fe Einstellungen zur Datenbank Verbindung...",
"Testing Configuration" => "�berpr�fe Konfiguration",
"Looking for database..." => "Suche nach Datenbank...",
"pages alter" => "�ndere geringf�gig die Tabelle 'pages'...",
"0.1.1" => "Sende Hassmail an die WackoWiki Entwickler...",
"useralter" => "�ndere geringf�gig die Tabelle 'user'...",
"NextStep" => "Im n�chsten Schritt wird das Installationsprogramm versuchen, die aktualisierte Konfigurationsdatei zu schreiben,",
"MakeWrite" => "Bitte stelle sicher, dass der Webserver Schreibrechte auf die Datei besitzt oder du musst die Datei von Hand �ndern",
"ForDetailsSee" => "F�r die Einzelheiten besuche bitte <a href=\"http://wackowiki.de/DocDeutsch/Installation\" target=\"_blank\">WackoWiki:DocDeutsch/Installation</a>",
"Continue" => "Weiter",
"Installing Stuff" => "Installiere Tabellen",
"Creating table..." => "Erstelle Tabelle '%1'...",
"Already exists?" => "Bereits vorhanden?",
"to" => "zu",
"Adding some pages..." => "F�ge einige Seiten hinzu...",
"Hmm!" => "Hmm!",
"Claiming all your base..." => "Claiming all your base...",
"And table..." => "und Tabelle '%1' (Warte!)...",
"writtenAt" => "eingetragen in ",
"dontchange" => "�ndere wakka_version nicht von Hand!",
"writing" => "<strong>Schreibe Konfiguration</strong><br/>\n",
"writing2" => "Schreibe Konfigurationsdatei",
"ready" => "<p>Das wars! Du kannst nun",
"return" => "zu Deinem WackoWiki zur�ckkehren",
"SecurityRisk" => "Es wird dringend empfohlen, das Schreibrecht auf die Datei <tt>wakka.config.php</tt> nach dem Schreiben der Konfiguration wieder mit <tt>chmod 644</tt> zu entfernen. Eine �berschreibbare Konfigurationsdatei ist ein Sicherheitsrisiko!",
"warning" => "<span class=\"failed\">WARNUNG:</span> Die Konfigurationsdatei",
"GivePrivileges" => "konnte nicht geschrieben werden. Du musst dem Webserver vor�bergehend Schreibrechte auf das WackoWiki Verzeichnis oder auf eine leere Datei <tt>wakka.config.php</tt> (<tt>touch wakka.config.php ; chmod 666 wakka.config.php</tt> geben; vergiss nicht, das Schreibrecht sp�ter wieder zu entziehen, z.B. mit <tt>chmod 644 wakka.config.php</tt>). Falls das aus irgendwelchen Gr�nden nicht m�glich ist, kopiere den folgenden Text in eine neue Datei und speichere diese unter <tt>wakka.config.php</tt> in dem WackoWiki Verzeichnis ab. Danach sollte Dein WackoWiki funktionieren. Falls nicht, gehe zu <a href=\"http://wackowiki.de/DocDeutsch/Installation\" target=\"_blank\">WackoWiki:DocDeutsch/Installation</a>",
"try again" => "Nochmal versuchen",
"title" => "WackoWiki Installation",
"failed" => "FEHLGESCHLAGEN",
"note" => "ACHTUNG: Dieses Skript wird versuchen, die Einstellungen in die Datei <tt>wakka.config.php</tt> zu schreiben, diese Datei befindet sich im WackoWiki Verzeichnis. Damit das funktioniert, musst du sicherstellen, dass der Webserver Schreibrechte auf diese Datei hat! Falls du das nicht kannst, musst du die Datei sp�ter von Hand �ndern (das Installationsskript sagt dir dann, was zu tun ist).<br/><br/>Lies <a href=\"http://wackowiki.de/DocDeutsch/Installation\" target=\"_blank\">WackoWiki:DocDeutsch/Installation</a> f�r weitere Einzelheiten.",
"dbConf" => "Datenbankkonfiguration",
"dbDriverDesc" => "Der Datenbanktreiber der verwendet werden soll. Du musst einen Altsystem (legacy) Treiber w�hlen falls PHP5.1 (oder gr��er) und <a href=\"http://de2.php.net/pdo\" target=\"_blank\">PDO</a> nicht zur Verf�gung stehen.",
"dbDriver" => "Datenbank Treiber",
"dbPortDesc" => "Die Port-Nummer �ber die dein Datenbankservers erreichbar ist, bei Verwendung der default Port Nummer leer lassen.",
"dbPort" => "Datenbank Port",
"dbHostDesc" => "Der Server, auf dem deine Datenbank l�uft. Normalerweise \"localhost\" (wenn Dein WackoWiki auf dem gleichen Server ist) oder der Host deines Providers.",
"dbHost" => "Datenbank Host",
"dbDesc" => "Die Datenbank f�r unser WackoWiki. Diese Datenbank muss bereits existieren!",
"db" => "Name der Datenbank",
"dbPasswDesc" => "Name und Passwort des Benutzers f�r die Datenbankverbindung",
"dbUser" => "Benutzername",
"dbPassw" => "Passwort",
"noDbDriverSelected" => "Es wurde kein Datenbanktreiber ausgew�hlt, bitte suche den passenden Treiber aus der Liste aus.",
"noDbDriverDetected" => "Es wurde kein Datenbanktreiber erkannt, bitte aktiviere entweder die mysql, mysqli oder pdo Erweiterung in deiner php.ini Datei.",
"prefixDesc" => "Pr�fix f�r alle Tabellen, die von WackoWiki benutzt werden. Man kann eine MySQL-Datenbank f�r mehrere WackoWikis verwenden in dem man unterschiedliche Tabellenpr�fixe verwendet.",
"prefix" => "Tabellenpr�fix",
"SiteConf" => "WackoWiki Konfiguration",
"nameDesc" => "Der Name Deines WackoWikis. Normalerweise ist das ein WikiName und sieht EtwaSoAus (z.B. MeinWackoWiki).",
"name" => "WackoWiki-Name",
"homeDesc" => "Der Name der Startseite Deines WackoWikis. Sollte ein WikiName sein (z.B. StartSeite).",
"home" => "Startseite",
"metaDesc" => "META Schl�sselworte/Beschreibung die in den HTML-Header eingef�gt werden sollen.",
"meta1" => "Meta Schl�sselworte",
"meta2" => "Meta Beschreibung",
"UrlConf" => "WackoWiki URL Konfiguration",
"baseDesc" => "Die Basis-URL Deines WackoWikis (Standardeinstellung ist richtig, ggf. https://... verwenden).  Die Seitennamen werden an diese angeh�ngt. Sollte URL-Umschreiben auf Deinem Server nicht funktionieren, musst du  <tt>\"index.php?page=\"</tt> mit einf�gen.",
"base" => "Basis-URL",
"rewriteDesc" => "<a href=\"http://wackowiki.de/DocDeutsch/RewriteModus\" target=\"_blank\">Umschreiben</a> muss aktiviert werden, falls du das WackoWiki mit URL-Umschreiben verwenden willst.",
"rewrite" => "Umschreiben",
"enabled" => "aktiviert",
"installed" => "Dein installiertes WackoWiki meldet sich selbst als ",
"toUpgrade" => "Du <strong>aktualisierst</strong> gerade zu WackoWiki ",
"review" => "Bitte �berpr�fe Deine nachfolgenden Einstellungen.",
"fresh" => "Weil keine WackoWiki-Konfigurationsdatei existiert, ist das m�glicherweise eine Neuinstallation. Du installierst gerade WackoWiki ",
"pleaseConfigure" => "Bitte konfiguriere Dein WackoWiki mittels dieses Formulars.",
"langConf" => "Spracheinstellungen",
"langDesc" => "W�hle eine Sprache f�r die Installation aus. Das wird die Standardsprache f�r Dein WackoWiki.",
"lang" => "W�hle eine Sprache",
"VeryBad" => "Sehr schlecht. Rufe sofort die Entwickler! M�glicher Datenverlust.",
"Moving data to revisions table..." => "Verschiebe Daten in Tabelle 'revision'...",
"AdminConf" => "Konfiguration des Verwaltungskontos",
"adminDesc" => "Gib den Benutzernamen des Verwalters an. Sollte ein WikiName sein (z.B. WikiAdmin).",
"admin" => "Verwalter",
"passwDesc" => "W�hle ein Passwort f�r den Verwalter (5+ Zeichen)",
"password" => "Passwort",
"password2" => "Wiederhole Passwort",
"mailDesc" => "E-Mailadresse des Verwalters.",
"mail" => "E-Mail",
"adding pages" => "F�ge einige Seiten hinzu...",
"incorrect wikiname" => "Du musst einen korrekten WikiNamen als Benutzernamen f�r den Verwalter angeben!",
"incorrect email" => "Du musst eine korrekte E-Mailadresse f�r den Verwalter angeben!",
"passwords don't match" => "Passw�rter stimmen nicht �berein, bitte neu eingeben.",
"password too short" => "Passwort zu kurz, bitte neu eingeben.",
"adding admin" => "F�ge Benutzerkonto f�r Verwalter hinzu...",
"Doubles" => "Um Wacko zu beschleunigen, benutze <a href=\"http://wackowiki.de/DocEnglish/CleanupScript\" target=\"_blank\">WackoWiki:DocEnglish/CleanupScript</a>.",
"newinstall" => "Weil dies eine Neuinstallation ist, versucht das Installationsskript die richtige Parameter zu ermitteln. �ndere diese Werte nur, wenn du weisst, was du tust!",
"multilangDesc" => "Der Mehrsprachen-Modus erm�glicht Seiten mit unterschiedlichen Spracheinstellungen innerhalb einer Installation. Wenn dieser Modus aktiviert ist, wird die Installations-Routine die Grundseiten in allen Sprachen erstellen, die in dieser Version verf�gbar sind.",
"multilang" => "mehrsprachiger Modus",
"PleaseBackup" => "Bitte, mache eine Sicherungskopie von deiner Datenbank, der wakka.config.php-Datei und aller ge�nderter Dateien (ggf. auch Layouts) bevor du den Aktualisierungs-Vorgang startest. Das kann dir im Problemfall viel �rger ersparen.",
"apply rights" => "Versuche Schreibrechte zu setzen f�r das Verzeichnis",
"apply rights yourself" => "Bitte setze die Zugriffsrechte auf 777 f�r das Verzeichnis",
"RewriteModeAlert" => "ACHTUNG!\nDeine Basis-URL & die Umschreib-Rechte (rewrite-mode settings) schauen ungew�hnlich aus. Normalerweise ist da kein ? in der URL wenn Umschreibe-Rechte aktiviert sind - in deinem Fall ist da aber ein Fragezeichen.\n\nUm dennoch mit diesen Einstellungen fortzufahren dr�cke OK.\nZur�ck zu den Einstellungen (form & change settings) dr�cke ABBRECHEN.\n\nFalls du mit den Einstellungen fortf�hrst, kann diese Software-Installation zu unerwarteten Fehlern f�hren.",
"adding logo image..." => "F�ge WackoWiki Logo hinzu...",
);
?>