@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Whoops! Something went wrong!</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
               <li style="list-style: none"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>  {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif