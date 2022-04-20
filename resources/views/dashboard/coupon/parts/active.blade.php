<span class="switch switch-icon">
    <label>
        <input onchange="update_active(this)" value="{{ $id }}"
               type="checkbox" <?php if ($active == '1') echo "checked";?>>
        <span></span>
    </label>
</span>
