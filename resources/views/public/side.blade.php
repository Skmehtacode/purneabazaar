    <div class="list-group">
       @foreach ($categories as $item)
       <a href="{{route("filter",['cat_id'=>$item->id])}}" class="list-group-item list-group-item-action">{{$item->cat_title}}</a>
       @endforeach
    </div>