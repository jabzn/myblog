@php
    $menu = [
        [
            'name'  => 'dashboard',
            'route' => 'admin.dashboard',
            'icon'  => '<i class="fas fa-tachometer-alt mr-2"></i>',
        ],
        [
            'name'  => 'Posts',
            'route' => 'admin.posts',
            'icon'  => '<i class="fas fa-newspaper mr-2"></i>',
        ],
        [
            'name'  => 'Categories',
            'route' => 'admin.categories',
            'icon'  => '<i class="fas fa-list mr-2"></i>',
        ],
        [
            'name'  => 'Tags',
            'route' => 'admin.tags',
            'icon'  => '<i class="fas fa-tags mr-2"></i>',
        ],
    ];
@endphp

<div class="py-2 pl-4 bg-blue-600 text-md text-white mt-16 fixed w-56 h-full">
    <ul>
        @foreach ($menu as $item)
            <li class="py-2">
                <a href="{{ route($item['route']) }}" class="{{ (request()->segment(2) == $item['name']) ? 'active:bg-blue-500' : '' }}">
                    {!! $item['icon'] !!} {{ ucfirst($item['name']) }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

