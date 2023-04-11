@extends('index')
@section('description', 'New Breed Of Service Robots with 55inch digital signage screens in 4K resolution')
@section('keywords', 'Robot rental, One of the best mobile advertising robots, Robot on rent, Rent mr robot, The company advertising ')
@section('content')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <link rel="stylesheet" href="{{asset('products/css/style.css')}}">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{asset('products/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
            background: linear-gradient(6deg, #04409b, #058cc0bd);
            color: white;
            border-radius: 0;
            white-space: nowrap !important;
        }

        .nav-tabs .nav-link {
            text-decoration: none;
            background: #e7e7e7;
            white-space: nowrap;
        }
.fixed-top{
    background: #1481d9;
    height: 0;
}
.top-nav-collapse{
    height: auto;
}
    </style>


    <section class="feature-list section">
   <div class="container">

       <!-- Button trigger modal -->
       <button type="button" class="btn btn-primary btn-sm mb-4" data-toggle="modal" data-target="#createItemModal">
           Create Customer
       </button>

       <!-- Modal -->
       <div class="modal fade" id="createItemModal" tabindex="-1" role="dialog" aria-labelledby="createItemModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content ">
                   <div class="modal-header">
                       <h5 class="modal-title" id="createItemModalLabel">   Create Customer</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <form method="post" action="{{route('createProduct')}}">
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4">Item Name</label>
                                   <input type="text" class="form-control" name="itemName" id="inputEmail4" placeholder="Item Name" required>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputPassword4">Sku</label>
                                   <input type="text" class="form-control" id="inputPassword4" name="sku" placeholder="Sku" required>
                               </div>
                           </div>

                           <div class="form-row">
                               <div class="form-group col-md-12">
                                   <label for="inputPassword4">Description</label>
                                   <textarea type="textarea" class="form-control" id="inputPassword4" name="description" placeholder="Description" required></textarea>
                               </div>
                               @csrf
                           </div>

                           <div class="form-row">
                               <div class="form-group col-md-4">
                                   <label for="inputState">Currency</label>
                                   <select id="inputState" name="currency" class="form-control" required>
                                       <option selected>Select Currency</option>
                                       <option value="AED">AED</option>
                                       <option value="AED">USD</option>
                                   </select>
                               </div>
                               <div class="form-group col-md-4">
                                   <label for="unitPrice">Unit Price</label>
                                   <input type="text" class="form-control" id="unitPrice" name="unitPrice" placeholder="Enter Unit Price" required>
                               </div>
                               <div class="form-group col-md-4">
                                   <label for="robotQuantiy">Unit Price</label>
                                   <input type="number" class="form-control" id="robotQuantiy" name="robotQuantiy" placeholder="Enter Quantity" required>
                               </div>

                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                               <button type="submit" class="btn btn-primary btn-sm">Create Item</button>
                           </div>
                       </form>
                   </div>

               </div>
           </div>
       </div>


       <table class="table table-striped table-sm" style="font-size: 14px">
           <tr>
               <th>Name</th>
               <th>Company Name</th>
               <th>Email</th>
               <th>Currency</th>
               <th>Balance</th>

               <th>Phone Number</th>
               <th>Created At</th>
               <th>
                   Action</th>
           </tr>
           @foreach($allCustomers as $customer)

               <tr>
                   <td>{{$customer->DisplayName !=null ? $customer->DisplayName : 'N/A'}}</td>
                   <td>{{$customer->CompanyName !=null ? $customer->CompanyName : 'N/A'}}</td>
                   <td>{{$customer->PrimaryEmailAddr !=null ? $customer->PrimaryEmailAddr->Address : 'N/A'}}</td>
                   <td>{{$customer->CurrencyRef !=null ? $customer->CurrencyRef : 'N/A'}}</td>
                   <td>{{$customer->Balance !=null ? $customer->Balance : 'N/A'}}</td>
                   <td>{{$customer->PrimaryPhone !=null ? $customer->PrimaryPhone->FreeFormNumber : 'N/A'}}</td>
                   <td>{{$customer->MetaData !=null ? \Illuminate\Support\Carbon::parse($customer->MetaData->CreateTime)->format('d-M-Y') : 'N/A'}}</td>
                   <td>
                       <a href="{{route('getCustomer',$customer->Id)}}"><button class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"></i> View</button></a>
                   </td>
               </tr>
           @endforeach
       </table>
   </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@endsection
