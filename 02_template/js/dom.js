/* jshint esversion:6 */

var dom = (function getDOMObjects() {
  "use strict";

  function init(clbk) {
    clbk({
      app: document.getElementById("app"),
      getDataPHP: document.getElementById("get_data_php"),
      getDataAPI: document.getElementById("get_data_api"),
    });
  }

  return {
    init: init // ou simplement init (es6)
  };

}());
