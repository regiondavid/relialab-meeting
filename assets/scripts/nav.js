(function(){
  var url = window.location.href;
  var lis = document.querySelectorAll("[role='presentation']");
  if(url){
    if(url.indexOf("notice")!=-1){
      lis[1].className+="active";
    } else if(url.indexOf("13")!=-1){
      lis[2].className+="active";
    }else if(url.indexOf("14")!=-1){
      lis[3].className+="active";
    }else if(url.indexOf("15")!=-1){
      lis[4].className+="active";
    }else if(url.indexOf("16")!=-1){
      lis[5].className+="active";
    }else if(url.indexOf("17")!=-1){
      lis[6].className+="active";
    }else if(url.indexOf("18")!=-1){
      lis[7].className+="active";
    }else if(url.indexOf("19")!=-1){
      lis[8].className+="active";
    }else if(url.indexOf("20")!=-1){
      lis[9].className+="active";
      //插入地图
      var script = document.createElement("script");
      script.setAttribute("src","/assets/scripts/map.js");
      document.body.appendChild(script);
      $("<div style='width:720px;height:550px;border:#ccc solid 1px;' id='dituContent'></div>").insertAfter($("p")[0]);

    }else if(url.indexOf("21")!=-1){
      lis[10].className+="active";
    }else if(url.indexOf("22")!=-1){
      lis[11].className+="active";
    } else lis[0].className+="active";
  }
})();