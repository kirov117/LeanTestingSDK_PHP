# LeanTestingSDK_PHP
####*Lean Testing PHP Client Library*

[Uses the Lean Testing API](https://leantesting.com/en/api-docs)

######~~/////////////////////////////////////////////////////////////////////////////////////~~

- Including Lean Testing PHP SDK
```php
require 'LeanTestingSDK_PHP/PHPClient.php';
```

- Creating a new instance
```php
$LT = new LeanTestingClient();
```

######~~/////////////////////////////////////////////////////////////////////////////////////~~

- Get Current **Token**
```php
$LT->getCurrentToken()
```

- Attach New **Token**
```php
$LT->attachToken('9ErdKZXpGPovHuJ9dx92eAFqrp14GKvfHMyclGGh');
```

- Generate **Authorization URL**
```php
$generated_URL = $LT->auth->generateAuthLink(
	'DHxaSvtpl91Xos4vb7d0GKkXRu0GJxd5Rdha2HHx',
	'https://www.example.com/appurl/',
	'admin',
	'a3ahdh2iqhdasdasfdjahf26'
);
print_r( $generated_URL );
```

- Exchange Authorization Code For **Access TOKEN**
```php
$token = $LT->auth->exchangeAuthCode(
	'DHxaSvtpl91Xos4vb7d0GKkXRu0GJxd5Rdha2HHx',
	'DpOZxNbeL1arVbjUINoA9pOhgS8FNQsOkpE4CtXU',
	'authorization_code',
	'sOgY2DT47B2K0bqashnk0E6wUaYgbbspwdy9kGrk',
	'https://www.example.com/appurl/'
);
print_r( $token );
```

######~~/////////////////////////////////////////////////////////////////////////////////////~~

- Get **User** Information
```php
$LT->user->getInformation()
```

- Get **User** Organizations
```php
$LT->user->organizations->all()->toArray()
```

######~~/////////////////////////////////////////////////////////////////////////////////////~~

- List All **Projects**
```php
$LT->projects->all()->toArray()
```

- Create A New **Project**
```php
$new_project = $LT->projects->create([
	'name' => 'Project135',
	'organization_id' => 5779
]);
print_r( $new_project->data );
```

- Retrieve An Existing **Project**
```php
$LT->projects->find(3515)->data
```


- List **Project Sections**
```php
$LT->projects->find(3515)->sections->all()->toArray()
```

- Adding A **Project Section**
```php
$new_section = $LT->projects->find(3515)->sections->create([
	'name' => 'SectionName'
]);
print_r( $new_section->data );
```


- List **Project Versions**
```php
$LT->projects->find(3515)->versions->all()->toArray()
```

- Adding A **Project Version**
```php
$new_version = $LT->projects->find(3515)->versions->create([
	'number' => 'v0.3.1104'
]);
print_r( $new_version->data );
```


- List **Project Users**
```php
$LT->projects->find(3515)->users->all()->toArray()
```


- List **Bug Type Scheme**
```php
$LT->projects->find(3515)->bugTypeScheme->all()->toArray()
```

- List **Bug Status Scheme**
```php
$LT->projects->find(3515)->bugStatusScheme->all()->toArray()
```

- List **Bug Severity Scheme**
```php
$LT->projects->find(3515)->bugSeverityScheme->all()->toArray()
```

- List **Bug Reproducibility Scheme**
```php
$LT->projects->find(3515)->bugReproducibilityScheme->all()->toArray()
```

######~~/////////////////////////////////////////////////////////////////////////////////////~~

- List All **Bugs** In A Project
```php
$LT->projects->find(3515)->bugs->all()->toArray()
```

- Create A New **Bug**
```php
$new_bug = $LT->projects->find(3515)->bugs->create([
	'title' => 'Something bad happened...',
	'status_id' => 1,
	'severity_id' => 2,
	'project_version_id' => 10242
]);
print_r( $new_bug->data );
```

- Retrieve Existing **Bug**
```php
$LT->bugs->find(38483)->data
```

- Update A **Bug**
```php
$updated_bug = $LT->bugs->update(118509, [
	'title' => 'Updated title',
	'status_id' => 1,
	'severity_id' => 2,
	'project_version_id' => 10242
]);
print_r( $updated_bug->data );
```

- Delete A **Bug**
```php
$LT->bugs->delete(118509)
```

######~~/////////////////////////////////////////////////////////////////////////////////////~~

- List Bug **Comments**
```php
$LT->bugs->find(38483)->comments->all()->toArray()
```

######~~/////////////////////////////////////////////////////////////////////////////////////~~

- List Bug **Attachments**
```php
$LT->bugs->find(38483)->attachments->all()->toArray()
```

- Upload An **Attachment**
```php
$file_path = '/place/Downloads/Images/1370240743_2294218.jpg';
$new_attachment = $LT->bugs->find(38483)->attachments->upload($file_path);
print_r( $new_attachment->data )
```

- Retrieve An Existing **Attachment**
```php
$LT->attachments->find(21515)->data
```

- Delete An **Attachment**
```php
$LT->attachments->delete(75198)
```

######~~/////////////////////////////////////////////////////////////////////////////////////~~

- List **Platform Types**
```php
$LT->platform->types->all()->toArray()
```

- Retrieve **Platform Type**
```php
$LT->platform->types->find(1)->data
```


- List **Platform Devices**
```php
$LT->platform->types->find(1)->devices->all()->toArray()
```

- Retrieve Existing **Device**
```php
$LT->platform->devices->find(11)->data
```


- List **OS**
```php
$LT->platform->os->all()->toArray()
```

- Retrieve Existing **OS**
```php
$LT->platform->os->find(1)->data
```

- List **OS Versions**
```php
$LT->platform->os->find(1)->versions->all()->toArray()
```


- List **Browsers**
```php
$LT->platform->browsers->all()->toArray()
```

- Retrieve Existing **Browser**
```php
$LT->platform->browsers->find(1)->data
```

- List **Browser Versions**
```php
$LT->platform->browsers->find(1)->versions->all()->toArray()
```

######~~/////////////////////////////////////////////////////////////////////////////////////~~

- Using **Filters**
```php
$LT->projects->find(3515)->bugs->all(['limit' => 2, 'page' => 5]).toArray();
```

- **Entity List** Functions
```php
$browsers = $LT->platform->browsers->all()
echo $browsers->total()
echo $browsers->totalPages()
echo $browsers->count()
echo $browsers->toArray()
```

- **Entity List** Iterator
When used in foreach() loops, entity lists will automatically rewind, regardless of `page` filter.
After ending the loop, the entity list will **NOT** revert to first page or the initial instancing `page` filter setting in order not to cause useless API request calls.
```php
$comments = $LT->bugs->find(38483)->comments->all(['limit' => 1]);
foreach ($comments as $page) {
	print_r( $page );
}
```

- **Entity List** Manual Iteration
```php
$comments = $LT->bugs->find(38483)->comments->all(['limit' => 1]);
echo $comments->toArray();

// Will return false if unable to move forwards
$comments->next();      echo $comments->toArray();

// Will return false if already on last page
$comments->last();      echo $comments->toArray();

// Will return false if unable to move backwards
$comments->previous();  echo $comments->toArray();

// Will return false if already on first page
$comments->first();     echo $comments->toArray();
```

######~~/////////////////////////////////////////////////////////////////////////////////////~~