<x-web_layout>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <style>
    .bg-img {
      background-image: url('path/to/your/background-image.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .panel-body {
      background-color: #f7e1ea;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
      font-family: 'Montserrat', sans-serif;
      font-weight: bold;
      color: #e91e63;
    }
    .form-control {
      border-radius: 8px;
      padding: 12px;
      border: 1px solid #e91e63;
    }
    .btn {
      border-radius: 8px;
      padding: 10px 20px;
      font-size: 16px;
    }
    .btn-primary {
      background-color: #e91e63;
      border-color: #e91e63;
    }
    .btn-primary:hover {
      background-color: #d81b60;
      border-color: #d81b60;
    }
    .btn-secondary {
      background-color: #f8bbd0;
      border-color: #f8bbd0;
    }
    .btn-secondary:hover {
      background-color: #f48fb1;
      border-color: #f48fb1;
    }
    .radio-inline input {
      margin-right: 8px;
    }
    .text-danger {
      font-size: 14px;
    }
  </style>
  <div class="container-fluid p-4 w-full d-flex justify-content-center align-items-center bg-img">
    <div class="row col-md-6 col-md-offset-3 p-4" style="border-radius: 12px; background-color: #f8f9fa; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
      <div class="text-center text-dark">
        <h1 class="mb-4">Update Product</h1>
        <div class="panel-body pt-5">
          <form action="{{ url('Admin/'.$product_det->id.'/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="Pro_Name" class="form-label h5" style="color: #f58867;">Product Name</label>
                <input
                  type="text"
                  class="form-control border-pink"
                  id="Pro_Name"
                  name="Pro_Name"
                  placeholder="Enter product name"
                  value="{{ $product_det->Pro_Name }}"
                  style="border: 2px solid #f58867;"
                />
                <!-- @error('Pro_Name')
                  <small class="text-danger">{{ $message-- }}</small>
                @enderror -->
              </div>
              <div class="mb-3">
                <label for="Pro_Detail" class="form-label h5" style="color: #f58867;">Product Details</label>
                <input
                value="{{ $product_det->Pro_Detail }}"
                  class="form-control border-pink"
                  id="Pro_Detail"
                  name="Pro_Detail"
                  type="text"
                  style="border: 2px solid #f58867;"
                ></input>
                <!-- @error('Pro_Detail')
                  <small class="text-danger">{{ $message }}</small>
                @enderror -->
              </div>           
              <div class="mb-3">
                <label for="Category_Id" class="form-label h5" style="color: #f58867;">Category</label>
                <input
                value="{{ $product_det->Category_Id }}"
                  type="number"
                  class="form-control border-pink"
                  id="Category_Id"
                  name="Category_Id"
                  placeholder="Enter category ID"
                  style="border: 2px solid #f58867;"
                />
                <!-- @error('Category_Id')
                  <small class="text-danger">{{ $message }}</small>
                @enderror -->
              </div>
              <div class="mb-3">
                <label for="Pro_Price" class="form-label h5" style="color: #f58867;">Product Price</label>
                <input
                value="{{ $product_det->Pro_Price }}"
                  type="text"
                  class="form-control border-pink"
                  id="Pro_Price"
                  name="Pro_Price"
                  placeholder="Enter product price"
                  style="border: 2px solid #f58867;"
                />
                <!-- @error('Pro_Price')
                  <small class="text-danger">{{ $message }}</small>
                @enderror -->
              </div>
            <div class="form-group mb-4">
              <label for="Pro_Img" class="h4 pt-4">Product Image URL</label>
              <input
                type="file"
                class="form-control"
                id="Pro_Img"
                name="Pro_Img"
              />
              <!-- @error('Pro_Img')
                <span class="text-danger">{{ $message }}</span>
              @enderror -->
            </div>
            <div class="pt-4 d-flex justify-content-between">
              <input type="submit" class="btn btn-primary btn-lg sub_btn" />
              <a href="{{ url('Admin') }}" class="btn btn-secondary btn-lg">Back</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</x-web_layout>
