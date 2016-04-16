<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface EventListeners
{
    public function registerEventListeners(EventRouter $router);
}
