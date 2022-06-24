# Easy Coding Standard config for Craft CMS

Forked from https://github.com/craftcms/ecs with a few modifications:
- Runs with `parallel` mode enabled.
- Sets the control structure continuation keyword to be on the next line.

```php
// Before:

if ($condition) {
    // Do things
} else {
    // Do other things
}


// After:

if ($condition) {
    // Do things
} 
else {
    // Do other things
}
```

To install, run the following command within your plugin or project:

```shell
composer require putyourlightson/ecs:dev-main --dev
```

Then add an `ecs.php` file to the root of your plugin or project:

```php
<?php

declare(strict_types=1);

use putyourlightson\ecs\SetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function(ECSConfig $ecsConfig): void {
    $ecsConfig->paths([
        __DIR__ . '/src',
        __FILE__,
    ]);
    
    $ecsConfig->sets([SetList::CRAFT_CMS_3]); // for Craft 3 projects
    $ecsConfig->sets([SetList::CRAFT_CMS_4]); // for Craft 4 projects
};
```

---

Created by [PutYourLightsOn](https://putyourlightson.com/).
