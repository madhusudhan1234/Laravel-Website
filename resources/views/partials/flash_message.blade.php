@if(Session::has('flash_message'))
<div class="alert alert-success alert-important" >
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session('flash_message') }}
</div>
 @endif