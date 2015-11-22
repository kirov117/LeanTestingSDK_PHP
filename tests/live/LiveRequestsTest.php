<?php

namespace LeanTesting\API\Client\Test;

use LeanTesting\API\Client\PHPClient;

/**
 *
 * This test uses a live API call scenario. It requires the use of an active and valid token.
 * Sample entity IDs are provided to ease testing. These IDs point to non-real entities.
 * If modifying token, make sure it has necessary scope and permissions to access given sample IDs (and vice-versa)
 *
 */

class RequestsTest extends \PHPUnit_Framework_TestCase
{
    protected $client;

    protected $sample_project_id = 3515;
    protected $sample_bug_id = 38483;
    protected $sample_organization_id = 2464;
    protected $sample_attachmment_id = 21515;
    protected $sample_platform_type_id = 1;
    protected $sample_device_id = 11;
    protected $sample_os_id = 1;
    protected $sample_browser_id = 1;

    protected $test_bug_id;
    protected $test_attachment_id;

    protected function setUp() {
        $this->client = new PHPClient;

        $this->client->attachToken('6cOb1uNIMFyyJQdK33N9lxjECw5AJom1L3iKcVPw');
    }



    /* USER */
    public function testGetUserInformation() {
        $info = $this->client->user->getInformation();

        $this->assertTrue(is_array($info));

        $this->assertArrayHasKey('id', $info);
        $this->assertArrayHasKey('username', $info);
        $this->assertArrayHasKey('first_name', $info);
        $this->assertArrayHasKey('last_name', $info);
        $this->assertArrayHasKey('email', $info);
    }
    public function testGetUserOrganizations() {
        $org = $this->client->user->organizations->all()->toArray();

        $this->assertTrue(is_array($org));

        $this->assertTrue(count($org) >= 1);

        $this->assertArrayHasKey('id', $org[0]);
        $this->assertArrayHasKey('name', $org[0]);
    }
    /* END USER */




    /* PROJECT */
    public function testListAllProjects() {
        $prj = $this->client->projects->all()->toArray();

        $this->assertTrue(is_array($prj));

        $this->assertTrue(count($prj) >= 1);

        $this->assertArrayHasKey('id', $prj[0]);
        $this->assertArrayHasKey('name', $prj[0]);
        $this->assertArrayHasKey('owner_id', $prj[0]);
        $this->assertArrayHasKey('organization_id', $prj[0]);
    }
    public function testCreateNewProject() {
        $_name = 'Project135';
        $_orgid = $this->sample_organization_id;

        $new_project = $this->client->projects->create([
            'name' => $_name,
            'organization_id' => $_orgid
        ]);

        $data = $new_project->data;

        $this->assertTrue(is_array($data));

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('name', $data);
        $this->assertArrayHasKey('owner_id', $data);
        $this->assertArrayHasKey('organization_id', $data);

        $this->assertEquals($_name, $data['name']);
        $this->assertEquals($_orgid, $data['organization_id']);
    }
    public function testRetrieveExistingProject() {
        $project = $this->client->projects->find($this->sample_project_id)->data;

        $this->assertTrue(is_array($project));

        $this->assertArrayHasKey('id', $project);
        $this->assertArrayHasKey('name', $project);
        $this->assertArrayHasKey('owner_id', $project);
        $this->assertArrayHasKey('organization_id', $project);
    }

    public function testListProjectSections() {
        $sect = $this->client->projects->find($this->sample_project_id)->sections->all()->toArray();

        $this->assertTrue(is_array($sect));

        $this->assertTrue(count($sect) >= 1);

        $this->assertArrayHasKey('id', $sect[0]);
        $this->assertArrayHasKey('name', $sect[0]);
        $this->assertArrayHasKey('project_id', $sect[0]);
    }
    public function testAddProjectSection() {
        $_name = 'SectionName999';

        $new_section = $this->client->projects->find($this->sample_project_id)->sections->create([
            'name' => $_name
        ]);

        $data = $new_section->data;

        $this->assertTrue(is_array($data));

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('name', $data);
        $this->assertArrayHasKey('project_id', $data);

        $this->assertEquals($_name, $data['name']);
    }

    public function testListProjectVersions() {
        $vers = $this->client->projects->find($this->sample_project_id)->versions->all()->toArray();

        $this->assertTrue(is_array($vers));

        $this->assertTrue(count($vers) >= 1);

        $this->assertArrayHasKey('id', $vers[0]);
        $this->assertArrayHasKey('number', $vers[0]);
        $this->assertArrayHasKey('project_id', $vers[0]);
    }
    public function testAddProjectVersion() {
        $_number = 'v2.0.0';

        $new_version = $this->client->projects->find($this->sample_project_id)->versions->create([
            'number' => $_number
        ]);

        $data = $new_version->data;

        $this->assertTrue(is_array($data));

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('number', $data);
        $this->assertArrayHasKey('project_id', $data);

        $this->assertEquals($_number, $data['number']);
    }

    public function testListProjectUsers() {
        $usr = $this->client->projects->find($this->sample_project_id)->users->all()->toArray();

        $this->assertTrue(is_array($usr));

        $this->assertTrue(count($usr) >= 1);

        $this->assertArrayHasKey('id', $usr[0]);
        $this->assertArrayHasKey('username', $usr[0]);
        $this->assertArrayHasKey('first_name', $usr[0]);
        $this->assertArrayHasKey('last_name', $usr[0]);
        $this->assertArrayHasKey('email', $usr[0]);
    }

    public function testListProjectBugTypeScheme() {
        $scheme = $this->client->projects->find($this->sample_project_id)->bugTypeScheme->all()->toArray();

        $this->assertTrue(is_array($scheme));

        $this->assertTrue(count($scheme) >= 1);

        $this->assertArrayHasKey('id', $scheme[0]);
        $this->assertArrayHasKey('name', $scheme[0]);
    }
    public function testListProjectBugStatusScheme() {
        $scheme = $this->client->projects->find($this->sample_project_id)->bugStatusScheme->all()->toArray();

        $this->assertTrue(is_array($scheme));

        $this->assertTrue(count($scheme) >= 1);

        $this->assertArrayHasKey('id', $scheme[0]);
        $this->assertArrayHasKey('name', $scheme[0]);
    }
    public function testListProjectBugSeverityScheme() {
        $scheme = $this->client->projects->find($this->sample_project_id)->bugSeverityScheme->all()->toArray();

        $this->assertTrue(is_array($scheme));

        $this->assertTrue(count($scheme) >= 1);

        $this->assertArrayHasKey('id', $scheme[0]);
        $this->assertArrayHasKey('name', $scheme[0]);
    }
    public function testListProjectBugReproducibilityScheme() {
        $scheme = $this->client->projects->find($this->sample_project_id)->bugReproducibilityScheme->all()->toArray();

        $this->assertTrue(is_array($scheme));

        $this->assertTrue(count($scheme) >= 1);

        $this->assertArrayHasKey('id', $scheme[0]);
        $this->assertArrayHasKey('name', $scheme[0]);
    }
    /* END PROJECT */



    /* BUG */
    public function testListBugsInProject() {
        $bugs = $this->client->projects->find($this->sample_project_id)->bugs->all()->toArray();

        $this->assertTrue(is_array($bugs));

        $this->assertTrue(count($bugs) >= 1);

        $this->assertArrayHasKey('id', $bugs[0]);
        $this->assertArrayHasKey('title', $bugs[0]);
        $this->assertArrayHasKey('status_id', $bugs[0]);
        $this->assertArrayHasKey('severity_id', $bugs[0]);
        $this->assertArrayHasKey('project_version_id', $bugs[0]);
        $this->assertArrayHasKey('project_section_id', $bugs[0]);
        $this->assertArrayHasKey('type_id', $bugs[0]);
        $this->assertArrayHasKey('reproducibility_id', $bugs[0]);
        $this->assertArrayHasKey('assigned_user_id', $bugs[0]);
        $this->assertArrayHasKey('description', $bugs[0]);
        $this->assertArrayHasKey('expected_results', $bugs[0]);
    }
    public function testCreateNewBug() {
        $_title = 'Bugzilla000111';
        $_status_id = 2;
        $_severity_id = 2;
        $_project_version_id = 10242;
        $_project_section_id = 12675;
        $_type_id = 4;
        $_reproducibility_id = 2;
        $_assigned_user_id = 4650;
        $_description = 'Descrdescrdescr';
        $_expected_results = 'Expecexpecexpec';
        $_steps = ['first do this', 'then do that', 'finally...'];
        $_platform = ['device_model_id' => 11, 'os' => 'Android', 'os_version_id' => 207];


        $new_bug = $this->client->projects->find($this->sample_project_id)->bugs->create([
            'title' => $_title,
            'status_id' => $_status_id,
            'severity_id' => $_severity_id,
            'project_version_id' => $_project_version_id,
            'project_section_id' => $_project_section_id,
            'type_id' => $_type_id,
            'reproducibility_id' => $_reproducibility_id,
            'assigned_user_id' => $_assigned_user_id,
            'description' => $_description,
            'expected_results' => $_expected_results,
            'steps' => $_steps,
            'platform' => $_platform
        ]);

        $data = $new_bug->data;

        $this->assertTrue(is_array($data));

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('title', $data);
        $this->assertArrayHasKey('status_id', $data);
        $this->assertArrayHasKey('severity_id', $data);
        $this->assertArrayHasKey('project_version_id', $data);
        $this->assertArrayHasKey('project_section_id', $data);
        $this->assertArrayHasKey('type_id', $data);
        $this->assertArrayHasKey('reproducibility_id', $data);
        $this->assertArrayHasKey('assigned_user_id', $data);
        $this->assertArrayHasKey('description', $data);
        $this->assertArrayHasKey('expected_results', $data);
        $this->assertArrayHasKey('steps', $data);
        $this->assertArrayHasKey('platform', $data);

        $this->assertTrue(is_array($data['steps']));
        $this->assertTrue(is_array($data['platform']));

        $this->assertEquals(3, count($data['steps']));

        $this->assertEquals($_title, $data['title']);
        $this->assertEquals($_status_id, $data['status_id']);
        $this->assertEquals($_severity_id, $data['severity_id']);
        $this->assertEquals($_project_version_id, $data['project_version_id']);
        $this->assertEquals($_project_section_id, $data['project_section_id']);
        $this->assertEquals($_type_id, $data['type_id']);
        $this->assertEquals($_reproducibility_id, $data['reproducibility_id']);
        $this->assertEquals($_assigned_user_id, $data['assigned_user_id']);
        $this->assertEquals($_description, $data['description']);
        $this->assertEquals($_expected_results, $data['expected_results']);

        $this->assertEquals($_steps[0], $data['steps'][0]['text']);

        $this->assertEquals($_platform['device_model_id'], $data['platform']['model']['id']);
        $this->assertEquals($_platform['os'], $data['platform']['os']['name']);
        $this->assertEquals($_platform['os_version_id'], $data['platform']['os_version']['id']);

        $this->test_bug_id = $data['id'];
        return $this->test_bug_id;
    }
    public function testRetrieveExistingBug() {
        $bug = $this->client->bugs->find($this->sample_bug_id)->data;

        $this->assertTrue(is_array($bug));

        $this->assertArrayHasKey('id', $bug);
        $this->assertArrayHasKey('title', $bug);
        $this->assertArrayHasKey('status_id', $bug);
        $this->assertArrayHasKey('severity_id', $bug);
        $this->assertArrayHasKey('project_version_id', $bug);
        $this->assertArrayHasKey('project_section_id', $bug);
        $this->assertArrayHasKey('type_id', $bug);
        $this->assertArrayHasKey('reproducibility_id', $bug);
        $this->assertArrayHasKey('assigned_user_id', $bug);
        $this->assertArrayHasKey('description', $bug);
        $this->assertArrayHasKey('expected_results', $bug);
    }
    /**
     * @depends testCreateNewBug
     */
    public function testUpdateBug($test_bug_id) {
        $this->test_bug_id = $test_bug_id;

        $_title = 'Upddssszz';
        $_status_id = 1;
        $_severity_id = 1;
        $_project_version_id = 10242;
        $_project_section_id = 12675;
        $_type_id = 3;
        $_reproducibility_id = 1;
        $_assigned_user_id = 4650;
        $_description = 'NJSDESCR';
        $_expected_results = 'NJSXEXPR';


        $updated_bug = $this->client->projects->find($this->sample_project_id)->bugs->create([
            'title' => $_title,
            'status_id' => $_status_id,
            'severity_id' => $_severity_id,
            'project_version_id' => $_project_version_id,
            'project_section_id' => $_project_section_id,
            'type_id' => $_type_id,
            'reproducibility_id' => $_reproducibility_id,
            'assigned_user_id' => $_assigned_user_id,
            'description' => $_description,
            'expected_results' => $_expected_results
        ]);

        $data = $updated_bug->data;

        $this->assertTrue(is_array($data));

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('title', $data);
        $this->assertArrayHasKey('status_id', $data);
        $this->assertArrayHasKey('severity_id', $data);
        $this->assertArrayHasKey('project_version_id', $data);
        $this->assertArrayHasKey('project_section_id', $data);
        $this->assertArrayHasKey('type_id', $data);
        $this->assertArrayHasKey('reproducibility_id', $data);
        $this->assertArrayHasKey('assigned_user_id', $data);
        $this->assertArrayHasKey('description', $data);
        $this->assertArrayHasKey('expected_results', $data);

        $this->assertEquals($_title, $data['title']);
        $this->assertEquals($_status_id, $data['status_id']);
        $this->assertEquals($_severity_id, $data['severity_id']);
        $this->assertEquals($_project_version_id, $data['project_version_id']);
        $this->assertEquals($_project_section_id, $data['project_section_id']);
        $this->assertEquals($_type_id, $data['type_id']);
        $this->assertEquals($_reproducibility_id, $data['reproducibility_id']);
        $this->assertEquals($_assigned_user_id, $data['assigned_user_id']);
        $this->assertEquals($_description, $data['description']);
        $this->assertEquals($_expected_results, $data['expected_results']);

        return $this->test_bug_id;
    }
    /**
     * @depends testUpdateBug
     */
    public function testDeleteBug($test_bug_id) {
        $this->test_bug_id = $test_bug_id;

        $output = $this->client->bugs->delete($this->test_bug_id);

        $this->assertTrue($output);
    }
    /* END BUG */



    /* BUG COMMENTS */
    public function testListBugComments() {
        $comments = $this->client->bugs->find($this->sample_bug_id)->comments->all()->toArray();

        $this->assertTrue(is_array($comments));

        $this->assertTrue(count($comments) >= 1);

        $this->assertArrayHasKey('id', $comments[0]);
        $this->assertArrayHasKey('text', $comments[0]);
        $this->assertArrayHasKey('owner_id', $comments[0]);
    }
    /* END BUG COMMENTS */




    /* BUG ATTACHMENTS */
    public function testListBugAttachments() {
        $atc = $this->client->bugs->find($this->sample_bug_id)->attachments->all()->toArray();

        $this->assertTrue(is_array($atc));

        $this->assertTrue(count($atc) >= 1);

        $this->assertArrayHasKey('id', $atc[0]);
        $this->assertArrayHasKey('owner_id', $atc[0]);
        $this->assertArrayHasKey('url', $atc[0]);
    }
    public function testCreateNewAttachment() {
        $_fp = __DIR__ . '/../res/upload_sample.jpg';

        $new_attachment = $this->client->bugs->find($this->sample_bug_id)->attachments->upload($_fp);

        $data = $new_attachment->data;

        $this->assertTrue(is_array($data));

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('owner_id', $data);
        $this->assertArrayHasKey('url', $data);

        $this->test_attachment_id = $data['id'];
        return $this->test_attachment_id;
    }
    public function testRetrieveExistingAttachment() {
        $atc = $this->client->attachments->find($this->sample_attachmment_id)->data;

        $this->assertTrue(is_array($atc));

        $this->assertArrayHasKey('id', $atc);
        $this->assertArrayHasKey('owner_id', $atc);
        $this->assertArrayHasKey('url', $atc);
    }
    /**
     * @depends testCreateNewAttachment
     */
    public function testDeleteAttachment($test_attachment_id) {
        $this->test_attachment_id = $test_attachment_id;

        $output = $this->client->attachments->delete($this->test_attachment_id);

        $this->assertTrue($output);
    }
    /* END BUG ATTACHMENTS */





    /* PLATFORM */
    public function testListPlatformTypes() {
        $types = $this->client->platform->types->all()->toArray();

        $this->assertTrue(is_array($types));

        $this->assertTrue(count($types) >= 1);

        $this->assertArrayHasKey('id', $types[0]);
        $this->assertArrayHasKey('name', $types[0]);
    }
    public function testRetrievePlatformType() {
        $type = $this->client->platform->types->find($this->sample_platform_type_id)->data;

        $this->assertTrue(is_array($type));

        $this->assertArrayHasKey('id', $type);
        $this->assertArrayHasKey('name', $type);
    }

    public function testListPlatformDevices() {
        $devs = $this->client->platform->types->find($this->sample_platform_type_id)->devices->all()->toArray();

        $this->assertTrue(is_array($devs));

        $this->assertTrue(count($devs) >= 1);

        $this->assertArrayHasKey('id', $devs[0]);
        $this->assertArrayHasKey('name', $devs[0]);
    }
    public function testRetrievePlatformDevice() {
        $dev = $this->client->platform->devices->find($this->sample_device_id)->data;

        $this->assertTrue(is_array($dev));

        $this->assertArrayHasKey('id', $dev);
        $this->assertArrayHasKey('name', $dev);
    }

    public function testListOS() {
        $os = $this->client->platform->os->all()->toArray();

        $this->assertTrue(is_array($os));

        $this->assertTrue(count($os) >= 1);

        $this->assertArrayHasKey('id', $os[0]);
        $this->assertArrayHasKey('name', $os[0]);
    }
    public function testRetrieveOS() {
        $os = $this->client->platform->os->find($this->sample_os_id)->data;

        $this->assertTrue(is_array($os));

        $this->assertArrayHasKey('id', $os);
        $this->assertArrayHasKey('name', $os);
    }
    public function testListOSVersions() {
        $osv = $this->client->platform->os->find($this->sample_os_id)->versions->all()->toArray();

        $this->assertTrue(is_array($osv));

        $this->assertTrue(count($osv) >= 1);

        $this->assertArrayHasKey('id', $osv[0]);
        $this->assertArrayHasKey('number', $osv[0]);
    }

    public function testListBrowsers() {
        $browsers = $this->client->platform->browsers->all()->toArray();

        $this->assertTrue(is_array($browsers));

        $this->assertTrue(count($browsers) >= 1);

        $this->assertArrayHasKey('id', $browsers[0]);
        $this->assertArrayHasKey('name', $browsers[0]);
    }
    public function testRetrieveBrowser() {
        $browser = $this->client->platform->browsers->find($this->sample_browser_id)->data;

        $this->assertTrue(is_array($browser));

        $this->assertArrayHasKey('id', $browser);
        $this->assertArrayHasKey('name', $browser);
    }
    public function testListBrowserVersions() {
        $brw = $this->client->platform->browsers->find($this->sample_browser_id)->versions->all()->toArray();

        $this->assertTrue(is_array($brw));

        $this->assertTrue(count($brw) >= 1);

        $this->assertArrayHasKey('id', $brw[0]);
        $this->assertArrayHasKey('name', $brw[0]);
    }
    /* END PLATFORM */



    /* INVALID FIELDS */
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKIncompleteRequestException
     * @expectedExceptionMessage name
     */
    public function testCreateNewProjectIncomplete() {
        $this->client->projects->create(['organization_id' => 0]);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnsupportedRequestException
     * @expectedExceptionMessage fxxxxxx
     */
    public function testCreateNewProjectUnsupported() {
        $this->client->projects->create(['name' => '', 'fxxxxxx' => '']);
    }

    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnsupportedRequestException
     * @expectedExceptionMessage fxxxxxx
     */
    public function testAddProjectSectionUnsupported() {
        $this->client->projects->find($this->sample_project_id)->sections->create(['name' => '', 'fxxxxxx' => '']);
    }

    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnsupportedRequestException
     * @expectedExceptionMessage fxxxxxx
     */
    public function testAddProjectVersionUnsupported() {
        $this->client->projects->find($this->sample_project_id)->versions->create(['number' => '', 'fxxxxxx' => '']);
    }

    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKIncompleteRequestException
     * @expectedExceptionMessage project_version
     */
    public function testCreateNewBugIncomplete() {
        $_title = 'Bugzilla000111';
        $_status_id = 2;
        $_severity_id = 2;

        $this->client->projects->find($this->sample_project_id)->bugs->create([
            'title' => $_title,
            'status_id' => $_status_id,
            'severity_id' => $_severity_id
        ]);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnsupportedRequestException
     * @expectedExceptionMessage fxxxxxx
     */
    public function testCreateNewBugUnsupported() {
        $_title = 'Bugzilla000111';
        $_status_id = 2;
        $_severity_id = 2;
        $_project_version_id = 10242;

        $this->client->projects->find($this->sample_project_id)->bugs->create([
            'title' => $_title,
            'status_id' => $_status_id,
            'severity_id' => $_severity_id,
            'project_version_id' => $_project_version_id,
            'fxxxxxx' => ''
        ]);
    }

    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     * @expectedExceptionMessage $filepath
     */
    public function testCreateNewAttachmentNonStrFilepath() {
        $this->client->bugs->find($this->sample_bug_id)->attachments->upload(111);
    }
    /* END INVALID FIELDS */




    /* MISC */
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKErrorResponseException
     * @expectedExceptionMessage forbidden
     */
    public function testForbiddenResponse() {
        $this->client->bugs->find(1);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKErrorResponseException
     * @expectedExceptionMessage 404
     */
    public function testMissingResponse() {
        $this->client->projects->find(999999);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKErrorResponseException
     * @expectedExceptionMessage access_denied
     */
    public function testInvalidToken() {
        $this->client->attachToken('6cOb1uNIMFyyJQdK33N9lxjECw5AJom1L3xxxxxx');
        $this->client->projects->find($this->sample_project_id)->versions->create(['number' => 'v1.0']);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKErrorResponseException
     * @expectedExceptionMessage access token
     */
    public function testNoToken() {
        $cl = new PHPClient;
        $cl->projects->find($this->sample_project_id)->versions->create(['number' => 'v1.0']);
    }
    /* END MISC */

}
