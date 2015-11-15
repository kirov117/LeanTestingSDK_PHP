<?php

namespace LeanTesting\API\Client;

require 'common.php';

//TODO Composer-ready + namespace autoloading

/* Load Exception Classes */
require 'Exception/SDKException.class.php';
require 'Exception/SDKInvalidArgException.class.php';
require 'Exception/SDKMissingArgException.class.php';
require 'Exception/SDKRemoteAPIErrorException.class.php';

/* Load Base Classes */
require 'BaseClass/APIRequest.class.php';
require 'BaseClass/Entity.class.php';
require 'BaseClass/EntityHandler.class.php';
require 'BaseClass/EntityList.class.php';

/* Load Entity Classes */
require 'Entity/Bug/Bug.class.php';
require 'Entity/Bug/BugAttachment.class.php';
require 'Entity/Bug/BugComment.class.php';
require 'Entity/Project/Project.class.php';
require 'Entity/Project/ProjectSection.class.php';
require 'Entity/Project/ProjectVersion.class.php';
require 'Entity/Project/ProjectUser.class.php';
require 'Entity/Project/ProjectBugReproducibilityScheme.class.php';
require 'Entity/Project/ProjectBugSeverityScheme.class.php';
require 'Entity/Project/ProjectBugStatusScheme.class.php';
require 'Entity/Project/ProjectBugTypeScheme.class.php';
require 'Entity/Platform/PlatformType.class.php';
require 'Entity/Platform/PlatformDevice.class.php';
require 'Entity/Platform/PlatformOS.class.php';
require 'Entity/Platform/PlatformOSVersion.class.php';
require 'Entity/Platform/PlatformBrowser.class.php';
require 'Entity/Platform/PlatformBrowserVersion.class.php';
require 'Entity/User/UserOrganization.class.php';

/* Load Handler Classes */
require 'Handler/Auth/OAuth2Handler.class.php';
require 'Handler/User/UserHandler.class.php';
require 'Handler/User/UserOrganizationsHandler.class.php';
require 'Handler/Project/ProjectsHandler.class.php';
require 'Handler/Project/ProjectSectionsHandler.class.php';
require 'Handler/Project/ProjectVersionsHandler.class.php';
require 'Handler/Project/ProjectUsersHandler.class.php';
require 'Handler/Project/ProjectBugTypeSchemeHandler.class.php';
require 'Handler/Project/ProjectBugStatusSchemeHandler.class.php';
require 'Handler/Project/ProjectBugSeveritySchemeHandler.class.php';
require 'Handler/Project/ProjectBugReproducibilitySchemeHandler.class.php';
require 'Handler/Project/ProjectBugsHandler.class.php';
require 'Handler/Bug/BugsHandler.class.php';
require 'Handler/Bug/BugCommentsHandler.class.php';
require 'Handler/Bug/BugAttachmentsHandler.class.php';
require 'Handler/Platform/PlatformHandler.class.php';
require 'Handler/Platform/PlatformTypesHandler.class.php';
require 'Handler/Platform/PlatformTypeDevicesHandler.class.php';
require 'Handler/Platform/PlatformDevicesHandler.class.php';
require 'Handler/Platform/PlatformOSHandler.class.php';
require 'Handler/Platform/PlatformOSVersionsHandler.class.php';
require 'Handler/Platform/PlatformBrowsersHandler.class.php';
require 'Handler/Platform/PlatformBrowserVersionsHandler.class.php';
