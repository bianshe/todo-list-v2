
@if(count($errors) > 0)

    <div class="alert alert-danger">
        <strong>Возникли следующие ошибки:</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
