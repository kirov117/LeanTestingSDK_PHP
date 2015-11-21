<?php

namespace LeanTesting\API\Client\Test;

use LeanTesting\API\Client\PHPClient;

use LeanTesting\API\Client\Entity\Bug\Bug;
use LeanTesting\API\Client\Entity\Bug\BugAttachment;
use LeanTesting\API\Client\Entity\Bug\BugComment;

use LeanTesting\API\Client\Entity\Platform\PlatformBrowser;
use LeanTesting\API\Client\Entity\Platform\PlatformBrowserVersion;
use LeanTesting\API\Client\Entity\Platform\PlatformDevice;
use LeanTesting\API\Client\Entity\Platform\PlatformOS;
use LeanTesting\API\Client\Entity\Platform\PlatformOSVersion;
use LeanTesting\API\Client\Entity\Platform\PlatformType;

use LeanTesting\API\Client\Entity\Project\Project;
use LeanTesting\API\Client\Entity\Project\ProjectBugScheme;
use LeanTesting\API\Client\Entity\Project\ProjectSection;
use LeanTesting\API\Client\Entity\Project\ProjectUser;
use LeanTesting\API\Client\Entity\Project\ProjectVersion;

use LeanTesting\API\Client\Entity\User\UserOrganization;

class EntitiesTest extends \PHPUnit_Framework_TestCase
{

	/* DEFINED */
	public function testBugDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Bug\Bug'));
	}
	public function testBugAttachmentDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Bug\BugAttachment'));
	}
	public function testBugCommentDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Bug\BugComment'));
	}
	public function testPlatformBrowserDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Platform\PlatformBrowser'));
	}
	public function testPlatformBrowserVersionDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Platform\PlatformBrowserVersion'));
	}
	public function testPlatformDeviceDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Platform\PlatformDevice'));
	}
	public function testPlatformOSDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Platform\PlatformOS'));
	}
	public function testPlatformOSVersionDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Platform\PlatformOSVersion'));
	}
	public function testPlatformTypeDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Platform\PlatformType'));
	}
	public function testProjectDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Project\Project'));
	}
	public function testProjectBugSchemeDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Project\ProjectBugScheme'));
	}
	public function testProjectSectionDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Project\ProjectSection'));
	}
	public function testProjectUserDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Project\ProjectUser'));
	}
	public function testProjectVersionDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\Project\ProjectVersion'));
	}
	public function testUserOrganizationDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Entity\User\UserOrganization'));
	}
	/* END DEFINED */







	/* SELF TYPE */
	public function testBugSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Bug\Bug', new Bug(new PHPClient, ['id' => 1]));
	}
	public function testBugAttachmentSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Bug\BugAttachment', new BugAttachment(new PHPClient, ['id' => 1]));
	}
	public function testBugCommentSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Bug\BugComment', new BugComment(new PHPClient, ['id' => 1]));
	}
	public function testPlatformBrowserSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Platform\PlatformBrowser', new PlatformBrowser(new PHPClient, ['id' => 1]));
	}
	public function testPlatformBrowserVersionSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Platform\PlatformBrowserVersion', new PlatformBrowserVersion(new PHPClient, ['id' => 1]));
	}
	public function testPlatformDeviceSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Platform\PlatformDevice', new PlatformDevice(new PHPClient, ['id' => 1]));
	}
	public function testPlatformOSSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Platform\PlatformOS', new PlatformOS(new PHPClient, ['id' => 1]));
	}
	public function testPlatformOSVersionSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Platform\PlatformOSVersion', new PlatformOSVersion(new PHPClient, ['id' => 1]));
	}
	public function testPlatformTypeSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Platform\PlatformType', new PlatformType(new PHPClient, ['id' => 1]));
	}
	public function testProjectSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Project\Project', new Project(new PHPClient, ['id' => 1]));
	}
	public function testProjectBugSchemeSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Project\ProjectBugScheme', new ProjectBugScheme(new PHPClient, ['id' => 1]));
	}
	public function testProjectSectionSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Project\ProjectSection', new ProjectSection(new PHPClient, ['id' => 1]));
	}
	public function testProjectUserSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Project\ProjectUser', new ProjectUser(new PHPClient, ['id' => 1]));
	}
	public function testProjectVersionSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\Project\ProjectVersion', new ProjectVersion(new PHPClient, ['id' => 1]));
	}
	public function testUserOrganizationSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Entity\User\UserOrganization', new UserOrganization(new PHPClient, ['id' => 1]));
	}
	/* END SELF TYPE */






	/* DATA PARSING */
	public function testBugDataParsing() {
		$data = ['id' => 1];
		$entity = new Bug(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testBugAttachmentDataParsing() {
		$data = ['id' => 1];
		$entity = new BugAttachment(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testBugCommentDataParsing() {
		$data = ['id' => 1];
		$entity = new BugComment(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testPlatformBrowserDataParsing() {
		$data = ['id' => 1];
		$entity = new PlatformBrowser(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testPlatformBrowserVersionDataParsing() {
		$data = ['id' => 1];
		$entity = new PlatformBrowserVersion(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testPlatformDeviceDataParsing() {
		$data = ['id' => 1];
		$entity = new PlatformDevice(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testPlatformOSDataParsing() {
		$data = ['id' => 1];
		$entity = new PlatformOS(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testPlatformOSVersionDataParsing() {
		$data = ['id' => 1];
		$entity = new PlatformOSVersion(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testPlatformTypeDataParsing() {
		$data = ['id' => 1];
		$entity = new PlatformType(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testProjectDataParsing() {
		$data = ['id' => 1];
		$entity = new Project(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testProjectBugSchemeDataParsing() {
		$data = ['id' => 1];
		$entity = new ProjectBugScheme(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testProjectSectionDataParsing() {
		$data = ['id' => 1];
		$entity = new ProjectSection(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testProjectUserDataParsing() {
		$data = ['id' => 1];
		$entity = new ProjectUser(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testProjectVersionDataParsing() {
		$data = ['id' => 1];
		$entity = new ProjectVersion(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	public function testUserOrganizationDataParsing() {
		$data = ['id' => 1];
		$entity = new UserOrganization(new PHPClient, $data);
		$this->assertSame($entity->data, $data);
	}
	/* END DATA PARSING */








	/* INIT NON ARR DATA */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugInstanceNonArrData() {
		$entity = new Bug(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentInstanceNonArrData() {
		$entity = new BugAttachment(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentInstanceNonArrData() {
		$entity = new BugComment(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserInstanceNonArrData() {
		$entity = new PlatformBrowser(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionInstanceNonArrData() {
		$entity = new PlatformBrowserVersion(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDeviceInstanceNonArrData() {
		$entity = new PlatformDevice(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSInstanceNonArrData() {
		$entity = new PlatformOS(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionInstanceNonArrData() {
		$entity = new PlatformOSVersion(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeInstanceNonArrData() {
		$entity = new PlatformType(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectInstanceNonArrData() {
		$entity = new Project(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSchemeInstanceNonArrData() {
		$entity = new ProjectBugScheme(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionInstanceNonArrData() {
		$entity = new ProjectSection(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUserInstanceNonArrData() {
		$entity = new ProjectUser(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionInstanceNonArrData() {
		$entity = new ProjectVersion(new PHPClient, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationInstanceNonArrData() {
		$entity = new UserOrganization(new PHPClient, '');
	}
	/* END INIT NON ARR DATA */








	/* INIT EMPTY DATA */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugInstanceEmptyData() {
		$entity = new Bug(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentInstanceEmptyData() {
		$entity = new BugAttachment(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentInstanceEmptyData() {
		$entity = new BugComment(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserInstanceEmptyData() {
		$entity = new PlatformBrowser(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionInstanceEmptyData() {
		$entity = new PlatformBrowserVersion(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDeviceInstanceEmptyData() {
		$entity = new PlatformDevice(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSInstanceEmptyData() {
		$entity = new PlatformOS(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionInstanceEmptyData() {
		$entity = new PlatformOSVersion(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeInstanceEmptyData() {
		$entity = new PlatformType(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectInstanceEmptyData() {
		$entity = new Project(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSchemeInstanceEmptyData() {
		$entity = new ProjectBugScheme(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionInstanceEmptyData() {
		$entity = new ProjectSection(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUserInstanceEmptyData() {
		$entity = new ProjectUser(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionInstanceEmptyData() {
		$entity = new ProjectVersion(new PHPClient, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationInstanceEmptyData() {
		$entity = new UserOrganization(new PHPClient, []);
	}
	/* END INIT EMPTY DATA */






	/* HAS SECONDARIES */
	public function testBugHasComments() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Bug\BugCommentsHandler', (new Bug(new PHPClient, ['id' => 1]))->comments);
	}
	public function testBugHasAttachments() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Bug\BugAttachmentsHandler', (new Bug(new PHPClient, ['id' => 1]))->attachments);
	}
	public function testPlatformBrowserHasVersions() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformBrowserVersionsHandler', (new PlatformBrowser(new PHPClient, ['id' => 1]))->versions);
	}
	public function testPlatformOSHasVersions() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformOSVersionsHandler', (new PlatformOS(new PHPClient, ['id' => 1]))->versions);
	}
	public function testPlatformTypeHasDevices() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformTypeDevicesHandler', (new PlatformType(new PHPClient, ['id' => 1]))->devices);
	}
	public function testProjectHasSections() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectSectionsHandler', (new Project(new PHPClient, ['id' => 1]))->sections);
	}
	public function testProjectHasVersions() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectVersionsHandler', (new Project(new PHPClient, ['id' => 1]))->versions);
	}
	public function testProjectHasUsers() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectUsersHandler', (new Project(new PHPClient, ['id' => 1]))->users);
	}
	public function testProjectHasBugTypeScheme() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugTypeSchemeHandler', (new Project(new PHPClient, ['id' => 1]))->bugTypeScheme);
	}
	public function testProjectHasBugStatusScheme() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugStatusSchemeHandler', (new Project(new PHPClient, ['id' => 1]))->bugStatusScheme);
	}
	public function testProjectHasBugSeverityScheme() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugSeveritySchemeHandler', (new Project(new PHPClient, ['id' => 1]))->bugSeverityScheme);
	}
	public function testProjectHasBugReproducibilityScheme() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugReproducibilitySchemeHandler', (new Project(new PHPClient, ['id' => 1]))->bugReproducibilityScheme);
	}
	public function testProjectHasBugs() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugsHandler', (new Project(new PHPClient, ['id' => 1]))->bugs);
	}
	/* END HAS SECONDARIES */

}
