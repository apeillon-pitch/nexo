<div id="section-{{ $row }}" class="section hero style-three d-flex flex-column justify-content-center"
     style="background-image: url({{ $section['bg_image']['url'] }})">
  <div class="container">
    <div class="d-flex flex-column text-center wp-content">
      @if($section['title'])
        <h1 class="section-title mb-0 text-white">{!! $section['title'] !!}</h1>
      @endif
      @if($section['text'])
        {!! $section['text'] !!}
      @endif
      @if ($section['cta_group'])
        @include('partials.template-parts.cta', ['item' => $section['cta_group']], ['class' => 'btn-secondary mt-4'])
      @endif
      @if($section['image'])
        <div class="row justify-content-center">
          <div class="col-11 col-lg-10 col-xl-9 col-xxl-8">
            <figure class="mb-0">
              {!! wp_get_attachment_image($section['image']['id'], 'large', '', array("class" => "img-fluid d-block mx-auto")) !!}
            </figure>
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
