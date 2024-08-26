@if($section['item_repeater'])
  @php $options = getSectionOptions($section['section_options_group']); @endphp
  <div id="section-{{ $row }}" class="section summary style-one {{ $options['oclasses'] }}">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-9 col-xl-10 col-xxl-9">
          <div class="d-flex flex-column wp-content">
            @foreach($section['item_repeater'] as $item)
              <a href="#section-{{ $item['section_id'] }}"
                 aria-label="{!! $item['title'] !!}">{!! $item['title'] !!}</a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endif
