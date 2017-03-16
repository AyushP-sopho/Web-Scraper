/**
 * Web_Scrapper
 * 
 * JS functions
 */

$(function() {
 
 var mydiv = document.getElementById("data");
 var city = mydiv.getAttribute("data-city");
 
 var url_base = "http://www.shiksha.com/b-tech/colleges/b-tech-colleges-"+city;
 var url = url_base;
 
 var i = -1;
 var flag = 0;
 
 while(true)
 {
  
  i--;
  var settings = {
   data: {q: url},
   async: false
  };
  //alert(url);
  $.ajax("query.php", settings)
  
  .done(function(data, textstatus, jqXHR) {
   $("#tbody").append(data[0]);
   url = url_base+(i.toString());
   //alert(url);
  })
  
  .fail(function(jqXHR){
   alert("Error getting JSON");
   flag = 1;
  });
  
  
  if(flag ==1)
  {
   break;
  }
 }

});