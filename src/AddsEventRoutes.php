<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface AddsEventRoutes
{
    /**
     * Add event route to router.
     *
     * @param EventRouter $router
     */
    public function addEventRoutes(EventRouter $router);
}
