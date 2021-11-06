document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems);
      });

$(document).ready(function(){
    $('#modalD').modal();
    $('#modalD').modal('open'); 
 });