<?php
declare(strict_types = 1);

namespace Relevo\Event;

class EventRouteCollection
{
    /**
     * @var string[][]
     */
    private $routes;

    /**
     * Create new EventRouteCollection.
     *
     * @param string[][] $routes
     */
    public function __construct(array $routes = [])
    {
        $this->routes = $routes;
    }

    /**
     * Add event route.
     *
     * @param string $event
     * @param string[] $listeners
     */
    public function add(string $event, array $listeners)
    {
        $this->routes[$event] = $listeners;
    }

    /**
     * Alias of add.
     *
     * @param string $event
     * @param string[] $listeners
     */
    public function when(string $event, array $listeners)
    {
        $this->add($event, $listeners);
    }

    /**
     * Get all event routes as an array.
     *
     * @return string[][]
     */
    public function toArray() : array
    {
        return $this->routes;
    }
}
