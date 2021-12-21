@include('layouts/admin/head')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('layouts/admin/sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('layouts/admin/header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">หน้าสินค้า</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">หน้า contents</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!--เพิ่มข้อมูล-->
              @if (session('success'))
              <script>
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'บันทึกข้อมูลเรียนร้อย',
                  showConfirmButton: false,
                  timer: 1500
                })
              </script>
              @endif
              <!--แก้ไขข้อมูล-->
              @if (session('update'))
              <script>
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'แก้ไขข้อมูลเรียบร้อย',
                  showConfirmButton: false,
                  timer: 1500
                })
              </script>
              @endif
              <!--ลบข้อมูล-->
              @if (session('delete'))
              <script>
                Swal.fire({
                  position: 'top-end',
                  icon: 'success',
                  title: 'ลบข้อมูลเรียบร้อย',
                  showConfirmButton: false,
                  timer: 1500
                })
              </script>
              @endif
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">หน้า Product</h6>
                  <a href="{{route('addproduct')}}" class="btn btn-sm btn-success">Add Data</a>
                </div>

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>detail</th>
                        <th>Type</th>
                        <th>User</th>
                        <!-- <th>ID_Users</th> -->
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($product as $products)
                      <tr>
                        <td><a href="#">{{$products->id_product }}</a></td>
                        <td>
                          <img src="{{asset('admin/img/'.$products->image)}}" alt="" loading="lazy" style="width: 100px;" />
                        </td>
                        <td>{{$products->name }}</td>
                        <td>$ {{number_format($products->Price )}} บาท</td>
                        <td>{{$products->Detail }}</td>
                        <td>{{$products->category->name}}</td>
                        <td>{{$products->user->name}}</td>

                        <td><a href="{{url('admin/product/edit/'.$products->id_product)}}" class="btn btn-sm btn-warning">Edit</a></td>
                        <td><a href="{{url('admin/product/delete/'.$products->id_product)}}" class="btn btn-sm btn-danger">Delete</a></td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('layouts/admin/footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


</body>

</html>
