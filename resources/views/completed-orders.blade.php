@extends('admin-layout.admin-main')
@section('admin-section')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Orders</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item">Orders</li>
                    <li class="breadcrumb-item active">Completed Orders</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Completed Orders</h5>
                            <p>Your Completed Orders are showen here.</p>

                            <!-- Table with stripped rows -->
                            <div class="table-responsive">
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Contact No.</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">No. of Copies</th>
                                            <th scope="col">Media Type</th>
                                            <th scope="col">Payment</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Recieved At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Ahmer</td>
                                            <td>rajaahmer308@gmail.com</td>
                                            <td>123456789</td>
                                            <td>G-10/4, Block 1,2,3</td>
                                            <td>900</td>
                                            <td>Paper A4</td>
                                            <td>25000 Rs. <span class="badge bg-success">Paid</span> </td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>15-3-2022</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>123456789</td>
                                            <td>@fat</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>15-3-2022</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>1213456789</td>
                                            <td>@twitter</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>15-3-2022</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Angus Grady</td>
                                            <td>HR</td>
                                            <td>1213456789</td>
                                            <td>@twitter</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>15-3-2022</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Raheem Lehner</td>
                                            <td>Dynamic Division Officer</td>
                                            <td>1213456789</td>
                                            <td>@twitter</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>15-3-2022</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
