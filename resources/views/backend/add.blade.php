@include('backend.includes.header')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product</li>
                        </ol>

                        <div class="card mb-4">
                            <form action="{{ route ('product.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="form-group mb-3">
                                            <label for="">Product Name</label>
                                            <input name="name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Product Category</label>
                                            <select name="category_name" class="form-control">
                                                <option value=""><--Select Category--></option>
                                                <option value="Mobile">Mobile</option>
                                                <option value="Freeze">Freeze</option>
                                                <option value="TV">TV</option>
                                                <option value="Laptop">Laptop</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Product Brand</label>
                                            <select name="brand_name" class="form-control">
                                                <option value=""><--Select Brand--></option>
                                                <option value="Oppo">Oppo</option>
                                                <option value="Walton">Walton</option>
                                                <option value="Samsung">Samsung</option>
                                                <option value="Mac">Mac</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Product Description</label>
                                            <textarea name="description"class="form-control" cols="30" rows="5"></textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Product Image</label>
                                            <input name="image" class="form-control" type="file"/>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input name="" class="btn btn-info" type="submit" value="Save Product"/>
                                    </div>
                                </div>
                            </form>
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

