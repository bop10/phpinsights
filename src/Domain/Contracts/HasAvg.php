<?php

declare(strict_types=1);

namespace NunoMaduro\PhpInsights\Domain\Contracts;

use NunoMaduro\PhpInsights\Domain\Collector;

/**
 * @internal
 */
interface HasAvg extends Metric
{
    /**
     * Returns the avg of the metric.
     *
     * @param  \NunoMaduro\PhpInsights\Domain\Collector  $collector
     *
     * @return string
     */
    public function getAvg(Collector $collector): string;
}
