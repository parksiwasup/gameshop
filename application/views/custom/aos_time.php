<script>

// เวลาเฟด
  AOS.init({
    duration:1300
  });

///ส่วน navbar ทำการเเอด css เข้าไป
  $(window).on("scroll",function(){
    if($(window).scrollTop()) {
      $('nav').addClass('black');
    }
  else {
    $('nav').removeClass('black');
  }
})

///###################### บล็อคโชว์ ข้อความในหน้าโปรไฟล์ ###################
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// เอา element ใน id="defaultOpen" ขึ้นก่อน
document.getElementById("defaultOpen").click();


//###################### Get the modal #############################
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

</script>
