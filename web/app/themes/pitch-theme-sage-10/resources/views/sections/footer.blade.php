<footer class="content-info">
  <div class="container">
    <div class="row">
      <div class="col-3">
        @if($footer['data']['logo'])
          <a href="{{ home_url() }}" aria-label="Accueil">
            {!! wp_get_attachment_image( $footer['data']['logo']['id'], 'large','', array( "class" => "mb-4")) !!}
          </a>
        @endif
        @if($footer['data']['text'])
          <p>{!! $footer['data']['text'] !!}</p>
        @endif
      </div>
      <div class="col-6">
        @if($footer['data']['col_repeater'])
          <div class="row">
            @foreach($footer['data']['col_repeater'] as $col)
              <div class="col-4">
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
      <div class="col-3">
        <div class="d-flex flex-column wp-cta">
          @foreach($footer['data']['cta_repeater'] as $item)
            <a href="{{ $item['link']['url'] }}" class="btn btn-{{ $item['class'] }}"
               aria-label="{!! $item['link']['title'] !!}" target="{{ $item['link']['target'] }}">
              {!! $item['link']['title'] !!}
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</footer>
@include('components.mobile-menu')
