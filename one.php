<?php
$haitham = "haitham";
if (is_dir($haitham)) {
  echo "file is exist" . "<br>";
} else {
  mkdir($haitham);
};


$dir = __DIR__ . "/" . $haitham;
if (is_dir($dir . "/hello")) {
  echo "file is exist";
} else {
  mkdir($dir . "/hello");
}
$file = $dir . "/text.txt";
chmod($file, 0444);
if (is_writable($file)) {
  file_put_contents($file, "New hello");
} else {
  chmod($file, 0755);
}
echo "<br>";
include $file;
