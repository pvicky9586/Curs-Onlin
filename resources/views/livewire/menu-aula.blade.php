<div>
		@if($aula)
			@include('Menu.Aulas.aula')
		@elseif($continuar)
			@include('Menu.Aulas.entrar')
		@else
	<div style=" margin-top: 5%;" align="center" >

	    <div class="text-center" >
	      <smal class="display-5"> Bienvenidos <br>al</smal> <br><small class="title">Aula Virtual</small>
	    </div>

	     <div align="center" class="nota-none text-danger" style="margin-left: 10%; margin-top: 5%;">
	      <label class="display-5"><i>Para continuar... esta seccion previamente debe estar inscripto en un de nuestros <br> <small class="text-success display-4">cursos disponibles...</small></i></label>
	    </div>

			<!-- <div>
				<img src="{{ asset('images/av2.jpeg')}}" class="img-left" title="entrar al Aula Virtual">
			</div> -->

			<div align="center" style=" margin-top: 5%;">
			<button wire:click="ir" class="btn btn-primary btn-lg">Continuar</button>
		</div>

	</div>

	@endif

</div>

	
