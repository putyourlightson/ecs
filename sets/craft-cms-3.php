<?php

declare(strict_types=1);

use putyourlightson\ecs\SetList;
use PhpCsFixer\Fixer\ControlStructure\ControlStructureContinuationPositionFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function(ECSConfig $ecsConfig): void {
    $ecsConfig->sets([SetList::CRAFT_CMS_3]);

    // Enables parallel mode.
    $ecsConfig->parallel();

    // Sets the control structure continuation keyword to be on the next line.
    $ecsConfig->ruleWithConfiguration(ControlStructureContinuationPositionFixer::class, [
        'position' => ControlStructureContinuationPositionFixer::NEXT_LINE,
    ]);
};
