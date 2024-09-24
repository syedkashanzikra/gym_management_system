

@extends('admin.admin_master')
@section('admin')
    



                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Dashboard</h4>

                                   <div class="page-title-right">
                                        <ol class="m-0 breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Kashan Gym</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <!-- Trainers Count -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="mb-2 text-truncate font-size-14">Total Trainers</p>
                                                <h4 class="mb-2">{{ $trainersCount }}</h4>
                                                <p class="mb-0 text-muted">from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-user-3-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Contacts Count -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="mb-2 text-truncate font-size-14">Total Contacts</p>
                                                <h4 class="mb-2">{{ $contactsCount }}</h4>
                                                <p class="mb-0 text-muted">from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-phone-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Services Count -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="mb-2 text-truncate font-size-14">Total Services</p>
                                                <h4 class="mb-2">{{ $servicesCount }}</h4>
                                                <p class="mb-0 text-muted">from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-service-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Users Count -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="mb-2 text-truncate font-size-14">Total Users</p>
                                                <h4 class="mb-2">{{ $usersCount }}</h4>
                                                <p class="mb-0 text-muted">from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-user-3-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Members Count -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="mb-2 text-truncate font-size-14">Total Members</p>
                                                <h4 class="mb-2">{{ $membersCount }}</h4>
                                                <p class="mb-0 text-muted">from previous period</p>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-group-line font-size-24"></i>  
                                                </span>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            
                            <!-- end col -->
                        
                            <!-- end col -->
                        </div>
                        <!-- end row -->
    
                        <!-- end row -->
                    </div>
                    
                </div>
                <!-- End Page-content -->


@endsection
