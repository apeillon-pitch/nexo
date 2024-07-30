@php $options = getSectionOptions($section['section_options_group']); @endphp
<div id="section-{{ $row }}" class="section image-text style-one {{ $options['oclasses'] }}">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-12 col-lg-6 {{ $section['image_position'] === 'left' ? 'order-2' : 'order-2 order-lg-1'}}">
        <div class="d-flex flex-column wp-text text-center text-lg-start">
          @if ($section['title_group']['title'])
            @include('partials.template-parts.title', ['item' => $section['title_group'], 'class' => 'section-title'])
          @endif
          @if($section['text'])
            {!! $section['text'] !!}
          @endif
          @if($section['cta_repeater'])
            <div class="d-flex flex-row justify-content-center justify-content-lg-start wp-cta">
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
      <div class="col-12 col-lg-5 {{ $section['image_position'] === 'left' ? 'order-1' : 'order-1 order-lg-2'}}">
        @if($section['image'])
          <figure class="cover">
            {!! wp_get_attachment_image($section['image']['id'], 'large', '', array("class" => "")) !!}
          </figure>
        @endif
      </div>
    </div>
  </div>
</div>
