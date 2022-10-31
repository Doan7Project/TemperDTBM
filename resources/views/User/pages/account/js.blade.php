<script type="text/javascript">
    $(document).ready(function () {
    $("#confirmedpassword").keyup(function () { 
    if ($("#confirmedpassword").val() === $("#newpassword").val()){

        $("#match").removeClass('showHide');
        $("#notmatch").addClass('showHide');
        return true;
    }
    else{
        $("#match").addClass('showHide');
        $("#notmatch").removeClass('showHide');

        return false;
    }
});
});
</script>