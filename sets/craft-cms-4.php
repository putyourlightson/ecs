<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ControlStructure\ControlStructureContinuationPositionFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function(ECSConfig $ecsConfig): void {
    $ecsConfig->sets([__DIR__ . '/../../../craftcms/ecs/sets/craft-cms-4.php']);

    // Enables parallel mode.
    $ecsConfig->parallel();

    // Sets the control structure continuation keyword to be on the next line.
    $ecsConfig->ruleWithConfiguration(ControlStructureContinuationPositionFixer::class, [
        'position' => ControlStructureContinuationPositionFixer::NEXT_LINE,
    ]);
};
