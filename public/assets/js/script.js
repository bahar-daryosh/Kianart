  $(document).ready(function(){

    $(".supernav>ul>li").hover(function(){

       $("svg",this).removeClass("fa-chevron-down");
        $("svg",this).addClass("fa-chevron-up");
      }, function(){
      
        $("svg",this).removeClass("fa-chevron-up");
        $("svg",this).addClass("fa-chevron-down");
       
    });
    $(".hamburger").click(function(){
      if($(".aside-nav").hasClass('hidd')){
        $(".aside-nav").addClass('show');
        $(".aside-nav").removeClass('hidd');
    }else{
      $(".aside-nav").removeClass('show');
      $(".aside-nav").addClass('hidd');
    }
      $(this).toggleClass("is-active");
     
    });

    $("#mainnav2>li").click(function(){
     
      if($(".submenu",this).hasClass('disactiv')){
        console.log('a');
        $(".submenu",this).removeClass("disactiv");
        $(".submenu",this).addClass("active");
        $("svg",this).removeClass("fa-chevron-down");
        $("svg",this).addClass("fa-chevron-up");
      return false;
      }else{
        console.log('b');
        $(".submenu",this).removeClass("active");
        $(".submenu",this).addClass("disactiv");
        $("svg",this).removeClass("fa-chevron-up");
        $("svg",this).addClass("fa-chevron-down");
        return false;
      }
     });

     
      // Add smooth scrolling to all links
      $("#tofirstheading").on('click', function(event) {
    
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();
    
          // Store hash
          var hash = this.hash;
    
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

  

  });