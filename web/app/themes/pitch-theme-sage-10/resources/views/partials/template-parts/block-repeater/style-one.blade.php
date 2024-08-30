<div class="col-12 col-sm">
  <div class="d-flex flex-column align-items-center wp-item {{ $class }} {{ $c === 5 ? 'five' : '' }}">
    @if($item['icon'])
      <figure class="mb-0">
        {!! wp_get_attachment_image($item['icon']['id'], 'medium', '', array("class" => "img-fluid")) !!}
      </figure>
    @endif
    @if ($item['title_group']['title'])
      @include('partials.template-parts.title', ['item' => $item['title_group'], 'class' => 'title text-center'])
    @endif
    @if ($item['text'])
      <p class="text-center mb-0">{!! $item['text'] !!}</p>
    @endif
  </div>
</div>
