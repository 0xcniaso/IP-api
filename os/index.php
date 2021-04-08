<?php
function OS($user_agent){
$exp = explode(" ", $user_agent);
$oses = array (
'Windows 3.11' => 'Win16',
'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)',
'Windows 98' => '(Windows 98)|(Win98)',
'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
'Windows Vista' => '(Windows NT 6.0)|(Windows Vista)',
'Windows 7' => '(Windows NT 6.1)|(Windows 7)',
'Windows 2003' => '(Windows NT 5.2)',
'Windows NT 4.0' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
'Windows ME' => 'Windows ME',
'Open BSD'=>'OpenBSD',
'Sun OS'=>'SunOS',
'Linux'=>'(Linux)|(X11)',
'Macintosh'=>'(Mac_PowerPC)|(Macintosh)',
'QNX'=>'QNX',
'BeOS'=>'BeOS',
'OS/2'=>'OS/2',
'Palm OS'=>'Palm OS',
'Search Bot'=>'(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)',
'J2ME-Opera Mini'=>'Opera Mini',
'SonyE'=>'J2ME-MIDP',
'Symbian OS'=>'Symbian OS',
'SymbianOS 6.1'=>'SymbianOS/6.1',
'SymbianOS 7.0'=>'SymbianOS/7.0',
'SymbianOS 8.0'=>'SymbianOS/8.0',
'SymbianOS 9.1'=>'SymbianOS/9.1',
'SymbianOS 9.2'=>'SymbianOS/9.2',
'SymbianOS 9.4'=>'SymbianOS/9.4',
'Mac OS (iPhone)'=>'iPhone',
'Windows CE' => 'Windows CE'
);

foreach($oses as $os=>$pattern){
if (eregi($pattern,$user_agent))
return $os;
}
return 'OS Inconnu';
}
echo OS($_SERVER['HTTP_USER_AGENT']);
?>