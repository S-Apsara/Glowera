<x-web_layout>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />

  <div class="container-fluid py-5" style="background: linear-gradient(to bottom, #ffe4e9, #f8d7b2); min-height: 100vh;">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header text-white text-center" style="background-color: #f58867;">
            <h2 class="mb-0">Update Product</h2>
          </div>
          <div class="card-body">
            <form action="{{ url('Admin/'.$product_det->id.'/update') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')

              <!-- Product Name -->
              <div class="mb-3">
                <label for="Pro_Name" class="form-label h5" style="color: #f58867;">Product Name</label>
                <input
                  type="text"
                  class="form-control border-pink"
                  id="Pro_Name"
                  name="Pro_Name"
                  value="{{ $product_det->Pro_Name }}"
                  style="border: 2px solid #f58867;"
                />
                @error('Pro_Name')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <!-- Product Details -->
              <div class="mb-3">
                <label for="Pro_Detail" class="form-label h5" style="color: #f58867;">Details</label>
                <textarea
                  class="form-control border-pink"
                  id="Pro_Detail"
                  name="Pro_Detail"
                  rows="3"
                  style="border: 2px solid #f58867;"
                  placeholder="Enter product details"
                >{{ $product_det->Pro_Detail }}</textarea>
                @error('Pro_Detail')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <!-- Categories -->
              <div class="mb-3">
                <label class="form-label h5" style="color: #f58867;">Category</label>
                <div class="d-flex flex-wrap gap-2">
                  <div>
                    <input type="radio" id="Sunscreen" name="Pro_Category" value="Sunscreen" {{ $product_det->Pro_Category == 'Sunscreen' ? 'checked' : '' }}>
                    <label for="Sunscreen">Sunscreen</label>
                  </div>
                  <div>
                    <input type="radio" id="Lipcare" name="Pro_Category" value="Lipcare" {{ $product_det->Pro_Category == 'Lipcare' ? 'checked' : '' }}>
                    <label for="Lipcare">Lipcare</label>
                  </div>
                  <div>
                    <input type="radio" id="Moisturisers" name="Pro_Category" value="Moisturisers" {{ $product_det->Pro_Category == 'Moisturisers' ? 'checked' : '' }}>
                    <label for="Moisturisers">Moisturisers</label>
                  </div>
                  <div>
                    <input type="radio" id="Serums" name="Pro_Category" value="Serums" {{ $product_det->Pro_Category == 'Serums' ? 'checked' : '' }}>
                    <label for="Serums">Serums</label>
                  </div>
                  <div>
                    <input type="radio" id="VitaminC" name="Pro_Category" value="Vitamin C Range" {{ $product_det->Pro_Category == 'Vitamin C Range' ? 'checked' : '' }}>
                    <label for="VitaminC">Vitamin C Range</label>
                  </div>
                </div>
                @error('Pro_Category')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <!-- Product Price -->
              <div class="mb-3">
                <label for="Pro_Price" class="form-label h5" style="color: #f58867;">Product Price</label>
                <input
                  type="text"
                  class="form-control border-pink"
                  id="Pro_Price"
                  name="Pro_Price"
                  value="{{ $product_det->Pro_Price }}"
                  style="border: 2px solid #f58867;"
                />
                @error('Pro_Price')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>

              <!-- Product Image -->
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

              <!-- Submit and Back Buttons -->
              <div class="d-flex justify-content-center gap-3 mt-4">
                <button type="submit" class="btn btn-lg fw-bold text-white" style="background-color: #f58867;">Update</button>
                <a href="{{ url('Admin') }}" class="btn btn-lg fw-bold text-white" style="background-color: #f58867;">Back</a>
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
</x-web_layout>
