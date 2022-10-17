<footer>
  <div class="bg-light py-4">
    <div class="container text-center">
      <p class="text-muted mb-0 py-2">Copyright &copy; 2022 All Time Bot - Designed by <a rel="nofollow" href="https://facebook.com/PeterGamez" target="_blank">Peter</a></p>
    </div>
  </div>
</footer>

<head>
  <style>
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      border: none;
      outline: none;
      background-color: #C7C7C7;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 15px;
      font-size: 18px;
    }

    #myBtn:hover {
      background-color: #555;
    }
  </style>
</head>
<button onclick="topFunction()" id="myBtn" class="btn">▴</button>

<script>
  //Get the button:
  mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  }

  window.onload = () => {
    // (A) GET LIGHTBOX & ALL .ZOOMD IMAGES
    let all = document.getElementsByClassName("zoomimg"),
      lightbox = document.getElementById("lightbox");

    // (B) CLICK TO SHOW IMAGE IN LIGHTBOX
    // * SIMPLY CLONE INTO LIGHTBOX & SHOW
    if (all.length > 0) {
      for (let i of all) {
        i.onclick = () => {
          let clone = i.cloneNode();
          clone.className = "";
          lightbox.innerHTML = "";
          lightbox.appendChild(clone);
          lightbox.className = "show";
        };
      }
    }

    // (C) CLICK TO CLOSE LIGHTBOX
    lightbox.onclick = () => {
      lightbox.className = "";
    };
  };
</script>