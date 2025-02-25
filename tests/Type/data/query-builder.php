<?php

declare(strict_types=1);

namespace QueryBuilder;

use Illuminate\Support\Facades\DB;

use function PHPStan\Testing\assertType;

function test(): void
{
    $record = DB::table('user')->pluck('email', 'id');
    assertType('Illuminate\Support\Collection<(int|string), mixed>', $record);
    assertType('Illuminate\Support\LazyCollection<int, stdClass>', DB::table('user')->cursor());
}
