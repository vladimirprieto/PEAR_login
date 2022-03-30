 <?php
// In this test, the file is named "index.php".
//este es un comentario de prueba 
require_once "Auth.php";
require_once "con_db.php";

function loginFunction($username = null, $status = null, &$auth = null)
{
     /*
      * Change the HTML output so that it fits to your
      * application.
      */
     echo "<form method=\"post\" action=\"index.php?login=1\">";
     echo "<input type=\"text\" name=\"username\">";
     echo "<input type=\"password\" name=\"password\">";
     echo "<input type=\"submit\">";
     echo "</form>";

     $auth->logout();
}

$a = new Auth("DB", $options, "loginFunction", true);

$a->start();

echo "Everybody can see this text!<br />";

if (!isset($_GET['login']) && !$a->getAuth()) {
     echo "<a href=\"index.php?login=1\">Click here to log in</a><br>";
}

if ($a->getAuth()) {
     echo "<br>One can only see this if he is logged in!<br>";
     echo "<br><a href=\"logout.php?action=logout\">Click here to log OUT</a><br>";
}
?> 