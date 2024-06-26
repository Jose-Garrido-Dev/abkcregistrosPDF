@extends('Games.form')
@section('formName')
    <h3 class="text-center text-dark">Crear Registro</h3>
@endsection
@section('action')
    action= "{{route('games.store')}}"
@endsection

@push('scripts')
    @if(session('success'))
        <script>
            Swal.fire({
                title: "¡Registro Creado!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
@endpush

