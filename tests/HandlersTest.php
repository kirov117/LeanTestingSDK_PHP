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

    private $handler_colllection = [
        ['LeanTesting\API\Client\Handler\Attachment\AttachmentsHandler'],
        ['LeanTesting\API\Client\Handler\Bug\BugAttachmentsHandler',                        'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Bug\BugCommentsHandler',                           'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Bug\BugsHandler'],
        ['LeanTesting\API\Client\Handler\Platform\PlatformBrowsersHandler'],
        ['LeanTesting\API\Client\Handler\Platform\PlatformBrowserVersionsHandler',          'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Platform\PlatformDevicesHandler'],
        ['LeanTesting\API\Client\Handler\Platform\PlatformHandler'],
        ['LeanTesting\API\Client\Handler\Platform\PlatformOSHandler'],
        ['LeanTesting\API\Client\Handler\Platform\PlatformOSVersionsHandler',               'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Platform\PlatformTypeDevicesHandler',              'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Platform\PlatformTypesHandler'],
        ['LeanTesting\API\Client\Handler\Project\ProjectBugReproducibilitySchemeHandler',   'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Project\ProjectBugSeveritySchemeHandler',          'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Project\ProjectBugsHandler',                       'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Project\ProjectBugStatusSchemeHandler',            'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Project\ProjectBugTypeSchemeHandler',              'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Project\ProjectSectionsHandler',                   'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Project\ProjectsHandler'],
        ['LeanTesting\API\Client\Handler\Project\ProjectUsersHandler',                      'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\Project\ProjectVersionsHandler',                   'requiresIDInConstructor'],
        ['LeanTesting\API\Client\Handler\User\UserHandler'],
        ['LeanTesting\API\Client\Handler\User\UserOrganizationsHandler']
    ];

    public function testHandlersDefined() {
        foreach ($this->handler_colllection as $e) {
            $this->assertTrue(class_exists($e[0]));
        }
    }








    public function testHandlersCreateNonArrFields() {
        $expects_exception = 'LeanTesting\API\Client\Exception\SDKInvalidArgException';
        foreach ($this->handler_colllection as $e) {
            try {
                if (array_key_exists(1, $e) && $e[1] === 'requiresIDInConstructor') {
                    (new $e[0](new PHPClient, 999))->create('');
                } else {
                    (new $e[0](new PHPClient))->create('');
                }

                $this->fail('No exception thrown. Expected ' . $expects_exception);
            } catch(\Exception $ex) {
                if (get_class($ex) !== $expects_exception) {
                    $this->fail('Unexpected exception received. Expected ' . $expects_exception);
                }
            }
        }
    }
    public function testHandlersCreateEmptyFields() {
        $expects_exception = 'LeanTesting\API\Client\Exception\SDKInvalidArgException';
        foreach ($this->handler_colllection as $e) {
            try {
                if (array_key_exists(1, $e) && $e[1] === 'requiresIDInConstructor') {
                    (new $e[0](new PHPClient, 999))->create([]);
                } else {
                    (new $e[0](new PHPClient))->create([]);
                }

                $this->fail('No exception thrown. Expected ' . $expects_exception);
            } catch(\Exception $ex) {
                if (get_class($ex) !== $expects_exception) {
                    $this->fail('Unexpected exception received. Expected ' . $expects_exception);
                }
            }
        }
    }



    public function testHandlersAllNonArrFilters() {
        $expects_exception = 'LeanTesting\API\Client\Exception\SDKInvalidArgException';
        foreach ($this->handler_colllection as $e) {
            try {
                if (array_key_exists(1, $e) && $e[1] === 'requiresIDInConstructor') {
                    (new $e[0](new PHPClient, 999))->all('');
                } else {
                    (new $e[0](new PHPClient))->all('');
                }

                $this->fail('No exception thrown. Expected ' . $expects_exception);
            } catch(\Exception $ex) {
                if (get_class($ex) !== $expects_exception) {
                    $this->fail('Unexpected exception received. Expected ' . $expects_exception);
                }
            }
        }
    }
    public function testHandlersAllInvalidFilters() {
        $expects_exception = 'LeanTesting\API\Client\Exception\SDKInvalidArgException';
        foreach ($this->handler_colllection as $e) {
            try {
                if (array_key_exists(1, $e) && $e[1] === 'requiresIDInConstructor') {
                    (new $e[0](new PHPClient, 999))->all(['XXXfilterXXX' => 9999]);
                } else {
                    (new $e[0](new PHPClient))->all(['XXXfilterXXX' => 9999]);
                }

                $this->fail('No exception thrown. Expected ' . $expects_exception);
            } catch(\Exception $ex) {
                if (get_class($ex) !== $expects_exception) {
                    $this->fail('Unexpected exception received. Expected ' . $expects_exception);
                }
            }
        }
    }



    public function testHandlersFindNonIntID() {
        $expects_exception = 'LeanTesting\API\Client\Exception\SDKInvalidArgException';
        foreach ($this->handler_colllection as $e) {
            try {
                if (array_key_exists(1, $e) && $e[1] === 'requiresIDInConstructor') {
                    (new $e[0](new PHPClient, 999))->find('');
                } else {
                    (new $e[0](new PHPClient))->find('');
                }

                $this->fail('No exception thrown. Expected ' . $expects_exception);
            } catch(\Exception $ex) {
                if (get_class($ex) !== $expects_exception) {
                    $this->fail('Unexpected exception received. Expected ' . $expects_exception);
                }
            }
        }
    }



    public function testHandlersDeleteNonIntID() {
        $expects_exception = 'LeanTesting\API\Client\Exception\SDKInvalidArgException';
        foreach ($this->handler_colllection as $e) {
            try {
                if (array_key_exists(1, $e) && $e[1] === 'requiresIDInConstructor') {
                    (new $e[0](new PHPClient, 999))->delete('');
                } else {
                    (new $e[0](new PHPClient))->delete('');
                }

                $this->fail('No exception thrown. Expected ' . $expects_exception);
            } catch(\Exception $ex) {
                if (get_class($ex) !== $expects_exception) {
                    $this->fail('Unexpected exception received. Expected ' . $expects_exception);
                }
            }
        }
    }



    public function testHandlersUpdateNonIntID() {
        $expects_exception = 'LeanTesting\API\Client\Exception\SDKInvalidArgException';
        foreach ($this->handler_colllection as $e) {
            try {
                if (array_key_exists(1, $e) && $e[1] === 'requiresIDInConstructor') {
                    (new $e[0](new PHPClient, 999))->update('', ['x' => 5]);
                } else {
                    (new $e[0](new PHPClient))->update('', ['x' => 5]);
                }

                $this->fail('No exception thrown. Expected ' . $expects_exception);
            } catch(\Exception $ex) {
                if (get_class($ex) !== $expects_exception) {
                    $this->fail('Unexpected exception received. Expected ' . $expects_exception);
                }
            }
        }
    }
    public function testHandlersUpdateNonArrFields() {
        $expects_exception = 'LeanTesting\API\Client\Exception\SDKInvalidArgException';
        foreach ($this->handler_colllection as $e) {
            try {
                if (array_key_exists(1, $e) && $e[1] === 'requiresIDInConstructor') {
                    (new $e[0](new PHPClient, 999))->update(5, '');
                } else {
                    (new $e[0](new PHPClient))->update(5, '');
                }

                $this->fail('No exception thrown. Expected ' . $expects_exception);
            } catch(\Exception $ex) {
                if (get_class($ex) !== $expects_exception) {
                    $this->fail('Unexpected exception received. Expected ' . $expects_exception);
                }
            }
        }
    }
    public function testHandlersUpdateEmptyFields() {
        $expects_exception = 'LeanTesting\API\Client\Exception\SDKInvalidArgException';
        foreach ($this->handler_colllection as $e) {
            try {
                if (array_key_exists(1, $e) && $e[1] === 'requiresIDInConstructor') {
                    (new $e[0](new PHPClient, 999))->update(5, []);
                } else {
                    (new $e[0](new PHPClient))->update(5, []);
                }

                $this->fail('No exception thrown. Expected ' . $expects_exception);
            } catch(\Exception $ex) {
                if (get_class($ex) !== $expects_exception) {
                    $this->fail('Unexpected exception received. Expected ' . $expects_exception);
                }
            }
        }
    }




    /* HAVE SECONDARIES */
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
    /* END HAVE SECONDARIES */



    // /* ALL SUPPORTED FILTERS */
    // public function testAttachmentsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new AttachmentsHandler($client))->all(['include' => '']);
    //     (new AttachmentsHandler($client))->all(['limit' => 10]);
    //     (new AttachmentsHandler($client))->all(['page' => 2]);
    // }
    // public function testBugAttachmentsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new BugAttachmentsHandler($client, 999))->all(['include' => '']);
    //     (new BugAttachmentsHandler($client, 999))->all(['limit' => 10]);
    //     (new BugAttachmentsHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testBugCommentsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new BugCommentsHandler($client, 999))->all(['include' => '']);
    //     (new BugCommentsHandler($client, 999))->all(['limit' => 10]);
    //     (new BugCommentsHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testBugsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new BugsHandler($client))->all(['include' => '']);
    //     (new BugsHandler($client))->all(['limit' => 10]);
    //     (new BugsHandler($client))->all(['page' => 2]);
    // }
    // public function testPlatformBrowsersHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new PlatformBrowsersHandler($client))->all(['include' => '']);
    //     (new PlatformBrowsersHandler($client))->all(['limit' => 10]);
    //     (new PlatformBrowsersHandler($client))->all(['page' => 2]);
    // }
    // public function testPlatformBrowserVersionsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new PlatformBrowserVersionsHandler($client, 999))->all(['include' => '']);
    //     (new PlatformBrowserVersionsHandler($client, 999))->all(['limit' => 10]);
    //     (new PlatformBrowserVersionsHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testPlatformDevicesHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new PlatformDevicesHandler($client))->all(['include' => '']);
    //     (new PlatformDevicesHandler($client))->all(['limit' => 10]);
    //     (new PlatformDevicesHandler($client))->all(['page' => 2]);
    // }
    // public function testPlatformHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new PlatformHandler($client))->all(['include' => '']);
    //     (new PlatformHandler($client))->all(['limit' => 10]);
    //     (new PlatformHandler($client))->all(['page' => 2]);
    // }
    // public function testPlatformOSHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new PlatformOSHandler($client))->all(['include' => '']);
    //     (new PlatformOSHandler($client))->all(['limit' => 10]);
    //     (new PlatformOSHandler($client))->all(['page' => 2]);
    // }
    // public function testPlatformOSVersionsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new PlatformOSVersionsHandler($client, 999))->all(['include' => '']);
    //     (new PlatformOSVersionsHandler($client, 999))->all(['limit' => 10]);
    //     (new PlatformOSVersionsHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testPlatformTypeDevicesHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new PlatformTypeDevicesHandler($client, 999))->all(['include' => '']);
    //     (new PlatformTypeDevicesHandler($client, 999))->all(['limit' => 10]);
    //     (new PlatformTypeDevicesHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testPlatformTypesHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new PlatformTypesHandler($client))->all(['include' => '']);
    //     (new PlatformTypesHandler($client))->all(['limit' => 10]);
    //     (new PlatformTypesHandler($client))->all(['page' => 2]);
    // }
    // public function testProjectBugReproducibilitySchemeHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new ProjectBugReproducibilitySchemeHandler($client, 999))->all(['include' => '']);
    //     (new ProjectBugReproducibilitySchemeHandler($client, 999))->all(['limit' => 10]);
    //     (new ProjectBugReproducibilitySchemeHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testProjectBugSeveritySchemeHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new ProjectBugSeveritySchemeHandler($client, 999))->all(['include' => '']);
    //     (new ProjectBugSeveritySchemeHandler($client, 999))->all(['limit' => 10]);
    //     (new ProjectBugSeveritySchemeHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testProjectBugsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new ProjectBugsHandler($client, 999))->all(['include' => '']);
    //     (new ProjectBugsHandler($client, 999))->all(['limit' => 10]);
    //     (new ProjectBugsHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testProjectBugStatusSchemeHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new ProjectBugStatusSchemeHandler($client, 999))->all(['include' => '']);
    //     (new ProjectBugStatusSchemeHandler($client, 999))->all(['limit' => 10]);
    //     (new ProjectBugStatusSchemeHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testProjectBugTypeSchemeHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new ProjectBugTypeSchemeHandler($client, 999))->all(['include' => '']);
    //     (new ProjectBugTypeSchemeHandler($client, 999))->all(['limit' => 10]);
    //     (new ProjectBugTypeSchemeHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testProjectSectionsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new ProjectSectionsHandler($client, 999))->all(['include' => '']);
    //     (new ProjectSectionsHandler($client, 999))->all(['limit' => 10]);
    //     (new ProjectSectionsHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testProjectsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new ProjectsHandler($client))->all(['include' => '']);
    //     (new ProjectsHandler($client))->all(['limit' => 10]);
    //     (new ProjectsHandler($client))->all(['page' => 2]);
    // }
    // public function testProjectUsersHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new ProjectUsersHandler($client, 999))->all(['include' => '']);
    //     (new ProjectUsersHandler($client, 999))->all(['limit' => 10]);
    //     (new ProjectUsersHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testProjectVersionsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new ProjectVersionsHandler($client, 999))->all(['include' => '']);
    //     (new ProjectVersionsHandler($client, 999))->all(['limit' => 10]);
    //     (new ProjectVersionsHandler($client, 999))->all(['page' => 2]);
    // }
    // public function testUserHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new UserHandler($client))->all(['include' => '']);
    //     (new UserHandler($client))->all(['limit' => 10]);
    //     (new UserHandler($client))->all(['page' => 2]);
    // }
    // public function testUserOrganizationsHandlerAllSupportedFilters() {
    //     $client = new PHPClient;
    //     $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
    //     (new UserOrganizationsHandler($client))->all(['include' => '']);
    //     (new UserOrganizationsHandler($client))->all(['limit' => 10]);
    //     (new UserOrganizationsHandler($client))->all(['page' => 2]);
    // }
    // /* END ALL SUPPORTED FILTERS */

}
