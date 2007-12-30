<?php
$lng = "fr";

if ($config["language"]==$lng)
{
 InsertPage($config["root_page"], "((file:wacko4.gif WackoWiki))\n**Bienvenue sur votre site ((WackoWiki:WackoWiki WackoWiki))!**\n\nCliquez sur le lien \"Editer cette page\" en bas de la page pour commencer.\n\nUne documentation sommaire en anglais peut &ecirc;tre trouv&eacute;e ici : WackoWiki:DocFrancophone.\n\nPages utiles: PagesOrphelines, PagesDemandées, ((Recherche)), MesPages, MesModifications.\n\n", $lng);
 InsertPage('PagesDemandées', '{{WantedPages}}', $lng);
 InsertPage('PagesOrphelines', '{{OrphanedPages}}', $lng);
 InsertPage('MesPages', '{{MyPages}}', $lng);
 InsertPage('MesModifications', '{{MyChanges}}', $lng);
}

InsertPage('DernièresModifications', '{{RecentChanges}}', $lng);
InsertPage('DerniersCommentaires', '{{RecentlyCommented}}', $lng);
InsertPage('PageIndex', '{{PageIndex}}', $lng);
InsertPage('Utilisateurs', '{{LastUsers}}', $lng);
InsertPage('Enregistrement', '{{Registration}}', $lng);

InsertPage('Password', '{{ChangePassword}}', $lng);
InsertPage('Recherche', '{{Search}}', $lng);
InsertPage('Connexion', '{{Login}}', $lng);
InsertPage('Préférences', '{{UserSettings}}', $lng);

InsertPage('InterWiki', '{{InterWikiList}}', $lng);

?>