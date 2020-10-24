<div class="search_box">
  <form class="" action="{{ route('guest.apartments.index') }}" method="get">
    @method('GET')
    <div class="search_bar">
      <div class="div_input">
        <input class="search" type="text" name="search" placeholder="Dove vuoi andare?" value="">
        <input hidden class="lat" type="number" name="lat" value="{{!empty($_GET['lat']) ? $_GET['lat'] : ''}}">
        <input hidden class="lng" type="number" name="lng" value="{{!empty($_GET['lng']) ? $_GET['lng'] : ''}}">
      </div>
      <div class="div_button">
        <button value="search" type="submit" class="ms_btn">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>
</div>
