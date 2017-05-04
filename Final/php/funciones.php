<?
require_once('config.php');
require_once('adodb5/adodb.inc.php');
require_once('adodb5/adodb-pager.inc.php');

function conecta_db() {
  global $db_user, $db_pass, $db_db, $ADODB_FETCH_MODE;

  $db = NewADOConnection('mysql');
  //$db->debug = true;
  $db->Connect("localhost", $db_user, $db_pass, $db_db);
  $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;

  $rs = $db->Execute("SELECT COUNT(*) cuantos
  	FROM information_schema.tables
  	WHERE table_schema = '".$db_db."'
  	AND table_name = 'modulo_correo'");
  if($rs) {
  	if(!$rs->EOF) {
  		if(1==$rs->fields['cuantos']) {
  			$rs2 = $db->Execute("SELECT * FROM modulo_correo LIMIT 1");
  			if($rs2) {
  				if(!$rs2->EOF) {
  					if(1==$rs2->fields['moco_activo']) {
  						define('modulo_correo',1);
  						foreach($rs2->fields as $k => $v) define($k, $v);
  					}
  				}
  				$rs2->Close();
  			}
  		}
  	}
  	$rs->Close();
  }
?>
