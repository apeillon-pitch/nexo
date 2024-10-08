<header id="o-wrapper" class="banner">
  <div class="d-flex flex-row justify-content-between align-items-center gx-0">
    @if ($header['data']['logo'])
      <div class="d-block">
        <a href="{{ home_url() }}" aria-label="Accueil">
          <img src="{{ $header['data']['logo']['url'] }}" width="110" height="80" alt="{!!  $header['data']['logo']['alt'] !!}">
        </a>
      </div>
    @endif
    @if (has_nav_menu('primary_navigation'))
      <div id="nav-wrapper" class="d-none d-xl-block p-0">
        <nav class="nav-primary navbar navbar-expand-xl justify-content-start">
          {!! wp_nav_menu($mainMenu) !!}
        </nav>
      </div>
    @endif
    <div class="d-flex flex-row align-items-center">
      <div class="d-flex flex-row wp-cta">
        @foreach($header['data']['cta_repeater'] as $item)
          <a href="{{ $item['link']['url'] }}" class="d-none d-md-flex btn btn-{{ $item['class'] }} ms-4"
             aria-label="{!! $item['link']['title'] !!}" target="{{ $item['link']['target'] }}">
            {!! $item['link']['title'] !!}
          </a>
        @endforeach
      </div>
      <div class="d-flex d-xl-none ms-4">
        <div id="menu-button">
          <div class="c-buttons">
            <a href="#" rel="nofollow noindex" id="c-button--slide-right" aria-label="Menu" class="hamburger c-button">
              <div class="top-bun"></div>
              <div class="meat"></div>
              <div class="bottom-bun"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
