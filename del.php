<?
$deldir = "upload/";
rmdirr($deldir);
function rmdirr($dirname)
{
if (!file_exists($dirname)) {
return false;
}
if (is_file($dirname)) { return unlink($dirname); }
$dir = dir($dirname); while (false !== $entry = $dir->read()) { if ($entry == '.' || $entry == '..') { continue;
} rmdirr("$dirname/$entry");
} $dir->close();
return rmdir($dirname);
}
?>
