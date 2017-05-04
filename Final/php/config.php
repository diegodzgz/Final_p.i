<?
define('AMBIENTE_PRODUCCION',true);
if(AMBIENTE_PRODUCCION) {
// Produccion
$db_user = "root";
$db_pass = "wallace";
$db_db   = "depormundo";

//$ha = parse_url($_SERVER['SCRIPT_URI']);
//$HOST = $ha['host'];

unset($ha);
} else {
// Desarrollo
$db_user = "root";
$db_pass = "";
$db_db   = "gp";
$arfe = "";
$JURL = "gp";
}
?>
