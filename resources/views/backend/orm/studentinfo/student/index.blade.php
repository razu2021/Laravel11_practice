@extends('layouts.adminmaster')
@section('admin_contents')

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
     <!-- Hoverable Table rows -->
                <div class="card">
                    <h5 class="card-header">Hoverable rows</h5>
                    <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Project</th>
                            <th>Client</th>
                            <th>Users</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                            <td>Albert Cook</td>
                            <td>fdf</td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <div class="btn-group">
                                    <button
                                      type="button"
                                      class="btn btn-outline-primary dropdown-toggle"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="true"
                                      z-index=1045
                                    >
                                      Primary
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                      <li>
                                        <hr class="dropdown-divider" />
                                      </li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                    </ul>
                                  </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                            <td>Albert Cook</td>
                            <td>fdf</td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <div class="btn-group">
                                    <button
                                      type="button"
                                      class="btn btn-outline-primary dropdown-toggle"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="true"
                                      z-index=1045
                                    >
                                      Primary
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                      <li>
                                        <hr class="dropdown-divider" />
                                      </li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                    </ul>
                                  </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                            <td>Albert Cook</td>
                            <td>fdf</td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <div class="btn-group">
                                    <button
                                      type="button"
                                      class="btn btn-outline-primary dropdown-toggle"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="true"
                                      z-index=1045
                                    >
                                      Primary
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                      <li>
                                        <hr class="dropdown-divider" />
                                      </li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                    </ul>
                                  </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                            <td>Albert Cook</td>
                            <td>fdf</td>
                            <td><span class="badge bg-label-primary me-1">Active</span></td>
                            <td>
                                <div class="btn-group">
                                    <button
                                      type="button"
                                      class="btn btn-outline-primary dropdown-toggle"
                                      data-bs-toggle="dropdown"
                                      aria-expanded="true"
                                      z-index=1045
                                    >
                                      Primary
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                      <li>
                                        <hr class="dropdown-divider" />
                                      </li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                                    </ul>
                                  </div>
                            </td>
                            
                        </tr>

                       
                        </tbody>
                    </table>
                    </div>
                </div>
                <!--/ Hoverable Table rows -->
<hr>


              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Project</th>
                        <th>Client</th>
                        <th>Users</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                        <td>Barry Hunter</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-2"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                        <td>Trevor Baker</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-2"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                        </td>
                        <td>Jerry Milton</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow " data-bs-toggle="dropdown">
                              Manage
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-2"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-2"></i> Delete</a
                              >
                            </div>
                          </div>
                          <div class="btn-group">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle"data-bs-toggle="dropdown" aria-expanded="false">
                              Primary
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                              <li>
                                <hr class="dropdown-divider" />
                              </li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
            {{-- col end  --}}
        </div>
    </div>
</section>

@endsection