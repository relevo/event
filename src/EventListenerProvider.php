<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface EventListenerProvider
{
    /**
     * Register event listeners into the given router.
     *
     * @param EventRouter $router
     */
    public function registerEventListeners(EventRouter $router);
}
