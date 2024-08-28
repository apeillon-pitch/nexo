<div id="c-menu--slide-right" class="c-menu c-menu--slide-right">
  <div class="container">
    <div class="d-flex flex-row justify-content-between align-items-center">
      @if ($header['data'])
        <a href="{{ home_url() }}" aria-label="Accueil">
          <img src="{{ $header['data']['logo']['url'] }}"
               alt="{!! $header['data']['logo']['alt'] !!}"
               height="36px"
               width="auto">
        </a>
      @endif
      <a class="c-menu__close" aria-label="Fermer le menu">
        <img src="@asset('images/close.svg')" alt="Fermer le menu" width="24" height="24">
      </a>
    </div>
    <nav id="navbar-mobile" class="nav-primary navbar">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu($mainMenu) !!}
      @endif
    </nav>
    <div class="d-flex flex-column wp-cta">
      @foreach($header['data']['cta_repeater'] as $item)
        <a href="{{ $item['link']['url'] }}" class="d-flex btn btn-{{ $item['class'] }} justify-content-center mb-4"
           aria-label="{!! $item['link']['title'] !!}" target="{{ $item['link']['target'] }}">
          {!! $item['link']['title'] !!}
        </a>
      @endforeach
    </div>
  </div>
</div>
<div id="c-mask" class="c-mask"></div>
