<div class="modal fade" id="disclaimerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header justify-content-center border-0">
        @if ($options_data['modal_disclaimer']['title'])
          <span class="section-title">{!! $options_data['modal_disclaimer']['title'] !!}</span>
        @endif
      </div>
      <div class="modal-body text-center">
        @if ($options_data['modal_disclaimer']['text'])
          {!! $options_data['modal_disclaimer']['text'] !!}
        @endif
        @if ($options_data['modal_disclaimer']['label_btn'])
          <button class="btn btn-primary w-100 mt-2" data-bs-dismiss="modal"
                  aria-label="Close">
            {!! $options_data['modal_disclaimer']['label_btn'] !!}
          </button>
        @endif
        @if ($options_data['modal_disclaimer']['cta_repeater'])
          @foreach($options_data['modal_disclaimer']['cta_repeater'] as $cta)
            <a href="{{ $cta['link']['url'] }}" aria-label="{!! $cta['link']['title'] !!}"
               class="btn btn-{{ $cta['class'] }} w-100 mt-3"
               target="{{ $cta['link']['target'] }}">
              <span>{!! $cta['link']['title'] !!}</span>
            </a>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</div>
