@extends('admin.layouts.master')
@section('title')
@endsection
@section('content')
<!-- Main Content Area -->
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mt-0 text-truncate" title="Campaign Sent">SITE VISITORS</h6>
                                <h4 class="my-2 py-1">9,184</h4>
                                <p class="mb-0 text-muted">
                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <div id="campaign-sent-chart"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->



            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class=" mt-0 text-truncate" title="Deals">NEW MEMBERS</h6>
                                <h4 class="my-2 py-1">861</h4>
                                <p class="mb-0 text-muted">
                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <div id="deals-chart"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class=" mt-0 text-truncate" title="New Leads">STORE SALES</h6>
                                <h4 class="my-2 py-1">7,254</h4>
                                <p class="mb-0 text-muted">
                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i>15.38%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <div id="new-leads-chart"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class=" mt-0 text-truncate" title="Booked Revenue">BANDWIDTH</h6>
                                <h4 class="my-2 py-1">$253k</h4>
                                <p class="mb-0 text-muted">
                                    <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <div id="booked-revenue-chart"></div>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-2">Order and Downloads</h5>
                        <p class="font-weight-light">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Order value</p>
                                <h5>14.3k</h5>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Orders</p>
                                <h5>18k</h5>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Users</p>
                                <h5>78.56%</h5>
                            </div>
                            <div class="mt-3">
                                <p class="text-muted">Downloads</p>
                                <h5>44040</h5>
                            </div>
                        </div>
                        <div class="chartjs-chart height-300">
                            <canvas id="task-area-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Project Status</h4>

                        <div class="my-4 chartjs-chart height-300">
                            <canvas id="project-status-chart"></canvas>
                        </div>

                        <div class="row text-center mt-2 py-2">
                            <div class="col-4">
                                <i class="ti-stats-up text-success mt-3 h3"></i>
                                <h3 class="font-weight-normal mt-3">
                                    <span>65%</span>
                                </h3>
                                <p class="mb-0">Completed</p>
                            </div>
                            <div class="col-4">
                                <i class="ti-stats-down text-primary mt-3 h3"></i>
                                <h3 class="font-weight-normal mt-3">
                                    <span>19%</span>
                                </h3>
                                <p class="mb-0"> In-progress</p>
                            </div>
                            <div class="col-4">
                                <i class="ti-stats-down text-danger mt-3 h3"></i>
                                <h3 class="font-weight-normal mt-3">
                                    <span>11%</span>
                                </h3>
                                <p class="mb-0"> Behind</p>
                            </div>
                        </div>
                        <!-- end row-->
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->

            <div class="col-md-6 col-xl-4">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <!-- project title-->
                        <h4 class="mt-0">
                            <a href="project-details.html" class="text-title">App design and development</a>
                        </h4>
                        <div class="badge badge-success mb-3">Finished</div>

                        <p class="text-muted font-13 mb-3">With supporting text below as a natural lead-in to additional contenposuere erat a ante...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                        </p>

                        <!-- project detail-->
                        <p class="mb-1">
                                        <span class="pr-2 mb-2 d-inline-block">
                                            <i class="icon_adjust-horiz text-muted"></i>
                                            <b>22</b> Tasks
                                        </span>
                            <span class="mb-2 d-inline-block">
                                            <i class="icon_comment_alt  text-muted"></i>
                                            <b>895</b> Comments
                                        </span>
                        </p>
                        <div>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                <img src="img/member-img/mail-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                <img src="img/member-img/mail-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                <img src="img/member-img/mail-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>
                            <a href="javascript:void(0);" class="d-inline-block text-muted font-weight-bold ml-2">
                                +7 more
                            </a>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>

            <!-- end col -->
            <div class="col-md-6 col-xl-4">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <!-- project title-->
                        <h4 class="mt-0">
                            <a href="project-details.html" class="text-title">App design and development</a>
                        </h4>
                        <div class="badge badge-success mb-3">Finished</div>

                        <p class="text-muted font-13 mb-3">With supporting text below as a natural lead-in to additional contenposuere erat a ante...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                        </p>

                        <!-- project detail-->
                        <p class="mb-1">
                                        <span class="pr-2 mb-2 d-inline-block">
                                            <i class="icon_adjust-horiz text-muted"></i>
                                            <b>22</b> Tasks
                                        </span>
                            <span class="mb-2 d-inline-block">
                                            <i class="icon_comment_alt  text-muted"></i>
                                            <b>895</b> Comments
                                        </span>
                        </p>
                        <div>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                <img src="img/member-img/mail-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                <img src="img/member-img/mail-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                <img src="img/member-img/mail-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>
                            <a href="javascript:void(0);" class="d-inline-block text-muted font-weight-bold ml-2">
                                +7 more
                            </a>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-4">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <!-- project title-->
                        <h4 class="mt-0">
                            <a href="project-details.html" class="text-title">App design and development</a>
                        </h4>
                        <div class="badge badge-success mb-3">Finished</div>

                        <p class="text-muted font-13 mb-3">With supporting text below as a natural lead-in to additional contenposuere erat a ante...<a href="javascript:void(0);" class="font-weight-bold text-muted">view more</a>
                        </p>

                        <!-- project detail-->
                        <p class="mb-1">
                                        <span class="pr-2 mb-2 d-inline-block">
                                            <i class="icon_adjust-horiz text-muted"></i>
                                            <b>22</b> Tasks
                                        </span>
                            <span class="mb-2 d-inline-block">
                                            <i class="icon_comment_alt  text-muted"></i>
                                            <b>895</b> Comments
                                        </span>
                        </p>
                        <div>
                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                <img src="img/member-img/mail-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                <img src="img/member-img/mail-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                <img src="img/member-img/mail-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>
                            <a href="javascript:void(0);" class="d-inline-block text-muted font-weight-bold ml-2">
                                +7 more
                            </a>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Sales Report</h5>
                        <p class="font-weight-light">The total number of sessions within the date range.</p>
                        <div class="d-flex flex-wrap mb-3">
                            <div class="mr-5 mt-3">
                                <p class="text-muted">This year</p>
                                <h5>142.3k</h5>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Past Year</p>
                                <h5>10k</h5>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Users</p>
                                <h5>780.56%</h5>
                            </div>
                        </div>
                        <div id="morris-area-chart"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Users From World</h5>
                        <div id="world-map-markers" class="height-500"></div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 mb-4 header-title">All Projects</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Client Name</th>
                                            <th>Start Date</th>
                                            <th>Deadline</th>
                                            <th>Status</th>
                                            <th>Progress</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Product Devlopment</td>
                                            <td><img src="img/member-img/mail-1.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Kevin J. Heal</td>
                                            <td>20/3/2018</td>
                                            <td>5/5/2018</td>
                                            <td><span class="badge badge-success-lighten">Active</span></td>
                                            <td><small class="float-right ml-2 pt-1 ">92%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>New Office Building</td>
                                            <td><img src="img/member-img/mail-2.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Frank M. Lyons</td>
                                            <td>11/6/2018</td>
                                            <td>15/7/2018</td>
                                            <td><span class="badge badge-warning-lighten">Panding</span></td>
                                            <td><small class="float-right ml-2 pt-1 ">0%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Website &amp; Blog</td>
                                            <td><img src="img/member-img/mail-3.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Hyman M. Cross</td>
                                            <td>21/6/2018</td>
                                            <td>3/7/2018</td>
                                            <td><span class="badge badge-warning-lighten">Panding</span></td>
                                            <td><small class="float-right ml-2 pt-1 ">0%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Market Research</td>
                                            <td><img src="img/member-img/mail-4.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Angelo E. Butler</td>
                                            <td>30/4/2018</td>
                                            <td>1/6/2018</td>
                                            <td><span class="badge badge-success-lighten">Active</span></td>
                                            <td><small class="float-right ml-2 pt-1 ">78%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Export Marketing</td>
                                            <td><img src="img/member-img/mail-5.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Robert C. Golding</td>
                                            <td>20/3/2018</td>
                                            <td>5/5/2018</td>
                                            <td><span class="badge badge-success-lighten">Active</span></td>
                                            <td><small class="float-right ml-2 pt-1 ">45%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product Devlopment</td>
                                            <td><img src="img/member-img/mail-6.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Kevin J. Heal</td>
                                            <td>14/2/2018</td>
                                            <td>10/8/2018</td>
                                            <td><span class="badge badge-success-lighten">Active</span></td>
                                            <td><small class="float-right ml-2 pt-1 ">35%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>New Office Building</td>
                                            <td><img src="img/member-img/mail-1.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Frank M. Lyons</td>
                                            <td>11/6/2018</td>
                                            <td>15/7/2018</td>
                                            <td><span class="badge badge-warning-lighten">Panding</span></td>
                                            <td><small class="float-right ml-2 pt-1 ">0%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Website &amp; Blog</td>
                                            <td><img src="img/member-img/mail-2.jpg" alt="" class="thumb-sm rounded-circle mr-2"> Phillip T. Morse</td>
                                            <td>8/4/2018</td>
                                            <td>2/6/2018</td>
                                            <td><span class="badge badge-danger-lighten">Complete</span></td>
                                            <td><small class="float-right ml-2 pt-1 ">100%</small>
                                                <div class="progress mt-2" style="height:5px;">
                                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end table-responsive-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
