@if ($sortField != $field)
<i class="fa-solid fa-sort pl-2" style="color: rgb(227, 229, 231);">
@elseif ($sortAsc)
<i class="fa-solid text-primary  fa-sort-up pl-2">
@else
<i class="fa-solid text-primary  fa-sort-down pl-2">
@endif