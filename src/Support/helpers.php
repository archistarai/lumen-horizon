<?php

/** Helper functions to provide better Lumen-Laravel compatibility for the package */

if (! function_exists('resolve')) {
    /**
     * Resolve a service from the container.
     *
     * @param  string  $name
     * @param  array  $parameters
     * @return mixed
     */
    function resolve($name, array $parameters = [])
    {
        return app($name, $parameters);
    }
}
