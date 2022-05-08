<span class="switch">
    <label>
        <input type="checkbox" onchange="update_free(this)"
               @if ($free == 1) checked
               @endif name="select" value="{{ $id }}"/>
        <span></span>
    </label>
</span>
