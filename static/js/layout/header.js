if (page !== 'All') {
    window.onscroll = function () {
      scrollFunction();
    };
  }

  else{
    
    var header = document.getElementById("header");
    header.style.backgroundColor = "transparent";

  }

    function scrollFunction() {
      var header = document.getElementById("header");

      if (document.body.scrollTop > 620 || document.documentElement.scrollTop > 620) {
        header.style.backgroundColor = "var(--headcolor)";
        header.style.backdropFilter = "blur(15px)";
       
      } else {
        header.style.backgroundColor = "transparent";
        header.style.backdropFilter = "blur(0px)";        

      }
    }