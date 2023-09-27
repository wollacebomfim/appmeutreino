<?php
date_default_timezone_set('America/Recife'); 
$date= date('d');

if ($date > '10'){
  $valor = 120;

}else{
  $valor = 100;
}

  $access_token = "APP_USR-6711510001640075-092406-b79956b720e8f71bbb89c38cba7f5787-792218445";
  
  if(isset($_POST)){

    if(isset($_POST['pix'])){

      if($_POST['pix']){

        $valor;

        include_once 'mercadopago/lib/mercadopago/vendor/autoload.php';

        MercadoPago\SDK::setAccessToken($access_token);


  			$payment = new MercadoPago\Payment();
  			$payment->description = 'Pagamento Nome';
  			$payment->transaction_amount = (double)$valor;
  			$payment->payment_method_id = "pix";

  			$payment->notification_url   = 'https://seusite.com/notification.php';
  			$payment->external_reference = '1520';

  				$payment->payer = array(
  					"email" => 'emailcliente@gmail.com',
  					"first_name" => 'Primeiro nome do cliente',
  					"address"=>  array(
  						"zip_code" => "06233200",
  						"street_name" => "Av. das Nações Unidas",
  						"street_number" => "3003",
  						"neighborhood" => "Bonfim",
  						"city" => "Osasco",
  						"federal_unit" => "SP"
  					)
  				);
          
          $preference = new MercadoPago\Preference();
          $preference->back_urls = array(
            "success" => "https://teste.com/1",
            "failure" => "https://teste.com/1",
            "pending" => "https://teste.com/1"
          );
          $preference->auto_return = "approved";
          $preference->external_reference = "Pago";
          //$preference->save();
          $preference->init_point;


          $payment->save();


          
    

         echo json_encode($payment->point_of_interaction);




      }else{
        echo json_encode(array(
          'status'  => 'error',
          'message' => 'pix required'
        ));
        exit;
      }

    }else{
      echo json_encode(array(
        'status'  => 'error',
        'message' => 'pix required'
      ));
      exit;
    }

  }else{
    echo json_encode(array(
      'status'  => 'error',
      'message' => 'post required'
    ));
    exit;
  }
