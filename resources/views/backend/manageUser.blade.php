@include('backend.includes.header')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">All User</li>
                        </ol>

                        <div class="card mb-4">
                       
                                <div class="card-header">
                                    <h2 class="card-title">All User</h2>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped
                                        table-hover
                                        table-borderless
                                        table-primary
                                        align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>#SL:</th>
                                                    <th>User ID:</th>
                                                    <th>User Name</th>
                                                    <th>User Email</th>
                                                    
                                                </tr>
                                                </thead>
                                                <tbody class="table-group-divider">

                                                    @foreach ($users as $key => $user)
                                                        <tr class="table-primary" >
                                                            <td scope="row">{{$key+1}}</td>
                                                            <td scope="row">{{$user->id}}</td>
                                                            <td scope="row">{{$user->name}}</td>
                                                            <td>{{$user->email}}</td>
                                                          
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#SL:</th>
                                                        <th>User ID:</th>
                                                    <th>User Name</th>
                                                    <th>User Email</th>
                                                    
                                                </tfoot>
                                        </table>
                                    </div>


                                </div>
                                <div class="card-footer text-muted">
                                    Manage Product
                                </div>
                           
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
@include('backend.includes.footer')