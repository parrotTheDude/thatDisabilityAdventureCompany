let changed=!1;function menuSwitch(e){e.classList.toggle("change");var s=document.getElementById("menuToggle");!1===changed?(s.classList.add("slide"),changed=!0):(s.classList.remove("slide"),changed=!1)}let services=!1;function servicesSwitch(e){e.classList.toggle("liChange");var s=document.getElementById("servicesDrop"),i=document.getElementById("serviceLi");!1===services?(s.classList.add("displayMobile"),i.classList.add("liChange"),services=!0):(s.classList.remove("displayMobile"),i.classList.remove("liChange"),services=!1)}let join=!1;function joinSwitch(e){e.classList.toggle("liChange");var s=document.getElementById("joinDrop"),i=document.getElementById("joinLi");!1===join?(s.classList.add("displayMobile"),i.classList.add("liChange"),join=!0):(s.classList.remove("displayMobile"),i.classList.remove("liChange"),join=!1)}function smoothScroll(){document.querySelector("#here").scrollIntoView({behavior:"smooth"})}function toTheTop(){document.querySelector("#theTop").scrollIntoView({behavior:"smooth"})}function theTeam(){document.querySelector("#team").scrollIntoView({behavior:"smooth"})}