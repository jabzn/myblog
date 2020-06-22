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
            'icon'  => '<i class="fas fa-newspaper mr-2"></i>',
        ]
    ];
@endphp

<div class="mr-10 shadow-lg py-2 pl-4 border border-gray-400 rounded-lg text-lg">
    <ul>
        @foreach ($menu as $item)
            <li class="py-2 {{ $loop->last ? '' : 'border-b border-gray-400' }}">
                <a href="{{ route($item['route']) }}" class="{{ (request()->segment(2) == $item['name']) ? 'active:bg-blue-500' : '' }}">
                    {!! $item['icon'] !!} {{ ucfirst($item['name']) }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

