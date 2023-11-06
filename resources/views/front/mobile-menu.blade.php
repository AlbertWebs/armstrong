<ul class="mobile-menu-items">
    <?php
        $Category = DB::table('categories')->limit('8')->get();
    ?>
 @foreach ($Category as $cat)
 <li>

     <a href="#">
        {{$cat->title}}
        <span class="menu-expand" aria-label="down-arrow">
        <i class="lastudioicon-down-arrow"></i>
    </span>
    </a>
     <ul class="sub-menu">
        <?php
         $Product = DB::table('products')->where('category_id',$cat->id)->limit('6')->get();
         ?>
         @foreach ($Product as $Pro)
            <li><a href="{{url('/')}}/products/{{$Pro->slung}}" ><span>{{$Pro->title}}</span></a></li>
         @endforeach
        <li><a href="{{url('/')}}/products/{{$cat->slung}}" ><span>All {{$cat->title}}</span></a></li>
     </ul>
  </li>
  @endforeach
</ul>
