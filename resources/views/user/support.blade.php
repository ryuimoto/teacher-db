@extends('templates.user.main')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/user/support.css') }}">
@endsection
@section('js')
    <script src="https://www.paypal.com/sdk/js?client-id=AdxAuknARU4YC0N6qhmd1oELuwDGfJZ1sZvQ_JIUTOjKtYRhdKV5DK8aS8Osp4154OX1BH13xweD_mPI"> // Replace YOUR_CLIENT_ID with your sandbox client ID
    </script>
@endsection
@section('contents')
    <div>
        <p>もし本サイトがあなたのお役に立てたなら、投げ銭をいただけると大変ありがたく思います。</p>
        <p>データベースの更新に係るモチベーションになると思いますので、</p>
        <p>何卒、よろしくお願いいたします。</p>
    </div>
    <div>
      <form method="post">
        @csrf
        <input type="number" min="0">
        <p></p>
        {{-- <input type="submit" value="投げ銭する"> --}}
      </form>
    </div>
    <div id="paypal-button-container"></div>
    <script>
        paypal.Buttons({
          createOrder: function(data, actions) {
            return actions.order.create({
              purchase_units: [{
                amount: {
                  value: '0.01'
                }
              }]
            });
          },
          onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
              alert('Transaction completed by ' + details.payer.name.given_name);
            });
          }
        }).render('#paypal-button-container'); // Display payment options on your web page
      </script>
@endsection