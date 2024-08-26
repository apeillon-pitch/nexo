@php $options = getSectionOptions($section['section_options_group']); @endphp
<div id="section-{{ $row }}" class="section slideshow style-one {{ $options['oclasses'] }}">
  <div class="container">
    <div class="d-flex flex-column wp-content">
      <div class="d-flex flex-row justify-content-between align-items-center wp-title">
        @if ($section['title_group']['title'])
          @include('partials.template-parts.title', ['item' => $section['title_group'], 'class' => 'section-title mb-0'])
        @endif
        <div class="slideshow-arrows d-flex flex-row justify-content-end align-items-center">
          <div id="slick-prev" class="arrow slick-arrow-prev">
            <img src="@asset('images/arrow-slideshow.svg')" alt="flèche" class="blue">
            <img src="@asset('images/arrow-slideshow-white.svg')" alt="flèche" class="white">
          </div>
          <div id="slick-next" class="arrow slick-arrow-next">
            <img src="@asset('images/arrow-slideshow.svg')" alt="flèche" class="blue">
            <img src="@asset('images/arrow-slideshow-white.svg')" alt="flèche" class="white">
          </div>
        </div>
      </div>
      @if($section['item_repeater'])
        <div class="slideshow">
          @foreach($section['item_repeater'] as $item)
            @include('partials.template-parts.slideshow.style-one', ['item' => $item])
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
