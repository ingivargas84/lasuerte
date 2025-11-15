<x-layouts.app>

<div class="card">

        <form action="{{ route('cliente.store') }}" method="POST" >

            @csrf
            <div>
                <flux:input label="Nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre" />
                 <flux:input label="Apellido" name="apellido" value="{{ old('apellido') }}" placeholder="Apellido" />
                  <flux:input label="Telefono" name="telefono" value="{{ old('telefono') }}" placeholder="Telefono" />
                <div class="flex justify-end mt-4">
                    <flux:button variant="primary" type="submit">Guardar</flux:button>
                </div>
                
            </div>

        </form>

    </div>  


    </x-layouts.app>