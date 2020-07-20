



//subject vertical tab changing

function openSubject(evt, subject) {
  var i, tabcontent, tabbtn;
  tabcontent = document.getElementsByClassName("tabcontent");
  console.log(tabcontent);
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tabbtn = document.getElementsByClassName("tabbtn");
  for (i = 0; i < tabbtn.length; i++) {
    tabbtn[i].className = tabbtn[i].className.replace("active", "");
    console.log(tabbtn[i].className);
  }
  document.getElementById(subject).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();




$('.main-menu li a').on('click', function(event) {
    var url = $(this).attr('href');
    var hash = url.substring(url.indexOf('#')+1);



    var target = $('#'+hash);
    //alert(target.length);
;
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top - 75
        }, 1000);
    } 
});



//sing in sign up switch
