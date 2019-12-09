@extends('admin::layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

    <div class="content full-page dashboard">
        <div class="page-header">
            <div class="page-title">
                <h1>Home</h1>
            </div>

            <div class="page-action">
                <date-filter></date-filter>
            </div>
        </div>

        <div class="page-content">
			This is custom home page
			  <ul>

				@foreach ($statistics['getAdmin'] as $item)

					<li>
						<div class="description">
							<div class="name">
								{{ $item->name }}
							</div>
						</div>
					</li>

				@endforeach

			</ul>
		</div>
    </div>

@stop


