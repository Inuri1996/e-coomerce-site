@extends('master')
@section('content')
<div class="custom-product">
       
        <div class="col-sm-10">
            <table class="table">
                
                <tbody>
                  <tr>
                    <td>Amount</td>
                    <td>${{ $total }}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                  </tr>
                  <tr>
                    <td>Delivery </td>
                    <td>rs 50</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>{{$total + 50}}</td>
                  </tr>
                </tbody>
              </table>
              <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea type="address" class="form-control"  placeholder="Enter Address"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Payment Method</label><br><br>
                  <input type="radio" value="cash" name="method"><span>Online Payement</span><br><br>
                  <input type="radio" value="cash"  name="method"><span>Payement On Delivery</span>

                </div>
                
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>

            </div>
        </div>
        @endsection