@extends('admin-layout.admin-main')
@section('admin-section')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Distributors</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item">Distributors</li>
                    {{-- <li class="breadcrumb-item active">Completed Distributors</li> --}}
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Distributor</h5>
                            <p>Distributors list is showen here.</p>

                            <!-- Table with stripped rows -->
                            <table class="table datatable table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact No.</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Distributions</th>
                                        <th scope="col">Payment</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Ahmer</td>
                                        <td>rajaahmer308@gmail.com</td>
                                        <td>123456789</td>
                                        <td>House # 1, Street 6, G-10/4 Islamabad</td>
                                        <td>9</td>
                                        <td>25000</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td><button class="badge bg-secondary">Invite</button> <br> <button class="badge bg-danger">Block</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>123456789</td>
                                        <td>@fat</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td><button class="badge bg-secondary">Invite</button> <br> <button class="badge bg-danger">Block</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>1213456789</td>
                                        <td>@twitter</td>
                                        <td>3</td>
                                        <td>5000</td>
                                        <td><span class="badge bg-danger">Not Active</span></td>
                                        <td><button class="badge bg-secondary">Invite</button> <br> <button class="badge bg-warning">Un-Block</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Angus Grady</td>
                                        <td>HR</td>
                                        <td>1213456789</td>
                                        <td>@twitter</td>
                                        <td>5</td>
                                        <td>8000</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td><button class="badge bg-secondary">Invite</button> <br> <button class="badge bg-danger">Block</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Raheem Lehner</td>
                                        <td>Dynamic Division Officer</td>
                                        <td>1213456789</td>
                                        <td>@twitter</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td><span class="badge bg-danger">Not Active</span></td>
                                        <td><button class="badge bg-secondary">Invite</button> <br> <button class="badge bg-warning">Un-Block</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
