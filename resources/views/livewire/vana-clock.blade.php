<div class="container" wire:poll.1000ms>
    Vana'Diel: {{ $vanaTime['vanaYear'] }}-{{ $vanaTime['vanaMonth'] }}-{{ $vanaTime['vanaDay'] }}
    ({{ $vanaTime['vanaWeekday'] }})
    {{ $vanaTime['vanaHour'] }}:{{ $vanaTime['vanaMinute'] }}:{{ $vanaTime['vanaSecond'] }}
    {{ $vanaTime['vanaMoonPhase'] }}<br />
</div>
