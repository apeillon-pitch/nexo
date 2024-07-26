<div id="section-{{ $row }}" class="section hero style-one d-flex flex-column justify-content-center">
  <div class="wp-image">
    <div class="row justify-content-end h-100 gx-0">
      <div class="col-6 h-100">
        @if($section['image'])
          <figure class="cover mb-0">
            {!! wp_get_attachment_image($section['image']['id'], 'large', '', array("class" => "")) !!}
          </figure>
        @endif
      </div>
    </div>
  </div>
  <div class="wp-text">
    <div class="container">
      <div class="row">
        <div class="col-6">
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
