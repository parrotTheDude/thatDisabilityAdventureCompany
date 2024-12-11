let videoplayed = false;
function videoPlayer(x) {
  var video = document.getElementById("videoToggle");


  if (videoplayed === false) {
		video.classList.add("videoDisplay");
  	videoplayed = true;
  } else  {
		video.classList.remove("videoDisplay");
    document.getElementById("video").pause();
  	videoplayed = false;
  }
}