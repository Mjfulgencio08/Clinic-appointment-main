<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" id="total_btn">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $totalAppointments->count() }}</h3>
                                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-calendar-star icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Appointments</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" id="approved_btn">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $approvedAppointments->count() }}</h3>
                                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success">
                                    <span class="mdi mdi-calendar-check icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Approved Appointments</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" id="canceled_btn">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $canceledAppointments->count() }}</h3>
                                    {{-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-danger">
                                    <span class="mdi mdi-calendar-remove icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Canceled Appointments</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card" id="pending_btn">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $pendingAppointments->count() }}</h3>
                                    {{-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-warning">
                                    <span class="mdi mdi-calendar-clock icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Pending Appointments</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card" {{ auth()->user()->usertype != 1 ? 'hidden' : ''  }}>
                <div class="card" id="users_btn">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $totalUsers->count() }}</h3>
                                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-account-group icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Users</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card" {{ auth()->user()->usertype != 1 ? 'hidden' : ''  }}>
                <div class="card" id="feedback_btn">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $totalFeedbacks->count() }}</h3>
                                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-account-clock icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Feedbacks</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 grid-margin stretch-card" {{ auth()->user()->usertype != 1 ? 'hidden' : ''  }}>
                <div class="card" id="testimonies_btn">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <div class="d-flex align-items-center align-self-start">
                                    <h3 class="mb-0">{{ $totalTestimonies->count() }}</h3>
                                    {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="icon icon-box-success ">
                                    <span class="mdi mdi-account-star icon-item"></span>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted font-weight-normal">Total Testimonies</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card" id="recent">
                    <div class="card-body">
                        <h4 class="card-title">Recent Appointments</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th>Patients Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($approved as $appoint)
                                        <tr align="center">
                                            <td>{{ $appoint->name }}
                                            </td>
                                            <td>{{ $appoint->phone }}</td>
                                            <td>{{ $appoint->email }}</td>
                                            <td>{{ $appoint->date }}</td>
                                            <td>
                                                <div class="badge badge-outline-success">{{ $appoint->status }}</div>
                                                <br>
                                                <br>
                                                <span
                                                    class="text-muted">{{ $appoint->created_at->diffForHumans() }}</span>
                                            </td>

                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Recent Appointments yet!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <!----  Total       --->
                <div class="card" id="total" hidden>
                    <div class="card-body">
                        <h4 class="card-title">Total Appointments</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th>Patients Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($totalAppointments  as $appoint)
                                        <tr align="center">
                                            <td>{{ $appoint->name }}
                                            </td>
                                            <td>{{ $appoint->phone }}</td>
                                            <td>{{ $appoint->email }}</td>
                                            <td>{{ $appoint->date }}</td>
                                            <td>
                                                <div class="badge badge-outline-success">{{ $appoint->status }}</div>
                                                <br>
                                                <br>
                                                <span
                                                    class="text-muted">{{ $appoint->created_at->diffForHumans() }}</span>
                                            </td>

                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Recent Appointments yet!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                        <!----  Approved      --->
                <div class="card" id="approved" hidden>
                    <div class="card-body">
                        <h4 class="card-title">Approved Appointments</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th>Patients Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($approvedAppointments  as $appoint)
                                        <tr align="center">
                                            <td>{{ $appoint->name }}
                                            </td>
                                            <td>{{ $appoint->phone }}</td>
                                            <td>{{ $appoint->email }}</td>
                                            <td>{{ $appoint->date }}</td>
                                            <td>
                                                <div class="badge badge-outline-success">{{ $appoint->status }}</div>
                                                <br>
                                                <br>
                                                <span
                                                    class="text-muted">{{ $appoint->created_at->diffForHumans() }}</span>
                                            </td>

                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Recent Appointments yet!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                        <!----  Cancelled     --->
                <div class="card" id="canceled" hidden>
                    <div class="card-body">
                        <h4 class="card-title">Canceled Appointments</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th>Patients Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($canceledAppointments   as $appoint)
                                        <tr align="center">
                                            <td>{{ $appoint->name }}
                                            </td>
                                            <td>{{ $appoint->phone }}</td>
                                            <td>{{ $appoint->email }}</td>
                                            <td>{{ $appoint->date }}</td>
                                            <td>
                                                <div class="badge badge-outline-success">{{ $appoint->status }}</div>
                                                <br>
                                                <br>
                                                <span
                                                    class="text-muted">{{ $appoint->created_at->diffForHumans() }}</span>
                                            </td>

                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Cancelled Appointments yet!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                            <!----  Pending     --->
                <div class="card" id="pending" hidden>
                    <div class="card-body">
                        <h4 class="card-title">Pending Appointments</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th>Patients Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pendingAppointments   as $appoint)
                                        <tr align="center">
                                            <td>{{ $appoint->name }}
                                            </td>
                                            <td>{{ $appoint->phone }}</td>
                                            <td>{{ $appoint->email }}</td>
                                            <td>{{ $appoint->date }}</td>
                                            <td>
                                                <div class="badge badge-outline-success">{{ $appoint->status }}</div>
                                                <br>
                                                <br>
                                                <span
                                                    class="text-muted">{{ $appoint->created_at->diffForHumans() }}</span>
                                            </td>

                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Pending Appointments yet!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                                  <!---- Users    --->
                <div class="card" id="users" hidden>
                    <div class="card-body">
                        <h4 class="card-title">Total Users</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th>Patients Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        
                                     $usetype = ['Patient','Administrator','Doctor','Secretary']
                                    @endphp
                                    @forelse ($totalUsers   as $appoint)
                                        <tr align="center">
                                            <td>{{ $appoint->name }}
                                            </td>
                                            <td>{{ $appoint->phone }}</td>
                                            <td>{{ $appoint->email }}</td>
                                            <td>{{ $appoint->created_at->format('F j, Y') }}</td>
                                            <td>
                                                <div class="badge badge-outline-success">{{ $usetype[$appoint->usertype]  }}</div>
                                                
                                            </td>

                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Users Found!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                                          <!---- Feedbacks  --->
                <div class="card" id="feedback" hidden>
                    <div class="card-body">
                        <h4 class="card-title">Total Feedbacks</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    @forelse ($totalFeedbacks   as $appoint)
                                        <tr align="center">
                                            <td>{{ $appoint->name }}
                                            </td>
                                            <td>{{  $appoint->email }}</td>
                                            <td>{{ $appoint->subject }}</td>
                                            <td>{{ $appoint->message  }}</td>
                                            <td>
                                                {{ $appoint->created_at->format('F j, Y')  }}
                                                
                                            </td>

                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Feedbacks Found!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                                                  <!---- testimonies  --->
                <div class="card" id="testimonies" hidden>
                    <div class="card-body">
                        <h4 class="card-title">Total Testimonies</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th>Name</th>
                                        <th>Email</th>
                 
                                        <th>Content</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    @forelse ($totalTestimonies  as $testimonies)
                                        <tr align="center">
                                            <td>{{ $testimonies->user->name  }}</td>
                                            
                                            <td>{{  $testimonies->user->email }}</td>
                                     
                                            <td>{{ $testimonies->content  }}</td>
                                            <td>
                                                {{ $testimonies->created_at->format('F j, Y')  }}
                                                
                                            </td>

                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No Testimonies Found!</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
<script>
   
     let currentActive = document.getElementById('recent');

     addClickListener('total_btn', 'total');
     addClickListener('approved_btn', 'approved');
     addClickListener('canceled_btn', 'canceled');
     addClickListener('pending_btn', 'pending');
     addClickListener('users_btn', 'users');
     addClickListener('feedback_btn', 'feedback');
     addClickListener('testimonies_btn', 'testimonies');
     
     function addClickListener(id, activeId) {
  const element = document.getElementById(id);
  if (element) {
    element.addEventListener('click', () => {
      displayActive(activeId);
    });
  }
}
     function displayActive(id) {
  // Remove the hidden attribute from the element with the provided id
  const element = document.getElementById(id);
  if (element) {
    element.removeAttribute('hidden');
  }

  // Add the hidden attribute to the currentActive element
  if (currentActive) {
    currentActive.setAttribute('hidden', 'true');
  }

  // Update the currentActive element
  currentActive = element;
}



</script>

    <script>
        function updateCurrentDateTime() {
            var currentDateTimeElement = document.getElementById("currentDateTime");
            var currentTime = new Date();

            var hours = currentTime.getHours();
            var minutes = currentTime.getMinutes();
            var seconds = currentTime.getSeconds();

            var ampm = hours >= 12 ? 'PM' : 'AM';

            hours = hours % 12;
            hours = hours ? hours : 12;

            minutes = (minutes < 10) ? "0" + minutes : minutes;
            seconds = (seconds < 10) ? "0" + seconds : seconds;

            var timeString = hours + ":" + minutes + ":" + seconds + " " + ampm;

            var currentDate = currentTime.toDateString();

            var dateTimeString = "Current Date and Time: " + currentDate + " " + timeString;

            currentDateTimeElement.innerText = dateTimeString;
        }

        setInterval(updateCurrentDateTime, 1000);

        updateCurrentDateTime();
    </script>
