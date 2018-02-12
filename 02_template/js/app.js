/*jshint esversion: 6*/

var app = (function() {
    "use strict";

    window.addEventListener("DOMContentLoaded", function () {
        // console.log(dom);
        // console.log(moduleAjax);
        // console.log(moduleAjax.postData());
        dom.init(function(dom){
          console.log(dom);
          dom.getDataPHP.onclick = moduleAjax.getData;
        });
        const hamburger = document.getElementById("btnBurger");
        const listeBurger = document.getElementById("listeBurger");
        hamburger.addEventListener("click", function(evt) {
        listeBurger.classList.toggle("is-active");
        if(listeBurger.classList.contains("is-active")){
          console.log("activé");
          document.getElementById("listeBurger").style.visibility="visible";
        }
        else{
          console.log("désactivé");
          document.getElementById("listeBurger").style.visibility="hidden";
        }
        });
    });

}());
