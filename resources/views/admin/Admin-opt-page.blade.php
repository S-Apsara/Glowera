<x-web-layout>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <div class="container-fluid p-5 d-flex justify-content-center align-items-center" style="min-height: 100vh; background: linear-gradient(to bottom, #ffe4e9, #f8d7b2);">
    <div class="text-center p-5 rounded shadow-lg" style="background-color: #fff; width: 100%; max-width: 600px;">
      <h1 class="mb-4 fw-bold" style="color: #f58867;">Glowéra Admin Panel</h1>
      <div class="d-grid gap-3">
        <a href="{{url('Admin/add')}}" class="btn btn-lg fw-bold text-white" style="background-color: #f58867;">Add Product</a>
        <a href="{{url('Admin/view')}}" class="btn btn-lg fw-bold text-white" style="background-color: #f58867;">View Products</a>
        <a href="{{url('Admin/view')}}" class="btn btn-lg fw-bold text-white" style="background-color: #f58867;">Update Product</a>
        <a href="{{url('Admin/view')}}" class="btn btn-lg fw-bold text-white" style="background-color: #f58867;">Delete Product</a>
      </div>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</x-web-layout>
