@php
  $pins = option('pins');
  $pinsArray = [];

  foreach ($pins as $pin) {
      $pinObject = '';
      $pinObject->icon = $pin['icon']['url'];
      $pinObject->pin = $pin['pin'];
      $pinObject->content = $pin['tooltip'];

      array_push($pinsArray, $pinObject);
  }

  $pinsJSON = json_encode($pinsArray);
@endphp

<section class="section map" id="google-map"  data-aos="fade-in" google-map data-pins="{{ $pinsJSON }}"></section>
