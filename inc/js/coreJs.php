let changed = false;
function menuSwitch(x) {
  x.classList.toggle('change');
  var element = document.getElementById("menuToggle");

  if (changed === false) {
		element.classList.add("slide");
  	changed = true;
  } else  {
		element.classList.remove("slide");
  	changed = false;
  }
}

let services = false;
function servicesSwitch(x) {
  x.classList.toggle('liChange');
	var ulDrop = document.getElementById("servicesDrop");
	var liElement = document.getElementById("serviceLi");

	if (services === false) {
		ulDrop.classList.add("displayMobile");
		liElement.classList.add("liChange");
  	services = true;
  } else  {
		ulDrop.classList.remove("displayMobile");
		liElement.classList.remove("liChange");
  	services = false;
  }
}

let join = false;
function joinSwitch(x) {
  x.classList.toggle('liChange');
	var ulDrop = document.getElementById("joinDrop");
	var liElement = document.getElementById("joinLi");

	if (join === false) {
		ulDrop.classList.add("displayMobile");
		liElement.classList.add("liChange");
  	join = true;
  } else  {
		ulDrop.classList.remove("displayMobile");
		liElement.classList.remove("liChange");
  	join = false;
  }
}

function smoothScroll(){
  document.querySelector('#here').scrollIntoView({
    behavior: 'smooth'
  });
}

function toTheTop(){
  document.querySelector('#theTop').scrollIntoView({
    behavior: 'smooth'
  });
}