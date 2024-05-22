<?php

namespace Megavnet\CachingModel\Contracts;

use \Megavnet\CachingModel\Contracts\BuilderInterface;

interface Cacheable
{
    public static function primaryCacheKey(): string;

    public static function secondaryCacheKey(): string|null;

    public static function getCacheKey($id, string $key = null): string;

    public static function getCacheKeyList(): string;

    public static function cacheTimeout(): int;

    public function scopeCacheWithRelation($query);
}
