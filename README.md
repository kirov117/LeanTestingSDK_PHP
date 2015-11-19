# LeanTestingSDK_PHP
####*Lean Testing PHP Client Library*

[Uses the Lean Testing API](https://leantesting.com/en/api-docs)

~~/////////////////////////////////////////////////////////////////////////////////////~~

- Including Lean Testing PHP SDK
```php
require 'LeanTestingSDK_PHP/PHPClient.php';
```

//// Creating A New INSTANCE
// $LT = new LeanTestingClient();

/////////////////////////////////////////////////////////////////////////////////////

//// Get Current TOKEN
// print_r( $LT->getCurrentToken() )

//// Attach New TOKEN
// $LT->attachToken('9ErdKZXpGPnvHuJ9di92eAFqrp14GKvfHMyclGGh');

//// Generate Authorization URL
// $generated_URL = $LT->auth->generateAuthLink(
// 	'DHxaSvtplj1Xos4vb7dwGKkXRu0GJmd5Rdha2HHx',
// 	'https://www.example.com/appurl/',
// 	'admin',
// 	'a3ahdh2iqhdasdasfdjahf26'
// );
// print_r($generated_URL);

//// Exchange Authorization Code For Access TOKEN
// $token = $LT->auth->exchangeAuthCode(
// 	'RBxaSvtplj1Xos4vbEbwGKkXRu0GJmd5Rdha2HHa',
// 	'FpOZxNbe9VEwVbjUINoAepOhgS8FNQsOkpE4CtPO',
// 	'authorization_code',
// 	'sOgY2DT47B2K0bqashnk0E6wUaYgbbspwdy9kGrk',
// 	'https://www.example.com/appurl/'
// );
// print_r( $token );

/////////////////////////////////////////////////////////////////////////////////////

//// Get USER Information
// print_r( $LT->user->getInformation() );

//// Get USER Organizations
// print_r( $LT->user->organizations->all()->toArray() );

/////////////////////////////////////////////////////////////////////////////////////

//// List All PROJECTS
// print_r( $LT->projects->all()->toArray() );

//// Create A New PROJECT
// $new_project = $LT->projects->create([
// 	'name' => 'Project135',
// 	'organization_id' => 5779
// ]);
// print_r( $new_project->data );

//// Retrieve An Existing PROJECT
// print_r( $LT->projects->find(3515)->data );


//// List PROJECT Sections
// print_r( $LT->projects->find(3515)->sections->all()->toArray() );

//// Adding A PROJECT Section
// $new_section = $LT->projects->find(3515)->sections->create([
// 	'name' => 'SectionName'
// ]);
// print_r( $new_section->data );


//// List PROJECT Versions
// print_r( $LT->projects->find(3515)->versions->all()->toArray() );

//// Adding A PROJECT Version
// $new_version = $LT->projects->find(3515)->versions->create([
// 	'number' => 'v0.3.1104'
// ]);
// print_r( $new_version->data );


//// List PROJECT Users
// print_r( $LT->projects->find(3515)->users->all()->toArray() );


//// List Bug Type Scheme
// print_r( $LT->projects->find(3515)->bugTypeScheme->all()->toArray() );

//// List Bug Status Scheme
// print_r( $LT->projects->find(3515)->bugStatusScheme->all()->toArray() );

//// List Bug Severity Scheme
// print_r( $LT->projects->find(3515)->bugSeverityScheme->all()->toArray() );

//// List Bug Reproducibility Scheme
// print_r( $LT->projects->find(3515)->bugReproducibilityScheme->all()->toArray() );

/////////////////////////////////////////////////////////////////////////////////////

//// List All BUGS In A Project
// print_r( $LT->projects->find(3515)->bugs->all()->toArray() );

//// Create A New BUG
// $new_bug = $LT->projects->find(3515)->bugs->create([
// 	'title' => 'Something bad happened...',
// 	'status_id' => 1,
// 	'severity_id' => 2,
// 	'project_version_id' => 10242
// ]);
// print_r( $new_bug->data );

//// Retrieve Existing BUG
// print_r( $LT->bugs->find(38483)->data );

//// Update A BUG
// $updated_bug = $LT->bugs->update(118509, [
// 	'title' => 'Updated title',
// 	'status_id' => 1,
// 	'severity_id' => 2,
// 	'project_version_id' => 10242
// ]);
// print_r( $updated_bug->data );

//// Delete A BUG
// print_r( $LT->bugs->delete(118509) );

/////////////////////////////////////////////////////////////////////////////////////

//// List Bug COMMENTS
// print_r( $LT->bugs->find(38483)->comments->all()->toArray() );

/////////////////////////////////////////////////////////////////////////////////////

//// List Bug ATTACHMENTS
// print_r( $LT->bugs->find(38483)->attachments->all()->toArray() );

//// Upload An ATTACHMENT
// $file_path = '/store1/Downloads/Faine/1370240743_2294218.jpg';
// $new_attachment = $LT->bugs->find(38483)->attachments->upload($file_path);
// print_r( $new_attachment->data )

//// Retrieve An Existing ATTACHMENT
// print_r( $LT->attachments->find(21515)->data );

//// Delete An ATTACHMENT
// print_r( $LT->attachments->delete(75198) );

/////////////////////////////////////////////////////////////////////////////////////

//// List PLATFORM Types
// print_r( $LT->platform->types->all()->toArray() );

//// Retrieve PLATFORM Type
// print_r( $LT->platform->types->find(1)->data );


//// List PLATFORM Devices
// print_r( $LT->platform->types->find(1)->devices->all()->toArray() );

//// Retrieve Existing  Device
// print_r( $LT->platform->devices->find(11)->data );


//// List OS
// print_r( $LT->platform->os->all()->toArray() );

//// Retrieve Existing OS
// print_r( $LT->platform->os->find(1)->data );

//// List OS Versions
// print_r( $LT->platform->os->find(1)->versions->all()->toArray() );


//// List Browsers
// print_r( $LT->platform->browsers->all()->toArray() );

//// Retrieve Existing Browser
// print_r( $LT->platform->browsers->find(1)->data );

//// List Browser Versions
// print_r( $LT->platform->browsers->find(1)->versions->all()->toArray() );
