@php $options = getSectionOptions($section['section_options_group']); @endphp
<div id="section-{{ $row }}" class="section block-repeater style-one {{ $options['oclasses'] }}">
  <div class="container">
    <div class="d-flex flex-column wp-content">
      @if ($section['title_group']['title'])
        @include('partials.template-parts.title', ['item' => $section['title_group'], 'class' => 'section-title text-center'])
      @endif
      @if($section['item_repeater'])
        @if(count($section['item_repeater']) > 4)
          @php $class = 'minor' @endphp
        @else
          @php $class = 'major' @endphp
        @endif
        <div class="row">
          @foreach($section['item_repeater'] as $item)
            @include('partials.template-parts.block-repeater.style-one', ['item' => $item, 'class' => $class])
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
