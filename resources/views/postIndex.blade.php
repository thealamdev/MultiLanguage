 @extends('layouts.app')
 @section('content')
 
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <table class="table">
                <thead>
                    <th>@lang('moduel.id')</th>
                    <th>@lang('moduel.title')</th>
                    <th>@lang('moduel.status')</th>
                </thead>

                <tbody>
                    @foreach ($posts as $each)
                        <tr>
                            <td>{{ $each->id }}</td>

                            <td>
                                {{ \App\Helpers\Helper::toLocalTranslate($each->translate) }}
                            </td>

                            <td>{{ $each->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
 @endsection

 
     
