window.onload = function() {
  var loginbt = document.querySelector('.login-bt');
  var un = document.querySelector("input[name='uname']");
  var ps = document.querySelector("input[name='upsd']");
  if(localStorage.un) un.value = localStorage.un;
  if(localStorage.ps)ps.value = localStorage.ps;
  loginbt.onclick = function(e){
    e.preventDefault();
    localStorage.un = un.value;
    localStorage.ps = ps.value;
    document.querySelector("form").submit();
  };
}