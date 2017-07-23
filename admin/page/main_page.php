
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-5 col-sm-4 col-xs-6 tile_stats_count pull-left">
        <div class="count">Welcome <?=ucfirst($user_data['first_name'])?></div>
        <span class="count_bottom pull-right">What would you Like Today ?</span>
    </div>
    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count pull-right">
        <span class="count_top"><i class="fa fa-user"></i> Last Login</span>
        <div class="count"><?=$user_data['last_login']?></div>
    </div>
  </div>
  <!-- /top tiles -->

  <div class="row">
      <div class="col-md-4 col-xs-12 widget widget_tally_box pull-left">
        <div class="x_panel fixed_height_390">
          <div class="x_content">

            <div class="flex">
              <ul class="list-inline widget_profile_box">
                <li>
                  <a>
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <img src="dist/images/<?=$user_data['profile_pic']?>" alt="..." class="img-circle profile_img" style="margin-left: 10px;">
                </li>
                <li>
                  <a>
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>

            <h3 class="name"><?=$user_data['first_name']?></h3>

            <div class="flex">
              <ul class="list-inline count2">
                <li>
                  <h3>123</h3>
                  <span>Articles</span>
                </li>
                <li>
                  <h3>1234</h3>
                  <span>Followers</span>
                </li>
                <li>
                  <h3>123</h3>
                  <span>Following</span>
                </li>
              </ul>
            </div>
            <p>
              If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
            </p>
          </div>
        </div>

      </div>
    <div class="col-md-8 col-xs-8 ">
        <div class="">

            <canvas id="canvas_pd"></canvas>
        </div>
    </div>

  </div>

</div>

<!-- <script>
    var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
        //return 0;
    };
    var randomColorFactor = function() {
        return Math.round(Math.random() * 255);
    };
    var randomColor = function(opacity) {
        return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    };

    var config = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                fill: false,
                borderDash: [5, 5],
            }, {
                hidden: true,
                label: 'hidden dataset',
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
            }, {
                label: "My Second dataset",
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:'Chart.js Line Chart'
            },
            tooltips: {
                mode: 'label',
                callbacks: {
                    // beforeTitle: function() {
                    //     return '...beforeTitle';
                    // },
                    // afterTitle: function() {
                    //     return '...afterTitle';
                    // },
                    // beforeBody: function() {
                    //     return '...beforeBody';
                    // },
                    // afterBody: function() {
                    //     return '...afterBody';
                    // },
                    // beforeFooter: function() {
                    //     return '...beforeFooter';
                    // },
                    // footer: function() {
                    //     return 'Footer';
                    // },
                    // afterFooter: function() {
                    //     return '...afterFooter';
                    // },
                }
            },
            hover: {
                mode: 'dataset'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        show: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        show: true,
                        labelString: 'Value'
                    },
                    ticks: {
                        suggestedMin: -10,
                        suggestedMax: 250,
                    }
                }]
            }
        }
    };

    $.each(config.data.datasets, function(i, dataset) {
        dataset.borderColor = randomColor(0.4);
        dataset.backgroundColor = randomColor(0.5);
        dataset.pointBorderColor = randomColor(0.7);
        dataset.pointBackgroundColor = randomColor(0.5);
        dataset.pointBorderWidth = 1;
    });

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx, config);
    };

</script> -->
