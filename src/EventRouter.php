<?php
declare(strict_types = 1);

namespace Relevo\Event;

interface EventRouter
{
    public function when(string $event, array $listeners);
}
