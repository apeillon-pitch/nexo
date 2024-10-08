@if ($heroData)
  @php ($row = 0) @endphp
  @foreach($heroData as $section)
    @include('partials/flexible-sections/' . $section['acf_fc_layout'], ['row' => $row, 'section' => $section])
    @php ($row++) @endphp
  @endforeach
@endif
@if ($sectionData)
  @php ($row = 1) @endphp
  @foreach($sectionData as $section)
    @include('partials/flexible-sections/' . $section['acf_fc_layout'], ['row' => $row, 'section' => $section])
    @php ($row++) @endphp
  @endforeach
@endif
