$(document).ready(function() {
    
    var btn_delete = $(".delete");

    btn_delete.click(function() {
      
        var con = confirm("Do you really want to delete this ?");
        if (con === true) {
            return true;
        }
        else {
            return false;
        }
    });
});