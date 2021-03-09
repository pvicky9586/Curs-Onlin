<div class="form-group">

		<div class="form-group form-2">
	<label class="text-center display-6 text-primary">{{$title}}</label><br>
	<label class="text-right display-5 text-success"><b>Seccion: <b>{{$seccion}}</label>
		
	<div>
		@if($curso->img)
	   		<img src="{{ Storage::url("$curso->img") }}" alt="imagen no disponible" class="img-curs-2"/> 
		@endif
	</div>
	<div class="text-center display-5">Actualizar recursos subidos
		<p class="display-7 text-danger">formatos permitidos '.png, .jpg, .jpej, .mp3, .doc, .docx, .xml, .pdf, .mp4, .MPEG-4, .zip, .rar
		</p>
	</div>
	<label class="text-center text-success display-6">Imagesnes/videos/documentos/zip...</label><br>
	<div class="">
	<div  style="display: flex;">
	@foreach($secc as $sec)
		<?php if(Str::endsWith($sec->file,['.png','.jpg','.jpeg'])){	?>
			<div align="center">
				<img src="{{ Storage::url("$sec->file") }}" alt="imagen no disponible" class="img-file" 
				style="cursor: pointer"title="{{$sec->name_file}}" /><br>
				<img src="{{asset('images/icons/trash.svg')}}" wire:click="delet({{$sec->id}})" title="Eliminar" style="cursor: move; width: 3%;">		
			</div>			
		<?php }?>				
	@endforeach
</div>
<br>

@foreach($secc as $sec)
	<?php if(Str::endsWith($sec->file,['.mp4','.MPEG-4'])){	?>
			<div align="center">
				<video  id="video-curs" autoplay loop muted >
					<source src="{{ Storage::url($sec->file)}}" type="video/mp4" style="cursor: move;  width: 5%;">
				</video><br>
				<img src="{{asset('images/icons/trash.svg')}}" wire:click="delet({{$sec->id}})" title="Eliminar" style="cursor: move; width: 3%;">	
			</div>	
	<?php }?>
@endforeach
<br>


<div style="display: flex;">
@foreach($secc as $sec)
	<?php if(Str::endsWith($sec->file,'.pdf')){	?>
		<div style="display: block;" align="center">
			<img src="{{ asset('images/icons/PDF.png') }}" title="{{$sec->name_file}}" style="cursor: pointer; width: 5%;"/>
			<br>
			<img src="{{asset('images/icons/trash.svg')}}" wire:click="delet({{$sec->id}})" title="Eliminar" style="cursor: move; width: 3%;">	
		</div>	
	<?php }?>
@endforeach
</div>
<br>

<div style="display: flex;">
	<?php $i=0; ?>
	@foreach($secc as $sec)	
		<?php $i= $i+1; ?>
		<?php if(Str::endsWith($sec->file,['docx','.doc'])){?>
			<div style="display: block;" align="center">
				<label><b>Doc <?php echo $i; ?>:</b>
					<span class="text-info">{{$sec->name_file}}</span>	
					<img src="{{asset('images/icons/trash.svg')}}" wire:click="delet({{$sec->id}})" title="Eliminar" style="cursor: move; width: 3%;">	
				</label>&nbsp;&nbsp;
			</div>
		<?php }?>
	@endforeach
</div>
<br><br><br>
		<div class="row">
				<div class="col-md-6">
					<div class="form-group mb-4">
						<label form="downloads">Adjuntar archivo(s)</label>
						@for($i = 0; $i < $fields; $i++)
							<input type="file" id="downloads" wire:model="files" class="form-control mb-2" accept=".png, .jpg, .jpej, .mp3, .pdf, .mp4, .MPEG-4, .zip, .rar, .doc, .docx">
						@endfor					
					</div>
					<div class="form-group">
						<a href="#" class="btn btn-primary" wire:click.prevent="AddField"><b>Add +</b></a>
					</div>
				</div>
			</div>

			<div class="form-group">
		    	<label class="text-primary display-6">¿Tienes un sitio web para a compartir?</label>
		    	<input type="url" wire:model="url" class="form-control" placeholder="https://www.google.com/">
			</div>

				<div align="center" class="form-group">
		    	<label>Nota
		    		<textarea class=" form-control" wire:name="texto" rows="3"  cols="200" placeholder="Escriba informacion que considere importante o de referencia para esta seccion"></textarea>
		    	</label>
			</div>

		</form>
	</div>
    <div align="center">
    	<button wire:click="upload_save" class="btn btn-primary btn-block">Subir y Guardar información</button>
    </div>

     <div align="left" style="margin-left:60%;">
	<a wire:click="back" title="ir atras">
	   <img src="{{ asset('images/icons/back.png') }}"  class="irAtras"></a> 
	</div>

</div>


</div>
