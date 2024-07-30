@php $options = getSectionOptions($section['section_options_group']); @endphp

@switch($section['source'])
  @case('global')
    @php $data = get_field('banner_cta_group', 'options') @endphp
    @break
  @default
    @php $data = $section @endphp
    @break
@endswitch

<div id="section-{{ $row }}" class="section banner-cta style-one {{ $options['oclasses'] }}">
  <div class="container">
    <div class="wp-content d-flex flex-column justify-content-center"
         style="background-image: url({{ $data['bg_image']['url'] }})">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-6 ">
          <div class="d-flex flex-column wp-text align-items-center text-center">
            @if ($data['title_group']['title'])
              @include('partials.template-parts.title', ['item' => $data['title_group'], 'class' => 'section-title'])
            @endif
            @if($data['text'])
              {!! $data['text'] !!}
            @endif
            @if($data['cta_repeater'])
              <div class="d-flex flex-row wp-cta">
                @foreach($data['cta_repeater'] as $cta)
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
</div>
