<?php

function quote($dblink,$string)
   {
      return mysqli_escape_string($dblink, $string);
   }

function query($query, $dblink="")
   {
      $result = mysqli_query($dblink, $query);
      if (mysqli_connect_errno())
         {
            ob_end_clean();
            die("Query failed: ".$query." (".mysqli_connect_errno().": ".mysqli_connect_error().")");
         }
      return $result;
   }

function fetch_assoc($rs)
   {
      return mysqli_fetch_assoc($rs);
   }

function free_result($rs)
   {
      return mysqli_free_result($rs);
   }

function connect($host, $user, $passw, $db, $collation = false)
   {
      $dblink = mysqli_connect($host, $user, $passw, $db);
      if ($collation)  mysqli_query($dblink, "SET NAMES '".$collation."'");
      return $dblink;
   }
?>