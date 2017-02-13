  var myCenter = new google.maps.LatLng(43.634529, 11.232921);

  function initialize() {
  var mapProp = {
    center: myCenter,
    zoom: 10,
    scrollwheel: true,
    draggable: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
    };

  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

  var marker = new google.maps.Marker({
    position: myCenter,
  });

  marker.setMap(map);
  }

  google.maps.event.addDomListener(window, 'load', initialize);

  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }

  // Change style of navbar on scroll
  window.onscroll = function() {myFunction()};
  function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
      } else {
          navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
      }
  }

  // Used to toggle the menu on small screens when clicking on the menu button

  $(document).ready(function () {

  // Menu items animation
    $('#myNavbar li a').on('click', function(){
      activeItems(this)
     });

  // functions

    function activeItems(menuItem) {
      $('ul li').removeClass('active');
      $(menuItem).parent().addClass('active');
      scrollById(menuItem);
    }

    function scrollById(btnPressed) {
      var link = $(btnPressed).attr("href");
      if(link[0] == "#") {
        $('html, body').animate({
          scrollTop: $(link).offset().top
        }, 300);
    };
    }




  });
