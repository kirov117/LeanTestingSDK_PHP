<pre>
<?php

require 'lib/Client.php';

use LeanTesting\API\Client\PHPClient as LeanTestingClient;

$LT = new LeanTestingClient();
$LT->attachToken('3UsdKZXpGPnvHuJ9di1SeAFqrp14GKvQQMyclGRk');

$orgs = $LT->user->organizations->all(['limit' => 1, 'page' => 1]);

print_r($orgs);

?>
</pre>