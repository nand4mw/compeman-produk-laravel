@extends('layouts.template')


@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl-3 col-sm-6">
            <div class="stats-box style-five bg-eef0fa card border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fs-3 fw-bold text-dark">199</span>
                        <i class="ri-coupon-line"></i>
                    </div>
                    <span class="fs-18 fw-semibold text-dark mb-1 d-block">New Tickets</span>
                    <p>From Average Yesterday</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="stats-box style-five bg-f8eee2 card border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fs-3 fw-bold text-dark">207</span>
                        <i class="ri-shape-2-line"></i>
                    </div>
                    <span class="fs-18 fw-semibold text-dark mb-1 d-block">Open Tickets</span>
                    <p>From Average Yesterday</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="stats-box style-five bg-ddf0f1 card border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fs-3 fw-bold text-dark">30</span>
                        <i class="ri-stack-line"></i>
                    </div>
                    <span class="fs-18 fw-semibold text-dark mb-1 d-block">On Hold</span>
                    <p>From Average Yesterday</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="stats-box style-five bg-fbeaea card border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fs-3 fw-bold text-dark">150</span>
                        <i class="ri-apps-line"></i>
                    </div>
                    <span class="fs-18 fw-semibold text-dark mb-1 d-block">Unassigned</span>
                    <p>From Average Yesterday</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-0">Tickets Status</h4>
                        <div class="dropdown action-opt">
                            <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i data-feather="chevron-down"></i>
                                <span>This Week</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="clock"></i>
                                        Today
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="pie-chart"></i>
                                        Last 7 Days
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="rotate-cw"></i>
                                        Last Month
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="calendar"></i>
                                        Last 1 Year
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="bar-chart"></i>
                                        All Time
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="eye"></i>
                                        View
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="trash"></i>
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-xxl-8">
                            <div id="tickets_status"></div>
                        </div>
                        <div class="col-xl-5 col-xxl-4">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="card rounded-10 border-0 mb-15 p-3 bg-primary bg-opacity-10">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fs-14">New Tickets</span>
                                            <span><i class="flaticon-trend fs-20 text-success"
                                                    style="position: relative; top: 5px; margin-right: 5px;"></i>
                                                +2.48%</span>
                                        </div>
                                        <span class="text-dark fs-18 fw-semibold d-block mb-3">12,50846</span>
                                        <div class="progress" role="progressbar" aria-label="Example 5px high"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; background-color: #fff;">
                                            <div class="progress-bar" style="width: 25%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="card rounded-10 border-0 p-3 bg-info bg-opacity-10">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fs-14">Solved Tickets</span>
                                            <span><i class="flaticon-trend fs-20 text-success"
                                                    style="position: relative; top: 5px; margin-right: 5px;"></i>
                                                +2.50%</span>
                                        </div>
                                        <span class="text-dark fs-18 fw-semibold d-block mb-3">14,60846</span>
                                        <div class="progress" role="progressbar" aria-label="Example 5px high"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 5px; background-color: #fff;">
                                            <div class="progress-bar bg-info" style="width: 50%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-0">Customer Satisfaction</h4>
                        <div class="dropdown action-opt">
                            <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i data-feather="more-horizontal"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="clock"></i>
                                        Today
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="pie-chart"></i>
                                        Last 7 Days
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="rotate-cw"></i>
                                        Last Month
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="calendar"></i>
                                        Last 1 Year
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="bar-chart"></i>
                                        All Time
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="eye"></i>
                                        View
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="trash"></i>
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="customer_satisfaction"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center justify-content-center">
        <div class="col-lg-6 col-xxl-4 col-xxxl-6">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4 pb-0">
                    <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-0">Avg. Speed Of Answer</h4>
                        <h3 class="time body-font text-body fs-3 fw-bold mb-0 mt-3 mt-sm-0">01<sub>m</sub> :
                            20<sub>s</sub></h3>
                    </div>
                    <div id="avg_speed_Of_answer"></div>
                </div>
            </div>
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4 pb-0">
                    <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-0">Resolved Time Max Complaint</h4>
                        <h3 class="time body-font text-body fs-3 fw-bold mb-0 mt-3 mt-sm-0">03<sub>m</sub> :
                            00<sub>s</sub></h3>
                    </div>
                    <div id="resolved_time_max_complaint"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xxl-4 col-xxxl-6">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-0">Support Status</h4>
                        <div class="dropdown action-opt">
                            <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i data-feather="chevron-down"></i>
                                <span>last 15 days</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="clock"></i>
                                        Today
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="pie-chart"></i>
                                        Last 7 Days
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="rotate-cw"></i>
                                        Last Month
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="calendar"></i>
                                        Last 1 Year
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="bar-chart"></i>
                                        All Time
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="eye"></i>
                                        View
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="trash"></i>
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="fs-18 fw-semibold text-dark mb-3">12,50846 <span class="fw-normal text-body">Tickets</span>
                    </p>
                    <div class="progress-stacked mb-3" style="height: 10px;">
                        <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15"
                            aria-valuemin="0" aria-valuemax="100" style="width: 20%; height: 10px;">
                            <div class="progress-bar rounded-4"></div>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30"
                            aria-valuemin="0" aria-valuemax="100" style="width: 10%; height: 10px;">
                            <div class="progress-bar rounded-4 bg-danger ms-1"></div>
                        </div>
                        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20"
                            aria-valuemin="0" aria-valuemax="100" style="width: 20%; height: 10px;">
                            <div class="progress-bar rounded-4 bg-info ms-1"></div>
                        </div>
                    </div>
                    <div class="default-table-area support-status-list">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-primary">Status</th>
                                        <th scope="col" class="text-end">% Change</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="fs-14 dot">Resolved Tickets</span>
                                        </td>
                                        <td class="text-end">
                                            <span
                                                class="badge bg-primary bg-opacity-10 text-primary py-2 px-3 fw-semibold text-center rounded-1">+2.48%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fs-14 dot info">Open Tickets</span>
                                        </td>
                                        <td class="text-end">
                                            <span
                                                class="badge bg-info bg-opacity-10 text-info py-2 px-3 fw-semibold text-center rounded-1">+2.48%</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fs-14 dot danger">Unresolved Tickets</span>
                                        </td>
                                        <td class="text-end">
                                            <span
                                                class="badge bg-danger bg-opacity-10 text-danger py-2 px-3 fw-semibold text-center rounded-1">+2.48%</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="#"
                            class="btn btn-primary bg-primary border-0 text-primary bg-opacity-10 w-100 p-3 fw-semibold hover-bg fs-16 rounded-10">Create
                            New Ticket</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-xxl-4 col-xxxl-12">
            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                        <h4 class="fw-semibold fs-18 mb-0">Activity</h4>
                        <div class="dropdown action-opt">
                            <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i data-feather="chevron-down"></i>
                                <span>last 15 days</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="clock"></i>
                                        Today
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="pie-chart"></i>
                                        Last 7 Days
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="rotate-cw"></i>
                                        Last Month
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="calendar"></i>
                                        Last 1 Year
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="bar-chart"></i>
                                        All Time
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="eye"></i>
                                        View
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:;">
                                        <i data-feather="trash"></i>
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="ps-0 mb-0 list-unstyled">
                        <li class="pb-4 mb-4 border-bottom border-color-gray">
                            <div class="d-sm-flex">
                                <div class="flex-shrink-0">
                                    <div
                                        class="bg-primary bg-opacity-10 wh-44 text-center position-relative rounded-circle">
                                        <i
                                            class="ri-questionnaire-line fs-20 text-primary position-absolute top-50 start-50 translate-middle"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-sm-3 mt-3 mt-sm-0">
                                    <h4 class="fs-16 fw-semibold">Drop us an email at [Insert Email Address]
                                    </h4>
                                    <p class="fs-16 text-truncate white-space-unset" style="max-width: 390px;">We'll get
                                        back to you as soon as possible
                                        with detailed..</p>
                                    <span class="fs-14 text-gray-light">10 Min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="pb-4 mb-4 border-bottom border-color-gray">
                            <div class="d-sm-flex">
                                <div class="flex-shrink-0">
                                    <div
                                        class="bg-primary bg-opacity-10 wh-44 text-center position-relative rounded-circle">
                                        <img src="assets/images/notifications-5.jpg" class="rounded-circle"
                                            alt="notifications">
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-sm-3 mt-3 mt-sm-0">
                                    <h4 class="fs-16 fw-semibold">Drop us an email at [Insert Email Address]
                                    </h4>
                                    <p class="fs-16 text-truncate white-space-unset" style="max-width: 390px;">We'll get
                                        back to you as soon as possible
                                        with detailed..</p>
                                    <span class="fs-14 text-gray-light">10 Min ago</span>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 pb-1">
                            <div class="d-sm-flex">
                                <div class="flex-shrink-0">
                                    <div
                                        class="bg-primary bg-opacity-10 wh-44 text-center position-relative rounded-circle">
                                        <i
                                            class="ri-time-line fs-20 text-primary position-absolute top-50 start-50 translate-middle"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-sm-3 mt-3 mt-sm-0">
                                    <h4 class="fs-16 fw-semibold">Drop us an email at [Insert Email Address]
                                    </h4>
                                    <p class="fs-16 text-truncate white-space-unset" style="max-width: 390px;">We'll get
                                        back to you as soon as possible
                                        with detailed..</p>
                                    <span class="fs-14 text-gray-light">10 Min ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-end">
                            <li class="page-item">
                                <a class="page-link icon" href="help-support-desk.html" aria-label="Previous">
                                    <i data-feather="arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="help-support-desk.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="help-support-desk.html">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="help-support-desk.html">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link icon" href="help-support-desk.html" aria-label="Next">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-semibold fs-18 mb-0">All Projects</h4>
                <div class="dropdown action-opt">
                    <button class="btn bg-transparent p-0" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i data-feather="chevron-down"></i>
                        <span>This Month</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="clock"></i>
                                Today
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="pie-chart"></i>
                                Last 7 Days
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="rotate-cw"></i>
                                Last Month
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="calendar"></i>
                                Last 1 Year
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="bar-chart"></i>
                                All Time
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="eye"></i>
                                View
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:;">
                                <i data-feather="trash"></i>
                                Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="default-table-area all-projects-list">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" class="text-primary text-start">User</th>
                                <th scope="col">Ratings</th>
                                <th scope="col">Total Calls</th>
                                <th scope="col">Calls Answered</th>
                                <th scope="col">Avg.Speed of answer</th>
                                <th scope="col">Adherence %</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-4.jpg" class="rounded-circle wh-44"
                                                alt="user-4">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="fw-semibold fs-16 mb-0">Lucile Young</h4>
                                            <span class="text-gray-light">@lyoung4a</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <i class="ri-star-line fs-16 text-warning"></i>
                                    <span>4.5</span>
                                </td>
                                <td>
                                    <span>185</span>
                                </td>
                                <td>
                                    <span>172</span>
                                </td>
                                <td>
                                    <span>2:10s</span>
                                </td>
                                <td>
                                    <span
                                        class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">91%</span>
                                </td>
                                <td>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-5.jpg" class="rounded-circle wh-44"
                                                alt="user-5">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="fw-semibold fs-16 mb-0">Jordan Stevenson</h4>
                                            <span class="text-gray-light">@stevenson</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <i class="ri-star-line fs-16 text-warning"></i>
                                    <span>5.0</span>
                                </td>
                                <td>
                                    <span>290</span>
                                </td>
                                <td>
                                    <span>270</span>
                                </td>
                                <td>
                                    <span>1:55s</span>
                                </td>
                                <td>
                                    <span
                                        class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">96%</span>
                                </td>
                                <td>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-6.jpg" class="rounded-circle wh-44"
                                                alt="user-6">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="fw-semibold fs-16 mb-0">Francis Frank</h4>
                                            <span class="text-gray-light">@ffrank7e</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <i class="ri-star-line fs-16 text-warning"></i>
                                    <span>4.4</span>
                                </td>
                                <td>
                                    <span>228</span>
                                </td>
                                <td>
                                    <span>215</span>
                                </td>
                                <td>
                                    <span>3:05s</span>
                                </td>
                                <td>
                                    <span
                                        class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">84%</span>
                                </td>
                                <td>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-7.jpg" class="rounded-circle wh-44"
                                                alt="user-7">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="fw-semibold fs-16 mb-0">Phoebe Patterson</h4>
                                            <span class="text-gray-light">@ppatterson2g</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <i class="ri-star-line fs-16 text-warning"></i>
                                    <span>3.5</span>
                                </td>
                                <td>
                                    <span>106</span>
                                </td>
                                <td>
                                    <span>97</span>
                                </td>
                                <td>
                                    <span>2:50s</span>
                                </td>
                                <td>
                                    <span
                                        class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">78%</span>
                                </td>
                                <td>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-start">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="assets/images/user-8.jpg" class="rounded-circle wh-44"
                                                alt="user-8">
                                        </div>
                                        <div class="flex-grow-1 ms-10">
                                            <h4 class="fw-semibold fs-16 mb-0">Nicholas Smith</h4>
                                            <span class="text-gray-light">@ppatterson2g</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <i class="ri-star-line fs-16 text-warning"></i>
                                    <span>4.8</span>
                                </td>
                                <td>
                                    <span>192</span>
                                </td>
                                <td>
                                    <span>150</span>
                                </td>
                                <td>
                                    <span>1:60s</span>
                                </td>
                                <td>
                                    <span
                                        class="badge bg-success bg-opacity-10 text-success py-2 px-3 fw-semibold">86%</span>
                                </td>
                                <td>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="eye"></i>
                                                    View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:;">
                                                    <i data-feather="trash"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-sm-flex justify-content-between align-items-center text-center">
                    <span class="fs-14">Showing 1 To 5 Of 20 Entries</span>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                            <li class="page-item">
                                <a class="page-link icon" href="help-support-desk.html" aria-label="Previous">
                                    <i data-feather="arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="help-support-desk.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="help-support-desk.html">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="help-support-desk.html">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link icon" href="help-support-desk.html" aria-label="Next">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-grow-1"></div>

    <footer class="footer-area bg-white text-center rounded-top-10">
        <p class="fs-14">© <span class="text-primary">Farol</span> is Proudly Owned by <a
                href="https://hibootstrap.com/" target="_blank" class="text-decoration-none">HiBootstrap</a></p>
    </footer>

    </div>
    </div>


    <button class="btn btn-danger theme-settings-btn p-0 position-fixed z-2 text-center"
        style="bottom: 30px; right: 30px; width: 40px; height: 40px;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <i data-feather="settings" class="wh-20 text-white position-relative" style="top: -1px; outline: none;"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
            <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">RTL / LTR</h4>
            <div class="settings-btn rtl-btn">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Light / Dark</h4>
            <button class="switch-toggle settings-btn dark-btn" id="switch-toggle">
                Click To <span class="dark">Dark</span> <span class="light">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Sidebar Light / Dark</h4>
            <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                Click To <span class="dark1">Dark</span> <span class="light1">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Header Light / Dark</h4>
            <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                Click To <span class="dark2">Dark</span> <span class="light2">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Footer Light / Dark</h4>
            <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                Click To <span class="dark3">Dark</span> <span class="light3">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style Radius / Square</h4>
            <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                Click To <span class="square">Square</span> <span class="radius">Radius</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style BG White / Gray</h4>
            <button class="card-bg settings-btn card-bg-style-btn" id="card-bg">
                Click To <span class="white">White</span> <span class="gray">Gray</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Container Style Fluid / Boxed</h4>
            <button class="boxed-style settings-btn fluid-boxed-btn" id="boxed-style">
                Click To <span class="fluid">Fluid</span> <span class="boxed">Boxed</span>
            </button>
        </div>
    </div>
@endsection
