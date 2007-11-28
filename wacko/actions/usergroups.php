<?php
// author: IvanRudev 22 dec 2004
// action usergroups

// modified: David Millington 28 nov 2007
// added 3 user level outputting

// You have to be logged in to use this action
if($user = $this->GetUser())
   {
      if (!$cols) $cols = 4; //number of table columns
      else $cols = intval($cols);

      if (is_array($this->config['aliases']))
         {
            if (!$nomark)
               print('<fieldset><legend>'.$this->GetResourceValue("UserGroups").':</legend>');

            print ('<table border="0" cellspacing="5" cellpadding="5"><tr>');

            $i = 1;

            foreach($this->config['aliases'] as $gname => $gusers)
               {
                  if($i == $cols + 1)
                     {
                        print '</tr><tr>';
                        $i = 1;
                     }

                  $arr = explode("\n", $gusers);
                  $allowed_groups = array();

                  /*
                     If they are an Admin show them all users in all groups
                     Else they are a normal logged in user so just show them groups they belong to
                  */
                  if($this->IsAdmin() || in_array($user["name"], $arr))
                     {
                        print '<td valign="top">';

                        foreach ($arr as $k => $v)
                           $allowed_groups[] = $this->Link("/".$v,"",$v);

                        $gusers = implode("<br />", $allowed_groups);

                        // Print out the group name and then a list of the users under it
                        print "<strong>$gname</strong>:<br />".str_replace("\n","<br />",$gusers)."<br />";
                        print "</td>";

                        $i++;
                     }
               }

            print ('</tr></table>');

            if(!$nomark)
            print ('</fieldset>');
         }
   }
?>