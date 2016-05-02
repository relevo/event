<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface EventRouteProvider
{
    /**
     * Add event routes to router.
     *
     * @param EventRouter $router
     */
    public function addEventRoutes(EventRouter $router);
}
