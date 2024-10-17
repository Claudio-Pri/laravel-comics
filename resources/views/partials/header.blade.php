{{-- @php
    $menuLinks = [
        [
            'url' => '#',
            'label' => 'Characters',

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
@endphp --}}



<header>
    <div class="header-top"></div>
    <div class="container">
      <div class="my-header d-flex py-3 align-items-center justify-content-between">
        <div>
          <a href="#">
            <img class="logo img-fluid" src="{{ asset('image/dc-logo.png') }}" alt="DC Logo">
          </a>
        </div>
        {{-- nav menuLinks --}}
        <nav>
          <ul class="d-flex">
            @foreach ($menuLinks as $link)
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

