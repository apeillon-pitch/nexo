<div id="section-{{ $row }}" class="section hero style-one d-flex flex-column justify-content-center">
  <div class="wp-image">
    <div class="row justify-content-end h-100 gx-0">
      <div class="col-12 col-lg-6 h-100">
        @if($section['image'])
          <figure class="cover mb-0">
            {!! wp_get_attachment_image($section['image']['id'], 'large', '', array("class" => "d-none d-lg-block")) !!}
            {!! wp_get_attachment_image($section['image_mobile']['id'], 'large', '', array("class" => "d-block d-lg-none")) !!}
          </figure>
        @endif
      </div>
    </div>
  </div>
  <div class="wp-text">
    <div class="container">
      <div class="row justify-content-center justify-content-lg-start">
        <div class="col-10 col-lg-6">
          @if($section['title'])
            <h1 class="section-title mb-0">{!! $section['title'] !!}</h1>
          @endif
          @if ($section['cta_group'])
            @include('partials.template-parts.cta', ['item' => $section['cta_group']], ['class' => 'btn-secondary mt-4'])
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
