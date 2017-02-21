<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Andon Board</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendors/flipclock/flipclock.css" rel="stylesheet">
    <link href="assets/vendors/animatedprogress/jquery.stepProgressBar.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/vendors/looper/looper-master/src/looper.css">
    <style type="text/css">
      body {
            font-family: "Century Gothic"
      }
      .gauge{
        
            width: 180px;
            height: 180px;
      }
      .w_55 {
        width: 75%
      }
      .counter{
        margin-top: -10px;
        margin-bottom: -5px;
        zoom: 1.4;
        -moz-transform: scale(1.4);
        }
        .progress {height: 40px; margin-top: 10px; margin-right: 10px;} // we increased it so the text is visible or change font size
        .progress .sr-only { position: relative; }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <!-- page content -->
       <div>
          <div class="">

            

            <div data-looper="go" class="looper">
                <div class="looper-inner">
                    <div class="item">
    <div class="row">
        <div class="col-lg-2">
            <img src="assets/images/FrieslandCampina.png" class="left-logo">
        </div>
        <div class="col-lg-2">
            <h2 id="plant_name">MPP</h2>
        </div>
        <div class="col-lg-6">
            <div id='time-part' class="text-center"></div>
        </div>
        <div class="col-lg-2">
            <img src="assets/images/Alaska_milk_logo_2016.png" class="pull-right right-logo">
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 b-right">
            <div class="center">
                <h2 class="line_header">LINE 1</h2>
                <h3 id="sku1"></h3>
                <hr>
                <div class="row center">
                    <div class="col-sm-6">
                        <div>
                            <h3>TARGET</h3>
                            <div id="l1_target" class="counter"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <h3>ACTUAL</h3>
                            <div id="l1_actual" class="counter"></div>
                        </div>
                    </div>
                </div>
                <div id='myChart1'></div>
            </div>
            <hr style="margin-top:-160px;">
            <div class="row center">
                <div class="x_content">
                    <!-- <div>
                        <div class="row">
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S1</span>
                        </div>
                        <div class="col-sm-8">
                        <div id="myGoal1"></div>
                        </div>
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S2</span>
                        </div>
                        <div class="col-sm-8">
                        <div id="myGoal2"></div>
                        </div>
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S3</span>
                        </div>
                        <div class="col-sm-8">
                        <div id="myGoal3"></div>
                        </div>
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                        </div>
                        </div>
                        
                        </div> -->
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12 b-right">
            <div class="center">
                <h2 class="line_header">LINE 2</h2>
                <h3 id="sku2"></h3>
                <hr>
                <div class="row center">
                    <div class="col-sm-6">
                        <div>
                            <h3>TARGET</h3>
                            <div id="l2_target" class="counter"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div>
                            <h3>ACTUAL</h3>
                            <div id="l2_actual" class="counter"></div>
                        </div>
                    </div>
                </div>
                <div id='myChart2'></div>
            </div>
            <hr style="margin-top:-160px;">
            <div class="row center">
                <div class="x_content">
                    <!-- <div>
                        <div class="row">
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S1</span>
                        </div>
                        <div class="col-sm-8">
                        <div id="myGoal4"></div>
                        </div>
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S2</span>
                        </div>
                        <div class="col-sm-8">
                        <div id="myGoal5"></div>
                        </div>
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                        </div>
                        </div>
                        
                        <div class="row">
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">S3</span>
                        </div>
                        <div class="col-sm-8">
                        <div id="myGoal6"></div>
                        </div>
                        <div class="col-sm-2" style="padding:24px;">
                        <span style="font-size:40px;">1000</span>
                        </div>
                        </div>
                        
                        </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

                        
                    <div class="item">
                        <div class="center">
                          <img height="1078" src="assets/images/Safety Triangle 02.jpg" alt="">
                            <h2 id="lta">0</h2>
                            <h2 id="rwc">0</h2>
                            <h2 id="mta">0</h2>
                            <h2 id="fa">0</h2>
                            <h2 id="nm_ty">0</h2>
                            <h2 id="nm_cl">0</h2>
                            <h2 id="nm_op">0</h2>
                            <h2 id="so_ub">0</h2>
                            <h2 id="so_uc">0</h2>
                            <h2 id="so_ty">0</h2>
                            <h2 id="so_cl">0</h2>
                            <h2 id="so_op">0</h2>
                            <h2 id="last_day">0</h2>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1 -->
            

            <!-- 2 -->
          </div>
        </div>

      </div>
    </div>

 
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="assets/js/moment.js"></script>

    <script src="assets/vendors/flipclock/flipclock.min.js"></script>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script src="assets/vendors/animatedprogress/jquery.stepProgressBar.js"></script>
    <script src="assets/vendors/looper/looper-master/src/looper.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {

            $('.looper1').looper({
                interval: 5000
            });

//             window.feed = function(callback) {
//   var tick = {};
//   tick.plot0 = Math.ceil(350 + (Math.random() * 500));
//   callback(JSON.stringify(tick));
// };

            var interval = setInterval(function() {
                var momentNow = moment();
                $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' '
                                    + momentNow.format('dddd')
                                     .substring(0,3).toUpperCase());
                $('#time-part').html(momentNow.format('MM/DD/YYYY') + ' '+momentNow.format('HH:mm:ss'));
            }, 100);

            //counter
            var l1_target = $('#l1_target').FlipClock(9999, {
                clockFace: 'Counter'
            });

            var l1_actual = $('#l1_actual').FlipClock(9999, {
                clockFace: 'Counter'
            });


            var l2_target = $('#l2_target').FlipClock(9999, {
                clockFace: 'Counter'
            });

            var l2_actual = $('#l2_actual').FlipClock(9999, {
                clockFace: 'Counter'
            });



                var myConfig1 = {

              type: "gauge",
              alpha: 0,
              globals: {
                fontSize: 25
              },
              plotarea: {
                marginTop: 80
              },
              plot: {
                csize:"5%",
                size: '100%',
                valueBox: {
                  placement: 'center',
                  text: '%v', //default
                  fontSize: 35,
                  // rules: [{
                  //   rule: '%v >= 700',
                  //   text: '%v<br>EXCELLENT'
                  // }, {
                  //   rule: '%v < 700 && %v > 640',
                  //   text: '%v<br>Good'
                  // }, {
                  //   rule: '%v < 640 && %v > 580',
                  //   text: '%v<br>Fair'
                  // }, {
                  //   rule: '%v <  580',
                  //   text: '%v<br>Bad'
                  // }]
                }
              },
              tooltip: {
                borderRadius: 5
              },
              scaleR: {
                aperture: 180,
                minValue: 0,
                maxValue: 150,
                step: 20,
                center: {
                  visible: false,
                },
                tick: {
                  visible: false
                },
                item: {
                  "font-color":"white",
                  "font-size":30,
                  offsetR: 0,
                  rules: [{
                    rule: '%i == 9',
                    offsetX: 15
                  }]
                },
                labels: ['0 %', '', '', '60%', '80%', '90%', '100%', '','140%'],
                ring: {
                  size: 50,
                  rules: [
                    {
                      "rule":"%v >= 0 && %v <= 80",
                      "background-color":"red"
                    },
                    {
                      "rule":"%v >= 80 && %v <= 97",
                      "background-color":"orange"
                    },
                    {
                      "rule":"%v >= 97 && %v <= 103",
                      "background-color":"green"
                    },
                    {
                      "rule":"%v >= 103 && %v <=150",
                      "background-color":"blue"
                    }
                  ]
                },
                guide:{ //Specify your gauge chart's background color(s).
                // "background-color":"#66CCFF #FFCCFF",
                alpha:0
              }
              },
              // refresh: {
              //   type: "feed",
              //   // transport: "js",
              //   url: "/hmi/api2.php",
              //   interval: 1500,
              //   resetTimeout: 1000
              // },
              series: [{
                values: [0], // starting value
                backgroundColor: 'white',
                indicator: [10, 10, 10, 10, 0.75],
                animation: {
                  effect: 2,
                  method: 1,
                  sequence: 4,
                  speed: 900
                },
              }]
            };

             var myConfig2 = {

              type: "gauge",
              alpha: 0,
              globals: {
                fontSize: 25
              },
              plotarea: {
                marginTop: 80
              },
              plot: {
                csize:"5%",
                size: '100%',
                valueBox: {
                  placement: 'center',
                  text: '%v', //default
                  fontSize: 35,
                  // rules: [{
                  //   rule: '%v >= 700',
                  //   text: '%v<br>EXCELLENT'
                  // }, {
                  //   rule: '%v < 700 && %v > 640',
                  //   text: '%v<br>Good'
                  // }, {
                  //   rule: '%v < 640 && %v > 580',
                  //   text: '%v<br>Fair'
                  // }, {
                  //   rule: '%v <  580',
                  //   text: '%v<br>Bad'
                  // }]
                }
              },
              tooltip: {
                borderRadius: 5
              },
              scaleR: {
                aperture: 180,
                minValue: 0,
                maxValue: 150,
                step: 20,
                center: {
                  visible: false,
                },
                tick: {
                  visible: false
                },
                item: {
                  "font-color":"white",
                  "font-size":30,
                  offsetR: 0,
                  rules: [{
                    rule: '%i == 9',
                    offsetX: 15
                  }]
                },
                labels: ['0 %', '', '', '60%', '80%', '90%', '100%', '','140%'],
                ring: {
                  size: 50,
                  rules: [
                    {
                      "rule":"%v >= 0 && %v <= 80",
                      "background-color":"red"
                    },
                    {
                      "rule":"%v >= 80 && %v <= 97",
                      "background-color":"orange"
                    },
                    {
                      "rule":"%v >= 97 && %v <= 103",
                      "background-color":"green"
                    },
                    {
                      "rule":"%v >= 103 && %v <=150",
                      "background-color":"blue"
                    }
                  ]
                },
                guide:{ //Specify your gauge chart's background color(s).
                // "background-color":"#66CCFF #FFCCFF",
                alpha:0
              }
              },
              refresh: {
                type: "feed",
                transport: "js",
                url: "feed()",
                interval: 1500,
                resetTimeout: 1000
              },
              series: [{
                values: [0], // starting value
                backgroundColor: 'white',
                indicator: [10, 10, 10, 10, 0.75],
                animation: {
                  effect: 2,
                  method: 1,
                  sequence: 4,
                  speed: 900
                },
              }]
            };

            var r1 = zingchart.render({
              id: 'myChart1',
              data: myConfig1,
              height: 500,
              width: '100%'
            });

            var r2 = zingchart.render({
              id: 'myChart2',
              data: myConfig2,
              height: 500,
              width: '100%'
            });

               $(function() {
                function updateCount() {

                  $.getJSON("/hmi/api.php", 
                    function(json){
                      l1_target.setValue(json.t1);
                      l1_actual.setValue(json.a1);
                      $('#sku1').text(json.sku1);
                      l2_target.setValue(json.t2);
                      l2_actual.setValue(json.a2);
                      $('#sku2').text(json.sku2);

                      
                });

                }
                setInterval(updateCount, 1000);
            });


        });
    </script>
  </body>
</html>
