@php
$computador = $computador ?? null;
@endphp

<div class="mb-2">
    <label>Código Tienda</label>
    <input type="text" name="codigo_tienda" class="form-control" value="{{ old('codigo_tienda', $computador->codigo_tienda ?? '') }}">
</div>
<div class="mb-2">
    <label>Almacenamiento</label>
    <input type="text" name="almacenamiento" class="form-control" value="{{ old('almacenamiento', $computador->almacenamiento ?? '') }}">
</div>
<div class="mb-2">
    <label>RAM</label>
    <input type="text" name="ram" class="form-control" value="{{ old('ram', $computador->ram ?? '') }}">
</div>
<div class="mb-2">
    <label>Tarjeta Gráfica</label>
    <input type="text" name="tarjeta_grafica" class="form-control" value="{{ old('tarjeta_grafica', $computador->tarjeta_grafica ?? '') }}">
</div>
<div class="mb-2">
    <label>Procesador</label>
    <input type="text" name="procesador" class="form-control" value="{{ old('procesador', $computador->procesador ?? '') }}">
</div>
<div class="mb-2">
    <label>Precio</label>
    <input type="number" step="0.01" name="precio" class="form-control" value="{{ old('precio', $computador->precio ?? '') }}">
</div>
<div class="mb-2">
    <label>Descripción</label>
    <textarea name="descripcion" class="form-control">{{ old('descripcion', $computador->descripcion ?? '') }}</textarea>
</div>
