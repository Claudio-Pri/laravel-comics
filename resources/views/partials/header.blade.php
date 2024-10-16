@php
    $links = [
        [
            'url' => '#',
            'label' => 'Characters',
            // 'active' => true,
        ],
        [
            'url' => '#',
            'label' => 'Comics',
            
        ],
        [
            'url' => '#',
            'label' => 'Movies',
            
        ],
        [
            'url' => '#',
            'label' => 'TV',
            
        ],
        [
            'url' => '#',
            'label' => 'Games',
            
        ],
        [
            'url' => '#',
            'label' => 'Collectibles',
            
        ],
        [
            'url' => '#',
            'label' => 'Videos',
            
        ],
        [
            'url' => '#',
            'label' => 'Fans',
            
        ],
        [
            'url' => '#',
            'label' => 'News',
            
        ],
        [
            'url' => '#',
            'label' => 'Shop',
            
        ],
    ];
@endphp

<header>
    <div class="container">
      <div class="my-header">
        <div>
          <a href="#">
            <img src="{{ asset('image/dc-logo.png') }}" alt="DC Logo">
          </a>
        </div>
        <nav>
          <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['url'] }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
          </ul>
        </nav>
      </div>
    </div>
  </header>
