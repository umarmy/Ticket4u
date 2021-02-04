@extends('layouts.ticket')

@section('content')
<div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('../../theme/img/bg4.jpg');">
    <div class="container">
        <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <div class="brand">
                <h1 class="title" style="font-size: 100px !important;">Welcome</h1>
                <h3 style="font-size: 30px; font-weight: 70 !important;">A Badass Concert In The World !</h3>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="main main-raised" >
    <div class="section section-tabs" style="background-image: url('../../theme/img/bg-1.png');">
        <div class="container">
            <div class="text-center">
                <h4 class="title" style="font-size: 50px !important; margin-bottom: 60px;">Member List</h4>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                      <thead class="bg-light">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Date/Time</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Ticket Class</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->ticket_class }}</td>
                            <td class="my-0 py-0">
                                <form method="POST" action="{{ route('member.destroy', $user->id) }}" >
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm btn-round">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>
                  </div>
              </div>
        </div>
    </div>
</div>
<script src="{{ asset('theme/js/datatables.min.js') }}" type="text/javascript"></script>
@endsection
