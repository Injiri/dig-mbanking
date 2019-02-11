@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Deposite to Account .</h1>

    <label for="AccountNo"><b>AccountNumber</b></label>
    <input type="text" placeholder="A/c" name="accountNumber" required>

    <label for="Amount"><b>Amount</b></label>
    <input type="text" placeholder="0.00" name="topupAmount" required>

    <label for="PhoneNumber"><b>Phone Number</b></label>
    <input type="text" placeholder="+254" name="phoneNumber" required>
    <br><hr><button type="submit" class="cancelbtn">Cancel</button>
    <button type="submit" class="topupAmountbtn">Deposit</button>
    </hr>


    
   
</div>

@endsection