 <h1>Kontakt</h1>
  <div id="map"></div>

  <script>
// Initialize and add the map
function initMap() {
  // The location of Vrbik
  var vrbik = {lat: 45.7954533, lng:15.9667588};
  // The map, centered at Vrbik
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 20, center: vrbik});
  // The marker, positioned at Vrbik
  var marker = new google.maps.Marker({position: vrbik, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnIrJLfvq0Z1EOxcKN4e68C_KsO3S_G8s&callback=initMap">
    </script>
    <br>
    <form name="kontakt_forma">
      Ime*<br>
      <input name="firstname" type="text">
      <br><br>
       Prezime*<br>
      <input name="prezime" type="text">
      <br><br>
       E-mail*<br>
      <input id="mail" name="email" type="text"><span id="rezultat"></span>
      <br><br>
	  Upit*<br>
	  <textarea name="subject" placeholder="Napišite upit.."></textarea><br><br>
      <input type="submit" value="Pošalji">
    </form>
    <script>
      $(document).ready(function() {

    $("#mail").keyup(function(){
        
        var email = $("#mail").val();
        
        if(email != 0)
        {
            if(isValidEmailAddress(email))
            {
                $("#rezultat").text("Validna e-mail adresa");
            } else {
                $("#rezultat").text("Pogrešno unesena e-mail adresa");
            }
        } else {
            $("#rezultat").text("");
        }

    });

});

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}
    </script>