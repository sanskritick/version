<?php

namespace Sanskritick\Version\Package\Support;

class Constants
{
    public const MODE_INCREMENT = 'increment';

    public const MODE_ABSORB = 'absorb';

    public const VERSION_SOURCE_CONFIG = 'config';

    public const VERSION_CACHE_KEY = 'version';

    public const COMMIT_CACHE_KEY = 'commit';

    public const DEFAULT_FORMAT = 'full';

    public const VERSION_SOURCE_GIT_LOCAL = 'git-local';

    public const VERSION_SOURCE_GIT_REMOTE = 'git-remote';

    public const EVENT_VERSION_ABSORBED = 'sanskritick:version:events:version-absorbed';

    public const EVENT_COMMIT_INCREMENTED = 'sanskritick:version:events:commit-incremented';

    public const EVENT_MAJOR_INCREMENTED = 'sanskritick:version:events:major-incremented';

    public const EVENT_MINOR_INCREMENTED = 'sanskritick:version:events:minor-incremented';

    public const EVENT_PATCH_INCREMENTED = 'sanskritick:version:events:patch-incremented';

    public const EVENT_TIMESTAMP_UPDATED = 'sanskritick:version:events:timestamp-updated';
}
