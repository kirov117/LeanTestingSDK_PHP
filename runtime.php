<pre style="width: 1400px; overflow: hidden; word-wrap: break-word;">
<?php

require 'lib/Client.php';

use LeanTesting\API\Client\PHPClient as LeanTestingClient;

$LT = new LeanTestingClient();
$LT->attachToken('3UsdKZXpGPnvHuJ9di1SeAFqrp14GKvQQMyclGRk');

// $orgs = $LT->user->organizations->all(['limit' => 1, 'page' => 1]);
// print_r($orgs);


// $prjs = $LT->projects->all(['limit' => 1, 'page' => 1]);
// print_r($prjs);


// $genUrl = $LT->auth->generateAuthLink(
// 	'RBxaSvtplj1Xos4vbEbwGKkXRu0GJmd5Rdha2HHa',
// 	'http://lev.it.cx:17600/lean/',
// 	'admin',
// 	'a3ahdh2iqhdasd'
// );
// echo $genUrl;


// $genTok = $LT->auth->exchangeAuthCode(
// 	'RBxaSvtplj1Xos4vbEbwGKkXRu0GJmd5Rdha2HHa',
// 	'FpOZxNbe9VEwVbjUINoAepOhgS8FNQsOkpE4CtPO',
// 	'authorization_code',
// 	'sOgY2DT47B2K0bqashnk0E6wUaYgbbspwdy9kGrk',
// 	'http://lev.it.cx:17600/lean/'
// );
// echo $genTok;


// $myBug = $LT->bugs->find(38483);

// $newAttach = $myBug->attachments->upload('/store1/Downloads/Faine/0_10e68c_39bcaa9f_XXL.jpg');
// print_r($newAttach);


// $myProj = $LT->projects->find(3515);
// $projBugs = $myProj->bugs->all(['limit' => 4]);

// $iter = 0;
// foreach ($projBugs as $pk => $pv) {
// 	echo 'iteration '. ++$iter . ' - ' . count($pv) . ' with key ' . $pk . '<br>';
// }




?>
</pre>