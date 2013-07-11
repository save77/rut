<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><!--utf-8 gb2312-->

<?php

///WINDOWS
$os = "WINNT";
$mac = "00-23-54-24-CC-56";

print md5($mac);
print "<br />";
//LINUX
///$os="Linux";
//$mac="00:13:21:CC:F0:1D";



$r067="U";
$r030="T";
$license = "80";

$mall=pre_ch_count($mac);

if ($os == "WINNT") {
    $mc = explode("-", trim($mac));
} else if ($os == "Linux") {
    print "LINUX";
    $mc = explode(":", trim($mac));
} 


print $mac . "<br />";
print_r($mc);
print "<br />";
print "024-" . $mc[0] . "=" . md5($mc[0]) . "<br />";
print "002-" . $mc[1] . "=" . md5($mc[1]) . "<br />";
print "004-" . $mc[2] . "=" . md5($mc[2]) . "<br />";
print "025-" . $mc[3] . "=" . md5($mc[3]) . "<br />";
print "006-" . $license . "=" . md5($license) . "<br />";
print "011-" . $mc[4] . "=" . md5($mc[4]) . "<br />";
print "014-" . $mc[5] . "=" . md5($mc[5]) . "<br />";
print "034- =" . $mall . "<br />";
print"067-U=".md5($r067)."<br />";
print"030-T=".md5($r030)."<br />";
print"015-".$mac."=".md5($mac);

function pre_ch_count($str) {
    $b = "0123456789";
    $n = strlen($str);
    $x = strlen($b);

    $str_r = str_split($str);
    $bb = str_split($b);

    $newstr = "";

       $count = 8;

    for ($i = 0; $i <= count($str_r); $i++) {
        for ($j = 0; $j <= count($bb); $j++) {

            if (@$str_r[$i] == @$bb[$j]) {
                $count+=@$bb[$j];
            }
        }
    }
    
	print "sss:".$count."<br />";

    return md5($count);
}
?>