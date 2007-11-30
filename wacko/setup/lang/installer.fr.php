<?php
$lang = array(
"DBError" => "La base de donn&eacute;e que vous avez entr&eacute; n'a pas &eacute;t&eacute; trouv&eacute;e. Elle doit exister avant que vous installiez ou mettez &agrave; jour WackoWiki!",
"TestSql" => "Teste les param&egrave;tres de connexion database...",
"Testing Configuration" => "Teste de la configuration",
"Looking for database..." => "Recherche de la base de donn&eacute;e...",
"pages alter" => "La table des pages a &eacute;t&eacute; l&eacute;g&egrave;rement modifi&eacute;e...",
"0.1.1" => "Envoie du message de haine aux d&eacute;veloppeurs...",
"useralter" => "La table des utilisateurs a &eacute;t&eacute; l&eacute;g&egrave;rement modifi&eacute;e...",
"NextStep" => "A la prochaine &eacute;tape, l'installeur essayera d'&eacute;crire le nouveau fichier de configuration,",
"MakeWrite" => "V&eacute;rifier que votre serveur a les droits d'&eacute;critures sur le fichier de configuration, ou vous devrez l'&eacute;diter manuellement",
"ForDetailsSee" => "Encore une fois, regarder <a href=\"http://wackowiki.de/WackoDocEnglish/Installation\" target=\"_blank\">WackoWiki:WackoDocEnglish/Installation</a> pour les d&eacute;tails",
"Continue" => "Continuer",
"Installing Stuff" => "Installe les trucs",
"Creating table..." => "%1 table(s) cr&eacute;&eacute;e(s)...",
"Already exists?" => "Existe d&eacute;j&agrave; ?",
"to" => "&agrave;",
"Adding some pages..." => "Ajoute quelques pages...",
"Hmm!" => "Hmm!",
"Claiming all your base..." => "R&ecute;clame toutes vos bases...",
"And table..." => "Et %1 table(s) (attendez!)...",
"writtenAt" => "&eacute;cris &agrave; ",
"dontchange" => "Ne changer pas wakka_version manuellement!",
"writing" => "<strong>Ecriture de la configuration</strong><br />\n",
"writing2" => "Ecriture du fichier de configuration",
"ready" => "<p>C'est tout! Vous pouvez maintenant",
"return" => "retourner vers votre site WackoWiki",
"SecurityRisk" => "Enfin, nous vous conseillons d'enlever les droits d'&eacute;critures sur <tt>wakka.config.php</tt> maintenant qu'il a &eacute;t&eacute; &eacute;crit. Laisser les droits est un trou dans votre s&eacute;curit&eacute;!",
"warning" => "<span class=\"failed\">ATTENTION :</span> Le fichier de configuration",
"GivePrivileges" => "n'a pas pu &ecirc;tre &eacute;cris. Vous aurez besoin de donner les droits d'acc&egrave;s en &eacute;criture soit au dossier WackoWiki ou a un fichier vide nomm&eacute; <tt>wakka.config.php</tt> (<tt>touch wakka.config.php ; chmod 666 wakka.config.php</tt>; don't forget to remove write access again later, ie <tt>chmod 644 wakka.config.php</tt>). If, for any reason, you can't do this, you'll have to copy the text below into a new file and save/upload it as <tt>wakka.config.php</tt> into the WackoWiki directory. Once you've done this, your WackoWiki site should work. If not, please visit <a href=\"http://wackowiki.de/WackoDocEnglish/Installation\">WackoWiki:WackoDocEnglish/Installation</a>",
"try again" => "R&eacute;essayer",
"title" => "Installation de WackoWiki",
"failed" => "ECHEC",
"note" => "NOTE : Cet installeur va essayer d'&eacute;crire le fichier de configuration <tt>wakka.config.php</tt>, qui se trouve dans votre dossier WackoWiki. Pour mener &agrave; bien l'op&eacute;ration, vous devez donner les droits d'&eacute;criture sur le fichier pour le serveur! Si vous ne pouvez le faire, vous devrez &eacute;diter le fichier de configuration manuellement (l'installeur vous dira comment).<br /><br />Voir <a href=\"http://wackowiki.de/WackoDocEnglish/Installation\" target=\"_blank\">WackoWiki:WackoDocEnglish/Installation</a> pour les d&eacute;tails.",
"dbConf" => "Configuration de la base de donn&eacute;e",
#"mysqlHostDesc" => "Le serveur sur lequel tourne votre server MySQL. Normalement \"localhost\" (ie, la m&ecirc;me machine que votre serveur).",
#"mysqlHost" => "Serveur MySQL",
#"dbDesc" => "La base de donn&eacute;e MySQL que doit utilis&eacute; WackoWiki. Cette base de donn&eacute;e doit exister avant que vous continuiez!",
#"db" => "Base de donn&eacute;e MySQL",
#"mysqlPasswDesc" => "Nom et mot de passe de l'utilisateur MySQL pour se connecter &agrave; votre base de donn&eacute;e.",
#"mysqlUser" => "Nom utilisateur MySQL",
#"mysqlPassw" => "Mot de passe MySQL",
#"prefixDesc" => "Prefixe de toutes les tables utilis&eacute;es par WackoWiki. Ceci vous permet d'avoir plusieurs WackoWiki utilisant la m&ecirc;me base de donn&eacute;e MySQL.",
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
"prefix" => "Prefixe pour les tables",
"SiteConf" => " Configuration du site WackoWiki",
"nameDesc" => "Le nom de votre site WackoWiki. C'est normalement un NomWiki et RessembleAQuelqueChoseCommeCa.",
"name" => "Votre nom WackoWiki",
"homeDesc" => "Votre page d'accueil WackoWiki. Devrait &ecirc;tre un NomWiki.",
"home" => "Page d'accueil",
"metaDesc" => "META Mots clefs/Description qui est ins&eacute;rer dans les haut de page HTML.",
"meta1" => "Meta Mots clefs",
"meta2" => "Meta Description",
"UrlConf" => "Configuration de l'URL WackoWiki",
"baseDesc" => "Votre URL de base pour WackoWiki. Les nom de page sont ajouter &agrave; ceci, ainsi il doit inclurele param&ecirc;tre \"?page=\" si le mode rewrite ne fonctionne pas sur votre serveur.",
"base" => "URL de base",
"rewriteDesc" => "Rewrite mode doit &ecirc;tre activ&eacute; si vous utilis&eacute; WackoWiki avec la r&eacute;&eacute;criture d'URL.",
"rewrite" => "Rewrite Mode",
"enabled" => "Activ&eacute;",
"installed" => "Votre WackWiki install&eacute; se d&eacute;clare lui-m&ecirc;me comme ",
"toUpgrade" => "Vous &ecirc;tes sur le points de <strong>mettre &agrave; jour</strong> votre WackoWiki ",
"review" => "V&eacute;rifiez vos param&egrave;tres de configuration ci-dessous.",
"fresh" => "Puisqu'il n'&eacute;xiste pas de configuration WackoWiki, il s'agit probablement d'une nouvelle installation WackoWiki. Vous &ecirc;tes sur le point d'installer WackoWiki ",
"pleaseConfigure" => "Veuillez configurer votre site WackWiki ci-dessous.",
"langConf" => "Configuration de la langue",
"langDesc" => "Choisissez un langage pour le processus d'installation. Le m&ecirc;me langage sera utilis&eacute; par d&eacute;faut pour votre installation WackoWiki.",
"lang" => "Choisissez une langue",
"VeryBad" => "Tr&egrave;s mauvais. Appelez imm&eacute;diatement les d&eacute;veloppeurs! Perte de donn&eacute;e possible.",
"Moving data to revisions table..." => "Transfert des donn&eacute;es vers la table de revision...",
"AdminConf" => "Configuration du compte administrateur",
"adminDesc" => "Entrez un nom pour l'administrateur. Devrait &ecirc;tre un NomWiki.",
"admin" => "Nom administrateur",
"passwDesc" => "Choisissez un mot de passe administrateur (5+ caract&egrave;res)",
"password" => "Entrez un mot de passe",
"password2" => "Confirmer",
"mailDesc" => "Email administrateur.",
"mail" => "Email",
"adding pages" => "Ajout de quelques pages...",
"incorrect wikiname" => "Vous devez entrer un NomWiki pour le nom de l'administrateur!",
"incorrect email" => "Vous devez entrer une adresse email valide!",
"passwords don't match" => "Les mots de passes sont diff&eacute;rents, recommencez.",
"password too short" => "Mot de passe trop court, recommencez.",
"adding admin" => "Ajout de l'utilisateur administrateur...",
"Doubles" => "Si vous utilisez un <a href=\"http://wackowiki.de/WackoDocEnglish/CleanupScript\" target=\"_blank\">WackoWiki:WackoDocEnglish/CleanupScript</a>, vous augmenterez la rapidit&eacute; de votre WackoWiki.",
"newinstall" => "Comme il s'agit d'une nouvelle installation, L'installeur a essay&eacute; de deviner les valeurs corrects. Changez-les seulement si vous savez ce que vous faites !",
"multilangDesc" => "Multilanguage mode allows to have pages with different language settings within single installation. If this mode is enabled, installer will create initial pages for all languages available in distribution.",
"multilang" => "Multilanguage mode",
"PleaseBackup" => "Please, backup your database, config file and all changed files (themes may be) before starting upgrade process. This can save you from big headache.",
"apply rights" => "Trying to set write access for folder ",
"apply rights yourself" => "Please, set access rights to 0777 for folder ",
"RewriteModeAlert" => "ATTENTION!\nYour base URL & rewrite-mode settings looks suspicious. Usually there is no ? mark in base URL if rewrite-mode is set - but in your case there is one.\n\nTo continue with these settings click OK.\nTo get back to form & change settings click CANCEL.\n\nIf you are about to proceed with these settings, please note that they COULD cause malfunction of product.",
"adding logo image..." => "Adding logo image...",
);
?>