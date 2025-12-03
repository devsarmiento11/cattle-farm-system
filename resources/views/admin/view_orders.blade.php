<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')

   <style type="text/css">
.div_deg
{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 60px;
}

.table_deg
{
    border: 2px solid white;
    border-collapse: collapse;
}

th
{
  background-color: green;
  color: white;
  font-size: 19px;
  font-weight: bold;
  padding: 15px;
}

td
{
  border: 1px solid white;
  text-align: center;
  color: white;
}

.status-badge {
    display: inline-block;
    padding: 5px 10px;
    border-radius: 4px;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 12px;
}

.status-pending {
    background-color: #ffc107;
    color: #212529;
}

.status-processing {
    background-color: #17a2b8;
    color: white;
}

.status-completed {
    background-color: #28a745;
    color: white;
}

.status-cancelled {
    background-color: #dc3545;
    color: white;
}
   </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">View Orders</h2>
          </div>
        </div>

          <div class="div_deg">

            <table class="table_deg">
                <tr>
                    <th>ID</th>
                    <th>Product Image</th>
                    <th>Product Title</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Payment Method</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Edit Status</th>
                    <th>Delete</th>
                    <th>Review</th>
                </tr>

                @forelse($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>
                        @if($order->product_image)
                            <img height="120" width="120" src="products/{{ $order->product_image }}" alt="{{ $order->product_title }}">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $order->product_title }}</td>
                    <td>₱{{ number_format($order->product_price, 2) }}</td>
                    <td>{{ $order->product_category }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->payment_method }}</td>
                    <td>{{ $order->created_at->format('M d, Y H:i') }}</td>
                    <td>
                        <span class="status-badge status-{{ strtolower($order->status ?? 'pending') }}">
                            {{ ucfirst($order->status ?? 'pending') }}
                        </span>
                    </td>
                    <td>
                        <form action="{{ route('update_order_status', $order->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="form-control" style="display: inline-block; width: auto;">
                                <option value="pending" {{ ($order->status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="processing" {{ ($order->status ?? 'pending') == 'processing' ? 'selected' : '' }}>Processing</option>
                                <option value="completed" {{ ($order->status ?? 'pending') == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ ($order->status ?? 'pending') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_order',$order->id)}}">Delete</a>
                    </td>
                    <td>
                        @php
                            $existingReview = \App\Models\Review::where('order_id', $order->id)->first();
                        @endphp
                        @if(!$existingReview)
                            <a class="btn btn-primary" href="{{ url('/rate/'.$order->id) }}">Rate Product</a>
                        @else
                            <span class="text-success">Already Rated</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="15" style="text-align: center;">No orders found.</td>
                </tr>
                @endforelse
            </table>
          </div>
      </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>

    <script type="text/javascript">

      function confirmation(ev)
      {
       ev.preventDefault();
      var urlToRedirect = ev.currentTarget.getAttribute('href');

      console.log(urlToRedirect);

      swal({

        title:"Are You Sure to Delete This",
        text: "This delete will be permanent",
        icon: "warning",
        buttons: true,
        dangerMode:true,




      })

      .then((willCancel)=>{

        if(willCancel)
        {
          window.location.href=urlToRedirect;
        }

      });

      }

     </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </body>
</html>
