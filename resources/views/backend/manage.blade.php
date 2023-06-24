@include('backend.includes.header')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Manage Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product</li>
                        </ol>

                        <div class="card mb-4">
                       
                                <div class="card-header">
                                    <h2 class="card-title">All Product</h2>
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
                                                    <th>Product Name</th>
                                                    <th>Product Category</th>
                                                    <th>Product Brand</th>
                                                    <th>Product Description</th>
                                                    <th>Product Image</th>
                                                    <th>Product Status</th>
                                                    <th>Product Action</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table-group-divider">

                                                    @if(count($products)>0)
                                                    @foreach ($products as $key => $product)
                                                        <tr class="table-primary" >
                                                            <td scope="row">{{$key+1}}</td>
                                                            <td scope="row">{{$product->name}}</td>
                                                            <td>{{$product->category_name}}</td>
                                                            <td>{{$product->brand_name}}</td>
                                                            <td>{{$product->description}}</td>
                                                            <td><img src="{{asset('uploads/'.$product->image)}}" alt="image" height="150px" width="150px"></td>
                                                            <td> @if ($product->status === 1)
                                                                    Active
                                                                @else
                                                                    Inactive
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                                <a href="{{route('product.delete', $product->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                            </td>
                                                        </tr>
                                                      
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan="8" class="text-center">Data Not Found</td>
                                                    </tr>
                                                    @endif
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#SL:</th>
                                                    <th>Product Name</th>
                                                    <th>Product Category</th>
                                                    <th>Product Brand</th>
                                                    <th>Product Description</th>
                                                    <th>Product Image</th>
                                                    <th>Product Status</th>
                                                    <th>Product Action</th>
                                                    </tr>
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


