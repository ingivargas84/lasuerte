<x-layouts.app>

<div class="card">

         <form action="{{ route('cliente.update', $cliente) }}" method="POST" >

            @csrf
            @method('PUT')
            
            <div>
                <flux:input label="Nombre" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" placeholder="Nombre" />
                 <flux:input label="Apellido" name="apellido" value="{{ old('apellido', $cliente->apellido) }}" placeholder="Apellido" />
                  <flux:input label="Telefono" name="telefono" value="{{ old('telefono', $cliente->telefono) }}" placeholder="Telefono" />

                
                <div class="flex justify-end mt-4">
                    <flux:button variant="primary" type="submit">Actualizar</flux:button>
                </div>
                
            </div>

        </form>

    </div>  


    </x-layouts.app>