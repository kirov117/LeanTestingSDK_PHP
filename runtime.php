<pre style="width: 1400px; overflow: hidden; word-wrap: break-word;">
<?php

require 'LeanTestingSDK/PHPClient.php';

use LeanTesting\API\Client\PHPClient as LeanTestingClient;

$LT = new LeanTestingClient();
$LT->attachToken('3UsdKZXpGPnvHuJ9di1SeAFqrp14GKvQQMyclGRk');

/* METHOD DEMONSTRATIONS */

/////////////////////////////////////////////////////////////////////////////////////

// Get USER Information
// print_r( $LT->user->getInformation() );

// Get USER Organizations
// print_r( $LT->user->organizations->all()->toArray() );

/////////////////////////////////////////////////////////////////////////////////////

// List All PROJECTS
// print_r( $LT->projects->all()->toArray() );

// Create A New PROJECT
// $new_project = $LT->projects->create([
// 	'name' => 'Project135',
// 	'organization_id' => 5779
// ]);
// print_r( $new_project->data );

// Retrieve An Existing PROJECT
// print_r( $LT->projects->find(3515)->data );


// List PROJECT Sections
// print_r( $LT->projects->find(3515)->sections->all()->toArray() );

// Adding A PROJECT Section
// $new_section = $LT->projects->find(3515)->sections->create([
// 	'name' => 'SectionName'
// ]);
// print_r( $new_section->data );


// List PROJECT Versions
// print_r( $LT->projects->find(3515)->versions->all()->toArray() );

// Adding A PROJECT Version
// $new_version = $LT->projects->find(3515)->versions->create([
// 	'number' => 'v0.3.1104'
// ]);
// print_r( $new_version->data );


// List PROJECT Users
// print_r( $LT->projects->find(3515)->users->all()->toArray() );


// List Bug Type Scheme
// print_r( $LT->projects->find(3515)->bugTypeScheme->all()->toArray() );

// List Bug Status Scheme
// print_r( $LT->projects->find(3515)->bugStatusScheme->all()->toArray() );

// List Bug Severity Scheme
// print_r( $LT->projects->find(3515)->bugSeverityScheme->all()->toArray() );

// List Bug Reproducibility Scheme
// print_r( $LT->projects->find(3515)->bugReproducibilityScheme->all()->toArray() );

/////////////////////////////////////////////////////////////////////////////////////

// List All BUGS In A Project
// print_r( $LT->projects->find(3515)->bugs->all()->toArray() );

// Create A New BUG
// $new_bug = $LT->projects->find(3515)->bugs->create([
// ])
//TODO

// Retrieve Existing BUG
// print_r( $LT->bugs->find(38483)->data );

// Update A BUG
//TODO

// Delete A BUG
//TODO

/////////////////////////////////////////////////////////////////////////////////////

// List Bug COMMENTS
// print_r( $LT->bugs->find(38483)->comments->all()->toArray() );

/////////////////////////////////////////////////////////////////////////////////////

// List Bug ATTACHMENTS
// print_r( $LT->bugs->find(38483)->attachments->all()->toArray() );

// Upload An ATTACHMENT
//TODO

// Retrieve An Existing ATTACHMENT
// print_r( $LT->attachments->find(21515)->data );

// Delete An ATTACHMENT
//TODO

/////////////////////////////////////////////////////////////////////////////////////

// List PLATFORM Types
// print_r( $LT->platform->types->all()->toArray() );

// Retrieve PLATFORM Type
//TODO wait for fix


// List PLATFORM Devices
//TODO wait for fix

// Retrieve Existing  Device
//TODO wait for fix


// List OS
// print_r( $LT->platform->os->all()->toArray() );

// Retrieve Existing OS
//TODO wait for fix

// List OS Versions
//TODO wait for fix


// List Browsers
//TODO wait for fix

// List Browser Versions
//TODO wait for fix


////////////////
// MISC TESTS //
////////////////

// $orgs = $LT->user->organizations->all(['limit' => 1, 'page' => 1]);
// print_r( $orgs );


// $prjs = $LT->projects->all(['limit' => 1, 'page' => 1]);
// print_r( $prjs );


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
// print_r( $newAttach );


// $myProj = $LT->projects->find(3515);
// $projBugs = $myProj->bugs->all(['limit' => 4]);

// $iter = 0;
// foreach ($projBugs as $pk => $pv) {
// 	echo 'iteration '. ++$iter . ' - ' . count($pv) . ' with key ' . $pk . '<br>';
// }

?>
</pre>