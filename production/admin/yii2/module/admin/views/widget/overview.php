<?php

use app\assets\admin\widget\OverviewAsset;

OverviewAsset::register($this);

$this->title = 'OVERVIEW WIDGET | BLANKON - Fullpack Admin Theme';

?>

<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-bar-chart-o"></i> Overview Widget <span>overview widget and more</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Widget</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Overview</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <!-- Start overview -->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="mini-stat clearfix bg-facebook rounded">
                    <span class="mini-stat-icon"><i class="fa fa-facebook fg-facebook"></i></span><!-- /.mini-stat-icon -->
                    <div class="mini-stat-info">
                        <span>5,762</span>
                        Facebook Like
                    </div><!-- /.mini-stat-info -->
                </div><!-- /.mini-stat -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="mini-stat clearfix bg-twitter rounded">
                    <span class="mini-stat-icon"><i class="fa fa-twitter fg-twitter"></i></span><!-- /.mini-stat-icon -->
                    <div class="mini-stat-info">
                        <span>7,153</span>
                        Twitter Followers
                    </div><!-- /.mini-stat-info -->
                </div><!-- /.mini-stat -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="mini-stat clearfix bg-googleplus rounded">
                    <span class="mini-stat-icon"><i class="fa fa-google-plus fg-googleplus"></i></span><!-- /.mini-stat-icon -->
                    <div class="mini-stat-info">
                        <span>793</span>
                        Google+ Posts
                    </div><!-- /.mini-stat-info -->
                </div><!-- /.mini-stat -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="mini-stat clearfix bg-bitbucket rounded">
                    <span class="mini-stat-icon"><i class="fa fa-bitbucket fg-bitbucket"></i></span><!-- /.mini-stat-icon -->
                    <div class="mini-stat-info">
                        <span>8,932</span>
                        Repository
                    </div>
                </div><!-- /.mini-stat-info -->
            </div><!-- /.mini-stat -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-9">

                <!-- Start widget visitor chart -->
                <div class="panel stat-stack widget-visitor rounded shadow">
                    <div class="panel-body no-padding">
                        <div class="row row-merge">
                            <div class="col-sm-8">
                                <div class="panel bg-theme stat-left no-margin no-box-shadow">
                                    <div class="panel-heading no-border">
                                        <div class="pull-left">
                                            <h3 class="panel-title">Daily Visitor</h3>
                                        </div><!-- /.pull-left -->
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-theme dropdown-toggle no-border" data-toggle="dropdown">
                                                    Duration <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-right no-border">
                                                    <li class="dropdown-header">Select duration :</li>
                                                    <li><a href="#">Year</a></li>
                                                    <li><a href="#">Month</a></li>
                                                    <li><a href="#">Week</a></li>
                                                    <li><a href="#">Day</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.pull-right -->
                                        <div class="clearfix"></div>
                                    </div><!-- /.panel-heading -->
                                    <div class="panel-body no-border transparent">

                                        <div id="visitor-chart" class="resize-chart"></div>

                                    </div><!-- /.panel-body -->
                                    <div class="panel-footer no-border-top">
                                        <div class="row text-center">
                                            <div class="col-xs-4 col-xs-override border-right dotted">
                                                <p class="text-danger text-strong mb-0">- 5%</p>
                                                <p class="h3 text-strong mb-0 mt-10">7,341</p>
                                                <p class="text-muted">Visits Today</p>
                                            </div>
                                            <div class="col-xs-4 col-xs-override border-right dotted">
                                                <p class="text-success text-strong mb-0">+ 32%</p>
                                                <p class="h3 text-strong mb-0 mt-10">23,762</p>
                                                <p class="text-muted">Unique Visitors</p>
                                            </div>
                                            <div class="col-xs-4 col-xs-override">
                                                <p class="text-success text-strong mb-0">+ 76%</p>
                                                <p class="h3 text-strong mb-0 mt-10">70,112</p>
                                                <p class="text-muted">Page Views</p>
                                            </div>
                                        </div>
                                    </div><!-- /.panel-footer -->
                                </div><!-- /.panel -->
                            </div><!-- /.col-sm-8 -->
                            <div class="col-sm-4">
                                <div class="panel stat-right no-margin no-box-shadow">
                                    <div class="panel-body">
                                        <h4 class="no-margin">Server Status</h4>
                                        <p class="text-muted">Summary of the server status.</p>

                                        <span>Domains</span><span class="pull-right">(7/10)</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-lilac" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                        </div><!-- /.progress -->

                                        <span>Databases</span><span class="pull-right">(45/100)</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-teal" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                        </div><!-- /.progress -->

                                        <span>Email Account</span><span class="pull-right">(30/50)</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                                        </div><!-- /.progress -->

                                        <span>Memory Usage</span><span class="pull-right">(45.2%)</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                        </div><!-- /.progress -->

                                        <span>Disk Usage</span><span class="pull-right">(68.2%)</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%"></div>
                                        </div><!-- /.progress -->

                                        <span>CPU Usage</span><span class="pull-right">(35.05 - 30 cpus)</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"></div>
                                        </div><!-- /.progress -->
                                    </div><!-- /.panel-body -->
                                    <div class="panel-footer">
                                        <div id="realtime-status-chart" class="resize-chart"></div>
                                    </div>
                                </div><!-- /.panel -->
                            </div><!-- /.col-sm-4 -->
                        </div><!-- /.row -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End widget visitor chart -->

            </div>
            <div class="col-md-3">

                <div class="panel rounded shadow">
                    <div class="panel-body">
                        <div class="inner-all text-center">
                            <h4 class="no-margin">Most Browser Used</h4>
                            <p class="text-muted">Summary of browser used.</p>

                            <div id="browser-chart"></div>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-9">
                <!-- Start widget market chart -->
                <div class="panel stat-stack widget-market rounded shadow">
                    <div class="panel-body no-padding">
                        <div class="row row-merge">
                            <div class="col-sm-8">
                                <div class="panel stat-left no-margin no-box-shadow">
                                    <div class="panel-body bg-teal">

                                        <div id="market-chart" class="resize-chart"></div>

                                    </div><!-- /.panel-body -->
                                    <div class="panel-footer no-border-top">
                                        <div class="row text-center mb-5 mt-5">
                                            <div class="col-xs-4 col-xs-override border-right dotted">
                                                <div class="mini-stat no-padding no-margin">
                                                    <span class="mini-stat-chart text-center">
                                                        <span id="market-today-chart">2,3,3,4,5,7,9,5</span>
                                                    </span><!-- /.mini-stat-chart -->
                                                    <div class="mini-stat-info text-right">
                                                        <span>$1,201</span>
                                                        <p class="text-muted no-margin">Today Sales</p>
                                                    </div><!-- /.mini-stat-info -->
                                                </div><!-- /.mini-stat -->
                                            </div>
                                            <div class="col-xs-4 col-xs-override border-right dotted">
                                                <div class="mini-stat no-padding no-margin">
                                                    <span class="mini-stat-chart">
                                                        <span id="market-average-chart">5,3,6,4,5,8,9,4</span>
                                                    </span><!-- /.mini-stat-chart -->
                                                    <div class="mini-stat-info text-right">
                                                        <span>$2,671</span>
                                                        <p class="text-muted no-margin">Average Sales</p>
                                                    </div><!-- /.mini-stat-info -->
                                                </div><!-- /.mini-stat -->
                                            </div>
                                            <div class="col-xs-4 col-xs-override">
                                                <div class="mini-stat no-padding no-margin">
                                                    <span class="mini-stat-chart">
                                                        <span id="market-total-chart">5,7,2,3,8,8,9,5</span>
                                                    </span><!-- /.mini-stat-chart -->
                                                    <div class="mini-stat-info text-right">
                                                        <span>$23,671</span>
                                                        <p class="text-muted no-margin">Total Sales</p>
                                                    </div><!-- /.mini-stat-info -->
                                                </div><!-- /.mini-stat -->
                                            </div>
                                        </div>
                                    </div><!-- /.panel-footer -->
                                </div><!-- /.panel -->
                            </div>
                            <div class="col-sm-4">
                                <div class="panel no-margin no-box-shadow stat-right">
                                    <div class="panel-body">
                                        <h4 class="no-margin">Market Status</h4>
                                        <p class="text-muted">Summary of the market status.</p>
                                        <div id="market-status-chart" class="resize-chart"></div>
                                    </div><!-- /.panel-body -->
                                    <div class="panel-footer">
                                        <span>Target Income ($23,671)</span><span class="pull-right hidden-sm hidden-xs">$1.000.000</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                        </div><!-- /.progress -->
                                    </div>
                                </div><!-- /.panel -->
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End widget visitor chart -->
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12 col-sm-6 col-xs-6 col-xs-override">
                        <div class="mini-stat clearfix bg-lilac rounded">
                            <span class="mini-stat-chart">
                                <span id="sparkline">1,2,3,4,5,6,7,8,9,10</span>
                            </span><!-- /.mini-stat-chart -->
                            <div class="mini-stat-info">
                                <span>15,201</span>
                                Average Sales
                            </div><!-- /.mini-stat-info -->
                        </div><!-- /.mini-stat -->
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-6 col-xs-override">
                        <div class="mini-stat clearfix bg-success rounded">
                            <span class="mini-stat-chart">
                                <span id="sparkline2">1,3,2,4,3,5,4,6,5,7</span>
                            </span><!-- /.mini-stat-chart -->
                            <div class="mini-stat-info">
                                <span>15,201</span>
                                Unique Visitors
                            </div><!-- /.mini-stat-info -->
                        </div><!-- /.mini-stat -->
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
        <!--/ End overview -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin') ;?>
    <!--/ End footer content -->

</section><!-- /#page-content -->