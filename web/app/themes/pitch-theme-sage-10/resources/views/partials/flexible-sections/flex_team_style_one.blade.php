@php $options = getSectionOptions($section['section_options_group']); @endphp
<div id="section-{{ $row }}" class="section team style-one {{ $options['oclasses'] }}">
  <div class="container">
    <div class="d-flex flex-column wp-content">
      @foreach($section['item_repeater'] as $item)
        <div class="d-flex flex-column wp-item">
          @if($item['title_group']['title'])
            @include('partials.template-parts.title', ['item' => $item['title_group'], 'class' => 'section-title'])
          @endif
          @if($item['team'])
            <div class="slideshow">
              @foreach($item['team'] as $el)
                @php $member = getMemberById($el); @endphp
                <div class="slide">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#teamModal-{{ $loop->iteration }}">
                    <div class="card-member" style="background-image: url({{ $member['picture'] }})">
                      <span class="name">{!! $member['title'] !!}</span>
                      <span class="job">{!! $member['job'] !!} </span>
                    </div>
                  </a>
                </div>
              @endforeach
            </div>
          @endif
        </div>
      @endforeach
    </div>
  </div>
  @if($item['team'])
    @foreach($item['team'] as $el)
      @php $member = getMemberById($el); @endphp
      <div class="modal fade" id="teamModal-{{ $loop->iteration }}" tabindex="-1"
           aria-labelledby="teamModalLabel-{{ $loop->iteration }}"
           aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <div class="d-flex flex-row justify-content-between w-100 wp-content">
                <div class="d-flex flex-column">
                  @if($member['picture'])
                    <div class="thumbnail me-4"
                         style="background-image: url({{ $member['picture'] }})"></div>
                  @endif
                  <div class="d-flex flex-column flex-lg-row wp-header">
                    <h3 class="modal-title mt-2" id="exampleModalLabel">{!! $member['title'] !!}</h3>
                    @if($member['job'])
                      <div class="d-flex flex-row">
                        <img src="@asset('../../images/briefcase.svg')" alt="job" class="me-2">
                        <span>{!! $member['job'] !!}</span>
                      </div>
                    @endif
                    @if($member['phone'])
                      <div class="d-flex flex-row">
                        <img src="@asset('../../images/Telephone.svg')" alt="tel" class="me-2">
                        <span>{!! $member['phone'] !!}</span>
                      </div>
                    @endif
                    @if($member['email'])
                      <div class="d-flex flex-row">
                        <img src="@asset('../../images/Email.svg')" alt="email" class="me-2">
                        <span>{!! $member['email'] !!}</span>
                      </div>
                    @endif
                  </div>
                </div>
                <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            </div>
            <div class="modal-body">
              @if($member['bio'])
                <h3 class="section-title mb-4">Biographie</h3>
                {!! $member['bio']!!}
              @endif
              @if($member['linkedin'])
                <a href="{!! $member['linkedin']['url'] !!}" class="btn btn-primary"
                   target="{{ $member['linkedin']['target'] }}" aria-label="{!! $member['linkedin']['title'] !!}">
                  Se connecter <i class="ms-1 fa-brands fa-linkedin-in"></i>
                </a>
              @endif
            </div>
          </div>
        </div>
      </div>
    @endforeach
  @endif
</div>
