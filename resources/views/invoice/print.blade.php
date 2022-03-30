<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="{{ asset('/src/styles/invoice.css') }}" media="all" />
  </head>
  <body>
    <main>
      <h1  class="clearfix"><small><span>Created At</span><br />{{ $invoice->created_at }}</small> INVOICE - {{ $invoice->id }} <small><span></span><br /> </small></h1>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            
            <th class="service">Trakick Number</th>
            <th class="desc">Reference</th>
            <th>Shipment Amount</th>
            <th>Shipping Cost</th>
            <th>Weight Fees</th>
            <th>Service Fees</th>
            <th>Due Amount</th>
            <th>Comment</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($shipments as $shipment)
             <tr>
                <td>{{ $shipment->Shipment->id}}</td>
                <td class="service">{{ $shipment->Shipment->tracking_number}}</td>
                <td class="desc">{{ $shipment->Shipment->reference}}</td>
                <td class="total">{{  $shipment->Shipment->Currency->left_symbole }} {{ $shipment->Shipment->FormatedAmount}} {{  $shipment->Shipment->Currency->right_symbole }}</td>

                <td class="total">{{ $shipment->shipping_cost }}</td>
                <td class="total">{{ $shipment->weight_fees }}</td>
                <td class="total">{{ $shipment->service_fees }}</td>
                <td class="total">{{ $shipment->shipping_cost + $shipment->weight_fees + $shipment->service_fees  }}</td>
                <td>{{ $shipment->comment }}</td>
             </tr>
         @endforeach
          
         <tr>
          <td colspan="8" class="sub">Total Shipments (LBP)</td>
          <td class="sub total">{{ $total_lbp }}</td>
        </tr>
        <tr>
          <td colspan="8">Total Shipments (USD)</td>
          <td class="total">{{ $total_usd }}</td>
        </tr>
        <tr>
          <td colspan="8" >Due Amount</td>
          <td class="total">-{{ $due_amount }}</td>
        </tr>
        @if (!empty($extra_fees))
        <tr>
          <td colspan="8" >{{ $comment}}</td>
          <td class="total">-{{ $extra_fees }}</td>
        </tr>
        @endif
        <tr>
          <td colspan="8" >Lbp Net Value</td>
          <td class="total">{{ $net_value }}</td>
        </tr>
        </tbody>
      </table>
    
  
    </main>
    <footer style="width:100%; text-align:center;padding:15px;">
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>