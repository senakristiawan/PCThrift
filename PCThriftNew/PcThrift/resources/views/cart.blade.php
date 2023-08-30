<x-header>
    @php
    $total = 0;
    $cartItems = session('cart');
    @endphp

    @if($cartItems && count($cartItems) > 0)    
        <table id="cart" class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if(session('cart'))
                @foreach (session('cart') as $id =>$details)
                    @php $total +=$details['price'] * $details['quantity']@endphp
                    <tr data-id="{{$id}}">
                        <td data-th ="Product">
                            <div class="flex items-center font-semibold m-2">
                                <div class ="col-sm-3 hidden-xs"><img src="{{asset('images')}}/{{$details['photo']}}" width="100" height="100" class="img-responsive"/></div>
                                <div class="col-sm-9 ml-10">
                                    <h4 class="nomargin">{{$details['product_name']}}</h4>
                                </div>
                            </div>
                        </td>
                        <td class="font-semibold" data-th="Price">Rp.{{ number_format($details['price'], 0, '.', '.') }}</td>
                        <td data-th="Quantity" class="text-center font-semibold">
                            {{-- <input type="number" value="{{$details['quantity'] }}" class="form-control quantity cart_update text-black text-center font-bold rounded-lg" min="1"/> --}}
                            {{$details['quantity']}}
                        </td>
                        
                        <td data-th="Subtotal" class="text-center font-semibold">Rp.{{ number_format($details['price'], 0, '.', '.')}}</td>
                        <td class="actions cart_remove" data-th="">
                            <button class="cart_remove bg-blue-500 text-white rounded-lg px-4 py-2 font-semibold">
                                <i class="cart_remove"></i>Delete
                            </button>                            
                        </td>
                    </tr>
                @endforeach 
             @endif
        </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right pr-20 m-10    "><h3><strong>Rp.{{ number_format($details['price'], 0, '.', '.')}}</strong></h3></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                    
                        <a href="{{url('/')}}" class="bg-red-500 text-white rounded-lg px-4 py-2 font-bold"> <i class="fa fa-arrow-left"></i>Continue Shopping</a>
                        <button class="bg-green-500 text-white rounded-lg px-4 py-2 font-bold"><i class="fa fa-money"></i> Checkout</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    @else
    <div class="text-center text-[20px] text-red my-[140px] tracking-[10px] font-bold text-shadow drop-shadow bg-gray-300 bg-opacity-50 p-2 rounded-lg font-mono">
        <h3>No product added to the cart.</h3>
    </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @section('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $(".cart_remove").click(function(e) {
                    e.preventDefault();
    
                    var ele = $(this);
    
                    if (confirm("Do you really want to remove?")) {
                        $.ajax({
                            url: '{{route('remove_from_cart')}}',
                            method: "DELETE",
                            data: {
                                _token: '{{csrf_token()}}',
                                id: ele.parents("tr").attr("data-id")
                            },
                            success: function(response) {
                                window.location.reload();
                            }
                        });
                    }
                });
            });
        </script>
    @endsection
    
</x-header>

