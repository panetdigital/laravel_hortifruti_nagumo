@extends('layouts.app')



@section('title') {{'filtrar-verduras'}} @endsection

@section('filtrarverdura')
    
	
		<style>
			.navbar-brand {
   
    		margin-left: 37%;
		}
		</style>


		<!--css de img bd-->
		<style>
		.img200-200{
			width: 200px;
		}

	  </style> 
      
      <div class="container justify-content-center">
	  
	  			
				<!--title de busca-->
				<div class="" style="margin-left: 22%;">
					<span class=" badge badge-pill badge-primary" style=" font-size: 20px;">Filtra verdura</span>
				</div>

				 <button class="btn btn-warning btn-sm" onclick="goBack()">Retorno</button>

				@if ($verdura->count() > 0)
					<table class="table table-bordered">
						<thead>
							<tr>
								
								<th>CodEtiq</th>
								<th>Nome</th>
								<th>imagem</th>
								
							</tr>
						</thead>
						<tbody>
							@foreach ($verdura as $verdura)
								<tr>
								
									<td>{{ $verdura->coditem }}</td>
									<td>{{ $verdura->nome }}</td>
									<td>

											<div class='row justify-content-center mt-3'>
												@if ($verdura->imagem)
													<!-- Verifica se há um link válido para a imagem -->
													<img src="{{ $verdura->imagem }}" class='img-fluid mb-3 d-block img200-200' alt="Imagem do Item">
												@else
													<!-- Caso não haja um link válido, use um link estático de imagem -->
													
													<img src="{{ asset('vendor/img/fotoilustrada.jpg') }}" class='img-fluid mb-3 d-block img200-200' alt="Image ilustrada" />
												@endif
											</div>

									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				
				@endif
							
				
		<!-- botão de retorno-->               
		<script>
			function goBack(){ window.history.back()  }
		</script>         
 </div>

 @endsection


@section('css')
    <link rel="stylesheet" href="https://nagumo.marketingonline.click/public/vendor/css/admin_custom.css">
@stop

