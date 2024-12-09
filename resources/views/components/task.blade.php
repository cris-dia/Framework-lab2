@props(['title', 'description', 'priority', 'assignedTo', 'status'])
<div class="task">
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    <p>Prioritate: {{ $priority }}</p>
    <p>Responsabil: {{ $assignedTo }}</p>
    <p>Status: {{ $status }}</p>
</div>
