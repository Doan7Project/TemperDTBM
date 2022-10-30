<script type="text/javascript">

$(document).ready(function () {
    
    $("#showAndHide").click(function () { 
        $("#functionShow").addClass("showButton");
        $("#showAndHide").addClass("showButton");
       
    });
    $("#closeChange").click(function () { 
       $("#functionShow").removeClass("showButton");
       $("#showAndHide").removeClass("showButton");
      ;
    });
});
</script>