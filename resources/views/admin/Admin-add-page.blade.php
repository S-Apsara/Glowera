<x-web-layout>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />

  <div class="container-fluid py-5" style="background: linear-gradient(to bottom, #ffe4e9, #f8d7b2); min-height: 100vh;">
    @if (session('status'))
      <div class="alert alert-success text-center">{{ session('status') }}</div>
    @endif

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-lg">
          <div class="card-header text-white text-center" style="background-color: #f58867;">
            <h2 class="mb-0">Add Product</h2>
          </div>
          <div class="card-body" style="background: #fff;">
            <form action="{{ url('Admin/add') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="Pro_Name" class="form-label h5" style="color: #f58867;">Product Name</label>
                <input
                  type="text"
                  class="form-control border-pink"
                  id="Pro_Name"
                  name="Pro_Name"
                  placeholder="Enter product name"
                  style="border: 2px solid #f58867;"
                />
                @error('Pro_Name')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="Pro_Detail" class="form-label h5" style="color: #f58867;">Product Details</label>
                <textarea
                  class="form-control border-pink"
                  id="Pro_Detail"
                  name="Pro_Detail"
                  rows="3"
                  placeholder="Enter product details"
                  style="border: 2px solid #f58867;"
                ></textarea>
                @error('Pro_Detail')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="Category_Id" class="form-label h5" style="color: #f58867;">Category</label>
                <input
                  type="number"
                  class="form-control border-pink"
                  id="Category_Id"
                  name="Category_Id"
                  placeholder="Enter category ID"
                  style="border: 2px solid #f58867;"
                />
                @error('Category_Id')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="Pro_Price" class="form-label h5" style="color: #f58867;">Product Price</label>
                <input
                  type="text"
                  class="form-control border-pink"
                  id="Pro_Price"
                  name="Pro_Price"
                  placeholder="Enter product price"
                  style="border: 2px solid #f58867;"
                />
                @error('Pro_Price')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="mb-3">
                <label for="Pro_Img" class="form-label h5" style="color: #f58867;">Product Image</label>
                <input
                  type="file"
                  class="form-control border-pink"
                  id="Pro_Img"
                  name="Pro_Img"
                  style="border: 2px solid #f58867;"
                />
                @error('Pro_Img')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="d-flex justify-content-center gap-3 mt-4">
                <button
                  type="submit"
                  class="btn btn-lg fw-bold text-white"
                  style="background-color: #f58867;"
                >
                  Submit
                </button>
                <a
                  href="{{ url('Admin') }}"
                  class="btn btn-lg fw-bold text-white"
                  style="background-color: #f58867;"
                >
                  Back
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</x-web-layout>
