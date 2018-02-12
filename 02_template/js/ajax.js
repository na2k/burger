/* jshint esversion:6 */

const moduleAjax = (function () {
    "use strict";

    function postData() {

    }

    function getData() {
        const xhr = new XMLHttpRequest();
        // const url = window.location.href || document.URL;
        const url = "data.php";
        xhr.open("GET", url + "?ajax=users");
        // console.log(url);
        function createListPersos(persos) {
          const app = document.getElementById("app");
          const ul = document.createElement("ul");
          ul.className = "persos";

          persos.forEach(function(p){
            const li = document.createElement("li");
            li.className = "perso";
            li.innerHTML += `
            <span> ${ p.name} </span>
            <span> ${ p.genre} </span>
            `;
            ul.appendChild(li);
          });
          app.appendChild(ul);
        }

        xhr.onload = function(evt) {
            // console.log(evt);
            if (this.response) {
                createListPersos(JSON.parse(this.response));
            }
        };

        xhr.send();
    }

    return {
        postData: postData,
        getData: getData,
    };

}());
