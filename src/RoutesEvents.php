<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface RoutesEvents
{
    /**
     * Route events to listeners.
     *
     * @param EventRouter $router
     */
    public function routeEvents(EventRouter $router);
}
