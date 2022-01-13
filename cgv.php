<?php
get:
$url = 'http://cgv.herokuapp.com/';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$hasil = curl_exec($curl);
$json = json_decode($hasil);
echo "\e\33[36;1mCGV Account Creator B1G1 - Create by Aprizal\e[0m\n";
echo "\e\33[36;1mBig Thanks To Dhani https://facebook.com/dhanisetiaji09\e[0m\n";
if(isset($json->email)){
echo "\e\33[32;1m[+]Email    : ".$json->email."\e[0m\n";
echo "\e\33[32;1m[+]Password : ".$json->password."\e[0m\n";
echo "\e\33[32;1m[+]PIN      : ".$json->pin."\e[0m\n";
echo "\e\33[32;1m[*]Note     : Login Melalui App/Web. Jika dibutuhkan Verifikasi, Lakukan Verifikasi di :\n              \e\33[36;1mhttps://generator.mail/".$json->email."\e[0m\n";
echo "\e\33[33;1m[*]Hasil tersimpan di result.txt\e[0m\n\n";
$of = fopen("result.txt", 'a');
fwrite($of, "Email : ".$json->email ."\nPassword : ". $json->password ."\nPIN : ". $json->pin."\n\n");
fclose($of);
goto get;
}else{
echo "\e\33[31;1m[!]Gagal Mendaftar - Akun Telah Terdaftar !\e[0m\n\n";
goto get;
}
?>
