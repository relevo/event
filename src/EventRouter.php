<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface EventRouter
{
    /**
     * Add event route.
     *
     * @param string $event
     * @param array $listeners
     */
    public function when(string $event, array $listeners);
}
