

<div class="content-page">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl">
                    <div class="card bg-c-blue order-card  border border-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img src="<?php echo base_url(); ?>/assets/images/icon/sale.png"
                                        class="img-fluid rounded-normal" alt="icon" style="width: 75px; height: 75px;">
                                </div>
                                <div class="col-8 text-right">
                                    <h4 class="m-b-20">ยอดขายวันนี้</h4>
                                    <h2><span><?php echo $sale_price; ?>บาท</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl">
                    <div class="card bg-c-blue order-card border border-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img src="<?php echo base_url(); ?>/assets/images/icon/cost.png"
                                        class="img-fluid rounded-normal" alt="icon" style="width: 75px; height: 75px;">
                                </div>
                                <div class="col-8 text-right">
                                    <h4 class="m-b-20">กำไรวันนี้</h4>
                                    <h2><span><?php echo ($sale_price - $cost_price);?>บาท</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xl">
                    <div class="card bg-c-blue order-card border border-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <img src="<?php echo base_url(); ?>/assets/images/icon/amount.png"
                                        class="img-fluid rounded-normal" alt="icon" style="width: 75px; height: 75px;">
                                </div>
                                <div class="col-8 text-right">
                                    <h4 class="m-b-20">จำนวนยาที่ขายวันนี้</h4>
                                    <h2><span><?php echo $amount;?></span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 360px;
        max-width: 800px;
        margin: 1em auto;
    }

    #container {
        height: 400px;
    }

    .highcharts-title {
        font-size: 18px;
    }

    .highcharts-subtitle {
        font-size: 14px;
    }

    .highcharts-xaxis-labels {
        font-size: 12px;
    }

    .highcharts-yaxis-labels {
        font-size: 12px;
    }

    .highcharts-data-labels {
        font-size: 11px;
    }
    </style>

    <figure class="highcharts-figure">
        <div id="container"></div>
    </figure>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <!-- SELECT  IFNULL(SUM(od.sale_price * od.amount),0) as sale_price, IFNULL(SUM(od.cost_price * od.amount),0) as cost_price, IFNULL(SUM(od.amount),0)
FROM orders o JOIN order_detail od ON o.order_id = od.order_id
WHERE o.order_date = CURRENT_DATE; -->

    <!-- SELECT MONTH(o.order_date) as S_MONTH, YEAR(o.order_date) as S_YEAR , SUM(od.sale_price * od.amount) as sale_price, SUM(od.cost_price * od.amount) as cost_price 
FROM orders o JOIN order_detail od ON o.order_id = od.order_id
WHERE YEAR(o.order_date)=YEAR(CURRENT_DATE)
GROUP BY S_MONTH,S_YEAR; -->

    <!-- SELECT YEAR(o.order_date) as S_YEAR , SUM(od.sale_price * od.amount) as sale_price, SUM(od.cost_price * od.amount) as cost_price FROM orders o JOIN order_detail od ON o.order_id = od.order_id GROUP BY S_YEAR; -->
    <?php 
    $month_name = array("", "มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
?>
    <script>
    // Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            align: 'left',
            text: 'สรุปยอดขาย'
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'ยอดขาย'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f} บาท'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f} บาท </b> of total<br/>'
        },

        series: [{
            name: 'ปี',
            colorByPoint: true,


            data: [
                <?php foreach($data_year as $id=>$row){
                    echo "{
                        name: '".$row['S_YEAR']."',
                        y: ".$row['sale_price'].",
                        drilldown: '".$row['S_YEAR']."'
                    },";
                }?>

            ]
        }],
        drilldown: {
            breadcrumbs: {
                position: {
                    align: 'right'
                }
            },
            series: [
                <?php foreach($data_year as $id=>$row){
                $d_data = "";
                foreach($data_month as $row_month){
                    if($row_month['S_YEAR']==$row['S_YEAR']){
                        $d_data =  $d_data."['".$month_name[$row_month['S_MONTH']]."',".$row_month['sale_price']."],";
                    }
                }
                    echo "{
                        name: '".$row['S_YEAR']."',
                        id: '".$row['S_YEAR']."',
                        data: [".$d_data."]
                    },";
                }?>
            ]
        }
    });
    </script>