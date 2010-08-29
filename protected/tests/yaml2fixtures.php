<?php
require 'lib/sfYamlParser.php';
$yaml = new sfYamlParser;
$fix = array('fakultas','jenjang','jurusan','kabupaten','kecamatan','kelompok','mahasiswa','program_kkn');
foreach($fix as $f) {
    $value = $yaml->parse(file_get_contents("yaml/{$f}.yml"));
    $str = "<?php \nreturn " . var_export($value,true) . ";";
    file_put_contents("fixtures/{$f}.php",$str);
}
