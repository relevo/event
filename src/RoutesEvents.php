<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface RoutesEvents
{
    public function routeEvents(EventRouter $router);
}
