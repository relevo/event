<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface ListenerProvider
{
    /**
     * Get event routes.
     *
     * @param EventRouteCollection $routes
     *
     * @return EventRouteCollection
     */
    public function getEventRoutes(EventRouteCollection $routes) : EventRouteCollection;
}
