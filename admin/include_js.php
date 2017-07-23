<!-- <script src="dist/js/pd_chart.js"></script> -->

<!-- Initialize Quill editor -->


<!-- <script type="text/javascript" src="http://www.chartjs.org/assets/Chart.js"> -->
<!-- </script> -->
<script src="dist/vendors/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="dist/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- FastClick -->
<!-- <script src="dist/vendors/fastclick/lib/fastclick.js"></script> -->
<!-- NProgress -->
<!-- <script src="dist/vendors/nprogress/nprogress.js"></script> -->
<!-- Chart.js -->
<script src="dist/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- <script src="dist/vendors/Chart.js/dist/Chart.bundle.js"></script> -->

<!-- gauge.js -->
<!-- <script src="dist/vendors/gauge.js/dist/gauge.min.js"></script> -->
<!-- <script src="dist/js/bootstrap-colorpicker.js"></script> -->
<!-- bootstrap-progressbar -->
<!-- <script src="dist/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> -->
<!-- iCheck -->
<!-- <script src="dist/vendors/iCheck/icheck.min.js"></script> -->
<!-- Skycons -->
<!-- <script src="dist/vendors/skycons/skycons.js"></script> -->
<!-- Flot -->
<!-- <script src="dist/vendors/Flot/jquery.flot.js"></script> -->
<!-- <script src="dist/vendors/Flot/jquery.flot.pie.js"></script> -->
<!-- <script src="dist/vendors/Flot/jquery.flot.time.js"></script> -->
<!-- <script src="dist/vendors/Flot/jquery.flot.stack.js"></script> -->
<!-- <script src="dist/vendors/Flot/jquery.flot.resize.js"></script> -->
<!-- Flot plugins -->
<!-- <script src="dist/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script> -->
<!-- <script src="dist/vendors/flot-spline/js/jquery.flot.spline.min.js"></script> -->
<!-- <script src="dist/vendors/flot.curvedlines/curvedLines.js"></script> -->
<!-- DateJS -->
<!-- <script src="dist/vendors/DateJS/build/date.js"></script> -->
<!-- JQVMap -->
<!-- <script src="dist/vendors/jqvmap/dist/jquery.vmap.js"></script> -->
<!-- <script src="dist/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script> -->
<!-- <script src="dist/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script> -->
<!-- bootstrap-daterangepicker -->
<!-- <script src="dist/vendors/moment/min/moment.min.js"></script> -->
<!-- <script src="dist/vendors/bootstrap-daterangepicker/daterangepicker.js"></script> -->

<!-- Custom Theme Scripts -->
<script src="dist/build/js/custom.min.js"></script>



<!-- Flot -->
<script>
$(document).ready(function() {
        $.ajax({
            url: "http://localhost/work/template-demo/Prashant%20Desani/admin/get_data.php",
            method: "GET",
            success: function (data){

                var obj = $.parseJSON(data);
                var day_name = [];
                var score = [];
                $.each(obj[0], function (index, value) {
                    day_name.push(index);
                    score.push(value);
                });
                day_name[0] = "Start";
                score[0] = 0;
                var chartdata = {
                    labels: day_name,
                    datasets: [
                        {
                            label: 'Time Used',
                            yLabel: 'Minutes',
                            xLabel: 'Day',
                            backgroundColor: '#7f8c8d',
						    borderColor: '#27ae60',
						    hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						    hoverBorderColor: 'rgba(200, 32, 200, 1)',
                            data: score
                        }
                    ]
                }
                    var ctx = document.getElementById("canvas_pd").getContext("2d");

                    var MyChart = new Chart(ctx, {
            				type: 'line',
            				data: chartdata,
                            options: {
                                responsive: true,
                                scales: {
                                    yAxes: [{
                                      scaleLabel: {
                                        display: true,
                                        labelString: 'Minutes Aquire'
                                      }
                                  }],
                                  xAxes: [{
                                    scaleLabel: {
                                      display: true,
                                      labelString: 'Days Aquire'
                                    }
                                  }]
                                  }
                            }
            			});
                    //alert(MyChart);
                //  var ctx =$("#canvas_pd");
                 //
                //  var barGraph = new Chart(ctx, {
                //      type: 'bar',
                //      data: chartdata
                //  });
            },
            error : function (data){
                alert("error");
            }
        });

    });

</script>
<!-- Include the Quill library -->
