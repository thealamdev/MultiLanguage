 @extends('layouts.app')
 @section('content')
     <div class="container">
         <div class="row">
             <div class="col-lg-6 m-auto mt-5">
                 <div class="card">
                     <div class="card-body">
                         <form action="{{ route('post.store') }}" method="POST">
                             @csrf
                             <div class="mb-3">
                                 <label for="title[en]" class="form-label">@lang('moduel.title')</label>
                                 <input name="title[en]" type="text" class="form-control">
                             </div>

                             <div class="mb-3">
                                 <label for="title[bn]" class="form-label">@lang('moduel.title')</label>
                                 <input name="title[bn]" type="text" class="form-control">
                             </div>

                             <div class="mb-3">
                                 <select name="status" class="form-control">
                                     <option value="1">approved</option>
                                     <option value="0">pending</option>
                                 </select>
                             </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
