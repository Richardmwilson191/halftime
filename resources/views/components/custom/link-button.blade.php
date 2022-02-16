@props([
    'type' => 'solid',
    'route',
    'var'
])

@if ($type === 'solid')
    <a href="
        {{ 
            isset($route) && isset($var) ? 
            route($route, $var) :
            (isset($route) ? route($route) : '#') 
        }}"
        class="uppercase py-2 px-4 rounded-lg bg-red-500 border-2 border-transparent text-white text-md mr-4 hover:bg-red-400">
        {{ $slot }}
    </a>
@else
    <a href="
        {{ 
            isset($route) && isset($var) ? 
            route($route, $var) :
            (isset($route) ? route($route) : '#') 
        }}"
        class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-red-500 text-red-500 dark:text-white hover:bg-red-500 hover:text-white text-md">
        {{ $slot }}
    </a>
@endif
