<!-- JavaScript libs are placed at the end of the document so the pages load faster -->

<script src="assets/js/jquery.min.js"></script>
<!-- <script src="assets/js/bootstrap.js"></script> -->
<script src="assets/js/template.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(window).load(function() {
    $(".desc").hide();
    $(".desc:first").show();
    $('.link:first').addClass('active');
    showDiv = function(id) {
        $(".desc").hide();
        $("#desc"+id).fadeIn('slow',function (){
            $("#desc"+id).show('slow')
        });
        $('.link').click(function() {
            $('.link').removeClass('active');
            $(this).addClass('active');
        });
    }
});
</script>
