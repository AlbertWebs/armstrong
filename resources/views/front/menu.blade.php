<ul class="menu-items-list menu-uppercase d-flex">
    <?php
       $Category = DB::table('categories')->limit('8')->get();
    ?>
    @foreach ($Category as $cat)
    <li>
        <a href="#">
        <span>{{$cat->title}}</span>
        <i class="lastudioicon-down-arrow" aria-hidden="true"></i>
        </a>
        <ul class="sub-menu">
           <?php
            $Product = DB::table('products')->where('category_id',$cat->id)->limit('6')->get();
            ?>
            @foreach ($Product as $Pro)
               <li><a href="{{url('/')}}/product/{{$Pro->slung}}" ><span>{{$Pro->title}}</span></a></li>
            @endforeach
           <li><a href="{{url('/')}}/products/{{$cat->slung}}" ><span>All {{$cat->title}}</span></a></li>
        </ul>
     </li>
    @endforeach
 </ul>
