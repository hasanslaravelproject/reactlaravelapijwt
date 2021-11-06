@php $editing = isset($report) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-2">
        <x-inputs.select name="client_id" label="Client" required>
            @php $selected = old('client_id', ($editing ? $report->client_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Client</option>
            @foreach($clients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-1">
        <x-inputs.text
            name="hotdishmeat"
            label="Hotdishmeat"
            value="{{ old('hotdishmeat', ($editing ? $report->hotdishmeat : '')) }}"
            maxlength="255"
            placeholder="Hotdishmeat"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-1">
        <x-inputs.text
            name="hotdishveg"
            label="Hotdishveg"
            value="{{ old('hotdishveg', ($editing ? $report->hotdishveg : '')) }}"
            maxlength="255"
            placeholder="Hotdishveg"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-1">
        <x-inputs.text
            name="chili"
            label="Chili"
            value="{{ old('chili', ($editing ? $report->chili : '')) }}"
            maxlength="255"
            placeholder="Chili"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-1">
        <x-inputs.text
            name="rye"
            label="Rye"
            value="{{ old('rye', ($editing ? $report->rye : '')) }}"
            maxlength="255"
            placeholder="Rye"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-1">
        <x-inputs.text
            name="extrarye"
            label="Extrarye"
            value="{{ old('extrarye', ($editing ? $report->extrarye : '')) }}"
            maxlength="255"
            placeholder="Extrarye"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-1">
        <x-inputs.text
            name="focaccia"
            label="Focaccia"
            value="{{ old('focaccia', ($editing ? $report->focaccia : '')) }}"
            maxlength="255"
            placeholder="Focaccia"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-1">
        <x-inputs.text
            name="extrafocaccia"
            label="Extrafocaccia"
            value="{{ old('extrafocaccia', ($editing ? $report->extrafocaccia : '')) }}"
            maxlength="255"
            placeholder="Extrafocaccia"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="client_id" label="Client" required>
            @php $selected = old('client_id', ($editing ? $report->client_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Client</option>
            @foreach($clients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
