<?php

declare(strict_types=1);

use putyourlightson\ecs\SetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function(ECSConfig $ecsConfig): void {
    $ecsConfig->sets([SetList::CRAFT_CMS_4]);
};
