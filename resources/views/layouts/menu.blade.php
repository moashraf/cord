
 

<li class="{{ Request::is('siteStings*') ? 'active' : '' }}">
    <a href="{!! route('siteStings.index') !!}"><i class="fa fa-edit"></i><span> site settings  </span></a>
</li>
 
  
 <li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{!! route('orders.index') !!}"><i class="fa fa-edit"></i><span>Orders</span></a>
</li>

 
<li class="{{ Request::is('sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>   sliders </span></a>
</li>
 

<li class="{{ Request::is('nEWS*') ? 'active' : '' }}">
    <a href="{!! route('nEWS.index') !!}"><i class="fa fa-edit"></i><span>post </span></a>
</li>



<li class="{{ Request::is('categoriesNews*') ? 'active' : '' }}">
    <a href="{!! route('categoriesNews.index') !!}"><i class="fa fa-edit"></i><span>Categories  </span></a>
</li>
 
