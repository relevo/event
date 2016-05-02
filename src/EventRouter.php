<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface EventRouter
{
    /**
     * Route event to listeners.
     *
     * @param string $event
     * @param array $listeners
     */
    public function when(string $event, array $listeners);
}
