<x-web_layout>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />

  <div class="container-fluid py-5" style="background: linear-gradient(to bottom, #ffe4e9, #f8d7b2); min-height: 100vh;">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-lg">
          <div class="card-header text-white text-center" style="background-color: #f58867;">
            <h2 class="mb-0">View Products</h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped text-center">
              <thead style="background-color: #f58867; color: white;">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Detail</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Picture</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Pro_Name }}</td>
                    <td>{{ $item->Pro_Detail }}</td>
                    <td>{{ $item->category->Name }}</td>
                    <td>{{ $item->Pro_Price }}</td>
                    <td>
                      <img src="{{ asset($item->Pro_Img) }}" alt="Product Image" style="width: 70px; height: 70px; border-radius: 8px;">
                    </td>
                    <td>
                      <a href="{{ url('Admin/'.$item->id.'/update') }}" class="btn btn-sm btn-success">Edit</a>
                      <a
                        href="{{ url('Admin/'.$item->id.'/delete') }}"
                        class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure you want to delete this product?')"
                      >
                        Delete
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer text-center">
            <a href="{{ url('Admin') }}" class="btn btn-lg text-white" style="background-color: #f58867;">Back</a>
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
