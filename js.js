function Name() {
    let str = document.getElementById("name").value;
    let y = str.replace(/\w\S*/g, function (text) { return text.charAt(0).toUpperCase() + text.substr(1).toLowerCase(); });
    document.getElementById("name").value = y;
  }
  function City() {
    let str = document.getElementById("city").value;
    let y = str.replace(/\w\S*/g, function (text) { return text.charAt(0).toUpperCase() + text.substr(1).toLowerCase(); });
    document.getElementById("city").value = y;
  
  }
  function Country() {
    let str = document.getElementById("country").value;
    let y = str.replace(/\w\S*/g, function (text) { return text.charAt(0).toUpperCase() + text.substr(1).toLowerCase(); });
    document.getElementById("country").value = y;
  }
    $(".inputs").keyup(function(){
      if (this.value.match(/[^a-zA-ZÖöĞğüÜƏəIıÇçŞş|" "]/g)){ 
        this.value = this.value.replace(/[^a-zA-ZÖöĞğüÜƏəIıÇçŞş|" "]/g,'');
      }
    });