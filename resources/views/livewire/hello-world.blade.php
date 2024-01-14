<div style="border: 1px solid red; padding: 32px; background-color: {{ $color }}">
    <h1> {{ $salutation }}, {{ strtoupper($name) }}</h1>
    <select wire:model.live="salutation">
        @foreach($salutationOptions as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    </select>

    <input type="color" wire:model.live="color" />
</div>
