@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <section class="content">
          <div class="row">
              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up hov-rs">
                      <div class="box-body text-center">							
                          <div class="icon border-primary b-1 rounded w-60 h-60 mx-auto">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16 font-weight-500">New Clients</p>
                              <h6 class="text-dark mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h6>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="col-xl-4 col-6">
                <div class="box overflow-hidden pull-up hov-rs">
                    <div class="box-body text-center">							
                        <div class="icon border-primary b-1 rounded w-60 h-60 mx-auto">
                            <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16 font-weight-500">Total Orders</p>
                            <h6 class="text-dark mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h6>
                        </div>
                    </div>
                </div>
            </div>
              
              
              
              <div class="col-xl-4 col-6">
                  <div class="box overflow-hidden pull-up hov-rs">
                      <div class="box-body text-center">							
                          <div class="icon border-secondary b-1 rounded w-60 h-60 mx-auto">
                              <i class="text-secondary mr-0 font-size-24 mdi mdi-chart-line"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16 font-weight-500">Total Revune</p>
                              <h6 class="text-dark mb-0 font-weight-500">$4,500k <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h6>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-12 col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title font-size-20">
                              Sales Summary
                          </h4>
                      </div>
                      <div class="box-body py-0">
                          <div class="row">
                              <div class="col-lg-6 col-12">
                                  <div class="box no-shadow mb-0">
                                      <div class="box-body px-0">
                                          <div class="d-flex justify-content-start align-items-center">
                                              <div>
                                                  <div id="chart41"></div>
                                              </div>
                                              <div>
                                                  <h5>Top Order</h5>
                                                  <h6 class="text-dark my-0 font-weight-500">$39k</h6>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-12">
                                  <div class="box no-shadow mb-0">
                                      <div class="box-body px-0">
                                          <div class="d-flex justify-content-start align-items-center">
                                              <div>
                                                  <div id="chart42"></div>
                                              </div>
                                              <div>
                                                  <h5>Average Order</h5>
                                                  <h6 class="text-dark my-0 font-weight-500">$24k</h6>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div id="charts_widget_43_chart"></div>							
                      </div>
                  </div>
              </div>
              
              
              
              
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>
@endsection