<ul>   
    @foreach($categories as $category)
    <li>{{$category->id}}</li>
    <li>{{$category->name}}</li>
    @if(count($category->childs) > 0)
    <li>
        <ul>
                @foreach($category->childs as $child)
                <li>{{$child->id}}</li>
                <li>{{$child->name}}</li>
                <br>
                @endforeach
        </ul>
    </li>
    @else
    <li style="color:red;">Not Childs</li>
    @endif
    <br><br><br>
    @endforeach
</ul>