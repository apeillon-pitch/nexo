<div class="slide">
  <div class="d-flex flex-column wp-item">
    <div class="d-flex flex-column wp-heading">
      @if ($item['overtitle'])
        <span class="overtitle">{!! $item['overtitle'] !!}</span>
      @endif
      @if ($item['title_group']['title'])
        @include('partials.template-parts.title', ['item' => $item['title_group'], 'class' => 'title'])
      @endif
    </div>
    @if ($item['text'])
      <div class="wp-text">
        {!! $item['text'] !!}
      </div>
    @endif
  </div>
</div>
