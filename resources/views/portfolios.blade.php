<html>
    <head>
        <style>
            body {
                margin: 5%;
                background-color: #b3e8ca
            }
            table{
                border:none;
                padding: 2em;
            }
            tr.titles{
                background-color: red;
            }
            td{
                border: none;
            }
            
        </style>
    </head>
    <body>
        


	<table class="info-block"> 
		<tr class="titles"> 
			<td> Id </td> 
			<td> Vārds </td> 
			<td> Uzvārds </td>
			<td> Dz. datums </td>
                        <td> A / E </td>
			
		</tr>
	@foreach ($actors as $actor)
		<tr> 
			<td> {{ $actor->actor_id }} </td>
			<td> {{ $actor->actor_name }} </td>
			<td> {{ $actor->actor_surname }} </td>
                        <td> {{ $actor->birthday }} </td>
                        <td> {{ $actor->actor_extra }} </td>
                </tr>
	@endforeach
        
@if (count($portfolios)==0)
	<p color='red'> There is no info in the database!</p>
@else
	<table class="info-block"> 
		<tr class="titles"> 
			<td> Id </td> 
			<td> Epasts </td> 
			<td> Tel. nr </td>
			<td> Adrese </td>
                        <td> Izglītība </td>
                        <td> Pieredze </td>
                        <td> Atsauces </td>
		</tr>
	@foreach ($portfolios as $portfolio)
		<tr> 
			<td> {{ $portfolio->actor_id }} </td>
			<td> {{ $portfolio->email }} </td>
			<td> {{ $portfolio->phone_number }} </td>
                        <td> {{ $portfolio->address }} </td>
                        <td> {{ $portfolio->education }} </td>
                        <td> {{ $portfolio->experience }} </td>
                        <td> {{ $portfolio->references }} </td>
		</td>
	@endforeach
	</table>
@endif

@if (count($physicals)==0)
	<p color='red'> There is no info in the database!</p>
@else
	<table class="info-block"> 
		<tr class="titles"> 
			<td> Id </td> 
			<td> Augums (m) </td> 
			<td> Kājas izmērs </td>
			<td> Apģērbs </td>
                        <td> acu krāsa </td>
                        <td> matu krasa </td>
                        <td> miesasbūve </td>
		</tr>
	@foreach ($physicals as $physical)
		<tr> 
			<td> {{ $physical->actor_id }} </td>
			<td> {{ $physical->height }} </td>
			<td> {{ $physical->shoes }} </td>
                        <td> {{ $physical->clothes }} </td>
                        <td> {{ $physical->eyes }} </td>
                        <td> {{ $physical->hair }} </td>
                        <td> {{ $physical->body_type }} </td>
			
		</td>
	@endforeach
	</table>
@endif

@if (count($languages)==0)
	<p color='red'> There is no info in the database!</p>
@else
	<table class="info-block"> 
		<tr class="titles"> 
			<td> Id </td> 
			<td> language </td> 
			<td> speaking </td>
			<td> writing </td>
                        <td> understanding </td>
		</tr>
	@foreach ($languages as $language)
		<tr> 
			<td> {{ $language->actor_id }} </td>
			<td> {{ $language->language }} </td>
			<td> {{ $language->speaking }} </td>
                        <td> {{ $language->writing }} </td>
                        <td> {{ $language->understanding }} </td>
			
		</tr>
               
	@endforeach
	</table>
<p> <input type="button" value="edit" onclick="deleteCity({{ $language->city_id }})"> </p>
@endif


<script>
	function newCity(actorID) {
		window.location.href="/city/new/"+countryID;
	}
	function deleteCity(cityID) {
		window.location.href="/city/delete/"+cityID;
	}
</script>
        </body>
        </html>