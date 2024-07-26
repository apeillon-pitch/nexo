<div id="section-{{ $row }}" class="section hero style-two d-flex flex-column justify-content-center"
     style="background-image: url({{ $section['image']['url'] }})">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-11 col-xxl-10">
        <div class="d-flex flex-column wp-content text-center">
          @if($section['title'])
            <h1 class="section-title mb-0">{!! $section['title'] !!}</h1>
          @endif
          @if($section['text'])
            {!! $section['text'] !!}
          @endif
          @if ($section['cta_group'])
            @include('partials.template-parts.cta', ['item' => $section['cta_group']], ['class' => 'btn-secondary mt-4'])
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
