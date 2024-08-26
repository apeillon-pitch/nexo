<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3">
        @if($footer['data']['logo'])
          <a href="{{ home_url() }}" aria-label="Accueil">
            <img src="{{ $footer['data']['logo']['url'] }}" width="110" height="80" class="mb-4"
                 alt="{!!  $footer['data']['logo']['alt'] !!}">
          </a>
        @endif
        @if($footer['data']['text'])
          <p>{!! $footer['data']['text'] !!}</p>
        @endif
      </div>
      <div class="col-12 col-lg-6">
        @if($footer['data']['col_repeater'])
          <div class="row">
            @foreach($footer['data']['col_repeater'] as $col)
              <div class="col-12 col-md-4 mb-4 mb-lg-0">
                @if($col['link_repeater'])
                  <div class="d-flex flex-column wp-links">
                    @foreach($col['link_repeater'] as $item)
                      <a href="{{ $item['link']['url'] }}" aria-label="{!! $item['link']['title'] !!}"
                         target="{{ $item['link']['target'] }}">
                        {!! $item['link']['title'] !!}
                      </a>
                    @endforeach
                  </div>
                @endif
              </div>
            @endforeach
          </div>
        @endif
      </div>
      @if($footer['data']['cta_repeater'])
        <div class="col-12 col-lg-3">
          <div class="d-flex flex-column wp-cta">
            @foreach($footer['data']['cta_repeater'] as $item)
              <a href="{{ $item['link']['url'] }}" class="btn btn-{{ $item['class'] }}"
                 aria-label="{!! $item['link']['title'] !!}" target="{{ $item['link']['target'] }}">
                {!! $item['link']['title'] !!}
              </a>
            @endforeach
          </div>
        </div>
      @endif
    </div>
    @if($footer['data']['link_repeater'])
      <div class="d-flex flex-column flex-lg-row justify-content-between wp-legal">
        <span>Copyright © 2024 Nexo Capital - Tous droits réservés.</span>
        <div class="d-flex flex-row wp-links mt-3 mt-lg-0">
          @foreach($footer['data']['link_repeater'] as $item)
            <a href="{{ $item['link']['url'] }}"
               aria-label="{!! $item['link']['title'] !!}" target="{{ $item['link']['target'] }}">
              {!! $item['link']['title'] !!}
            </a>
          @endforeach
        </div>
      </div>
    @endif
  </div>
</footer>
@include('components.mobile-menu')
