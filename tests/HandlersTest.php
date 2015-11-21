<?php

namespace LeanTesting\API\Client\Test;

use LeanTesting\API\Client\PHPClient;

use LeanTesting\API\Client\Handler\Attachment\AttachmentsHandler;

use LeanTesting\API\Client\Handler\Bug\BugAttachmentsHandler;
use LeanTesting\API\Client\Handler\Bug\BugCommentsHandler;
use LeanTesting\API\Client\Handler\Bug\BugsHandler;

use LeanTesting\API\Client\Handler\Platform\PlatformBrowsersHandler;
use LeanTesting\API\Client\Handler\Platform\PlatformBrowserVersionsHandler;
use LeanTesting\API\Client\Handler\Platform\PlatformDevicesHandler;
use LeanTesting\API\Client\Handler\Platform\PlatformHandler;
use LeanTesting\API\Client\Handler\Platform\PlatformOSHandler;
use LeanTesting\API\Client\Handler\Platform\PlatformOSVersionsHandler;
use LeanTesting\API\Client\Handler\Platform\PlatformTypeDevicesHandler;
use LeanTesting\API\Client\Handler\Platform\PlatformTypesHandler;

use LeanTesting\API\Client\Handler\Project\ProjectBugReproducibilitySchemeHandler;
use LeanTesting\API\Client\Handler\Project\ProjectBugSeveritySchemeHandler;
use LeanTesting\API\Client\Handler\Project\ProjectBugsHandler;
use LeanTesting\API\Client\Handler\Project\ProjectBugStatusSchemeHandler;
use LeanTesting\API\Client\Handler\Project\ProjectBugTypeSchemeHandler;
use LeanTesting\API\Client\Handler\Project\ProjectSectionsHandler;
use LeanTesting\API\Client\Handler\Project\ProjectsHandler;
use LeanTesting\API\Client\Handler\Project\ProjectUsersHandler;
use LeanTesting\API\Client\Handler\Project\ProjectVersionsHandler;

use LeanTesting\API\Client\Handler\User\UserHandler;
use LeanTesting\API\Client\Handler\User\UserOrganizationsHandler;

class HandlersTest extends \PHPUnit_Framework_TestCase
{

	/* DEFINED */
	public function testAttachmentsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Attachment\AttachmentsHandler'));
	}
	public function testBugAttachmentsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Bug\BugAttachmentsHandler'));
	}
	public function testBugCommentsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Bug\BugCommentsHandler'));
	}
	public function testBugsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Bug\BugsHandler'));
	}
	public function testPlatformBrowsersHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Platform\PlatformBrowsersHandler'));
	}
	public function testPlatformBrowserVersionsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Platform\PlatformBrowserVersionsHandler'));
	}
	public function testPlatformDevicesHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Platform\PlatformDevicesHandler'));
	}
	public function testPlatformHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Platform\PlatformHandler'));
	}
	public function testPlatformOSHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Platform\PlatformOSHandler'));
	}
	public function testPlatformOSVersionsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Platform\PlatformOSVersionsHandler'));
	}
	public function testPlatformTypeDevicesHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Platform\PlatformTypeDevicesHandler'));
	}
	public function testPlatformTypesHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Platform\PlatformTypesHandler'));
	}
	public function testProjectBugReproducibilitySchemeHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Project\ProjectBugReproducibilitySchemeHandler'));
	}
	public function testProjectBugSeveritySchemeHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Project\ProjectBugSeveritySchemeHandler'));
	}
	public function testProjectBugsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Project\ProjectBugsHandler'));
	}
	public function testProjectBugStatusSchemeHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Project\ProjectBugStatusSchemeHandler'));
	}
	public function testProjectBugTypeSchemeHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Project\ProjectBugTypeSchemeHandler'));
	}
	public function testProjectSectionsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Project\ProjectSectionsHandler'));
	}
	public function testProjectsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Project\ProjectsHandler'));
	}
	public function testProjectUsersHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Project\ProjectUsersHandler'));
	}
	public function testProjectVersionsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Project\ProjectVersionsHandler'));
	}
	public function testUserHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\User\UserHandler'));
	}
	public function testUserOrganizationsHandlerDefined() {
		$this->assertTrue(class_exists('LeanTesting\API\Client\Handler\User\UserOrganizationsHandler'));
	}
	/* END DEFINED */






	/* SELF TYPE */
	public function testAttachmentsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Attachment\AttachmentsHandler', new AttachmentsHandler(new PHPClient));
	}
	public function testBugAttachmentsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Bug\BugAttachmentsHandler', new BugAttachmentsHandler(new PHPClient, 999));
	}
	public function testBugCommentsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Bug\BugCommentsHandler', new BugCommentsHandler(new PHPClient, 999));
	}
	public function testBugsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Bug\BugsHandler', new BugsHandler(new PHPClient));
	}
	public function testPlatformBrowsersHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformBrowsersHandler', new PlatformBrowsersHandler(new PHPClient));
	}
	public function testPlatformBrowserVersionsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformBrowserVersionsHandler', new PlatformBrowserVersionsHandler(new PHPClient, 999));
	}
	public function testPlatformDevicesHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformDevicesHandler', new PlatformDevicesHandler(new PHPClient));
	}
	public function testPlatformHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformHandler', new PlatformHandler(new PHPClient));
	}
	public function testPlatformOSHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformOSHandler', new PlatformOSHandler(new PHPClient));
	}
	public function testPlatformOSVersionsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformOSVersionsHandler', new PlatformOSVersionsHandler(new PHPClient, 999));
	}
	public function testPlatformTypeDevicesHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformTypeDevicesHandler', new PlatformTypeDevicesHandler(new PHPClient, 999));
	}
	public function testPlatformTypesHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformTypesHandler', new PlatformTypesHandler(new PHPClient));
	}
	public function testProjectBugReproducibilitySchemeHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugReproducibilitySchemeHandler', new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999));
	}
	public function testProjectBugSeveritySchemeHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugSeveritySchemeHandler', new ProjectBugSeveritySchemeHandler(new PHPClient, 999));
	}
	public function testProjectBugsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugsHandler', new ProjectBugsHandler(new PHPClient, 999));
	}
	public function testProjectBugStatusSchemeHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugStatusSchemeHandler', new ProjectBugStatusSchemeHandler(new PHPClient, 999));
	}
	public function testProjectBugTypeSchemeHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectBugTypeSchemeHandler', new ProjectBugTypeSchemeHandler(new PHPClient, 999));
	}
	public function testProjectSectionsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectSectionsHandler', new ProjectSectionsHandler(new PHPClient, 999));
	}
	public function testProjectsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectsHandler', new ProjectsHandler(new PHPClient));
	}
	public function testProjectUsersHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectUsersHandler', new ProjectUsersHandler(new PHPClient, 999));
	}
	public function testProjectVersionsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectVersionsHandler', new ProjectVersionsHandler(new PHPClient, 999));
	}
	public function testUserHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\User\UserHandler', new UserHandler(new PHPClient));
	}
	public function testUserOrganizationsHandlerSelfType() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\User\UserOrganizationsHandler', new UserOrganizationsHandler(new PHPClient));
	}
	/* END SELF TYPE */







	/* CREATE NON ARR FIELDS */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testAttachmentsHandlerCreateNonArrFields() {
		(new AttachmentsHandler(new PHPClient))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentsHandlerCreateNonArrFields() {
		(new BugAttachmentsHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentsHandlerCreateNonArrFields() {
		(new BugCommentsHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugsHandlerCreateNonArrFields() {
		(new BugsHandler(new PHPClient))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowsersHandlerCreateNonArrFields() {
		(new PlatformBrowsersHandler(new PHPClient))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionsHandlerCreateNonArrFields() {
		(new PlatformBrowserVersionsHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDevicesHandlerCreateNonArrFields() {
		(new PlatformDevicesHandler(new PHPClient))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformHandlerCreateNonArrFields() {
		(new PlatformHandler(new PHPClient))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSHandlerCreateNonArrFields() {
		(new PlatformOSHandler(new PHPClient))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionsHandlerCreateNonArrFields() {
		(new PlatformOSVersionsHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeDevicesHandlerCreateNonArrFields() {
		(new PlatformTypeDevicesHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypesHandlerCreateNonArrFields() {
		(new PlatformTypesHandler(new PHPClient))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugReproducibilitySchemeHandlerCreateNonArrFields() {
		(new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSeveritySchemeHandlerCreateNonArrFields() {
		(new ProjectBugSeveritySchemeHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugsHandlerCreateNonArrFields() {
		(new ProjectBugsHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugStatusSchemeHandlerCreateNonArrFields() {
		(new ProjectBugStatusSchemeHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugTypeSchemeHandlerCreateNonArrFields() {
		(new ProjectBugTypeSchemeHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionsHandlerCreateNonArrFields() {
		(new ProjectSectionsHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectsHandlerCreateNonArrFields() {
		(new ProjectsHandler(new PHPClient))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUsersHandlerCreateNonArrFields() {
		(new ProjectUsersHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionsHandlerCreateNonArrFields() {
		(new ProjectVersionsHandler(new PHPClient, 999))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserHandlerCreateNonArrFields() {
		(new UserHandler(new PHPClient))->create('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationsHandlerCreateNonArrFields() {
		(new UserOrganizationsHandler(new PHPClient))->create('');
	}
	/* END CREATE NON ARR FIELDS */











	/* CREATE EMPTY FIELDS */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testAttachmentsHandlerCreateEmptyFields() {
		(new AttachmentsHandler(new PHPClient))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentsHandlerCreateEmptyFields() {
		(new BugAttachmentsHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentsHandlerCreateEmptyFields() {
		(new BugCommentsHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugsHandlerCreateEmptyFields() {
		(new BugsHandler(new PHPClient))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowsersHandlerCreateEmptyFields() {
		(new PlatformBrowsersHandler(new PHPClient))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionsHandlerCreateEmptyFields() {
		(new PlatformBrowserVersionsHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDevicesHandlerCreateEmptyFields() {
		(new PlatformDevicesHandler(new PHPClient))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformHandlerCreateEmptyFields() {
		(new PlatformHandler(new PHPClient))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSHandlerCreateEmptyFields() {
		(new PlatformOSHandler(new PHPClient))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionsHandlerCreateEmptyFields() {
		(new PlatformOSVersionsHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeDevicesHandlerCreateEmptyFields() {
		(new PlatformTypeDevicesHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypesHandlerCreateEmptyFields() {
		(new PlatformTypesHandler(new PHPClient))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugReproducibilitySchemeHandlerCreateEmptyFields() {
		(new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSeveritySchemeHandlerCreateEmptyFields() {
		(new ProjectBugSeveritySchemeHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugsHandlerCreateEmptyFields() {
		(new ProjectBugsHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugStatusSchemeHandlerCreateEmptyFields() {
		(new ProjectBugStatusSchemeHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugTypeSchemeHandlerCreateEmptyFields() {
		(new ProjectBugTypeSchemeHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionsHandlerCreateEmptyFields() {
		(new ProjectSectionsHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectsHandlerCreateEmptyFields() {
		(new ProjectsHandler(new PHPClient))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUsersHandlerCreateEmptyFields() {
		(new ProjectUsersHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionsHandlerCreateEmptyFields() {
		(new ProjectVersionsHandler(new PHPClient, 999))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserHandlerCreateEmptyFields() {
		(new UserHandler(new PHPClient))->create([]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationsHandlerCreateEmptyFields() {
		(new UserOrganizationsHandler(new PHPClient))->create([]);
	}
	/* END CREATE EMPTY FIELDS */







	/* ALL NON ARR FILTERS */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testAttachmentsHandlerAllNonArrFilters() {
		(new AttachmentsHandler(new PHPClient))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentsHandlerAllNonArrFilters() {
		(new BugAttachmentsHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentsHandlerAllNonArrFilters() {
		(new BugCommentsHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugsHandlerAllNonArrFilters() {
		(new BugsHandler(new PHPClient))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowsersHandlerAllNonArrFilters() {
		(new PlatformBrowsersHandler(new PHPClient))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionsHandlerAllNonArrFilters() {
		(new PlatformBrowserVersionsHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDevicesHandlerAllNonArrFilters() {
		(new PlatformDevicesHandler(new PHPClient))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformHandlerAllNonArrFilters() {
		(new PlatformHandler(new PHPClient))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSHandlerAllNonArrFilters() {
		(new PlatformOSHandler(new PHPClient))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionsHandlerAllNonArrFilters() {
		(new PlatformOSVersionsHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeDevicesHandlerAllNonArrFilters() {
		(new PlatformTypeDevicesHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypesHandlerAllNonArrFilters() {
		(new PlatformTypesHandler(new PHPClient))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugReproducibilitySchemeHandlerAllNonArrFilters() {
		(new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSeveritySchemeHandlerAllNonArrFilters() {
		(new ProjectBugSeveritySchemeHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugsHandlerAllNonArrFilters() {
		(new ProjectBugsHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugStatusSchemeHandlerAllNonArrFilters() {
		(new ProjectBugStatusSchemeHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugTypeSchemeHandlerAllNonArrFilters() {
		(new ProjectBugTypeSchemeHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionsHandlerAllNonArrFilters() {
		(new ProjectSectionsHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectsHandlerAllNonArrFilters() {
		(new ProjectsHandler(new PHPClient))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUsersHandlerAllNonArrFilters() {
		(new ProjectUsersHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionsHandlerAllNonArrFilters() {
		(new ProjectVersionsHandler(new PHPClient, 999))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserHandlerAllNonArrFilters() {
		(new UserHandler(new PHPClient))->all('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationsHandlerAllNonArrFilters() {
		(new UserOrganizationsHandler(new PHPClient))->all('');
	}
	/* END ALL NON ARR FILTERS */







	/* ALL INVALID FILTERS */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testAttachmentsHandlerAllInvalidFilters() {
		(new AttachmentsHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentsHandlerAllInvalidFilters() {
		(new BugAttachmentsHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentsHandlerAllInvalidFilters() {
		(new BugCommentsHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugsHandlerAllInvalidFilters() {
		(new BugsHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowsersHandlerAllInvalidFilters() {
		(new PlatformBrowsersHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionsHandlerAllInvalidFilters() {
		(new PlatformBrowserVersionsHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDevicesHandlerAllInvalidFilters() {
		(new PlatformDevicesHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformHandlerAllInvalidFilters() {
		(new PlatformHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSHandlerAllInvalidFilters() {
		(new PlatformOSHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionsHandlerAllInvalidFilters() {
		(new PlatformOSVersionsHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeDevicesHandlerAllInvalidFilters() {
		(new PlatformTypeDevicesHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypesHandlerAllInvalidFilters() {
		(new PlatformTypesHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugReproducibilitySchemeHandlerAllInvalidFilters() {
		(new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSeveritySchemeHandlerAllInvalidFilters() {
		(new ProjectBugSeveritySchemeHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugsHandlerAllInvalidFilters() {
		(new ProjectBugsHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugStatusSchemeHandlerAllInvalidFilters() {
		(new ProjectBugStatusSchemeHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugTypeSchemeHandlerAllInvalidFilters() {
		(new ProjectBugTypeSchemeHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionsHandlerAllInvalidFilters() {
		(new ProjectSectionsHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectsHandlerAllInvalidFilters() {
		(new ProjectsHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUsersHandlerAllInvalidFilters() {
		(new ProjectUsersHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionsHandlerAllInvalidFilters() {
		(new ProjectVersionsHandler(new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserHandlerAllInvalidFilters() {
		(new UserHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationsHandlerAllInvalidFilters() {
		(new UserOrganizationsHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
	}
	/* END ALL INVALID FILTERS */








	/* ALL SUPPORTED FILTERS */
	public function testAttachmentsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new AttachmentsHandler($client))->all(['include' => '']);
		(new AttachmentsHandler($client))->all(['limit' => 10]);
		(new AttachmentsHandler($client))->all(['page' => 2]);
	}
	public function testBugAttachmentsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new BugAttachmentsHandler($client, 999))->all(['include' => '']);
		(new BugAttachmentsHandler($client, 999))->all(['limit' => 10]);
		(new BugAttachmentsHandler($client, 999))->all(['page' => 2]);
	}
	public function testBugCommentsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new BugCommentsHandler($client, 999))->all(['include' => '']);
		(new BugCommentsHandler($client, 999))->all(['limit' => 10]);
		(new BugCommentsHandler($client, 999))->all(['page' => 2]);
	}
	public function testBugsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new BugsHandler($client))->all(['include' => '']);
		(new BugsHandler($client))->all(['limit' => 10]);
		(new BugsHandler($client))->all(['page' => 2]);
	}
	public function testPlatformBrowsersHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new PlatformBrowsersHandler($client))->all(['include' => '']);
		(new PlatformBrowsersHandler($client))->all(['limit' => 10]);
		(new PlatformBrowsersHandler($client))->all(['page' => 2]);
	}
	public function testPlatformBrowserVersionsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new PlatformBrowserVersionsHandler($client, 999))->all(['include' => '']);
		(new PlatformBrowserVersionsHandler($client, 999))->all(['limit' => 10]);
		(new PlatformBrowserVersionsHandler($client, 999))->all(['page' => 2]);
	}
	public function testPlatformDevicesHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new PlatformDevicesHandler($client))->all(['include' => '']);
		(new PlatformDevicesHandler($client))->all(['limit' => 10]);
		(new PlatformDevicesHandler($client))->all(['page' => 2]);
	}
	public function testPlatformHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new PlatformHandler($client))->all(['include' => '']);
		(new PlatformHandler($client))->all(['limit' => 10]);
		(new PlatformHandler($client))->all(['page' => 2]);
	}
	public function testPlatformOSHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new PlatformOSHandler($client))->all(['include' => '']);
		(new PlatformOSHandler($client))->all(['limit' => 10]);
		(new PlatformOSHandler($client))->all(['page' => 2]);
	}
	public function testPlatformOSVersionsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new PlatformOSVersionsHandler($client, 999))->all(['include' => '']);
		(new PlatformOSVersionsHandler($client, 999))->all(['limit' => 10]);
		(new PlatformOSVersionsHandler($client, 999))->all(['page' => 2]);
	}
	public function testPlatformTypeDevicesHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new PlatformTypeDevicesHandler($client, 999))->all(['include' => '']);
		(new PlatformTypeDevicesHandler($client, 999))->all(['limit' => 10]);
		(new PlatformTypeDevicesHandler($client, 999))->all(['page' => 2]);
	}
	public function testPlatformTypesHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new PlatformTypesHandler($client))->all(['include' => '']);
		(new PlatformTypesHandler($client))->all(['limit' => 10]);
		(new PlatformTypesHandler($client))->all(['page' => 2]);
	}
	public function testProjectBugReproducibilitySchemeHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new ProjectBugReproducibilitySchemeHandler($client, 999))->all(['include' => '']);
		(new ProjectBugReproducibilitySchemeHandler($client, 999))->all(['limit' => 10]);
		(new ProjectBugReproducibilitySchemeHandler($client, 999))->all(['page' => 2]);
	}
	public function testProjectBugSeveritySchemeHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new ProjectBugSeveritySchemeHandler($client, 999))->all(['include' => '']);
		(new ProjectBugSeveritySchemeHandler($client, 999))->all(['limit' => 10]);
		(new ProjectBugSeveritySchemeHandler($client, 999))->all(['page' => 2]);
	}
	public function testProjectBugsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new ProjectBugsHandler($client, 999))->all(['include' => '']);
		(new ProjectBugsHandler($client, 999))->all(['limit' => 10]);
		(new ProjectBugsHandler($client, 999))->all(['page' => 2]);
	}
	public function testProjectBugStatusSchemeHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new ProjectBugStatusSchemeHandler($client, 999))->all(['include' => '']);
		(new ProjectBugStatusSchemeHandler($client, 999))->all(['limit' => 10]);
		(new ProjectBugStatusSchemeHandler($client, 999))->all(['page' => 2]);
	}
	public function testProjectBugTypeSchemeHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new ProjectBugTypeSchemeHandler($client, 999))->all(['include' => '']);
		(new ProjectBugTypeSchemeHandler($client, 999))->all(['limit' => 10]);
		(new ProjectBugTypeSchemeHandler($client, 999))->all(['page' => 2]);
	}
	public function testProjectSectionsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new ProjectSectionsHandler($client, 999))->all(['include' => '']);
		(new ProjectSectionsHandler($client, 999))->all(['limit' => 10]);
		(new ProjectSectionsHandler($client, 999))->all(['page' => 2]);
	}
	public function testProjectsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new ProjectsHandler($client))->all(['include' => '']);
		(new ProjectsHandler($client))->all(['limit' => 10]);
		(new ProjectsHandler($client))->all(['page' => 2]);
	}
	public function testProjectUsersHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new ProjectUsersHandler($client, 999))->all(['include' => '']);
		(new ProjectUsersHandler($client, 999))->all(['limit' => 10]);
		(new ProjectUsersHandler($client, 999))->all(['page' => 2]);
	}
	public function testProjectVersionsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new ProjectVersionsHandler($client, 999))->all(['include' => '']);
		(new ProjectVersionsHandler($client, 999))->all(['limit' => 10]);
		(new ProjectVersionsHandler($client, 999))->all(['page' => 2]);
	}
	public function testUserHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new UserHandler($client))->all(['include' => '']);
		(new UserHandler($client))->all(['limit' => 10]);
		(new UserHandler($client))->all(['page' => 2]);
	}
	public function testUserOrganizationsHandlerAllSupportedFilters() {
		$client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
		(new UserOrganizationsHandler($client))->all(['include' => '']);
		(new UserOrganizationsHandler($client))->all(['limit' => 10]);
		(new UserOrganizationsHandler($client))->all(['page' => 2]);
	}
	/* END ALL SUPPORTED FILTERS */










	/* FIND NON INT ID */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testAttachmentsHandlerFindNonIntID() {
		(new AttachmentsHandler(new PHPClient))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentsHandlerFindNonIntID() {
		(new BugAttachmentsHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentsHandlerFindNonIntID() {
		(new BugCommentsHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugsHandlerFindNonIntID() {
		(new BugsHandler(new PHPClient))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowsersHandlerFindNonIntID() {
		(new PlatformBrowsersHandler(new PHPClient))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionsHandlerFindNonIntID() {
		(new PlatformBrowserVersionsHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDevicesHandlerFindNonIntID() {
		(new PlatformDevicesHandler(new PHPClient))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformHandlerFindNonIntID() {
		(new PlatformHandler(new PHPClient))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSHandlerFindNonIntID() {
		(new PlatformOSHandler(new PHPClient))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionsHandlerFindNonIntID() {
		(new PlatformOSVersionsHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeDevicesHandlerFindNonIntID() {
		(new PlatformTypeDevicesHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypesHandlerFindNonIntID() {
		(new PlatformTypesHandler(new PHPClient))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugReproducibilitySchemeHandlerFindNonIntID() {
		(new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSeveritySchemeHandlerFindNonIntID() {
		(new ProjectBugSeveritySchemeHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugsHandlerFindNonIntID() {
		(new ProjectBugsHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugStatusSchemeHandlerFindNonIntID() {
		(new ProjectBugStatusSchemeHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugTypeSchemeHandlerFindNonIntID() {
		(new ProjectBugTypeSchemeHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionsHandlerFindNonIntID() {
		(new ProjectSectionsHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectsHandlerFindNonIntID() {
		(new ProjectsHandler(new PHPClient))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUsersHandlerFindNonIntID() {
		(new ProjectUsersHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionsHandlerFindNonIntID() {
		(new ProjectVersionsHandler(new PHPClient, 999))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserHandlerFindNonIntID() {
		(new UserHandler(new PHPClient))->find('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationsHandlerFindNonIntID() {
		(new UserOrganizationsHandler(new PHPClient))->find('');
	}
	/* END FIND NON INT ID */







	/* DELETE NON INT ID */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testAttachmentsHandlerDeleteNonIntID() {
		(new AttachmentsHandler(new PHPClient))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentsHandlerDeleteNonIntID() {
		(new BugAttachmentsHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentsHandlerDeleteNonIntID() {
		(new BugCommentsHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugsHandlerDeleteNonIntID() {
		(new BugsHandler(new PHPClient))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowsersHandlerDeleteNonIntID() {
		(new PlatformBrowsersHandler(new PHPClient))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionsHandlerDeleteNonIntID() {
		(new PlatformBrowserVersionsHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDevicesHandlerDeleteNonIntID() {
		(new PlatformDevicesHandler(new PHPClient))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformHandlerDeleteNonIntID() {
		(new PlatformHandler(new PHPClient))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSHandlerDeleteNonIntID() {
		(new PlatformOSHandler(new PHPClient))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionsHandlerDeleteNonIntID() {
		(new PlatformOSVersionsHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeDevicesHandlerDeleteNonIntID() {
		(new PlatformTypeDevicesHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypesHandlerDeleteNonIntID() {
		(new PlatformTypesHandler(new PHPClient))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugReproducibilitySchemeHandlerDeleteNonIntID() {
		(new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSeveritySchemeHandlerDeleteNonIntID() {
		(new ProjectBugSeveritySchemeHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugsHandlerDeleteNonIntID() {
		(new ProjectBugsHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugStatusSchemeHandlerDeleteNonIntID() {
		(new ProjectBugStatusSchemeHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugTypeSchemeHandlerDeleteNonIntID() {
		(new ProjectBugTypeSchemeHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionsHandlerDeleteNonIntID() {
		(new ProjectSectionsHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectsHandlerDeleteNonIntID() {
		(new ProjectsHandler(new PHPClient))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUsersHandlerDeleteNonIntID() {
		(new ProjectUsersHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionsHandlerDeleteNonIntID() {
		(new ProjectVersionsHandler(new PHPClient, 999))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserHandlerDeleteNonIntID() {
		(new UserHandler(new PHPClient))->delete('');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationsHandlerDeleteNonIntID() {
		(new UserOrganizationsHandler(new PHPClient))->delete('');
	}
	/* END DELETE NON INT ID */







	/* UPDATE NON INT ID */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testAttachmentsHandlerUpdateNonIntID() {
		(new AttachmentsHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentsHandlerUpdateNonIntID() {
		(new BugAttachmentsHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentsHandlerUpdateNonIntID() {
		(new BugCommentsHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugsHandlerUpdateNonIntID() {
		(new BugsHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowsersHandlerUpdateNonIntID() {
		(new PlatformBrowsersHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionsHandlerUpdateNonIntID() {
		(new PlatformBrowserVersionsHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDevicesHandlerUpdateNonIntID() {
		(new PlatformDevicesHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformHandlerUpdateNonIntID() {
		(new PlatformHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSHandlerUpdateNonIntID() {
		(new PlatformOSHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionsHandlerUpdateNonIntID() {
		(new PlatformOSVersionsHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeDevicesHandlerUpdateNonIntID() {
		(new PlatformTypeDevicesHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypesHandlerUpdateNonIntID() {
		(new PlatformTypesHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugReproducibilitySchemeHandlerUpdateNonIntID() {
		(new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSeveritySchemeHandlerUpdateNonIntID() {
		(new ProjectBugSeveritySchemeHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugsHandlerUpdateNonIntID() {
		(new ProjectBugsHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugStatusSchemeHandlerUpdateNonIntID() {
		(new ProjectBugStatusSchemeHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugTypeSchemeHandlerUpdateNonIntID() {
		(new ProjectBugTypeSchemeHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionsHandlerUpdateNonIntID() {
		(new ProjectSectionsHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectsHandlerUpdateNonIntID() {
		(new ProjectsHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUsersHandlerUpdateNonIntID() {
		(new ProjectUsersHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionsHandlerUpdateNonIntID() {
		(new ProjectVersionsHandler(new PHPClient, 999))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserHandlerUpdateNonIntID() {
		(new UserHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationsHandlerUpdateNonIntID() {
		(new UserOrganizationsHandler(new PHPClient))->update('', ['x' => 5]);
	}
	/* END UPDATE NON INT ID */






	/* UPDATE NON ARR FIELDS */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testAttachmentsHandlerUpdateNonArrFields() {
		(new AttachmentsHandler(new PHPClient))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentsHandlerUpdateNonArrFields() {
		(new BugAttachmentsHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentsHandlerUpdateNonArrFields() {
		(new BugCommentsHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugsHandlerUpdateNonArrFields() {
		(new BugsHandler(new PHPClient))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowsersHandlerUpdateNonArrFields() {
		(new PlatformBrowsersHandler(new PHPClient))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionsHandlerUpdateNonArrFields() {
		(new PlatformBrowserVersionsHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDevicesHandlerUpdateNonArrFields() {
		(new PlatformDevicesHandler(new PHPClient))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformHandlerUpdateNonArrFields() {
		(new PlatformHandler(new PHPClient))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSHandlerUpdateNonArrFields() {
		(new PlatformOSHandler(new PHPClient))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionsHandlerUpdateNonArrFields() {
		(new PlatformOSVersionsHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeDevicesHandlerUpdateNonArrFields() {
		(new PlatformTypeDevicesHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypesHandlerUpdateNonArrFields() {
		(new PlatformTypesHandler(new PHPClient))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugReproducibilitySchemeHandlerUpdateNonArrFields() {
		(new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSeveritySchemeHandlerUpdateNonArrFields() {
		(new ProjectBugSeveritySchemeHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugsHandlerUpdateNonArrFields() {
		(new ProjectBugsHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugStatusSchemeHandlerUpdateNonArrFields() {
		(new ProjectBugStatusSchemeHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugTypeSchemeHandlerUpdateNonArrFields() {
		(new ProjectBugTypeSchemeHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionsHandlerUpdateNonArrFields() {
		(new ProjectSectionsHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectsHandlerUpdateNonArrFields() {
		(new ProjectsHandler(new PHPClient))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUsersHandlerUpdateNonArrFields() {
		(new ProjectUsersHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionsHandlerUpdateNonArrFields() {
		(new ProjectVersionsHandler(new PHPClient, 999))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserHandlerUpdateNonArrFields() {
		(new UserHandler(new PHPClient))->update(5, '');
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationsHandlerUpdateNonArrFields() {
		(new UserOrganizationsHandler(new PHPClient))->update(5, '');
	}
	/* END UPDATE NON ARR FIELDS */







	/* UPDATE EMPTY FIELDS */
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testAttachmentsHandlerUpdateEmptyFields() {
		(new AttachmentsHandler(new PHPClient))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugAttachmentsHandlerUpdateEmptyFields() {
		(new BugAttachmentsHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugCommentsHandlerUpdateEmptyFields() {
		(new BugCommentsHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testBugsHandlerUpdateEmptyFields() {
		(new BugsHandler(new PHPClient))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowsersHandlerUpdateEmptyFields() {
		(new PlatformBrowsersHandler(new PHPClient))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformBrowserVersionsHandlerUpdateEmptyFields() {
		(new PlatformBrowserVersionsHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformDevicesHandlerUpdateEmptyFields() {
		(new PlatformDevicesHandler(new PHPClient))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformHandlerUpdateEmptyFields() {
		(new PlatformHandler(new PHPClient))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSHandlerUpdateEmptyFields() {
		(new PlatformOSHandler(new PHPClient))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformOSVersionsHandlerUpdateEmptyFields() {
		(new PlatformOSVersionsHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypeDevicesHandlerUpdateEmptyFields() {
		(new PlatformTypeDevicesHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testPlatformTypesHandlerUpdateEmptyFields() {
		(new PlatformTypesHandler(new PHPClient))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugReproducibilitySchemeHandlerUpdateEmptyFields() {
		(new ProjectBugReproducibilitySchemeHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugSeveritySchemeHandlerUpdateEmptyFields() {
		(new ProjectBugSeveritySchemeHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugsHandlerUpdateEmptyFields() {
		(new ProjectBugsHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugStatusSchemeHandlerUpdateEmptyFields() {
		(new ProjectBugStatusSchemeHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectBugTypeSchemeHandlerUpdateEmptyFields() {
		(new ProjectBugTypeSchemeHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectSectionsHandlerUpdateEmptyFields() {
		(new ProjectSectionsHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectsHandlerUpdateEmptyFields() {
		(new ProjectsHandler(new PHPClient))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectUsersHandlerUpdateEmptyFields() {
		(new ProjectUsersHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testProjectVersionsHandlerUpdateEmptyFields() {
		(new ProjectVersionsHandler(new PHPClient, 999))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserHandlerUpdateEmptyFields() {
		(new UserHandler(new PHPClient))->update(5, []);
	}
	/**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
	public function testUserOrganizationsHandlerUpdateEmptyFields() {
		(new UserOrganizationsHandler(new PHPClient))->update(5, []);
	}
	/* END UPDATE EMPTY FIELDS */







	/* HAS SECONDARIES */
	public function testPlatformHandlerHasTypes() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformTypesHandler', (new PlatformHandler(new PHPClient))->types);
	}
	public function testPlatformHandlerHasDevices() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformDevicesHandler', (new PlatformHandler(new PHPClient))->devices);
	}
	public function testPlatformHandlerHasOS() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformOSHandler', (new PlatformHandler(new PHPClient))->os);
	}
	public function testPlatformHandlerHasBrowsers() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformBrowsersHandler', (new PlatformHandler(new PHPClient))->browsers);
	}
	public function testUserHandlerHasOrganizations() {
		$this->assertInstanceOf('LeanTesting\API\Client\Handler\User\UserOrganizationsHandler', (new UserHandler(new PHPClient))->organizations);
	}
	/* END HAS SECONDARIES */

}
