@include('backend.includes.header')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Product</li>
                        </ol>

                        <div class="card mb-4">
                            <form action="{{ route ('product.update', $products->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 offset-md-3">
                                        <div class="form-group mb-3">
                                            <label for="">Product Name</label>
                                            
                                            <input name="name" type="text" class="form-control" value="{{$products->name}}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Product Category</label>
                                            <select name="category_name" class="form-control" value = "{{ $products->category_name}}>
                                                <option value=""><--Select Category--></option>
                                                <option value="Mobile">Mobile</option>
                                                <option value="Freeze">Freeze</option>
                                                <option value="TV">TV</option>
                                                <option value="Laptop">Laptop</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Product Brand</label>
                                            <select name="brand_name" class="form-control" value="{{$products->brand_name}}>
                                                <option value=""><--Select Brand--></option>
                                                <option value="Oppo">Oppo</option>
                                                <option value="Walton">Walton</option>
                                                <option value="Samsung">Samsung</option>
                                                <option value="Mac">Mac</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Product Status</label>
                                            <select name="status" class="form-control" value="{{$products->status}}>
                                                <option value=""><--Select Status--></option>
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                              
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Product Description</label>
                                            <textarea name="description"class="form-control" cols="30" rows="5">{{$products->description}}</textarea>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="">Product Image</label>
                                            <input name="image" class="form-control image" type="file" value="{{$products->image}}"/>
                                            
                                        <img src="
                                            {{-- default image or admin image show here  --}}
                                            {{ asset('uploads/'.$products->image); }}
                                        " class="my-2 imagePreview" alt="user avatar" name = "imagePreview" width="200">
                                        </div>
                                    <div class="form-group mb-3">
                                        <input name="" class="btn btn-info" type="submit" value="Update Product"/>
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


