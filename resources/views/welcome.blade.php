@extends('header')
@section('title', 'Hem')
@section('content')
<!-- <script>
swal("Är du 18 år eller äldre?", "För att läsa den här sidans innehåll bör du vara 18 år eller äldre.","warning");
</script> -->
  <div class="column welcome">
    <div class="welcomeText">
      <h1 class="title welcomeTitle">Välkommen!</h1>
      <p>På den här sidan hittar du noga utvalda öl-sorter. Lokala, för nästan alla och UTSÖKTA.</p>
    </div>
    <?php $beer = DB::table('beers')->where('beerType', 'suröl')->first(); ?>
      <div class="img__wrapw">
          <img class="img__imgw" src="{{ $beer->beerImage }}">
              <div class="img__description_layerw">
                  <p class="img__descriptionw">{{ $beer->beerType }}</p>
              </div>
      </div>
      <?php $beer = DB::table('beers')->where('beerType', 'nonalco')->first(); ?>
        <div class="img__wrapw">
            <img class="img__imgw" src="{{ $beer->beerImage }}">
                <div class="img__description_layerw">
                    <p class="img__descriptionw">{{ $beer->beerType }}</p>
                </div>
        </div>
        <?php $beer = DB::table('beers')->where('beerType', 'ipa')->first(); ?>
          <div class="img__wrapw">
              <img class="img__imgw" src="{{ $beer->beerImage }}">
                  <div class="img__description_layerw">
                      <p class="img__descriptionw">{{ $beer->beerType }}</p>
                  </div>
          </div>
  </div>
  <div class="column welcome2">
    <?php $beer = DB::table('beers')->where('beerType', 'porter')->first(); ?>
      <div class="img__wrapw">
          <img class="img__imgw" src="{{ $beer->beerImage }}">
              <div class="img__description_layerw">
                  <p class="img__descriptionw">{{ $beer->beerType }}</p>
              </div>
      </div>
      <?php $beer = DB::table('beers')->where('beerType', 'lager')->first(); ?>
        <div class="img__wrapw">
            <img class="img__imgw" src="{{ $beer->beerImage }}">
                <div class="img__description_layerw">
                    <p class="img__descriptionw">{{ $beer->beerType }}</p>
                </div>
        </div><?php $beer = DB::table('beers')->where('beerType', 'stout')->first(); ?>
          <div class="img__wrapw">
              <img class="img__imgw" src="{{ $beer->beerImage }}">
                  <div class="img__description_layerw">
                      <p class="img__descriptionw">{{ $beer->beerType }}</p>
                  </div>
          </div>
  </div>
  <div class="column welcome3">
    <?php $beer = DB::table('beers')->where('beerType', 'apa')->first(); ?>
      <div class="img__wrapw">
          <img class="img__imgw" src="{{ $beer->beerImage }}">
              <div class="img__description_layerw">
                  <p class="img__descriptionw">{{ $beer->beerType }}</p>
              </div>
      </div>
      <?php $beer = DB::table('beers')->where('beerType', 'folköl')->first(); ?>
        <div class="img__wrapw">
            <img class="img__imgw" src="{{ $beer->beerImage }}">
                <div class="img__description_layerw">
                    <p class="img__descriptionw">{{ $beer->beerType }}</p>
                </div>
        </div>
        <?php $beer = DB::table('beers')->where('beerType', 'veteöl')->first(); ?>
          <div class="img__wrapw">
              <img class="img__imgw" src="{{ $beer->beerImage }}">
                  <div class="img__description_layerw">
                      <p class="img__descriptionw">{{ $beer->beerType }}</p>
                  </div>
          </div>
  </div>
  </div>
@endsection
</body>
</html
