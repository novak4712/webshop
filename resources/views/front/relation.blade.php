
{{ $fish }}</br>

<hr>
<hr>
@foreach($bearMax->trees as $tree)

    {{ $tree->type }} </br>
    {{ $tree->age }}</br>
@endforeach

<hr>
<hr>
@foreach($bearWhite->picnics as $picnic)

{{ $picnic->name }} </br>

@endforeach
<hr>
<hr>
@foreach($forest->bears as $bear)

{{ $bear->name }} </br>

@endforeach