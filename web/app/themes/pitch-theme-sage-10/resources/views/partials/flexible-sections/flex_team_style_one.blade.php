@php $options = getSectionOptions($section['section_options_group']); @endphp
<div id="section-{{ $row }}" class="section team style-one {{ $options['oclasses'] }}">
  <div class="container">
    <div class="d-flex flex-column wp-content">
      @php $i = 0 @endphp
      @foreach($section['item_repeater'] as $item)
        <div class="d-flex flex-column wp-item">
          @if($item['title_group']['title'])
            @include('partials.template-parts.title', ['item' => $item['title_group'], 'class' => 'section-title'])
          @endif
          @if($item['team'])
            <div class="d-block d-lg-none">
              <div class="slideshow">
                @foreach($item['team'] as $el)
                  @php $member = getMemberById($el); @endphp
                  <div class="slide">
                    <div class="card-member" style="background-image: url({{ $member['picture'] }})">
                      <span class="name">{!! $member['title'] !!}</span>
                      <span class="job">{!! $member['job'] !!} </span>
                      <div class="hover flex-column justify-content-center">
                        <span class="name mb-3">{!! $member['title'] !!}</span>
                        <div>
                          <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                             data-bs-target="#teamModal-{{ $i }}-{{ $loop->iteration }}">En savoir
                            plus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="d-none d-lg-block">
              <div class="row wp-list">
                @foreach($item['team'] as $el)
                  @php $member = getMemberById($el); @endphp
                  <div class="col-12 col-lg-3">
                    <div class="card-member" style="background-image: url({{ $member['picture'] }})">
                      <span class="name">{!! $member['title'] !!}</span>
                      <span class="job">{!! $member['job'] !!} </span>
                      <div class="hover flex-column justify-content-center">
                        <span class="name mb-3">{!! $member['title'] !!}</span>
                        <div>
                          <a href="#" class="btn btn-secondary" data-bs-toggle="modal"
                             data-bs-target="#teamModal-{{ $i }}-{{ $loop->iteration }}">En savoir
                            plus</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              @endif
            </div>
            @php $i++@endphp
            @endforeach
        </div>
    </div>
    @php $i = 0 @endphp
    @foreach($section['item_repeater'] as $item)
      @if($item['team'])
        @foreach($item['team'] as $el)
          @php $member = getMemberById($el); @endphp
          <div class="modal fade" id="teamModal-{{ $i }}-{{ $loop->iteration }}" tabindex="-1"
               aria-labelledby="teamModalLabel-{{ $i }}-{{ $loop->iteration }}"
               aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <div class="d-flex flex-row justify-content-between w-100 wp-content">
                    <div class="d-flex flex-column flex-lg-row">
                      @if($member['picture'])
                        <div class="thumbnail me-4"
                             style="background-image: url({{ $member['picture'] }})"></div>
                      @endif
                      <div class="d-flex flex-column wp-header">
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
      @php $i++ @endphp
    @endforeach
  </div>
