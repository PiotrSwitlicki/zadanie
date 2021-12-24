<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Stan konta') }}: {{ $user->name}}</div>

                <div class="card-body">
                        @foreach($wallet as $data)
                    
                        <div class="alert alert-success" role="alert">
                            

                            {{ $data->ballance}} PLN <span id="usd"></span> USD <span id="chf"></span> CHF <span id="gbp"></span> GBP

                            

                            <script>
                                    const usd_url = 'https://api.nbp.pl/api/exchangerates/rates/a/usd/?format=json';
 
                                    async function getCurrency() {                                     
                                      let response = await fetch(usd_url);
                                      let json = await response.json();
                                      return json.rates[0].mid;
                                    }
                                    async function run() {
                                      var pln  = '<?php echo $data->ballance; ?>';
                                      let xxx = await getCurrency();
                                      var z = pln / xxx;
                                      let usd = z;                                     
                                      document.getElementById("usd").innerHTML = usd.toFixed(2);                                     
                                    }

                                    run()
                           
                            </script>
                            <script>
                                    const chf_url = 'https://api.nbp.pl/api/exchangerates/rates/a/chf/?format=json';
 
                                    async function getCurrency() {                                     
                                      let response = await fetch(chf_url);
                                      let json = await response.json();
                                      return json.rates[0].mid;
                                    }
                                    async function run() {
                                      var pln  = '<?php echo $data->ballance; ?>';
                                      let xxx = await getCurrency();
                                      var z = pln / xxx;
                                      let chf = z;                                     
                                      document.getElementById("chf").innerHTML = chf.toFixed(2);                                   
                                    }

                                    run()
                           
                            </script>
                            <script>
                                    const gbp_url = 'https://api.nbp.pl/api/exchangerates/rates/a/gbp/?format=json';
 
                                    async function getCurrency() {                                     
                                      let response = await fetch(gbp_url);
                                      let json = await response.json();
                                      return json.rates[0].mid;
                                    }
                                    async function run() {
                                      var pln  = '<?php echo $data->ballance; ?>';
                                      let xxx = await getCurrency();
                                      var z = pln / xxx;
                                      let gbp = z;                                     
                                      document.getElementById("gbp").innerHTML = gbp.toFixed(2);
                                    }

                                    run()
                           
                            </script>
                         @endforeach

                        </div>
           

               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
