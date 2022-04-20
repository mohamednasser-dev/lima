<span class="switch">
    <label>
        <input type="checkbox" onchange="update_active(this)"
               @if ($status == 'active') checked
               @endif name="select" value="{{ $id }}"/>
        <span></span>
    </label>
</span>
