@extends('layouts.app')

@section('content')
<div class="container">
    <div class="searchbar mt-0 mb-4">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="input-group">
                        <input
                            id="indexSearch"
                            type="text"
                            name="search"
                            placeholder="{{ __('crud.common.search') }}"
                            value="{{ $search ?? '' }}"
                            class="form-control"
                            autocomplete="off"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon ion-md-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                @can('create', App\Models\Report::class)
                <a href="{{ route('reports.create') }}" class="btn btn-primary">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.reports.index_title')</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.reports.inputs.client_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.reports.inputs.hotdishmeat')
                            </th>
                            <th class="text-left">
                                @lang('crud.reports.inputs.hotdishveg')
                            </th>
                            <th class="text-left">
                                @lang('crud.reports.inputs.chili')
                            </th>
                            <th class="text-left">
                                @lang('crud.reports.inputs.rye')
                            </th>
                            <th class="text-left">
                                @lang('crud.reports.inputs.extrarye')
                            </th>
                            <th class="text-left">
                                @lang('crud.reports.inputs.focaccia')
                            </th>
                            <th class="text-left">
                                @lang('crud.reports.inputs.extrafocaccia')
                            </th>
                            <th class="text-left">
                                @lang('crud.reports.inputs.client_id')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($reports as $report)
                        <tr>
                            <td>
                                {{ optional($report->client)->name ?? '-' }}
                            </td>
                            <td>{{ $report->hotdishmeat ?? '-' }}</td>
                            <td>{{ $report->hotdishveg ?? '-' }}</td>
                            <td>{{ $report->chili ?? '-' }}</td>
                            <td>{{ $report->rye ?? '-' }}</td>
                            <td>{{ $report->extrarye ?? '-' }}</td>
                            <td>{{ $report->focaccia ?? '-' }}</td>
                            <td>{{ $report->extrafocaccia ?? '-' }}</td>
                            <td>
                                {{ optional($report->client)->name ?? '-' }}
                            </td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $report)
                                    <a
                                        href="{{ route('reports.edit', $report) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $report)
                                    <a
                                        href="{{ route('reports.show', $report) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $report)
                                    <form
                                        action="{{ route('reports.destroy', $report) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10">{!! $reports->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
