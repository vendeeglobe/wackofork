<?php

/*
   Most Popular Pages Action

   All arguments are optional, the "dontrecurse" argument is only used when the "for" argument is used and even then it's still optional

   {{mostpopular
      [max="50"] // maximum number of pages to retrieve
      [for="HomePage"] // page name to start from in the page hierarchy
      [dontrecurse="true|false"] // if set to true the list will only include pages that are direct children of the "for" page
   }}
*/

if (!$max)  $max = 25;
if ($max>500) $max = 500;

if(!$for)
   {
      $pages = $this->LoadAll("select tag ,hits from ".$this->config["table_prefix"]."pages order by hits desc limit ".(2*(int)$max));
   }
else
   {
      // There's a leading forward slash which needs to be removed since pages are not stored in SQL with a leading slash
      if(strpos($for, "/") === 0)
         {
            $for = substr($for, 1);
         }

      if(!$dontrecurse || strtolower($dontrecurse) == 'false')
         {
            // We want to recurse and include all the sub pages of sub pages (and so on) in the listing
            $pages = $this->LoadAll("select tag, hits from ".$this->config["table_prefix"]."pages, ".$this->config["table_prefix"]."links WHERE tag = to_tag AND INSTR(from_tag, '".$for."') = 1 AND INSTR(to_tag, '".$for."') = 1 order by hits desc limit ".(2*(int)$max));
         }
      else
         {
            // The only pages we want to display are those directly under the selected page, not their kids and grandkids
            $pages = $this->LoadAll("select tag, hits from ".$this->config["table_prefix"]."pages, ".$this->config["table_prefix"]."links WHERE tag = to_tag AND from_tag = '".$for."' AND INSTR(to_tag, '".$for."') = 1 order by hits desc limit ".(2*(int)$max));
         }
   }

$num = 0;

print("<table>");
foreach ($pages as $page)
{
  if ($num<$max)
  {
   if ($this->config["hide_locked"]) $access = $this->HasAccess("read",$page["tag"]);
   else $access = true;
   if ($access)
   {
     // print entry
     $num++;
     print("<tr><td>&nbsp;&nbsp;".$num.".&nbsp;".$this->Link("/".$page["tag"],"",$page["tag"])."</td><td>".
           $this->GetResourceValue("Shown")."</td><td>".
           $page["hits"]."</td></tr>\n");
   }
  }
}
print("</table>");

?>