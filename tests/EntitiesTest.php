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

    private $entity_colllection = [
        ['LeanTesting\API\Client\Entity\Bug\Bug', [
            'comments'      => 'LeanTesting\API\Client\Handler\Bug\BugCommentsHandler',
            'attachments'   => 'LeanTesting\API\Client\Handler\Bug\BugAttachmentsHandler'
        ]],
        ['LeanTesting\API\Client\Entity\Bug\BugAttachment'],
        ['LeanTesting\API\Client\Entity\Bug\BugComment'],
        ['LeanTesting\API\Client\Entity\Platform\PlatformBrowser', [
            'versions'      => 'LeanTesting\API\Client\Handler\Platform\PlatformBrowserVersionsHandler'
        ]],
        ['LeanTesting\API\Client\Entity\Platform\PlatformBrowserVersion'],
        ['LeanTesting\API\Client\Entity\Platform\PlatformDevice'],
        ['LeanTesting\API\Client\Entity\Platform\PlatformOS', [
            'versions'      => 'LeanTesting\API\Client\Handler\Platform\PlatformOSVersionsHandler'
        ]],
        ['LeanTesting\API\Client\Entity\Platform\PlatformOSVersion'],
        ['LeanTesting\API\Client\Entity\Platform\PlatformType', [
            'devices'       => 'LeanTesting\API\Client\Handler\Platform\PlatformTypeDevicesHandler'
        ]],
        ['LeanTesting\API\Client\Entity\Project\Project', [
            'sections'      => 'LeanTesting\API\Client\Handler\Project\ProjectSectionsHandler',
            'versions'      => 'LeanTesting\API\Client\Handler\Project\ProjectVersionsHandler',
            'users'         => 'LeanTesting\API\Client\Handler\Project\ProjectUsersHandler',

            'bugTypeScheme'             =>'LeanTesting\API\Client\Handler\Project\ProjectBugTypeSchemeHandler',
            'bugStatusScheme'           =>'LeanTesting\API\Client\Handler\Project\ProjectBugStatusSchemeHandler',
            'bugSeverityScheme'         =>'LeanTesting\API\Client\Handler\Project\ProjectBugSeveritySchemeHandler',
            'bugReproducibilityScheme'  =>'LeanTesting\API\Client\Handler\Project\ProjectBugReproducibilitySchemeHandler',

            'bugs'          => 'LeanTesting\API\Client\Handler\Project\ProjectBugsHandler'
        ]],
        ['LeanTesting\API\Client\Entity\Project\ProjectBugScheme'],
        ['LeanTesting\API\Client\Entity\Project\ProjectSection'],
        ['LeanTesting\API\Client\Entity\Project\ProjectUser'],
        ['LeanTesting\API\Client\Entity\Project\ProjectVersion'],
        ['LeanTesting\API\Client\Entity\User\UserOrganization']
    ];

    public function testEntitiesDefined() {
        foreach ($this->entity_colllection as $e) {
            $this->assertTrue(class_exists($e[0]));
        }
    }

    public function testEntitiesDataParsing() {
        $data = ['id' => 1];
        foreach ($this->entity_colllection as $e) {
            $this->assertSame((new $e[0](new PHPClient, $data))->data, $data);
        }
    }

    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntitiesInstanceNonArrData() {
        foreach ($this->entity_colllection as $e) {
            new $e[0](new PHPClient, '');
        }
    }

    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntitiesInstanceEmptyData() {
        foreach ($this->entity_colllection as $e) {
            new $e[0](new PHPClient, []);
        }
    }

    public function testEntitiesHaveSecondaries() {
        foreach ($this->entity_colllection as $e) {
            if (!array_key_exists(1, $e)) {
                continue;
            }

            foreach ($e[1] as $sk => $sv) {
                $this->assertInstanceOf($sv, (new $e[0](new PHPClient, ['id' => 1]))->$sk);
            }
        }
    }

}
