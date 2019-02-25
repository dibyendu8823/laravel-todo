@if(Session::get('message')!='')
                
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong> {{ Session::get('message') }} </strong>  
</div>

@elseif(Session::get('message_error')!='')

<div class="alert alert-info" >
  <strong> {{ Session::get('message_error') }} </strong>
</div>

@endif