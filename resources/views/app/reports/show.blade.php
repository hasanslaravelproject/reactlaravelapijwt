@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('reports.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.reports.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.reports.inputs.client_id')</h5>
                    <span>{{ optional($report->client)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reports.inputs.hotdishmeat')</h5>
                    <span>{{ $report->hotdishmeat ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reports.inputs.hotdishveg')</h5>
                    <span>{{ $report->hotdishveg ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reports.inputs.chili')</h5>
                    <span>{{ $report->chili ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reports.inputs.rye')</h5>
                    <span>{{ $report->rye ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reports.inputs.extrarye')</h5>
                    <span>{{ $report->extrarye ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reports.inputs.focaccia')</h5>
                    <span>{{ $report->focaccia ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reports.inputs.extrafocaccia')</h5>
                    <span>{{ $report->extrafocaccia ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.reports.inputs.client_id')</h5>
                    <span>{{ optional($report->client)->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('reports.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Report::class)
                <a href="{{ route('reports.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
