@php $options = getSectionOptions($section['section_options_group']); @endphp
<div id="section-{{ $row }}" class="section title-text style-one {{ $options['oclasses'] }}">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 col-xl-10 col-xxl-9">
        <div class="d-flex flex-column wp-text">
          @if ($section['title_group']['title'])
            @include('partials.template-parts.title', ['item' => $section['title_group'], 'class' => 'section-title mb-4'])
          @endif
          @if($section['text'])
            {!! $section['text'] !!}
          @endif
          @if($section['cta_repeater'])
            <div class="d-flex flex-row wp-cta mt-4">
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
  </div>
</div>
