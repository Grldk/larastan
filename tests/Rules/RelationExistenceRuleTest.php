<?php

declare(strict_types=1);

namespace Tests\Rules;

use Larastan\Larastan\Rules\ModelRuleHelper;
use Larastan\Larastan\Rules\RelationExistenceRule;
use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/** @extends RuleTestCase<RelationExistenceRule> */
class RelationExistenceRuleTest extends RuleTestCase
{
    protected function getRule(): Rule
    {
        return new RelationExistenceRule(new ModelRuleHelper());
    }

    public function testRule(): void
    {
        $this->analyse([__DIR__.'/data/relation-existence-rule.php'], [
            [
                'Relation \'foo\' is not found in App\User model.',
                5,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                6,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                7,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                8,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                9,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                10,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                11,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                12,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                13,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                15,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                16,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                17,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                18,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                19,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                20,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                21,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                22,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                23,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                25,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                26,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                27,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                28,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                29,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                30,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                31,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                32,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                33,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                35,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                36,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                37,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                38,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                39,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                40,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                41,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                42,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                43,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                45,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                46,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                47,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                48,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                49,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                50,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                53,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                54,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                55,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                56,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                59,
            ],
            [
                'Relation \'bar\' is not found in App\User model.',
                59,
            ],
            [
                'Relation \'foo\' is not found in App\User model.',
                61,
            ],
            [
                'Relation \'foo\' is not found in App\Group model.',
                62,
            ],
            [
                'Relation \'foo\' is not found in App\Account model.',
                63,
            ],
            [
                'Relation \'foo\' is not found in App\Transaction model.',
                64,
            ],
        ]);
    }

    public static function getAdditionalConfigFiles(): array
    {
        return [
            __DIR__.'/phpstan-rules.neon',
        ];
    }
}
