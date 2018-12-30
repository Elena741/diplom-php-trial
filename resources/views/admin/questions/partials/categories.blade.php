

@foreach ($categories as $category)

  <option  value="{{$category->id or ""}}"  

    >
    {!! $delimiter or "" !!}{{$category->title or ""}}
  </option>

@endforeach