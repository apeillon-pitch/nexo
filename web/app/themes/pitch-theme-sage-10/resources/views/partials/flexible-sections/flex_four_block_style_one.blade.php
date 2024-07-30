@php $options = getSectionOptions($section['section_options_group']); @endphp
<div id="section-{{ $row }}" class="section four-blocks style-one {{ $options['oclasses'] }}">
  <div class="container">
    <div class="d-flex flex-column wp-content">
      @if ($section['title_group']['title'])
        @include('partials.template-parts.title', ['item' => $section['title_group'], 'class' => 'section-title text-center'])
      @endif
      @if($section['item_repeater'])
        <div class="row wp-list">
          @foreach($section['item_repeater'] as $item)
            @if($loop->iteration === 1)
              <div class="col-7">
                <div class="card-one h-100" style="background-image: url({{ $item['bg_image']['url'] }})">
                  <div class="d-flex flex-column">
                    @if ($item['title_group']['title'])
                      @include('partials.template-parts.title', ['item' => $item['title_group'], 'class' => 'title'])
                    @endif
                    @if($item['image'])
                      <figure class="mb-0">
                        {!! wp_get_attachment_image($item['image']['id'], 'medium', '', array("class" => "img-fluid")) !!}
                      </figure>
                    @endif
                  </div>
                </div>
              </div>
            @elseif($loop->iteration === 2)
              <div class="col-5">
                <div class="card-two" style="background-image: url({{ $item['bg_image']['url'] }})">
                  <div class="d-flex flex-column">
                    @if($item['image'])
                      <figure class="mb-0">
                        {!! wp_get_attachment_image($item['image']['id'], 'medium', '', array("class" => "img-fluid")) !!}
                      </figure>
                    @endif
                    @if ($item['title_group']['title'])
                      @include('partials.template-parts.title', ['item' => $item['title_group'], 'class' => 'title'])
                    @endif
                  </div>
                </div>
              </div>
            @elseif($loop->iteration === 3)
              <div class="col-5">
                <div class="card-three" style="background-image: url({{ $item['bg_image']['url'] }})">
                  <div class="d-flex flex-row align-items-end">
                    @if ($item['title_group']['title'])
                      @include('partials.template-parts.title', ['item' => $item['title_group'], 'class' => 'title'])
                    @endif
                    @if($item['image'])
                      <figure class="mb-0">
                        {!! wp_get_attachment_image($item['image']['id'], 'medium', '', array("class" => "img-fluid")) !!}
                      </figure>
                    @endif
                  </div>
                </div>
              </div>
            @elseif($loop->iteration === 4)
              <div class="col-7">
                <div class="card-four" style="background-image: url({{ $item['bg_image']['url'] }})">
                  <div class="d-flex flex-column">
                    @if ($item['title_group']['title'])
                      @include('partials.template-parts.title', ['item' => $item['title_group'], 'class' => 'title'])
                    @endif
                    @if($item['image'])
                      <figure class="mb-0">
                        {!! wp_get_attachment_image($item['image']['id'], 'medium', '', array("class" => "img-fluid")) !!}
                      </figure>
                    @endif
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      @endif
      @if($section['cta_repeater'])
        <div class="d-flex flex-row justify-content-center wp-cta">
          @foreach($section['cta_repeater'] as $cta)
            <a href="{{ $cta['link']['url'] }}"
               target="{{ $cta['link']['target'] }}"
               aria-label="{!! $cta['link']['title'] !!}"
               class="btn btn-{{ $cta['class'] }}">
              {!! $cta['link']['title'] !!}
            </a>
          @endforeach
        </div>
      @endif
    </div>
  </div>
</div>
