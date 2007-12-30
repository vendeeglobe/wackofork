<?php
$lang = array(
"DBError" => "La base de datos que ha configurado no ha sido encontrada. Debe existir antes de que instale o actualice WackoWiki!",
"TestSql" => "Test de los parametros de conexi�n database...",
"Testing Configuration" => "Test de la configuraci�n",
"Looking for database..." => "Buscando la base de datos...",
"pages alter" => "La tabla de paginas ha sido levemente modificada...",
"0.1.1" => "Enviando mensaje de odio a los desarrolladores...",
"useralter" => "La tabla de usuarios ha sido levemente modificada...",
"NextStep" => "A la proxima etapa, el instalador intentar� escribir el nuevo archivo de configuraci�n,",
"MakeWrite" => "Verifica que tu server tiene las permisiones necesarias (escritura) sobre el archivo de configuraci�n, o deberas cambiarlo a la mano.",
"ForDetailsSee" => "Otra vez, ve a <a href=\"http://wackowiki.de/DocEnglish/Installation\" target=\"_blank\">WackoWiki:DocEnglish/Instalaci�n</a> para m�s detalles",
"Continue" => "Continuar",
"Installing Stuff" => "Installando cosillas",
"Creating table..." => "%1 tabla(s) creadas...",
"Already exists?" => "Ya existe ?",
"to" => "a",
"Adding some pages..." => "A�adiendo algunas p�ginas...",
"Hmm!" => "Hmm!",
"Claiming all your base..." => "Reclamando todas tus bases...",
"And table..." => "Y %1 tabla(s) (espera!)...",
"writtenAt" => "Escribe a ",
"dontchange" => "No cambies wakka_version a la mano!",
"writing" => "<strong>Guardando la configuraci�n</strong><br />\n",
"writing2" => "Guardando el archivo de configuraci�n",
"ready" => "<p>Ya est�! Ahora puedes",
"return" => "volver a tu WackoWiki",
"SecurityRisk" => "Por fin, te aconsejamos de quitar los derechos de escritura para <tt>wakka.config.php</tt> ahora que existe. Dejar esos derechos es un fallo de seguridad!",
"warning" => "<span class=\"failed\">ATTENCION :</span> El archivo de configuraci�n",
"GivePrivileges" => "no se ha podido guardar. Tendr� que dar los derechos de escritura o a la carpeta WackoWiki o a un archivo vac�o con nombre de <tt>wakka.config.php</tt> (<tt>touch wakka.config.php ; chmod 666 wakka.config.php</tt>; no te olvides de cambiar los derechos despues, ie <tt>chmod 644 wakka.config.php</tt>). Si, por alguna raz�n, no puedes hacerlo, tendr�s que copiar el texto de abajo en un nuevo archivo, y guardar/subirlo como <tt>wakka.config.php</tt> en la carpeta WackoWiki. Una vez que hayas hecho eso, tu web WackoWiki tendr�a que funcionar. Sino, ve a <a href=\"http://wackowiki.de/DocEnglish/Installation\">WackoWiki:DocEnglish/Installation</a>",
"try again" => "Volver a intentar",
"title" => "Installaci�n de WackoWiki",
"failed" => "FRACASO",
"note" => "NOTA : Este instalador va a intentar de guardar el archivo de configuraci�n <tt>wakka.config.php</tt>, que se encuentra en la carpeta WackoWiki. Para hacer eso, debes darle permision de escritura sobre el archivo al server! Si no lo puedes hacer, tendras que cambiar el archivo a la mano (el installador te dir� como).<br /><br />Ver <a href=\"http://wackowiki.de/DocEnglish/Installation\" target=\"_blank\">WackoWiki:DocEnglish/Installation</a> para detalles.",
"dbConf" => "Configuraci�n de la base de datos",
#"mysqlHostDesc" => "Le server en el que esta tu server MySQL. Normalmente \"localhost\" (ie, la misma maquina que tu server).",
#"mysqlHost" => "Server MySQL",
#"dbDesc" => "La base de datos MySQL que debe utilizar WackoWiki. Esta base de datos debe existir antes que continues!",
#"db" => "Base de datos MySQL",
#"mysqlPasswDesc" => "Nombre y contrase�a de el usuario MySQL para conectarse a tu base de datos.",
#"mysqlUser" => "Nombre usuario MySQL",
#"mysqlPassw" => "Contrase�a MySQL",
#"prefixDesc" => "Prefijo de todas las tablas utilizadas por WackoWiki. Eso te permite tener mas de un WackoWiki utilizando la misma base de datos MySQL.",
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
"prefix" => "Prefijo para las tablas",
"SiteConf" => " Configuraci�n del web WackoWiki",
"nameDesc" => "El nombre del web WackoWiki. Es normalmente un NombreWiki y SePareceAAlgoComoEsto.",
"name" => "Tu nombre WackoWiki",
"homeDesc" => "Tu home page WackoWiki. Tendria que ser un NombreWiki.",
"home" => "Home page",
"metaDesc" => "META Palabras clave/Descripci�n a insertar en las cabeceras de las p�ginas HTML.",
"meta1" => "Meta Palabras clave",
"meta2" => "Meta Descripci�n",
"UrlConf" => "Configuraci�n del URL WackoWiki",
"baseDesc" => "Tu URL de base para WackoWiki. Los nonmbres de p�gina se concatenan a esto, asi que debe incluir el par�metro \"?page=\" si el modo rewrite no funciona en tu server.",
"base" => "URL de base",
"rewriteDesc" => "Rewrite mode debe estar activado si utilizas WackoWiki con reescritura de URL.",
"rewrite" => "Rewrite Mode",
"enabled" => "Activado",
"installed" => "Tu WackWiki instalado se declara el mismo como  ",
"toUpgrade" => "Estas a punto de <strong>actualizar</strong> tu WackoWiki ",
"review" => "Verifica tus par�metros de configuraci�n aqui abajo.",
"fresh" => "Como no existe configuraci�n WackoWiki, probablemente se trata de una nueva instalaci�n de WackoWiki. Estas a punto de instalar WackoWiki ",
"pleaseConfigure" => "Por favor, configura tu web WackWiki aqui abajo.",
"langConf" => "Configuraci�n del idioma",
"langDesc" => "Escoge un idioma para el proceso de instalaci�n. Ese mismo idioma ser� utilizado por defecto para tu installaci�n WackoWiki.",
"lang" => "Escoge un idioma",
"VeryBad" => "Muy malo. Llama a los desarrolladores imediatamente! P�rdida de datos posible.",
"Moving data to revisions table..." => "Transferencia de datos hacia la tabla de revision...",
"AdminConf" => "Configuraci�n de la cuenta del administrador",
"adminDesc" => "Entra un nombre para el administrador. Deber�a ser un NombreWiki.",
"admin" => "Nombre administrador",
"passwDesc" => "Escoge una contrase�a administrador (5+ car�cteres)",
"password" => "Entra una contrase�a",
"password2" => "Confirmar",
"mailDesc" => "Email administrador.",
"mail" => "Email",
"adding pages" => "A�adiendo algunas p�ginas...",
"incorrect wikiname" => "Debes dar un NombreWiki parar el nombre del administrador!",
"incorrect email" => "Debes dar una direcci�n email valida!",
"passwords don't match" => "Las contrase�as diferentes, vuelta a empezar.",
"password too short" => "Contrase�a demasiado corta, vuelta a empezar.",
"adding admin" => "A�adiendo el usuario administrador...",
"Doubles" => "Si utilizas un <a href=\"http://wackowiki.de/DocEnglish/CleanupScript\" target=\"_blank\">WackoWiki:DocEnglish/CleanupScript</a>, aumentaras la rapididad de tu WackoWiki.",
"newinstall" => "Como se tarta de una nueva installaci�n, el instalador ha intentado adivinar  los valores correctos. Cambialos solo si sabes lo que haces!",
"multilangDesc" => "Multilanguage mode allows to have pages with different language settings within single installation. If this mode is enabled, installer will create initial pages for all languages available in distribution.",
"multilang" => "Multilanguage mode",
"PleaseBackup" => "Please, backup your database, config file and all changed files (themes may be) before starting upgrade process. This can save you from big headache.",
"apply rights" => "Trying to set write access for folder ",
"apply rights yourself" => "Please, set access rights to 0777 for folder ",
"RewriteModeAlert" => "ATTENTION!\nYour base URL & rewrite-mode settings looks suspicious. Usually there is no ? mark in base URL if rewrite-mode is set - but in your case there is one.\n\nTo continue with these settings click OK.\nTo get back to form & change settings click CANCEL.\n\nIf you are about to proceed with these settings, please note that they COULD cause malfunction of product.",
"adding logo image..." => "Adding logo image...",
);
?>