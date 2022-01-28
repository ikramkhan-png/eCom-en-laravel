@extends('master') @section('content')
<div class="container">
    <div class="row custom-product">
        <div class="col-sm-10">
            <table class="table">
                <div>
                    <h3>Detail of items added to your cart</h3>
                </div>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><strong>Amount</strong></td>
                        <td>{{ $total }}</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><strong>Tax</strong></td>
                        <td>Rs.00</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><strong>Delivery Charges</strong></td>
                        <td>Rs. 100</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><strong>Total Amount</strong></td>
                        <td>{{ $total + 100 }}</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <form action="/oderplace" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea
                            class="form-control"
                            placeholder="Enter your address here!"
                            rows="3"
                            name="address"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"
                            >Payment Method</label
                        >
                        <div style="margin-bottom: 5px">
                            <input
                                type="radio"
                                value="cash"
                                name="payment"
                                id=""
                            /><span style="padding-left: 5px"
                                >Online payment</span
                            >
                        </div>
                        <div style="margin-bottom: 5px">
                            <input
                                type="radio"
                                value="cash"
                                name="payment"
                                id=""
                            /><span style="padding-left: 5px">EMI payment</span>
                        </div>
                        <div style="margin-bottom: 5px">
                            <input
                                type="radio"
                                value="cash"
                                name="payment"
                                id=""
                            /><span style="padding-left: 5px"
                                >Cash On Delivery</span
                            >
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                            Order Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
